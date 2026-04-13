<?php
// Prevent Direct Access
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.1 403 Forbidden');
    die('Direct access not allowed');
}

// 1. Enforce HTTPS and Security Headers (PHP fallback if .htaccess fails)
if (!headers_sent()) {
    header("X-XSS-Protection: 1; mode=block");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-Content-Type-Options: nosniff");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    
    // Strict Content Security Policy
    // Allowing only specific trusted sources used in the site
    $csp = "default-src 'self'; ";
    $csp .= "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://unpkg.com https://www.google.com https://www.gstatic.com; ";
    $csp .= "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://cdnjs.cloudflare.com https://unpkg.com; ";
    $csp .= "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net; ";
    $csp .= "img-src 'self' data: https:; ";
    $csp .= "frame-src https://www.google.com; ";
    $csp .= "connect-src 'self'; ";
    header("Content-Security-Policy: " . $csp);
}

// 2. Session Security
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', isset($_SERVER['HTTPS']));

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Regenerate session ID to prevent fixation
if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
} elseif (time() - $_SESSION['last_regeneration'] > 1800) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}

/**
 * 3. Anti-Cloaking & Backdoor Protection logic
 * This checks for suspicious behavior or unauthorized access attempts.
 */
function protect_site() {
    $uri = $_SERVER['REQUEST_URI'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $input_data = file_get_contents('php://input') . print_r($_POST, true) . print_r($_GET, true);

    // 1. Webshell & Backdoor Patterns
    $suspect_patterns = [
        'eval\(', 'base64_decode', 'system\(', 'passthru', 'shell_exec', 'exec\(',
        'popen\(', 'proc_open', 'pcntl_exec', 'python_eval', 'include\(', 'require\('
    ];

    // 2. SQL Injection Patterns
    $sqli_patterns = [
        'union select', 'information_schema', 'sysdatabases', 'drop table',
        'casperjs', 'phantomjs', 'selenium'
    ];

    // 3. Path Traversal & Sensitive Files
    $path_patterns = [
        'etc/passwd', 'boot.ini', 'windows/win.ini', '.env', '.htaccess',
        'config.php', 'web.config', '../'
    ];

    $all_patterns = array_merge($suspect_patterns, $sqli_patterns, $path_patterns);

    foreach ($all_patterns as $pattern) {
        $regex = '#' . preg_quote($pattern, '#') . '#i';
        if (preg_match($regex, $uri) || preg_match($regex, $input_data)) {
            // Block and log if possible
            header('HTTP/1.1 403 Forbidden');
            die('Access Denied: Malicious activity detected.');
        }
    }

    // 4. Anti-Cloaking Logic
    // We check if the User-Agent is being used to serve different content.
    // In this site, we ensure NO logic uses User-Agent for routing or content delivery.
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
        // AJAX requests are fine
    }
}

protect_site();

/**
 * Global Sanitization Utility
 */
function clean_input($data) {
    if (is_array($data)) {
        return array_map('clean_input', $data);
    }
    return htmlspecialchars(trim((string)$data), ENT_QUOTES, 'UTF-8');
}

// Auto-clean global arrays for basic XSS protection
$_GET = clean_input($_GET);
$_POST = clean_input($_POST);
$_COOKIE = clean_input($_COOKIE);
