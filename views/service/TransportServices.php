<?php include(__DIR__ . '/../../component/header.php'); ?>

<main class="main">

  <div class="page-title bg-body-secondary " data-aos="fade">
    <div class="container position-relative">
      <h1>Transport Services</h1>
      <p>From Factory to Port: Seamless Inland Connectivity.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Transport Services</li>
        </ol>
      </nav>
    </div>
  </div><section id="service-details" class="service-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5">

        <div class="col-lg-8 order-lg-1 order-2">
          <div class="service-main-content">
            <div class="service-header" data-aos="fade-up">
              <h1>Reliable Road & Rail Logistics Backbone</h1>
              <div class="service-meta">
                <span><i class="bi bi-truck"></i> GPS Enabled Fleet</span>
                <span><i class="bi bi-geo-alt"></i> Pan-India Network</span>
                <span><i class="bi bi-shield-check"></i> Secure Transit</span>
              </div>
              <p class="lead">
                <strong>Aurelia Shipping Line Pvt. Ltd.</strong> delivers robust inland transportation solutions—the backbone of your supply chain. We specialize in connecting India’s industrial hubs to major maritime gateways.
              </p>
              <p>
                Whether it’s moving raw materials to factories or finished goods to ports, our transport network ensures your cargo is handled with precision, safety, and speed.
              </p>
            </div>

            <div class="service-tabs" data-aos="fade-up" data-aos-delay="200">
              <ul class="nav nav-tabs" id="serviceTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#service-details-tab-1" type="button" role="tab">
                    <i class="bi bi-truck-flatbed"></i> Fleet & Capabilities
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#service-details-tab-2" type="button" role="tab">
                    <i class="bi bi-map"></i> Network & Routing
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#service-details-tab-3" type="button" role="tab">
                    <i class="bi bi-table"></i> Capability Matrix
                  </button>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane fade show active" id="service-details-tab-1" role="tabpanel">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="content-block">
                        <h3>Our Specialized Fleet</h3>
                        <p>We don’t just move goods—we provide the right vehicle for the right cargo:</p>
                        <ul class="list-unstyled">
                          <li><i class="bi bi-check-circle defaluticon"></i> <strong>Containerized Trailers:</strong> 20ft/40ft high-security FCL transport.</li>
                          <li><i class="bi bi-check-circle defaluticon"></i> <strong>Open Trucks & Tempos:</strong> Flexible LCL pickups in Delhi & Gujarat.</li>
                          <li><i class="bi bi-check-circle defaluticon"></i> <strong>ODC Trailers:</strong> Low-bed solutions for heavy machinery.</li>
                          <li><i class="bi bi-check-circle defaluticon"></i> <strong>Reefer Transport:</strong> Cold-chain for Pharma & Agri-cargo.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <img src="/assets/image/about/aurelia4.png" alt="Aurelia Logistics Fleet" class="img-fluid rounded shadow">
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                  <div class="process-timeline">
                    <div class="timeline-item">
                      <div class="timeline-marker">NC</div>
                      <div class="timeline-content">
                        <h4>Northern Corridor</h4>
                        <p>Daily connections from Ludhiana and Delhi ICDs to Mundra and Kandla ports.</p>
                      </div>
                    </div>
                    <div class="timeline-item">
                      <div class="timeline-marker">GB</div>
                      <div class="timeline-content">
                        <h4>Gujarat Industrial Belt</h4>
                        <p>Hyper-local transport across Gandhidham, Hazira, and Ahmedabad.</p>
                      </div>
                    </div>
                    <div class="timeline-item">
                      <div class="timeline-marker">ML</div>
                      <div class="timeline-content">
                        <h4>Maharashtra Link</h4>
                        <p>Seamless port-to-warehouse movement at Nhava Sheva (JNPT).</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="service-details-tab-3" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table table-bordered ">
                      <thead class="">
                        <tr>
                          <th>Load Type</th>
                          <th>Vehicle</th>
                          <th>Best For</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr><td>Standard Export</td><td>20'/40' Trailer</td><td>General cargo, Electronics</td></tr>
                        <tr><td>Small Shipments</td><td>14ft-20ft Open Truck</td><td>LCL, Retail, Agri</td></tr>
                        <tr><td>Industrial/ODC</td><td>Low-Bed Trailer</td><td>Machinery, Boilers</td></tr>
                        <tr><td>Perishables</td><td>Reefer Van</td><td>Pharma, Frozen Foods</td></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
              <h3>Fleet Gallery & Operations</h3>
              <div class="service-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 800,
                    "autoplay": { "delay": 5000 },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "breakpoints": { "768": { "slidesPerView": 2 } },
                    "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="portfolio-item">
                      <img src="/assets/image/about/aurelia10.png" alt="Container Truck" class="img-fluid">
                      <div class="portfolio-info">
                        <h5>Standard Container Transit</h5>
                        <p>GPS tracked FCL movement</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="portfolio-item">
                      <img src="/assets/image/about/aurelia14.png" alt="ODC Cargo" class="img-fluid">
                      <div class="portfolio-info">
                        <h5>ODC Specialization</h5>
                        <p>Heavy machinery handling</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="portfolio-item">
                      <img src="/assets/image/about/aurelia6.png" alt="Port Logistics" class="img-fluid">
                      <div class="portfolio-info">
                        <h5>Port Connectivity</h5>
                        <p>Mundra & Kandla Daily Service</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
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