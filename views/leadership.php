<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<?php include(__DIR__ . '/../component/header.php'); ?>



<style>
  :root {
    --leadership-gradient: linear-gradient(135deg, rgba(var(--accent-color-rgb), 0.05) 0%, rgba(var(--accent-color-rgb), 0.1) 100%);
    --card-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
  }

  .leadership-section {
    position: relative;
    padding: 80px 0;
    overflow: hidden;
    background: #fff;
  }

  .leadership-section::before {
    content: '';
    position: absolute;
    top: -10%;
    right: -5%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(var(--accent-color-rgb), 0.1) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
    animation: float-slow 15s infinite alternate;
  }

  .leadership-section::after {
    content: '';
    position: absolute;
    bottom: -10%;
    left: -5%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(var(--accent-color-rgb), 0.08) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
    animation: float-slow 12s infinite alternate-reverse;
  }

  @keyframes float-slow {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
  }

  .executive-card {
    background: #fff;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid rgba(0, 0, 0, 0.03);
    position: relative;
    z-index: 1;
  }

  .executive-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
    border-color: rgba(var(--accent-color-rgb), 0.2);
  }

  .profile-image-wrapper {
    position: relative;
    overflow: hidden;
    height: 100%;
    min-height: 400px;
  }

  .profile-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  .executive-card:hover .profile-image-wrapper img {
    transform: scale(1.05);
  }

  .profile-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.4) 0%, transparent 50%);
    opacity: 0;
    transition: opacity 0.4s;
  }

  .executive-card:hover .profile-overlay {
    opacity: 1;
  }

  .corner-accent {
    position: absolute;
    top: 0;
    right: 0;
    width: 80px;
    height: 80px;
    background: var(--accent-color);
    clip-path: polygon(100% 0, 0 0, 100% 100%);
    opacity: 0.1;
    z-index: -1;
  }

  .role-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 14px;
    background: rgba(var(--accent-color-rgb), 0.1);
    color: var(--accent-color);
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border-left: 3px solid var(--accent-color);
  }

  .expertise-tag {
    display: inline-block;
    padding: 4px 12px;
    background: #f8f9fa;
    border: 1px solid #eee;
    border-radius: 6px;
    font-size: 0.85rem;
    color: #666;
    margin-right: 8px;
    margin-bottom: 8px;
    transition: all 0.3s;
  }

  .expertise-tag:hover {
    background: var(--accent-color);
    color: #fff;
    border-color: var(--accent-color);
  }

  .creative-title {
    position: relative;
    display: block;
    margin-top: 0.5rem;
    margin-bottom: 1.5rem;
  }

  .creative-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 60px;
    height: 3px;
    background: var(--accent-color);
    border-radius: 2px;
  }

  .management-quote {
    font-style: italic;
    color: #777;
    border-left: 3px solid var(--accent-color);
    padding-left: 20px;
    margin: 25px 0;
    font-size: 0.95rem;
  }

  .social-connect {
    display: flex;
    gap: 15px;
    margin-top: 20px;
  }

  .social-connect a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f0f0f0;
    color: #333;
    transition: all 0.3s;
    text-decoration: none;
  }

  .social-connect a:hover {
    background: var(--accent-color);
    color: #fff;
    transform: translateY(-3px);
  }
</style>

<main class="main">

  <!-- Page Title -->
  <div class="page-title bg-body-secondary" data-aos="fade">
    <div class="container position-relative">
      <h1 class="display-4 fw-bold">Our Leadership</h1>
      <p class="lead opacity-75">Meet the architects behind our logistics precision and commitment to global excellence.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Leadership</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="leadership" class="leadership-section">
    <div class="container">
      
      <div class="row text-center mb-5" data-aos="fade-up">
        <div class="col-lg-8 mx-auto">
          <span class="text-uppercase fw-bold text-accent" style="color: var(--accent-color); letter-spacing: 2px; font-size: 0.9rem;">Management Spotlight</span>
          <h2 class="fw-bold mt-2 display-6">Strategic Visionaries Driving Excellence</h2>
          <p class="text-muted mt-3">Our leadership team combines financial discipline with deep operational expertise to navigate the complexities of global trade.</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-12">
          
          <!-- Rohit Rao Profile -->
          <div class="inner-container mb-5" data-aos="fade-up">
            <div class="executive-card">
              <div class="row g-0 flex-row-reverse">
                <div class="col-lg-5">
                  <div class="profile-image-wrapper">
                    <img src="https://static.vecteezy.com/system/resources/previews/024/983/914/non_2x/simple-user-default-icon-free-png.png" alt="Mr. Rohit Rao">
                    <div class="profile-overlay"></div>
                  </div>
                </div>
                <div class="col-lg-7 p-4 p-lg-5 d-flex flex-column justify-content-center">
                  <div class="corner-accent"></div>
                  <div class="content-body">
                    <span class="role-badge">Director</span>
                    <h2 class="creative-title fw-bold" style="color: var(--nav-color);">Mr. Rohit Rao</h2>
                    
                    <p class="mb-4 text-secondary" style="line-height: 1.8;">
                      Mr. Rohit Rao serves as Director at Aurelia Shipping Line Pvt. Ltd. and brings over five years of hands-on experience in the shipping and logistics industry. He possesses strong operational expertise in managing complex, sensitive, and high-value cargo, including project shipments and Over Dimensional Cargo (ODC).
                    </p>
                    
                    <div class="management-quote">
                      "From route assessments and coordination with transport authorities to on-ground supervision—we ensure smooth execution at every stage."
                    </div>

                    <p class="mb-4 text-secondary" style="line-height: 1.8;">
                      He plays a crucial role in planning and supervising specialized movements involving heavy machinery, oversized equipment, and time-sensitive consignments, ensuring strict adherence to safety standards and statutory compliance. Mr. Rao ensures smooth execution through route assessments, coordination with authorities, and on-ground supervision of loading, lashing, and dispatch operations.
                    </p>

                    <div class="expertise-container mt-4">
                      <h6 class="fw-bold mb-3 text-uppercase small" style="letter-spacing: 1px;">Key Expertise</h6>
                      <div class="d-flex flex-wrap">
                        <span class="expertise-tag">Operational Logistics</span>
                        <span class="expertise-tag">Project Cargo (ODC)</span>
                        <span class="expertise-tag">Port Operations</span>
                        <span class="expertise-tag">Compliance Management</span>
                      </div>
                    </div>

                    <div class="social-connect">
                      <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                      <a href="#" title="X (Twitter)"><i class="bi bi-twitter-x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pankaj Sharma Profile -->
          <div class="inner-container" data-aos="fade-up" data-aos-delay="100">
            <div class="executive-card">
              <div class="row g-0">
                <div class="col-lg-5">
                  <div class="profile-image-wrapper">
                    <img src="/assets/image/fonder/pankajsharma.jpg" alt="Mr. Pankaj Sharma">
                    <div class="profile-overlay"></div>
                  </div>
                </div>
                <div class="col-lg-7 p-4 p-lg-5 d-flex flex-column justify-content-center">
                  <div class="corner-accent"></div>
                  <div class="content-body">
                    <span class="role-badge">Managing Director</span>
                    <h2 class="creative-title fw-bold" style="color: var(--nav-color);">Mr. Pankaj Sharma <span class="fs-6 fw-normal text-muted">(CA)</span></h2>
                    
                    <p class="mb-4 text-secondary" style="line-height: 1.8;">
                      Mr. Pankaj Sharma, a qualified Chartered Accountant, serves as the Managing Director of Aurelia Shipping Line Pvt. Ltd. With specialized experience in the shipping and logistics industry, he brings strong expertise in freight pricing, operational management, and financial strategy. His professional background enables the company to maintain well-structured pricing models and optimize cost efficiency.
                    </p>

                    <div class="management-quote">
                      "Financial transparency and operational excellence are the twin pillars of a reliable logistics partner. We build trust through disciplined financial controls."
                    </div>

                    <p class="mb-4 text-secondary" style="line-height: 1.8;">
                      As Managing Director, he plays a key role in strategic planning, business development, and compliance management, ensuring that Aurelia operates with transparency and sustainable growth. His analytical approach and focus on operational excellence contribute significantly to strengthening the company's competitive positioning and long-term expansion.
                    </p>

                    <div class="expertise-container mt-4">
                      <h6 class="fw-bold mb-3 text-uppercase small" style="letter-spacing: 1px;">Key Expertise</h6>
                      <div class="d-flex flex-wrap">
                        <span class="expertise-tag">Financial Strategy</span>
                        <span class="expertise-tag">Freight Pricing</span>
                        <span class="expertise-tag">Strategic Planning</span>
                        <span class="expertise-tag">Compliance Architect</span>
                      </div>
                    </div>

                    <div class="social-connect">
                      <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                      <a href="#" title="X (Twitter)"><i class="bi bi-twitter-x"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Vision Section -->
  <section class="section bg-light py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h3 class="fw-bold">Leading with Integrity</h3>
          <p>Our leadership doesn't just manage from the boardroom; they are involved in the strategic blueprinting of every major project, ensuring the "Aurelia Standard" is met at every port and crossing.</p>
        </div>
        <div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
           <a href="/contact" class="btn btn-primary rounded-pill px-5 py-3 shadow" style="background-color: var(--accent-color); border-color: var(--accent-color);">Connect with our Team</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include(__DIR__ . '/../component/footer.php'); ?>

