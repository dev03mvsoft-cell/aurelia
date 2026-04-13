<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<?php include(__DIR__ . '/../../component/header.php'); ?>

<main class="main">

  <div class="page-title bg-body-secondary " data-aos="fade">
    <div class="container position-relative">
      <h1>ODC & Project Cargo</h1>
      <p>Engineering the Impossible: Specialized Project Cargo Solutions.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">ODC Handling</li>
        </ol>
      </nav>
    </div>
  </div>
  <section id="service-details" class="service-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5">

        <div class="col-lg-8 order-lg-1 order-2">
          <div class="service-main-content">
            <div class="service-header" data-aos="fade-up">
              <h1>Precision Handling for Out-of-Gauge Shipments</h1>
              <div class="service-meta">
                <span><i class="bi bi-gear-wide-connected"></i> Heavy-Lift Engineering</span>
                <span><i class="bi bi-mando-app"></i> Route Survey Certified</span>
                <span><i class="bi bi-shield-check"></i> 100% Safety Compliance</span>
              </div>
              <p class="lead">
                <strong>Aurelia Shipping Line Pvt. Ltd.</strong> excels where standard logistics ends. Handling Over Dimensional Cargo (ODC) is more than transport—it demands meticulous engineering and precision planning.
              </p>
            </div>

            <div class="mb-5" data-aos="fade-up">

              <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                <h3>Over-Dimensional Cargo (ODC) Operations</h3>

                <div class="service-details-slider swiper init-swiper">
                  <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 800,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 1,
                      "spaceBetween": 30,
                      "breakpoints": {
                        "768": {
                          "slidesPerView": 2
                        }
                      },
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      }
                    }
                  </script>

                  <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                      <div class="portfolio-item">
                        <img src="/assets/image/odc/aurilaODC1.png" alt="Over Dimensional Cargo Transport" class="img-fluid">
                        <div class="portfolio-info">
                          <h5>Over-Dimensional Cargo Transport</h5>
                          <p>Handling cargo exceeding standard length, width, or height limits.</p>
                        </div>
                      </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                      <div class="portfolio-item">
                        <img src="/assets/image/odc/aurilaODC2.png" alt="Heavy Lift & Specialized Equipment" class="img-fluid">
                        <div class="portfolio-info">
                          <h5>Specialized Handling & Equipment</h5>
                          <p>Low-bed trailers, flatbeds, cranes, and heavy-lift solutions.</p>
                        </div>
                      </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                      <div class="portfolio-item">
                        <img src="/assets/image/odc/aurilaODC4.png" alt="ODC Route Planning & Permits" class="img-fluid">
                        <div class="portfolio-info">
                          <h5>Permits & Route Engineering</h5>
                          <p>Route surveys, regulatory approvals, and authority coordination.</p>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="swiper-pagination"></div>
                </div>
              </div>

            </div>

            <div class="service-tabs" data-aos="fade-up" data-aos-delay="200">
              <ul class="nav nav-tabs" id="serviceTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-capabilities" type="button" role="tab">
                    <i class="bi bi-box-seam"></i> Capabilities
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-workflow" type="button" role="tab">
                    <i class="bi bi-diagram-3"></i> Precision Workflow
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-fleet" type="button" role="tab">
                    <i class="bi bi-truck"></i> Specialized Fleet
                  </button>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-capabilities" role="tabpanel">
                  <div class="row align-items-center">
                    <div class="col-md-7">
                      <h3>End-to-End ODC Solutions</h3>
                      <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="bi bi-arrow-right-circle defaluticon me-2"></i> <strong>Flat Rack & Open Tops:</strong> For cargo exceeding standard height/width.</li>
                        <li class="mb-2"><i class="bi bi-arrow-right-circle defaluticon me-2"></i> <strong>Break-Bulk Services:</strong> Massive machinery loaded directly to deck.</li>
                        <li class="mb-2"><i class="bi bi-arrow-right-circle defaluticon me-2"></i> <strong>Heavy-Lift:</strong> Turbines, boilers, and industrial plant components.</li>
                        <li class="mb-2"><i class="bi bi-arrow-right-circle defaluticon me-2"></i> <strong>Ro-Ro Services:</strong> Self-propelled construction equipment.</li>
                      </ul>
                    </div>
                    <div class="col-md-5">
                      <img src="/assets/image/about/aurelia3.png" alt="Flat Rack Container Loading" class="img-fluid rounded shadow-sm">
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="tab-workflow" role="tabpanel">
                  <div class="process-timeline">
                    <div class="timeline-item">
                      <div class="timeline-marker">01</div>
                      <div class="timeline-content">
                        <h4>Route Survey & Feasibility</h4>
                        <p>Physical inspection of bridges and overhead clearances to determine the safest factory-to-port path.</p>
                      </div>
                    </div>
                    <div class="timeline-item">
                      <div class="timeline-marker">02</div>
                      <div class="timeline-content">
                        <h4>Lashing & Securing</h4>
                        <p>Industry-grade materials and certified techniques to prevent movement during sea or road transit.</p>
                      </div>
                    </div>
                    <div class="timeline-item">
                      <div class="timeline-marker">03</div>
                      <div class="timeline-content">
                        <h4>Compliance & Permits</h4>
                        <p>Handling all Ministry of Road Transport permits and escort arrangements for wide loads.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="tab-fleet" role="tabpanel">
                  <div class="row g-4 mb-4">
                    <div class="col-md-6">
                      <div class="feature-box p-3 border rounded h-100 ">
                        <h5>Multi-Axle Modular Trailers</h5>
                        <p>Distributing extreme weight across multiple points for structural safety.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="feature-box p-3 border rounded h-100">
                        <h5>Extendable Trailers</h5>
                        <p>Accommodating exceptionally long cargo like wind turbine blades or pipes.</p>
                      </div>
                    </div>
                  </div>
                  <img src="/assets/image/about/aureliabanner.jpg" alt="Multi-axle hydraulic trailer for ODC" class="img-fluid rounded">
                </div>
              </div>
            </div>

            <div class="service-gallery mt-5" data-aos="fade-up">
              <h3>Industries We Serve</h3>
              <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                  <div class="p-3 border rounded">
                    <i class="bi bi-lightning-charge fs-1 defaluticon"></i>
                    <p class="mt-2 fw-bold">Energy & Power</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="p-3 border rounded">
                    <i class="bi bi-droplet-half fs-1 defaluticon"></i>
                    <p class="mt-2 fw-bold">Oil & Gas</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="p-3 border rounded">
                    <i class="bi bi-buildings fs-1 defaluticon"></i>
                    <p class="mt-2 fw-bold">Construction</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="p-3 border rounded">
                    <i class="bi bi-cpu fs-1 defaluticon"></i>
                    <p class="mt-2 fw-bold">Manufacturing</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="col-lg-4 order-lg-2 order-1">
          <div class="service-sidebar" data-aos="fade-left">
            <div class="action-card" data-aos="zoom-in">
              <h3>Optimize Your Supply Chain</h3>
              <p>Get a competitive quote and a logistics strategy tailored to your business needs.</p>
              <a href="/contact" class="btn-primary">Request a Freight Quote</a>
              <!-- <span class="guarantee"><i class="bi bi-clock-history"></i> Daily departures available</span> -->
            </div>

          <div class="service-features-list" data-aos="fade-up">
  <h4>Core Logistics Modes</h4>
  <ul>
    <li>
      <i class="bi bi-water me-2"></i>
      <div>
        <h5>
          <a href="/services/freight-forwarding">Ocean Freight</a>
        </h5>
        <p>FCL & LCL via Mundra/Kandla</p>
      </div>
    </li>

    <li>
      <i class="bi bi-airplane"></i>
      <div>
        <h5>
          <a href="/services/air-cargo">Air Cargo</a>
        </h5>
        <p>Express & Pharmaceutical handling</p>
      </div>
    </li>

    <li>
      <i class="bi bi-truck"></i>
      <div>
        <h5>
          <a href="/services/transportservice">Road & Rail</a>
        </h5>
        <p>Connecting Delhi/Ludhiana hubs</p>
      </div>
    </li>

    <li>
      <i class="bi bi-shield-check"></i>
      <div>
        <h5>
          <a href="/services/custom-clearance">Cargo Protection</a>
        </h5>
        <p>Comprehensive Marine Insurance</p>
      </div>
    </li>
  </ul>
</div>


            <div class="testimonial-card" data-aos="fade-up">
              <p class="testimonial-text">
                "Aurelia Shipping transformed our export process. Their AI-routing helped us bypass port congestion, saving us weeks in transit time."
              </p>
              <div class="client-info">
                <h5>Export Manager</h5>
                <span>Global Electronics Manufacturing</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<?php include(__DIR__ . '/../../component/footer.php'); ?>