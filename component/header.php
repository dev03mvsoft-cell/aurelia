<?php
defined('SECURE_ACCESS') or die('Direct access not allowed');
// 1. URL Handler: Localhost aur Live server dono ko automatic handle karega
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$baseURL = $protocol . $_SERVER['HTTP_HOST'];

// Agar aap localhost pe kisi folder ke andar hain (e.g., localhost/aurelia/), toh folder name yahan likhein. 
// Live hone par ye automatic settle ho jayega.
//  = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/Aurelia Shipping Line Pvt. Ltd/' : '/';

// Dynamic current URL (Canonical ke liye)
$url = $baseURL . ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

// Full current URL (Social Media/OG tags ke liye)
$currentURL = $baseURL . $_SERVER['REQUEST_URI'];

// Default SEO Image (Logo)
$ogImage = $baseURL . '/assets/image/logo/2.png';

// Asset linking function
function base_url($path = '')
{
    global $baseURL;
    return $baseURL . ltrim($path, '/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aurelia Shipping Line Pvt. Ltd.">

    <title>Aurelia Shipping Line | Best Freight Forwarding & Logistics India</title>
    <meta name="description" content="Aurelia Shipping Line Pvt. Ltd. provides refined freight forwarding, customs clearance, and ODC cargo handling at Mundra, Kandla, and Nhava Sheva ports.">
    <meta name="keywords" content="International Freight Forwarding, Logistics Company in Mundra, ODC Cargo Handling India, Customs Clearance Services, Nhava Sheva Customs Broker, LCL Consolidation India, Air Cargo Solutions">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta property="og:title" content="Aurelia Shipping Line | Timeless & Reliable Logistics Partner">
    <meta property="og:description" content="Precision-engineered logistics solutions. Specializing in Ocean, Air, and Land routes connecting major Indian trade hubs to global markets.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($currentURL, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aurelia Shipping Line | Global Logistics Engineered for Precision">
    <meta name="twitter:description" content="Aurelia Shipping Line provides high-performance freight forwarding and supply chain solutions across India.">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="canonical" href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>">

    <link href="/assets/image/logo/2.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- =======================================================
  * Template Name: Strategy
  * Template URL: https://bootstrapmade.com/strategy-bootstrap-agency-template/
  * Updated: Jun 06 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>


    </style>
</head>

<body class="index-page">
    <?php include('./views/loader.php') ?>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="/assets/image/logo/aurelia logo.png" alt="">
                <!-- <h1 class="sitename">Strategy</h1> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/leadership">Leadership</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i class=" toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="/services/freight-forwarding">Freight Forwarding</a></li>
                            <li><a href="/services/custom-clearance">Custom Clearance</a></li>
                            <li><a href="/services/less-container-load">LCL Cargo Consolidation</a></li>
                            <li><a href="/services/transportservice">Transport Service</a></li>
                            <li><a href="/services/over-dimensional-cargo">Over Dimensional Cargo (ODC)</a></li>
                            <li><a href="/services/air-cargo">Air Cargo</a></li>

                        </ul>
                    </li>


                    <li><a href="/corporate-social-responsibility">CSR</a></li>
                    <li><a href="/careers">Career</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="/careers">Join Us</a>

        </div>
    </header>