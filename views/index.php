<?php
defined('SECURE_ACCESS') or die('Direct access not allowed');
include('./component/header.php');
?>
<style>
    /* 1. CONTAINER & LAYOUT */
    .visual-content {
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    /* 3. INCREASED IMAGE WRAPPER */
    .img-wrapper {
        perspective: 1000px;
        margin: 0px 0;
        /* Pulls text closer for overlapping effect */
        opacity: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 5;
    }

    .fluid-img {
        /* MASSIVE IMAGE SETTINGS */
        width: 120%;
        /* Makes image wider than the container */
        max-width: none;
        height: auto !important;
        max-height: 280px;
        /* Base height for mobile */
        object-fit: contain;
        /* filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.6)); */
    }

    @media (min-width: 992px) {
        .fluid-shape {
            padding-top: 10PX;
            min-height: 0px !important;
        }
    }

    /* 4. RESPONSIVE SIZING (Tablet & Desktop) */
    @media (min-width: 768px) {
        .fluid-shape h1 {
            font-size: 3rem;
        }

        .fluid-img {
            max-height: 400px;
            width: 140%;
        }

        .fluid-shape {
            min-height: 500px;
        }
    }

    @media (min-width: 992px) {
        .fluid-shape h1 {
            font-size: 4rem;
        }

        .fluid-img {
            max-height: 550px;
            /* Maximum size for desktop */
            width: 160%;
        }

        .fluid-shape {
            min-height: 650px;
        }
    }

    /* 5. ANIMATIONS */
    .swiper-slide-active .img-wrapper {
        animation:
            fadeUp 1s cubic-bezier(0.22, 1, 0.36, 1) forwards,
            floating 4s ease-in-out infinite 1s;
        /* Floats after entrance */
    }

    .swiper-slide-active .fluid-shape h1:first-of-type {
        animation: fromLeft 1s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        animation-delay: 0.4s;
    }

    .swiper-slide-active .fluid-shape h1:last-of-type {
        animation: fromRight 1s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        animation-delay: 0.6s;
    }

    /* 6. KEYFRAMES */
    @keyframes fadeUp {
        from {
            transform: translateY(60px) scale(0.8);
            opacity: 0;
        }

        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        /* Gentle bobbing */
        100% {
            transform: translateY(0px);
        }
    }

    @keyframes fromLeft {
        from {
            transform: translateX(-60px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes fromRight {
        from {
            transform: translateX(60px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .about-map-card {
        width: 100%;
        /* fixed width */
        min-height: 500px;
        /* vertical height */
        background: #ffffff;
        display: flex;
        align-items: center;
        /* image vertically center */
        justify-content: center;
    }

    /* image ko proper fit karne ke liye */
    .map-image {
        max-height: 100%;
        width: auto;
        object-fit: contain;
    }

    /* 7. BUBBLE ANIMATION */
    .hero.section.canvas {
        position: relative;
    }

    .canvas#canvas {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        z-index: 1;
        pointer-events: none;
    }

    .bubble {
        position: absolute;
        bottom: -150px;
        border-radius: 50%;
        pointer-events: none;
        box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3),
            0 10px 30px rgba(0, 0, 0, 0.1);
        z-index: 0;
        filter: blur(1px);
    }


    @keyframes move-bubbles {
        0% {
            transform: translateY(0) translateX(0);
            opacity: 0;
        }

        10% {
            opacity: 0.8;
        }

        90% {
            opacity: 0.8;
        }

        100% {
            transform: translateY(var(--move-y)) translateX(var(--move-x));
            opacity: 0;
        }

    }

    .agency-name {
        /* display: none; */
        color: #d9a664;
    }
</style>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section canvas">
        <div class="canvas" id="canvas"> </div>
        <div class="container ">

            <div class="row mt-4">
                <div class="col-lg-7 content-col mt-4" data-aos="fade-up">
                    <div class="content">
                        <div class="agency-name">
                            <h4 style=" color: var(--heading-color);">Aurelia Shipping Line</4>
                        </div>

                        <div class="main-heading">
                            <h1>Timeless Refined Aurelia</h1>
                        </div>

                        <div class="divider"></div>

                        <div class="description">
                            <p>Aurelia Shipping Line Pvt. Ltd. redefines global cargo movement with precision, reliability, and a commitment to seamless logistics. From complex freight forwarding to specialized cargo handling, we deliver solutions engineered for businesses that demand excellencee.</p>
                        </div>

                        <div class="cta-button">
                            <a href="#services" class="btn">
                                <span>EXPLORE SERVICES</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="zoom-out">
                    <div class="visual-content ">
                        <div class="swiper heroTextImageSlider">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="fluid-shape">
                                        <!-- <h2 class="text-white">Authority Focused</h1> -->

                                        <div class="img-wrapper" style="transform: rotate(15deg);">
                                            <img src="/assets/image/hero/aurilaAirhero1.png" class="fluid-img">
                                        </div>

                                        <!-- <p class="text-white">Aurelia Shipping Line: Redefining global cargo movement with precision, reliability, and refined logistics excellence.</p> -->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="fluid-shape">
                                        <!-- <h2 class="text-white">Service Focused</h1> -->

                                        <div class="img-wrapper">
                                            <img src="/assets/image/hero/aurilaAirhero2.png" class="fluid-img">
                                        </div>

                                        <!-- <p class="text-white">Refined. Aurelia: Your integrated partner for seamless freight forwarding, customs, and global supply chains.</p> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="fluid-shape">
                                        <!-- <h2 class="text-white">Service Focused</h1> -->

                                        <div class="img-wrapper">
                                            <img src="/assets/image/hero/aurilaAirhero3.png" class="fluid-img">
                                        </div>

                                        <!-- <p class="text-white">Refined. Aurelia: Your integrated partner for seamless freight forwarding, customs, and global supply chains.</p> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="fluid-shape">
                                        <!-- <h2 class="text-white">Service Focused</h1> -->

                                        <div class="img-wrapper">
                                            <img src="/assets/image/hero/aurilaAirhero4.png" class="fluid-img">
                                        </div>

                                        <!-- <p class="text-white">Refined. Aurelia: Your integrated partner for seamless freight forwarding, customs, and global supply chains.</p> -->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="fluid-shape">
                                        <!-- <h2 class="text-white">Service Focused</h1> -->

                                        <div class="img-wrapper">
                                            <img src="/assets/image/hero/aurilaAirhero6.png" class="fluid-img">
                                        </div>

                                        <!-- <p class="text-white">Refined. Aurelia: Your integrated partner for seamless freight forwarding, customs, and global supply chains.</p> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section ">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Us</h2>
            <p>Aurelia Shipping Line Pvt. Ltd. — Precision. Reliability. Seamless Logistics.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                            <!-- Background image (peeche) -->
                            <img src="/assets/image/home/hero1101.png"
                                alt="Background"
                                class="img-fluid bg-image">

                            <!-- Main image (upar) -->
                            <!-- <img src="/assets/image/home/home1.png"
                                alt="Business Meeting"
                                class="img-fluid main-image rounded-4 shadow-bottom" style="position: absolute;left: -1px;top:50px"> -->
                        </div>
                        <!-- 
                        <div class="experience-badge floating">
                            <h3>15+ <span>Years</span></h3>
                            <p>Industry Expertise</p>
                        </div> -->
                    </div>
                </div>

                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">OUR STORY</span>
                    <h2 class="about-title">Refined Global Logistics</h2>
                    <p class="about-description">
                        Aurelia Shipping Line Pvt. Ltd. transforms global shipping into seamless, reliable logistics. From air, sea, and land cargo to specialized handling, we ensure safety, speed, and service excellence for every shipment.
                    </p>

                    <div class="row feature-list-wrapper">
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Air, Sea & Land Cargo</li>
                                <li><i class="bi bi-check-circle-fill"></i> Hazardous Goods Handling</li>
                                <li><i class="bi bi-check-circle-fill"></i> Compliance-Driven Operations</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Dedicated Workforce</li>
                                <li><i class="bi bi-check-circle-fill"></i> Data-Backed Planning</li>
                                <li><i class="bi bi-check-circle-fill"></i> Speed & Security</li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-wrapper mt-3">
                        <h4>Our Presence</h4>
                        <p>Headquartered in India with branches at Kandla, Mundra, Hazira, Nhava Sheva, Delhi & Ludhiana, connecting your business globally.</p>

                        <div class="contact-info d-flex align-items-center gap-2 mt-2">
                            <i class="bi bi-telephone-fill"></i>
                            <div>
                                <p class="contact-label">Call us anytime</p>
                                <p class="contact-number">+91 70695 55594</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <div><span>Check Our</span> <span class="description-title">Services</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="service-header">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="service-intro">
                            <h2 class="service-heading">
                                <div>End-to-End</div>
                                <div><span>Logistics Solutions</span></div>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="service-summary">
                            <p>
                                Aurelia Shipping Line Pvt. Ltd. provides precision-driven logistics across air, sea, and land transport, ensuring timely, safe, and compliant delivery for all shipments.
                            </p>
                            <a href="/contact" class="service-btn">
                                Conatct US
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Freight Forwarding -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card position-relative z-1 rounded-5 active">
                        <div class="hover-image">
                            <img src="assets/image/service/foewading.jpg" alt="">
                        </div>
                        <div class="service-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <a href="/services/freight-forwarding" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="/services/freight-forwarding">Freight <span>Forwarding</span></a>
                        </h3>
                        <p class="text-white">
                            Global freight solutions for multimodal movements, route optimization, carrier coordination, and documentation, ensuring timely and secure delivery across borders.
                        </p>
                    </div>
                </div>

                <!-- Custom Clearance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card position-relative  z-1 rounded-5">
                        <div class="hover-image">
                            <img src="assets/image/service/Customs.jpg" alt="">
                        </div>
                        <div class="service-icon">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <a href="/services/custom-clearance" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="/services/custom-clearance">Custom <span>Clearance</span></a>
                        </h3>
                        <p>
                            Complete compliance handling including documentation, duties, HS classifications, and government formalities, ensuring faster cargo release and uninterrupted operations.
                        </p>
                    </div>
                </div>

                <!-- LCL Cargo -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card position-relative z-1 active rounded-5">
                        <div class="hover-image">
                            <img src="assets/image/service/llc.jpg" alt="">
                        </div>
                        <div class="service-icon">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <a href="/services/less-container-load" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="/services/less-container-load">LCL <span>Cargo Consolidation</span></a>
                        </h3>
                        <p class="text-white">
                            Efficient Less-than-Container Load services for cost-effective, secure, and timely movement with full transparency for smaller consignments.
                        </p>
                    </div>
                </div>

                <!-- Inland Transport -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card position-relative z-1 rounded-5">
                        <div class="hover-image">
                            <img src="assets/image/service/transport.jpg" alt="">
                        </div>
                        <div class="service-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <a href="/services/transportservice" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="/services/transportservice">Transport <span>Service</span></a>
                        </h3>
                        <p>
                            Safe inland cargo movement from ports to warehouses, factories, and distribution hubs, with experienced fleet and strict safety standards.
                        </p>
                    </div>
                </div>

                <!-- ODC Handling -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card position-relative z-1 active rounded-5">
                        <div class="hover-image">
                            <img src="/assets/image/service/odc.jpg" alt="">
                        </div>
                        <div class="service-icon">
                            <i class="fa-solid fa-weight-scale"></i>
                        </div>
                        <a href="/services/over-dimensional-cargo" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="/services/over-dimensional-cargo">ODC <span>Handling</span></a>
                        </h3>
                        <p class="text-white">
                            Specialized project cargo and heavy equipment logistics, including engineering surveys, loading, lashing, and route studies for precise deliveries.
                        </p>
                    </div>
                </div>

                <!-- Air Cargo -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card position-relative z-1 rounded-5">
                        <div class="hover-image">
                            <img src="assets/image/service/aircargp.jpg" alt="">
                        </div>
                        <div class="service-icon">
                            <i class="bi bi-airplane"></i>
                        </div>
                        <a href="/services/air-cargo" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="/services/air-cargo">Air <span>Cargo</span></a>
                        </h3>
                        <p>
                            Fast, time-sensitive air cargo with end-to-end coordination, strategic airline partnerships, and continuous tracking for speed and complete visibility.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /Services Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section ">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Cargo </h2>
            <div><span>We</span> <span class="description-title">Handle</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonials-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "slidesPerView": 1,
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        }
                    }
                </script>

                <div class="swiper-wrapper">

                    <!-- Agri Cargo -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>Agri Cargo</h2>
                                    <p>
                                        Safe, compliant, and temperature-controlled transit of perishables (fresh produce, seafood) and non-perishables (grains, cotton). Quarantine formalities and international phytosanitary documentation handled efficiently.
                                    </p>
                                    <p>
                                        Every shipment is managed carefully to maintain quality and regulatory compliance across borders.
                                    </p>

                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="featured-img-wrapper">
                                        <img src="/assets/image/home/aurila4.png" class="featured-img floating" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Slide -->

                    <!-- Pharmaceuticals -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>Pharmaceuticals</h2>
                                    <p>
                                        Handling of temperature-sensitive pharmaceuticals, vaccines, and medical devices with cold chain management, real-time temperature monitoring, high security, and regulatory compliance.
                                    </p>
                                    <p>
                                        Ensuring product integrity from origin to destination for critical healthcare shipments.
                                    </p>

                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="featured-img-wrapper">
                                        <img src="/assets/image/home/aurila17.png" class="featured-img floating" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Slide -->

                    <!-- Hazardous Cargo -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>Hazardous Cargo</h2>
                                    <p>
                                        Specialized handling of hazardous materials adhering to IMDG & IATA regulations. Compliant packaging, accurate documentation, and certified transport mitigate risks during transit.
                                    </p>
                                    <p>
                                        Safety and compliance are always our top priority for dangerous goods.
                                    </p>

                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="featured-img-wrapper">
                                        <img src="/assets/image/home/aurila19.png" class="featured-img floating" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Slide -->

                    <!-- Machinery & Break Bulk -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>Machinery & Break Bulk Cargo</h2>
                                    <p>
                                        Movement of heavy components, industrial equipment, construction materials, and non-containerized goods with specialized loading, lashing, chocking, and optimized routing for safe delivery.
                                    </p>
                                    <p>
                                        Ensuring heavy and irregular cargo arrives safely and on schedule.
                                    </p>

                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="featured-img-wrapper">
                                        <img src="/assets/image/home/machine.png" class="featured-img floating" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Slide -->

                    <!-- ODC (Over Dimensional Cargo) -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>ODC (Over Dimensional Cargo)</h2>
                                    <p>
                                        Project logistics for cargo exceeding standard dimensions, including engineering route surveys, specialized trailers, government permissions, escort services, and precise execution from origin to site.
                                    </p>
                                    <p>
                                        Complex and heavy shipments are handled with engineering precision.
                                    </p>
                                    <!-- <div class="profile d-flex align-items-center">
                                            <img src="assets/img/person/person-m-7.webp" class="profile-img" alt="">
                                            <div class="profile-info">
                                                <h3>ODC Cargo</h3>
                                                <span>Category</span>
                                            </div>
                                        </div> -->
                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="featured-img-wrapper">
                                        <img src="/assets/image/home/aurila9.png" class="featured-img floating" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Slide -->

                </div>


                <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section -->


    <!-- slider of the Gellrey -->




    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Why Choose Aurelia?</h2>
            <p>When your business demands excellence in logistics, Aurelia delivers. We are committed to a service philosophy that is Timeless. Refined. Aurelia.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="row gy-4">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-item">
                                <div class="card-number">01</div>
                                <h3>Timely & Dependable Operations</h3>
                                <p>We guarantee reliability with meticulously planned logistics and consistent on-time performance.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-item">
                                <div class="card-number">02</div>
                                <h3>Expertise in Complex & Sensitive Cargo</h3>
                                <p>Specialized knowledge in handling high-value goods, including Pharma, Hazardous Cargo, and Over Dimensional Cargo (ODC).</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-item">
                                <div class="card-number">03</div>
                                <h3>Transparent Communication & Tracking</h3>
                                <p>Benefit from clear communication and continuous visibility of your shipment from origin to destination.</p>
                            </div>
                        </div><!-- End Card Item -->



                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="card-item">
                                <div class="card-number">04</div>
                                <h3>Strong Global Partnerships</h3>
                                <p>Leverage our extensive network and presence at major Indian ports to connect your business seamlessly to the world.</p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>
                </div>

                <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="300">
                    <div class="image-wrapper ">
                        <img src="/assets/image/home/container.jpg" alt="Why Choose Aurelia" class="img-fluid rounded-4 popout  shadow">
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /Why Us Section -->



    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Where We Operate</h2>
                <p>Aurelia's strong operational footprint ensures seamless connectivity for your business, linking local expertise with global reach.</p>
            </div><!-- End Section Title -->

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                <!-- Operation Ports in India -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-item">
                        <h3>Operation Ports in India</h3>
                        <p>
                            Aurelia maintains a strong presence at key maritime gateways across India, including Kandla, Mundra, Hazira, and Nhava Sheva, ensuring smooth port operations and cargo handling.
                        </p>
                    </div>
                </div>

                <!-- Branch Offices in India -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-item">
                        <h3>Branch Offices (India)</h3>
                        <p>
                            With branch offices in Kandla, Mundra, Hazira, Nhava Sheva, Delhi, and Ludhiana, Aurelia offers local support and operational efficiency to meet regional logistics needs.
                        </p>
                    </div>
                </div>

                <!-- Global Network -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-item">
                        <h3>Global Network</h3>
                        <p>
                            Aurelia connects businesses internationally, providing seamless logistics services across Asia, the Middle East, Europe, Africa, USA, and South America.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 d-flex justify-content-center">
                <div class="mt-2 text-center">

                    <img src="/assets/image/home/map3.png"
                        class="img-fluid rounded-4 map-image">

                </div>
            </div>




        </div>
    </section>



    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="stats-hero row align-items-center mb-5">
                <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                    <h3 class="headline mb-3">Aurelia Shipping Line</h3>
                    <p class="lead">
                        Aurelia Shipping Line Pvt. Ltd. was founded with a vision to elevate logistics into a refined experience built on trust, precision, and professionalism. We streamline international cargo movement across air, sea, and land, ensuring safe handling of sensitive, hazardous, and oversized cargo with industry-approved protocols. Headquartered in India with branch offices at Kandla, Mundra, Hazira, Nhava Sheva, Delhi, and Ludhiana, Aurelia connects your business efficiently to global markets.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end text-center" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stats-rating d-inline-flex align-items-center py-3 px-4 shadow-sm">
                        <img src="assets/image/home/aurila14.png" class="img-fluid stats-rating-img me-3" alt="Aurelia Operations" width="64" height="48">
                        <div>
                            <div class="rating-score d-flex align-items-center mb-1">
                                <span class="fs-5 fw-semibold me-2">4.8/5</span>
                                <span class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </span>
                            </div>
                            <div class="user-feedback small">Based on 70+ years of combined industry expertise</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional Stats Counters -->
            <div class="stats-counters row gy-4 justify-content-center">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1.5" class="purecounter"></span>10K+
                        </div>
                        <small class="label">Satisfied Clients</small>
                    </article>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1.5" class="purecounter"></span>10K+
                        </div>
                        <small class="label">Shipments Delivered</small>
                    </article>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span data-purecounter-start="0" data-purecounter-end="97" data-purecounter-duration="1.5" class="purecounter"></span>100%
                        </div>
                        <small class="label">On-Time Delivery</small>
                    </article>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span data-purecounter-start="0" data-purecounter-end="99.96" data-purecounter-duration="1.5" class="purecounter"></span>100%
                        </div>
                        <small class="label">Client Satisfaction</small>
                    </article>
                </div>
            </div><!-- End stats counters -->

        </div>

    </section>
    <!-- /Stats Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section ">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Let’s move your cargo with precision, trust, and refined service excellence.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Corporate Contact</h3>
                        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <div class="content">
                                <h4>Director</h4>
                                <p>Rohit Rao</p>
                                <p>Phone: +91 70695 55594</p>
                                <p>Phone: +91 70695 55593</p>
                                <p>Email: info@aurelialine.com</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-globe"></i>
                            </div>
                            <div class="content">
                                <h4>Website</h4>
                                <p>www.aurelialine.com</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Branch Offices (India)</h4>
                                <p>Kandla, Mundra, Hazira, Nhava Sheva, Delhi, Ludhiana</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <h3>Get In Touch</h3>
                        <p>Send us your inquiry and our team will respond promptly to assist with your cargo requirements.</p>

                        <form action="contact.php" method="post" class="php-email-form" id="contactForm" data-aos="fade-up" data-aos-delay="200">
                            <input type="hidden" name="title" value="">
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="col-12 mt-2">
                                    <small class="" style="font-size: 11px;">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</small>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit" class="btn">Send Message</button>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /Contact Section -->


    <!-- Faq Section -->
    <section class="faq-9 faq section" id="faq">

        <div class="container">
            <div class="row">

                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                    <p class="faq-description">
                        We provide clear, transparent answers regarding our refined processes and timeless promise of reliable cargo movement.</p>
                    </p>

                    <div class="faq-arrow-wrapper d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">

                        <!-- ARROW SVG -->
                        <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                fill="currentColor" />
                        </svg>

                        <!-- AIRPLANE ICON -->
                        <img src="/assets/image/background/aeroplan.png" alt="" style="height: 262px;
    position: absolute;
    margin: 39px 26px 10px -70px;
">

                    </div>
                </div>


                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>What are your primary services?</h3>
                            <div class="faq-content">
                                <p>Our core services include: Freight Forwarding, Custom Clearance, LCL Cargo Consolidation, Transport Service (Inland), ODC (Over Dimensional Cargo) Handling, and Air Cargo solutions</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>What is ODC Cargo Handling?</h3>
                            <div class="faq-content">
                                <p>ODC (Over Dimensional Cargo) Handling involves the logistics of moving heavy lift and project cargo that exceeds standard container dimensions. We manage everything from route surveys to specialized loading and securing..</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>How do you handle LCL cargo?</h3>
                            <div class="faq-content">
                                <p>We offer cost-effective LCL (Less-than-Container Load) solutions by efficiently consolidating smaller consignments, minimizing transit delays, and maintaining total transparency throughout the journey.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Which Indian ports do you operate from?</h3>
                            <div class="faq-content">
                                <p>We have strong operations at major Indian ports including Kandla, Mundra, Hazira, and Nhava Sheva..</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Do you offer real-time cargo tracking?</h3>
                            <div class="faq-content">
                                <p>Yes, we provide transparent communication and real-time tracking capabilities to ensure you have continuous visibility of your shipment from origin to destination.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                    </div>
                </div>

            </div>
        </div>
    </section><!-- /Faq Section -->


    <?php include('./component/footer.php') ?>