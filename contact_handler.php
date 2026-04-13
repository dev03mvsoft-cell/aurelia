<?php
require_once __DIR__ . '/component/security.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /contact");
    exit;
}

error_log("Contact form submitted");

// ====================== reCAPTCHA V3 Validation ======================
$recaptcha_secret = "YOUR_SECRET_KEY"; // <-- Replace here
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptcha_response)) {
    error_log("Missing Recaptcha token");
    header("Location: /contact?error=6");
    exit;
}

$verify_url = "https://www.google.com/recaptcha/api/siteverify";
$verify_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($verify_data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($verify_url, false, $context);
$json = json_decode($result, true);

if (!$json['success'] || $json['score'] < 0.5) {
    error_log("Recaptcha failed. Score: " . ($json['score'] ?? 'no score'));
    header("Location: /contact?error=6");
    exit;
}

// ====================== HONEYPOT BOT PROTECTION ======================
$honeypotFields = ['website', 'email_confirm'];
foreach ($honeypotFields as $field) {
    if (!empty($_POST[$field])) {
        error_log("Honeypot triggered by bot");
        header("Location: /contact?success=1");
        exit;
    }
}

// ====================== REQUIRED FIELDS ======================
if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['service']) ||
    empty($_POST['message'])
) {
    header("Location: /contact?error=1");
    exit;
}

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$service = htmlspecialchars(trim($_POST['service']));
$message = htmlspecialchars(trim($_POST['message']));

// ====================== EMAIL VALIDATION ======================
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /contact?error=2");
    exit;
}

// Phone validation
if (!preg_match('/^[\+]?[0-9\s\-\(\)]{10,}$/', $phone)) {
    header("Location: /contact?error=5");
    exit;
}

// ====================== SEND EMAIL USING PHPMailer ======================
$adminEmailSent = false;
$userEmailSent = false;

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dev03.mvsoft@gmail.com';   // replace
    $mail->Password   = 'rhgc lslb qfxx szen';     // replace
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('dev03.mvsoft@gmail.com', 'Website Contact');
    $mail->addAddress('dev03.mvsoft@gmail.com');
    $mail->addReplyTo($email);

    $mail->isHTML(true);
    $mail->Subject = "New Contact Inquiry - $service";

    $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Service:</strong> $service</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    $mail->send();
    $adminEmailSent = true;

} catch (Exception $e) {
    error_log("Admin email failed: " . $mail->ErrorInfo);
}

try {
    $ackMail = new PHPMailer(true);
    $ackMail->isSMTP();
    $ackMail->Host       = 'smtp.gmail.com';
    $ackMail->SMTPAuth   = true;
    $ackMail->Username   = 'dev03.mvsoft@gmail.com';
    $ackMail->Password   = 'YOUR_APP_PASSWORD';
    $ackMail->SMTPSecure = 'tls';
    $ackMail->Port       = 587;

    $ackMail->setFrom('dev03.mvsoft@gmail.com', 'Company Name');
    $ackMail->addAddress($email, $name);

    $ackMail->isHTML(true);
    $ackMail->Subject = 'Thank you for contacting us!';
    $ackMail->Body = "
        <p>Hello <strong>$name</strong>,</p>
        <p>Thank you for contacting us regarding <strong>$service</strong>. We will get back to you soon.</p>
        <p>Your message:<br>$message</p>
    ";

    $ackMail->send();
    $userEmailSent = true;

} catch (Exception $e) {
    error_log("User email failed: " . $ackMail->ErrorInfo);
}

if ($adminEmailSent) {
    header("Location: /contact?success=1");
    exit;
} else {
    header("Location: /contact?error=4");
    exit;
}
