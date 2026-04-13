<?php
require_once __DIR__ . '/component/security.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

// Only handle POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /career");
    exit;
}

// ----- Honeypot Protection -----
$honeypotFields = ['website'];
foreach ($honeypotFields as $field) {
    if (!empty($_POST[$field])) {
        // Bot detected, silently return success
        header("Location: /career?success=1");
        exit;
    }
}

// ----- reCAPTCHA v3 Verification -----
$secretKey = "YOUR_SECRET_KEY_HERE"; // Replace with your reCAPTCHA v3 secret
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptchaResponse)) {
    header("Location: /career?error=captcha");
    exit;
}

// Verify with Google
$verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => $secretKey,
    'response' => $recaptchaResponse,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$result = file_get_contents($verifyUrl, false, $context);
$captchaResult = json_decode($result, true);

// Check success and score
if (!$captchaResult || !$captchaResult['success'] || ($captchaResult['score'] ?? 0) < 0.5) {
    header("Location: /career?error=captcha");
    exit;
}

// ----- Collect & Validate Form Data -----
$name           = htmlspecialchars(trim($_POST['name'] ?? ''));
$contact_number = htmlspecialchars(trim($_POST['contact_number'] ?? ''));
$email          = htmlspecialchars(trim($_POST['email'] ?? ''));
$about          = htmlspecialchars(trim($_POST['about'] ?? ''));
$address        = htmlspecialchars(trim($_POST['address'] ?? ''));

if (!$name || !$contact_number || !$email || !$about || !$address) {
    header("Location: /career?error=1");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /career?error=2");
    exit;
}

if (!preg_match('/^[\+]?[0-9\s\-\(\)]{10,}$/', $contact_number)) {
    header("Location: /career?error=5");
    exit;
}

// ----- File Upload -----
$resume_path = null;

if (isset($_FILES['pdf_upload']) && $_FILES['pdf_upload']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['pdf_upload'];
    $file_name = $file['name'];
    $file_tmp  = $file['tmp_name'];
    $file_size = $file['size'];

    // 1. Extension Check
    $allowed_ext = ['pdf'];
    $original_name = $file['name'];
    $ext = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));
    
    // Prevent double extensions like file.php.pdf
    if (count(explode('.', $original_name)) > 2) {
        header("Location: /career?error=5");
        exit;
    }

    if (!in_array($ext, $allowed_ext)) {
        header("Location: /career?error=5");
        exit;
    }

    // 2. MIME Type Validation (Real content check)
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $file_tmp);
    finfo_close($finfo);

    if ($mime !== 'application/pdf') {
        header("Location: /career?error=5");
        exit;
    }

    // 3. Size Check (5MB max)
    if ($file_size > 5 * 1024 * 1024) {
        header("Location: /career?error=size");
        exit;
    }

    // 4. Content Scan (Optional but good: check for PHP tags in the file)
    $content = file_get_contents($file_tmp);
    if (strpos($content, '<?php') !== false || strpos($content, 'eval(') !== false) {
        header("Location: /career?error=security");
        exit;
    }

    // 5. Safe Storage (Rename completely to prevent any filename exploit)
    $upload_dir = __DIR__ . '/uploads/resumes/';
    if (!file_exists($upload_dir)) mkdir($upload_dir, 0755, true);

    $safe_name = 'resume_' . bin2hex(random_bytes(8)) . '_' . time() . '.pdf';
    $resume_path = $upload_dir . $safe_name;

    if (!move_uploaded_file($file_tmp, $resume_path)) {
        header("Location: /career?error=4");
        exit;
    }
} else {
    header("Location: /career?error=5");
    exit;
}

// ----- Send Email via PHPMailer -----
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dev03.mvsoft@gmail.com'; // Replace
    $mail->Password   = 'rhgc lslb qfxx szen';    // Replace
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->setFrom('dev03.mvsoft@gmail.com', 'Career Application');
    $mail->addAddress('dev03.mvsoft@gmail.com', 'Admin'); // Admin Email
    $mail->addReplyTo($email, $name);

    if ($resume_path && file_exists($resume_path)) {
        $mail->addAttachment($resume_path, $file_name);
    }

    $mail->isHTML(true);
    $mail->Subject = "New Career Application: $name";
    $mail->Body = "
        <h3>New Career Application Received</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Contact Number:</strong> $contact_number</p>
        <p><strong>About:</strong> $about</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Resume attached.</strong></p>
    ";

    $mail->AltBody = "New Career Application\nName: $name\nEmail: $email\nContact: $contact_number\nAbout: $about\nAddress: $address";

    $mail->send();

    header("Location: /career?success=1");
    exit;

} catch (Exception $e) {
    // Remove uploaded file if email failed
    if ($resume_path && file_exists($resume_path)) unlink($resume_path);
    header("Location: /career?error=4");
    exit;
}
?>
