<?php
require_once __DIR__ . '/component/security.php';

// Prevent direct access to views
define('SECURE_ACCESS', true);

// Silence error display (Information leakage prevention)
ini_set('display_errors', 0);
error_reporting(0);

// Get the current URL path without query parameters
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = rtrim($request, '/');

// Define routes
$routes = [
    '/404' => 'views/404.php',
    '' => 'views/index.php',
    '/contact' => 'views/contact.php',
    '/about' => 'views/about.php',
    '/leadership' => 'views/leadership.php',
    '/careers' => 'views/carrer.php',
    '/corporate-social-responsibility' => 'views/csr.php',

    // Services
    '/services/air-cargo' => 'views/service/aircargo.php',
    '/services/custom-clearance' => 'views/service/CustomClearance.php',
    '/services/freight-forwarding' => 'views/service/FreightForwarding.php',
    '/services/less-container-load' => 'views/service/LCLCargo.php',
    '/services/over-dimensional-cargo' => 'views/service/OCD.php',
    '/services/transportservice' => 'views/service/TransportServices.php',
];

// Route matching
if (array_key_exists($request, $routes)) {
    $view = __DIR__ . '/' . $routes[$request];
    if (file_exists($view)) {
        require_once $view;
    } else {
        http_response_code(404);
        require_once __DIR__ . '/views/404.php';
    }
} else {
    http_response_code(404);
    require_once __DIR__ . '/views/404.php';
}
