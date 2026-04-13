<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<footer id="footer" class="footer">
    <!-- Fixed WhatsApp Floating Button (Bottom-Left) -->





    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- <span class="sitename">Aurelia Shipping Line Pvt. Ltd.</span> -->
                    <img src="/assets/image/logo/aurelia logo.png" alt="">
                </a>
                <p>We specialize in end-to-end logistics solutions across air, sea, and land, ensuring timely, secure, and refined service for all your cargo needs.</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
                    <a href="#" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                    <a href="#" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                    <a href="#" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/corporate-social-responsibility">CSR</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="/services/freight-forwarding">Freight Forwarding</a></li>
                    <li><a href="/services/custom-clearance">Custom Clearance</a></li>
                    <li><a href="/services/less-container-load">LCL Cargo Consolidation</a></li>
                    <li><a href="/services/transportservice">Transport Service (Inland)</a></li>
                    <li><a href="/services/air-cargo">Air Cargo</a></li>
                    <li><a href="/services/over-dimensional-cargo">ODC (Over Dimensional Cargo)</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>111, 1 Floor, Golden Heights-2, Plot No. 8</p>
                <p>Sector- 8,Gandhidham, Kutch, Gujarat 370201</p>
                <p>India</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+91 70695 55594,+91 7069555593</span></p>
                <p><strong>Email:</strong> <span>info@aurelialine.com
</span></p>
            </div>

        </div>
    </div>

    <div class="container copyright text-center rounded-pill mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Aurelia Shipping Line Pvt. Ltd.</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Developed by
            <a href="https://bcsads.com/" target="_blank" rel="noopener noreferrer">
                BCS Group, Gandhidham
            </a>
        </div>

    </div>

</footer>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<a href="https://wa.me/917069555594" target="_blank" rel="noopener noreferrer" class="whatsapp_icon d-flex">
    <i class="bi bi-whatsapp" style="font-size:28px;"></i>
</a>

<!-- Preloader -->
<!-- <div id="preloader"></div> -->


<!-- Vendor JS Files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/validate.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="/assets/js/main.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<!-- bubble script -->
<script>
    const canvas = document.getElementById("canvas");
    if (canvas) {
        function random(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        // Performance ke liye count adjust karein
        const bubbleCount = window.innerWidth < 768 ? 30 : 60;

        for (let i = 0; i < bubbleCount; i++) {
            const bubble = document.createElement("div");
            bubble.className = "bubble";

            const size = random(10, 150);
            const duration = random(6, 15);
            const left = random(0, 100);
            const bgPos = i % 9 === 0 ? "top right" : "center";

            // Bubble Styling
            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;
            bubble.style.left = `${left}vw`;
            bubble.style.background = `radial-gradient(ellipse at ${bgPos}, #d9a66428 0%, #b27130d5 80%, #1a120877 100%)`;

            // Firefox friendly variables
            bubble.style.setProperty('--move-y', `-${random(80, 120)}vh`);
            bubble.style.setProperty('--move-x', `${random(-100, 100)}px`);

            bubble.style.animation = `move-bubbles ${duration}s infinite linear`;
            bubble.style.animationDelay = `${random(0, 10)}s`;

            canvas.appendChild(bubble);
        }
    }
</script>
<!-- bubble end -->


<script>
    const heroSlider = new Swiper(".heroTextImageSlider", {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        on: {
            slideChangeTransitionStart() {
                const activeSlide =
                    document.querySelector(".swiper-slide-active");

                if (!activeSlide) return;

                const animatedEls =
                    activeSlide.querySelectorAll("h1, img");

                animatedEls.forEach(el => {
                    el.style.animation = "none";
                    el.offsetHeight; // reflow
                    el.style.animation = "";
                });
            }
        }
    });
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lelxh8sAAAAANd2nyCT55-LvzCpKXBIR64EiOUz"></script>
<script>
    // reCAPTCHA execution
    function refreshCaptcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lelxh8sAAAAANd2nyCT55-LvzCpKXBIR64EiOUz', {action: 'contact'}).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    }
    refreshCaptcha();
    // Refresh token every 2 minutes to keep it valid
    setInterval(refreshCaptcha, 110000);
</script>

<script>
  const currentPath = window.location.pathname;

  document.querySelectorAll('#navmenu a').forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });
</script>

</body>

</html>