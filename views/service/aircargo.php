<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<?php echo include(__DIR__ . '/../../component/header.php'); ?>

<main class="main">

  <div class="page-title bg-body-secondary " data-aos="fade">
    <div class="container position-relative">
      <h1>Air Freight Services</h1>
      <p>Velocity. Visibility. Victory. High-speed global logistics.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Air Freight</li>
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
              <h1>Time-Critical Air Logistics Solutions</h1>
              <div class="service-meta">
                <span><i class="bi bi-airplane"></i> IATA Standard Compliance</span>
                <span><i class="bi bi-clock-history"></i> Express & Charter Options</span>
                <span><i class="bi bi-shield-check"></i> Secure Handling</span>
              </div>
              <p class="lead">
                <strong>Aurelia Shipping Line Pvt. Ltd.</strong> delivers time-critical air freight solutions for businesses that cannot afford delays. In today’s “just-in-time” supply chains, our air cargo division serves as a high-speed bridge between your production line and global customers.
              </p>
              <p>
                We ensure the perfect balance of speed, cost, and reliability, prioritizing high-value or perishable shipments at every terminal across the globe.
              </p>
            </div>

            <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
              <h3>Air Cargo Operations</h3>

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
                      <img src="/assets/image/about/aurilaAir24.png" alt="International Air Freight" class="img-fluid">
                      <div class="portfolio-info">
                        <h5>Express & General Air Freight</h5>
                        <p>Fast and reliable airport-to-airport cargo movement worldwide.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Slide 2 -->
                  <div class="swiper-slide">
                    <div class="portfolio-item">
                      <img src="/assets/image/about/aurilaAir25.png" alt="Time Critical Air Cargo" class="img-fluid">
                      <div class="portfolio-info">
                        <h5>Time-Critical Shipments</h5>
                        <p>Priority uplift for urgent, high-value, and mission-critical cargo.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Slide 3 -->
                  <div class="swiper-slide">
                    <div class="portfolio-item">
                      <img src="/assets/image/about/aurilaAir26.png" alt="Air Cargo Documentation & Handling" class="img-fluid">
                      <div class="portfolio-info">
                        <h5>Secure Handling & Compliance</h5>
                        <p>IATA-compliant packaging, documentation, and screening procedures.</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="service-tabs" data-aos="fade-up" data-aos-delay="200">
              <ul class="nav nav-tabs" id="serviceTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-solutions" type="button" role="tab">
                    <i class="bi bi-lightning"></i> Speed Solutions
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-expertise" type="button" role="tab">
                    <i class="bi bi-box"></i> Specialized Cargo
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-ulds" type="button" role="tab">
                    <i class="bi bi-grid-3x3"></i> ULD Dimensions
                  </button>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-solutions" role="tabpanel">
                  <div class="row">
                    <div class="col-md-7">
                      <h3>Tailored Air Logistics</h3>
                      <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="bi bi-check2-all defaluticon me-2"></i> <strong>Express Air Freight:</strong> Next available flight delivery for mission-critical cargo.</li>
                        <li class="mb-2"><i class="bi bi-check2-all defaluticon me-2"></i> <strong>Standard Air Freight:</strong> Scheduled services using passenger & freighter fleets.</li>
                        <li class="mb-2"><i class="bi bi-check2-all defaluticon me-2"></i> <strong>Charter Services:</strong> Dedicated aircraft for oversized or high-volume volume.</li>
                        <li class="mb-2"><i class="bi bi-check2-all defaluticon me-2"></i> <strong>Sea-Air Combined:</strong> Hybrid speed with cost-efficiency.</li>
                      </ul>
                    </div>
                    <div class="col-md-5">
                      <img src="/assets/image/about/aurilaAir27.png" alt="Air Cargo Charter Service" class="img-fluid rounded">
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="tab-expertise" role="tabpanel">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="p-3 border rounded ">
                        <h5>Pharma & Life Sciences</h5>
                        <p class="small">Cold-chain logistics for vaccines and lab equipment.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="p-3 border rounded ">
                        <h5>High-Value Electronics</h5>
                        <p class="small">Secure handling for semiconductors and tech devices.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="p-3 border rounded ">
                        <h5>Dangerous Goods (DGR)</h5>
                        <p class="small">Certified handling of chemicals and batteries per IATA.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="p-3 border rounded ">
                        <h5>Perishables</h5>
                        <p class="small">Rapid transit for fresh produce, flowers, and seafood.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="tab-ulds" role="tabpanel">
                  <p>Common Unit Load Devices (ULDs) used in our air operations:</p>

                  <div class="table-responsive">
                    <table class="table table-bordered  mt-3">
                      <thead class="">
                        <tr>
                          <th>ULD Type</th>
                          <th>Max Volume</th>
                          <th>Best For</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><strong>LD3 (AKE)</strong></td>
                          <td>~4.5 m³</td>
                          <td>Lower deck of wide-body aircraft</td>
                        </tr>
                        <tr>
                          <td><strong>LD7 (P1P)</strong></td>
                          <td>~10.5 m³</td>
                          <td>Large machinery, bulk cartons</td>
                        </tr>
                        <tr>
                          <td><strong>RKN Reefer</strong></td>
                          <td>~4.3 m³</td>
                          <td>Pharma & temp-controlled goods</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-5" data-aos="fade-up">
              <h3>The “Aurelia” Air Advantage</h3>
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-globe2 defaluticon fs-3 me-3"></i>
                    <div>
                      <h5>Global Partnerships</h5>
                      <p class="small">Strong tie-ups with Emirates, Qatar, and Lufthansa ensure space during peak seasons.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-truck-flatbed defaluticon fs-3 me-3"></i>
                    <div>
                      <h5>Airport-to-Door</h5>
                      <p class="small">Seamless integration with our road fleet from Delhi, Ahmedabad, and Mumbai airports.</p>
                    </div>
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