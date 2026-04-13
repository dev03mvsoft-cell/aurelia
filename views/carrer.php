<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<?php include(__DIR__ . '/../component/header.php'); ?>

<?php
// --- BACKEND LOGIC: PHP MAIL, RECAPTCHA & HONEYPOT ---
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$message_sent = false;
$error_log = "";

if (isset($_POST['submit_application'])) {
    // 1. HONEYPOT VALIDATION (Field 'title' should be empty)
    if (isset($_POST['title']) && !empty($_POST['title'])) {
        die("Spam detected.");
    }

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $position = strip_tags(trim($_POST["position"]));
    $message_user = strip_tags(trim($_POST["message"]));

    // 2. reCAPTCHA v3 VERIFICATION
    $recaptcha_secret = "6Lelxh8sAAAAADw9NH-QLFuAwgklFniPbxJH1mG8";
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
    
    $verify_url = "https://www.google.com/recaptcha/api/siteverify";
    $verify_response = file_get_contents($verify_url . "?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response);
    $response_data = json_decode($verify_response);

    if (!$response_data->success || $response_data->score < 0.5) {
        $error_log = "Security verification failed. Please refresh and try again.";
    } else {
        // 3. SEND EMAIL VIA PHPMAILER
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'dev03.mvsoft@gmail.com'; 
            $mail->Password   = 'rhgc lslb qfxx szen';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Handle Resume Upload
            if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
                $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
            }

            $mail->setFrom('dev03.mvsoft@gmail.com', $name);
            $mail->addAddress('dev03.mvsoft@gmail.com', 'Aurelia HR Department'); 

            $mail->isHTML(true);
            $mail->Subject = "Aurelia Career Application: $position";
            $mail->Body    = "<h2>New Job Application Received</h2>
                              <p><strong>Name:</strong> $name</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Phone:</strong> $phone</p>
                              <p><strong>Position Applied:</strong> $position</p>
                              <p><strong>Message/Cover Letter:</strong><br>$message_user</p>";

            if($mail->send()) { 
                $message_sent = true; 
            }
        } catch (Exception $e) {
            $error_log = "Application Error: {$mail->ErrorInfo}";
        }
    }
}
?>
<style>
.contact .contact-form-wrapper .form-group .input-with-icon .form-control{
  border-radius: 8px;
    padding: 12px 15px 12px 45px;
    height: 3.5rem;
    color: var(--default-color);
    background-color: var(--surface-color);
    font-size: 15px;
    
}
  
</style>
<main class="main">

  <div class="page-title bg-body-secondary " data-aos="fade">
    <div class="container position-relative">
      <h1>Join Our Team</h1>
      <p>Build your future with a leader in global logistics and supply chain excellence.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Careers</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="careers" class="careers section">
    <div class="container" data-aos="fade-up">

      <div class="row gy-5">

        <div class="col-lg-6">
          <div class="content-block">
            <h2 class="mb-4">Why Work at Aurelia?</h2>
            <p>At <strong>Aurelia Shipping Line Pvt. Ltd.</strong>, we don’t just move cargo; we move careers forward. We offer a dynamic environment where innovation, safety, and professional growth are at the heart of everything we do.</p>
            
            <div class="row g-4 mt-2">
              <div class="col-md-6">
                <div class="feature-item p-3 border rounded shadow-sm h-100">
                  <i class="bi bi-graph-up-arrow defaluticon fs-3"></i>
                  <h5 class="mt-2">Growth Path</h5>
                  <p class="small mb-0">Clear roadmaps for career advancement and skill-building.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-item p-3 border rounded shadow-sm h-100">
                  <i class="bi bi-globe-americas defaluticon fs-3"></i>
                  <h5 class="mt-2">Global Impact</h5>
                  <p class="small mb-0">Work on international projects connecting global markets.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-item p-3 border rounded shadow-sm h-100">
                  <i class="bi bi-heart-pulse defaluticon fs-3"></i>
                  <h5 class="mt-2">Health & Safety</h5>
                  <p class="small mb-0">A safety-first culture for our office and ground staff.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-item p-3 border rounded shadow-sm h-100">
                  <i class="bi bi-lightbulb defaluticon fs-3"></i>
                  <h5 class="mt-2">Innovation</h5>
                  <p class="small mb-0">Contribute to the digitalization of Indian maritime logistics.</p>
                </div>
              </div>
            </div>

            <div class="mt-5" >
                <img src="/assets/image/home/container.png" alt="Aurelia Shipping team working environment" class="img-fluid rounded ">
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="application-form p-4 p-md-5 border rounded shadow" data-aos="fade-left">
            <h3 class="mb-3 defaluticon">Submit Your Application</h3>
            <p class="small mb-4">Interested in joining us? Fill out the form below or email your CV to <strong>info@aurelialine.com</strong></p>
            
            <?php if($message_sent): ?>
                <div class="alert alert-success">Thank you! Your application has been submitted successfully. Our HR team will contact you shortly.</div>
            <?php elseif($error_log): ?>
                <div class="alert alert-danger"><?php echo $error_log; ?></div>
            <?php endif; ?>

            <form action="" method="post" enctype="multipart/form-data" class="php-email-form" id="career-form">
              <input type="hidden" name="title" value=""> <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" style="border: 1px solid color-mix(in srgb, var(--default-color), transparent 80%) !important;">

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="name" class="form-label defaluticon ">Full Name</label>
                  <input type="text" name="name" class="form-control  text-white " id="name" placeholder="Enter your name" required>
                </div>

                <div class="col-md-6">
                  <label for="email" class="form-label defaluticon">Email Address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email@example.com" required>
                </div>

                <div class="col-md-6">
                  <label for="phone" class="form-label defaluticon">Phone Number</label>
                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="+91 00000 00000" required>
                </div>

                <div class="col-md-6">
                  <label for="position" class="form-label defaluticon">Position Applied For</label>
                  <select name="position" id="position" class="form-select" required>
                    <option value="" selected disabled>Select Role</option>
                    <option value="logistics-ops">Logistics Operations</option>
                    <option value="sales-marketing">Sales & Marketing</option>
                    <option value="customs-clearance">Customs Clearance</option>
                    <option value="accounts-finance">Accounts & Finance</option>
                    <option value="internship">Internship / Fresher</option>
                  </select>
                </div>

                <div class="col-12">
                  <label for="resume" class="form-label defaluticon">Upload Resume (PDF only)</label>
                  <input type="file" name="resume" class="form-control" id="resume" accept=".pdf" required>
                </div>

                <div class="col-12">
                  <label for="message" class="form-label defaluticon">Brief Cover Letter (Optional)</label>
                  <textarea class="form-control" name="message" rows="4" placeholder="Tell us why you're a great fit..."></textarea>
                </div>

                <div class="col-12 text-center mt-4">
                  <button type="submit" name="submit_application" class="btn w-100 py-3 defaluticon" style="background-color: var(--accent-color); color: white;">Submit Application</button>
                </div>

                <div class="col-12 mt-2">
                    <small class="" style="font-size: 11px;">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</small>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<script src="https://www.google.com/recaptcha/api.js?render=6Lelxh8sAAAAANd2nyCT55-LvzCpKXBIR64EiOUz"></script>
<script>
    function refreshCaptcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lelxh8sAAAAANd2nyCT55-LvzCpKXBIR64EiOUz', {action: 'career_apply'}).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    }
    refreshCaptcha();
    setInterval(refreshCaptcha, 110000); // Token expires every 2 mins
</script>

<?php include(__DIR__ . '/../component/footer.php'); ?>