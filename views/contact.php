<?php include(__DIR__ . '/../component/header.php'); ?>

<?php
// --- PHP MAIL PROCESSING LOGIC ---
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$message_sent = false;
$error_log = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
  // 1. HONEYPOT VALIDATION (Stops bots filling hidden fields)
  if (isset($_POST['title']) && !empty($_POST['title'])) {
    die("Spam detected.");
  }

  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $subject_user = strip_tags(trim($_POST["subject"]));
  $message = strip_tags(trim($_POST["message"]));

  // 2. reCAPTCHA v3 VERIFICATION
  $recaptcha_secret = "6Lelxh8sAAAAADw9NH-QLFuAwgklFniPbxJH1mG8";
  $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

  $verify_url = "https://www.google.com/recaptcha/api/siteverify";
  $response = file_get_contents($verify_url . "?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response);
  $response_data = json_decode($response);

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
      $mail->Password   = 'rhgc lslb qfxx szen'; // Provided App Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;

      $mail->setFrom('dev03.mvsoft@gmail.com', 'Aurelia Shipping Contact');
      $mail->addAddress('nishantcloud2024@gmail.com', 'Aurelia Shipping Line');

      $mail->isHTML(true);
      $mail->Subject = "New Website Inquiry: $subject_user";
      $mail->Body    = "<h2>Contact Inquiry</h2>
                              <p><strong>Name:</strong> $name</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Subject:</strong> $subject_user</p>
                              <p><strong>Message:</strong><br>$message</p>";

      if ($mail->send()) {
        $message_sent = true;
      }
    } catch (Exception $e) {
      $error_log = "Mailer Error: {$mail->ErrorInfo}";
    }
  }

  // If it's an AJAX request from validate.js, return text response
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    if ($message_sent) echo "OK";
    else echo $error_log;
    exit;
  }
}
?>

<main class="main">

  <div class="page-title bg-body-secondary " data-aos="fade">
    <div class="container position-relative">
      <h1>Contact Us</h1>
      <p>Reach out to our global logistics experts for tailored shipping solutions.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="contact" class="contact section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <div><span>Let's</span> <span class="description-title">Connect</span></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 mb-5">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info-box">
            <div class="icon-box"><i class="bi bi-geo-alt"></i></div>
            <div class="info-content">
              <h4>Our Address</h4>
              <p>111, 1 Floor, Golden Heights-2, Plot No. 8, Sector- 8,
                Gandhidham (Kutch) 370201</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="contact-info-box">
            <div class="icon-box"><i class="bi bi-envelope"></i></div>
            <div class="info-content">
              <h4>Email Address</h4>
              <p>info@aurelialine.com</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="contact-info-box">
            <div class="icon-box"><i class="bi bi-headset"></i></div>
            <div class="info-content">
              <h4>Call Support</h4>
              <p>+91 70695 55594</p>
              <p>+91 70695 55593</p>
              <p>Mon - Sat: 9 AM - 6 PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14682.613095302444!2d70.12209334932304!3d23.073169866209987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b9f3410d72ef%3A0xbae9c94d00407518!2sGolden%20Height%20-%202!5e0!3m2!1sen!2sin!4v1773056663439!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

    <div class="map-section" data-aos="fade-up" data-aos-delay="200">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14682.613095302444!2d70.12209334932304!3d23.073169866209987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b9f3410d72ef%3A0xbae9c94d00407518!2sGolden%20Height%20-%202!5e0!3m2!1sen!2sin!4v1773056663439!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container form-container-overlap">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        <div class="col-lg-10">
          <div class="contact-form-wrapper">
            <h2 class="text-center mb-4">Get in Touch</h2>

            <form action="" method="post" class="php-email-form" id="contactForm">
              <input type="hidden" name="title" value="">
              <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <i class="bi bi-person"></i>
                      <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <i class="bi bi-envelope"></i>
                      <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <i class="bi bi-text-left"></i>
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <div class="input-with-icon">
                      <i class="bi bi-chat-dots message-icon"></i>
                      <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required></textarea>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>

</main>



<?php include(__DIR__ . '/../component/footer.php'); ?>