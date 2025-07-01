<!-- Paste content from index.html here -->
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tattva Capital</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Tattva Capital</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home" onclick="navigateTo('hero', 'home'); return false;">Home</a></li>
          <li><a href="#aboutus" onclick="navigateTo('features', 'aboutus'); return false;">About Us</a>
</li>
          <li><a href="#services" onclick="navigateTo('services-2', 'services'); return false;">Services</a>
</li>
          <!--ul>
              <li><a href="login-employee.html">Investment Advisory</a></li>
              <li><a href="login-client.html">Analytics and reports</a></li>
              <li><a href="B-p login.html">Estate Plan</a></li>
              <li><a href="B-p login.html">Philonthropy</a></li>
              <li><a href="B-p login.html">Calculator</a></li>
            </ul-->
          </li>
          <li><a href="{{ url('/research-report') }}">Careers</a></li>
          <!--li><a href="#portfolio">Portfolio</a></li-->
          <!--li><a href="#team">Team</a></li-->
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a class="dropdown-item" href="{{ route('login.employee') }}">Employee Login</a></li>
              <!--li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li-->
              <li><a class="dropdown-item" href="{{ url('/login') }}">Client</a></li>
              <li><a class="dropdown-item" href="{{ route('login.bp') }}">Business Partner Login</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!--a class="cta-btn" href="index.html#about">Get Started</a-->

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/land.jpg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">"Vision is the art of seeing what is invisible to others."</h2>
        <p data-aos="fade-up" data-aos-delay="200">– Jonathan Swift</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#get-started" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->
    <section id="get-started" class="section light-background">
  <div class="container d-flex justify-content-center">
    <div class="text-center p-5 shadow" style="background-color: white; border: 2px solid #ddd; border-radius: 12px; max-width: 800px; width: 100%;" data-aos="fade-up">
      <h2 class="mb-3" style="color: #273d4e; border-bottom: 3px solid #f57c00; display: inline-block; padding-bottom: 8px;">
        Start Your Wealth Journey Today
      </h2>
      <p class="mb-4" style="font-size: 18px; color: #444;">
        At Tattva Capital, we help you align your financial goals with smart investment strategies. <br>
        Let’s build your future — together.
      </p>

      <!--div class="d-flex justify-content-center flex-wrap gap-3">
        <a href="login-client.html" class="btn btn-primary px-4 py-2" style="font-weight: 600;">Get Started Now</a>
        <a href="#contact" class="btn btn-outline-secondary px-4 py-2" style="font-weight: 600;">Talk to an Advisor</a>
      </div>

      <p class="mt-4 text-muted">No fees. No pressure. Just expert guidance.</p-->
    </div>
  </div>
</section>

    
    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link tab who active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-binoculars"></i>
              <h4 class="d-none d-lg-block">About Us</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link tab-story" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-box-seam"></i>
              <h4 class="d-none d-lg-block">Our Story</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link tab-values" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-brightness-high"></i>
              <h4 class="d-none d-lg-block">Our Core Values</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link tab-team" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block">Our Team</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>At TIAS (Tattva Investment Advisory Services)</h3>
                <p class="fst-italic">
                 Where Principles Meet Prosperity.
                </p>
                <p>
                 We don’t just manage wealth—we partner with you to build a financial life that reflects your goals, values, and vision. With decades of experience and deep market insights, we provide personalized, ethical, and future-focused wealth management solutions that empower individuals, families, and entrepreneurs to make smarter financial decisions.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Partners in transformation — from vision to execution.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Focused on building long-term value through customized advisory services</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Experts in strategy, innovation, and growth planning for dynamic markets.</span></li>
                </ul>
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/WRW.jpg" alt="" class="img-fluid" alt="Analytics and Reports" style="width: 100%; max-width: 600px;">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>A Story of Bold Ideas and Trusted Guidance</h3>
                <!--p>
                  Founded in 2015 by seasoned financial professionals, TIAS was born from a belief that true wealth is not just money—it’s freedom, legacy, and peace of mind. From humble beginnings to becoming a trusted advisor to clients across India and abroad, we’ve stayed committed to one thing—putting clients first. Always.
                </p-->
                <!--p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p-->
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Founded in 2015 by a team of seasoned financial professionals with a shared vision of redefining wealth management.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Born from a belief that true wealth is more than just financial success — it’s about freedom, legacy, and peace of mind.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Started with humble beginnings, guided by a clear purpose: to empower individuals and families to take control of their financial futures.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Over the years, TIAS has grown into a trusted advisor for clients across India and overseas, built on a foundation of trust, transparency, and consistent value delivery.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Our journey has been marked by client-centric thinking, long-term partnerships, and a commitment to ethical, research-backed investing.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>We’ve weathered market cycles, evolving regulations, and global uncertainties, yet one thing has remained constant:
Putting clients first. Always.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>TIAS is not just a firm; it's a philosophy in action — one that honors discipline, integrity, and thoughtful growth.</span></li>
                
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/OS.jpg" alt="" class="img-fluid" alt="Analytics and Reports" style="width: 100%; max-width: 600px;">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Guiding Principles That Define Us</h3>
                <p>
                  
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><strong>Integrity-</strong>
Upholding the highest standards of ethics, transparency, and accountability.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><strong>Client-Centricity -</strong>
Your goals guide our strategy. We listen, adapt, and advise with care.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><strong>Excellence</strong>
Data-backed decisions, robust planning, and continuous learning drive our performance.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>
<strong>Stewardship</strong>
Helping you grow, protect, and pass on your wealth responsibly.</span></li>
                </ul>
                <p class="fst-italic">
                 
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/OCV.jpg" alt="" class="img-fluid" alt="Analytics and Reports" style="width: 100%; max-width: 600px;">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Together We Think. Together We Win.</h3>
                <p>
                 Behind every successful plan is a dedicated advisor. <br>Our team includes certified financial planners, investment experts, and tax professionals working together for your success.<br> We combine technical expertise with human connection to build trusted, long-lasting relationships.


                </p>
                <p class="fst-italic">
                  “People don’t care how much you know until they know how much you care.”<br>
– Theodore Roosevelt
                </p><br>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><strong>Problem-Solving Driven – </strong> We see problems as puzzles, not roadblocks.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><strong>Client-Focused Delivery –</strong> We build with the end-user in mind—always.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><strong>Strong Communication –</strong> We keep it clear, transparent, and aligned.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->
     <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>CHECK OUR SERVICES</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-briefcase icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#investmentadvisory" class="stretched-link">Investment Advisory</a></h4>
                <p class="description">Strategic Advice for Long-Term Growth</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-card-checklist icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#reports" class="stretched-link">Analytics & Reports</a></h4>
                <p class="description">From Numbers to Knowledge — Your Edge in the Market.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bar-chart icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#estateplan" class="stretched-link">Estate Plan</a></h4>
                <p class="description">Planning Today for Peace of Mind Tomorrow.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#philonthropy" class="stretched-link">Philonthropy</a></h4>
                <p class="description">Empowering Communities Starts with You.</p>
              </div>
            </div>
          </div><!-- End Service Item -->


          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#calculator" class="stretched-link">Calculator</a></h4>
                <p class="description">Know the Risk. Measure the Reward.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services 2 Section -->
    

    <!-- About Section -->
    <section id="investmentadvisory" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Investment Advisory</h3>
            <div class="mb-4">
  <img src="assets/img/investment advisory.jpeg" class="img-fluid rounded-4" alt="Investment Advisory Discussion" style="width: 100%; height: 450px; object-fit: cover;">
</div>

            <p><div class="fst-italic">Your financial goals are personal—so is our approach.</div><br>
We craft tailored wealth strategies to help you navigate life’s milestones with clarity and confidence. We value your understanding of risk tolerance, realistic expectations, and time horizon as key to reaching your financial goals.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Our approach also prepares you to manage unexpected financial challenges with confidence.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Personalized Portfolio Strategies tailored to your risk profile and financial goals</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span> Regular Portfolio Reviews and rebalancing to stay aligned with your objectives</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Transparent, Goal-Based Approach with no hidden commissions or bias</span></li>
              </ul>
              <p>
                We provide personalized guidance, aligning your financial goals with market opportunities through data-driven strategies. Whether you're a beginner or a seasoned investor, our goal is to empower you with the right insights and disciplined planning for long-term wealth creation.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/img7.jpg" class="img-fluid rounded-4" alt="">
                
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
    <section id="reports" class="about section">
  <div class="container">
    <div class="row gy-4 align-items-stretch">
      
      <!-- Left side: Image -->
      <div class="col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="100">
  <img src="assets/img/about1.jpg" class="img-fluid rounded-4 w-100 h-100" alt="Analytics and Reports" style="object-fit: cover;">
</div>

      
      <!-- Right side: Text content -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <h3 style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Analytics & Reports</h3>
        <p>
          Our analytics and reporting tools empower investors with deep insights into stock performance, market trends, and portfolio dynamics. Whether you're tracking equities, mutual funds, or indices.  
        </p>
        <li><i class="bi bi-check-circle-fill"></i> <span>our real-time reports help you make informed, data-driven investment decisions.</span></li><br>
        <p class="fst-italic">Stay ahead of the market with comprehensive visualizations and curated financial intelligence.</p>
        <!--p class="fst-italic">
          Our approach also prepares you to manage unexpected financial challenges with confidence.
        </p-->
          <div class="mt-4 d-flex flex-column gap-3">
              <a  href="{{ url('/book-appointment') }}"
                 class="btn"
                 style="background-color: #f57c00; color: white; font-weight: 600; border: none;">
                Book an Appointment for Existing Portfolio
              </a>
              <a href="{{ url('/research-report') }}"
                 class="btn"
                 style="background-color: #6c757d; color: white; font-weight: 600; border: none;">
                Access to Research Report
              </a>
            </div>


      </div>

    </div>
  </div>
</section>

<section id="estateplan" class="about section">
  <div class="container">
    <div class="row gy-4 align-items-center">
      
      <!-- Text content: Left on large screens -->
      <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="250">
        <h3 style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Estate Plan</h3>
        <p>
          Your assets — from real estate and investments to personal belongings — are distributed according to your wishes. A well-structured estate plan not only provides clarity and control over your legacy but also minimizes taxes, avoids probate delays, and protects your family’s financial future. Whether you’re planning to pass on a portfolio of stocks or secure a trust for your heirs, early estate planning is key to peace of mind.
        </p>
        <p class="fst-italic">
          Our Estate Planning services are designed to help you safeguard your legacy, provide for future generations,
        </p>
        <ul>
          <li><i class="bi bi-check-circle-fill"></i> <span>Comprehensive assessment of your assets and wealth.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Structuring of tax-efficient wealth transfer mechanisms.</span></li>
        </ul>
      </div>

      <!-- Image: Right on large screens -->
      <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/estate.jpg" class="img-fluid rounded-4" style="width:100%; height:100%; object-fit:cover;" alt="Estate Planning">
      </div>

    </div>
  </div>
</section>




<section id="philonthropy" class="about section">
  <div class="container">
    <div class="row gy-4 align-items-center">
      
      <!-- Left side: Image -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/philo1.jpg" class="img-fluid rounded-4" style="width:100%; height:100%; object-fit:cover;" alt="Analytics and Reports">
      </div>
      
      <!-- Right side: Text content -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <h3 style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Philonthropy</h3>
        <p>
          We believe that sustainable growth is not just about returns — it's about responsibility. Our philanthropic initiatives are rooted in the principle of "creating impact beyond capital." We align with causes that foster financial literacy, education, healthcare, and inclusive development.
        </p>
        <p class="fst-italic">
          Through strategic partnerships and purposeful giving, we aim to uplift underserved communities and contribute to a more equitable future.
        </p>

        <div class="mt-4">
          <a href="#contact" class="btn btn-primary" style="
            background-color: #f57c00;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 16px;
            color: white;
            transition: background-color 0.3s ease;
          " onmouseover="this.style.backgroundColor='#e65100'" onmouseout="this.style.backgroundColor='#f57c00'">
            For Better Understanding
          </a>
        </div>

      </div>
    </div>
  </div>
</section>



<section id="calculator" class="about section">
  <div class="container">
    <div class="row gy-4 align-items-center">
      
      <!-- Text content: Left on large screens -->
      <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="250">
        <h3 style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Calculator</h3>
        <p>
          We believe informed decisions are the foundation of financial success. Our suite of intuitive and precise investment calculators is designed to help investors evaluate, plan, and optimize their financial journey. Whether you're estimating returns, understanding SIP growth, or projecting future wealth — our tools bring clarity to your investment strategy.
        </p>

        <!-- Calculator Buttons -->
        <div class="mb-3">
          <a href="{{ url('/calculators/sip') }}" class="btn btn-primary me-2" style="background-color: #f57c00; border: none; font-weight: 600;">SIP Calculator</a>
          <a href="{{ url('/calculators/retirement') }}" class="btn btn-primary" style="background-color: #3ad6de; border: none; font-weight: 600;">Retirement Calculator</a>
        </div>
      </div>

      <!-- Image: Right on large screens -->
      <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/c1.jpg" class="img-fluid rounded-4" alt="Analytics and Reports" style="width: 100%; max-width: 600px;">
      </div>

    </div>
  </div>
</section>







    

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="723" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="341" data-purecounter-duration="1" class="purecounter"></span>
                <p>Second Opinion</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
                <p>Gift a Smile</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="132" data-purecounter-duration="1" class="purecounter"></span>
                <p>Financially Protected Family</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section >
    <section id="services" class="services section">

      <!-- Section Title >
      <div class="container section-title" data-aos="fade-up">
        <!--h2>Services</h2>
        <p style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Visual Financial Insights<br></p>
      </div><!-- End Section Title >

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#services" class="stretched-link">
                  <!--h3>Nesciunt Mete</h3>
                </a>
                <p>Start early—compound growth rewards patience.</p>
              </div>
            </div>
          </div><!-- End Service Item >

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#services" class="stretched-link">
                  <!--h3>Eosle Commodi</h3>
                </a>
                <p>Think long term: Your home, your future security.</p>
              </div>
            </div>
          </div><!-- End Service Item >

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#services" class="stretched-link">
                  <!--h3>Ledo Markt</h3>
                </a>
                <p>Risk tolerance defines peace of mind.</p>
              </div>
            </div>
          
          

        </div>

      </div>

    </section--><!-- /Services Section -->


    <!--section id="services1" class="services section">

  <!-- Section Title >
  <div class="container section-title" data-aos="fade-up">
    <p style="display:inline-block; border-bottom:3px solid #f57c00; padding-bottom:5px;">Why Choose Us<br></p>
  </div><!-- End Section Title >

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5">

      <!-- Service Item 1 >
      <div class=" col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="img position-relative">
            <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
            <div class="details-overlay">
              <div class="icon mb-2">
                <i class="bi bi-activity"></i>
              </div>
              <p>Personalized, unbiased advice tailored to your life stage</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service Item 2 >
      <div class=" col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="img position-relative">
            <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
            <div class="details-overlay">
              <div class="icon mb-2">
                <i class="bi bi-broadcast"></i>
              </div>
              <p>End-to-end wealth solutions: investment, planning, taxes, estate & more</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service Item 3 >
      <div class=" col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="img position-relative">
            <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
            <div class="details-overlay">
              <div class="icon mb-2">
                <i class="bi bi-easel"></i>
              </div>
              <p>Proactive communication and total transparency</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Service Item 3 >
      <div class=" col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="img position-relative">
            <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
            <div class="details-overlay">
              <div class="icon mb-2">
                <i class="bi bi-easel"></i>
              </div>
              <p>Trusted by families, professionals, NRIs, and entrepreneurs across India and beyond</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Custom CSS >
  <style>
    .service-item {
      overflow: hidden;
      border-radius: 8px;
    }

    .details-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5); /* semi-transparent dark overlay */
      color: #fff;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .service-item:hover .details-overlay {
      opacity: 1;
    }

    .details-overlay .icon i {
      font-size: 32px;
      color: #f57c00;
    }

    .details-overlay p {
      font-size: 16px;
      margin-top: 10px;
    }
  </style>
</section-->


    
    <!-- Contact Section -->
    <<section id="contact" class="contact section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>"Start Your Investment Journey — Reach Out Today"</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-stretch">

      <!-- Left: Contact Info -->
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <div class="info-item d-flex flex-column justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt"></i>
          <h3>Address</h3>
          <p>408,5th Main rd,HRBR Layout 2nd Block, HRBR Layout, Kalyan Nagar, Bengaluru, Karnataka-560043</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+91 9885826890</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>ask@tattvainvestmentadvisory.com</p>
              <p>harika@tattvainvestmentadvisory.com</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Contact Form -->
      <div class="col-lg-6">
        <form action="{{ route('contact.send') }}" method="post" data-aos="fade-up" data-aos-delay="500">
           @csrf
          <input type="hidden" name="_redirect" value="https://harikamkhs.github.io/login-client.html">

          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>
            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" style="
                background-color: #f57c00;
                color: #ffffff;
                border: none;
                padding: 12px 25px;
                border-radius: 6px;
                font-weight: bold;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;"
                onmouseover="this.style.backgroundColor='#e65100'"
                onmouseout="this.style.backgroundColor='#f57c00'">
                Send Message
              </button>
              
              @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
              @endif
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Tattva Capital</span>
          </a>
          <div class="footer-contact pt-3">
            <p>408,5th Main rd,HRBR Layout 2nd Block</p>
            <p> HRBR Layout, Kalyan Nagar, Bengaluru, Karnataka-560043</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+91 9885826890</span></p>
            <p><strong>Email:</strong> <span>ask@tattvainvestmentadvisory.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#features">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services-2">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#coming-soon.html">Careers</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#about1">Investment Advisory</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about2">Analytics & Reports</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about3">Estate Plan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about4">Philonthropy</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about5">Calculator</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
  <h4>Get In Touch</h4>
  <p>Have a question or need support? We're just an email away. Let's talk!</p>

  <!-- Contact Button -->
  <a href="/contact" class="btn" style="
    background-color: var(--accent-color);
    color: var(--contrast-color);
    padding: 10px 25px;
    border-radius: 4px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 20px;
  ">Contact Us</a>

  <!-- Email Form -->
  <form action="forms/newsletter.php" method="post" class="php-email-form">
    <div class="newsletter-form">
      <input type="email" name="email" placeholder="Enter your email" required>
      <input type="submit" value="Submit">
    </div>
    <div class="loading">Loading</div>
    <div class="error-message"></div>
    <div class="sent-message">Thank you! We'll be in touch soon.</div>
  </form>
</div>


      </div>
    </div>

    <!--div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dewi</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] >
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div-->

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  function navigateTo(sectionId, hash) {
  const section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: 'smooth' });
    history.pushState(null, '', `#${hash}`);
  }
}

 window.addEventListener('DOMContentLoaded', function () {
  const hash = window.location.hash.replace('#', '');
  const map = {
    'home': 'hero',
    'aboutus': 'features',
    'services': 'services-2',
    'contact': 'contact',
    'investmentadvisory': 'investmentadvisory',
    'analytics': 'reports',
    'estateplan': 'estateplan',
    'philonthropy': 'philonthropy',
    'calculator': 'calculator'
  };

  if (map[hash]) {
    const section = document.getElementById(map[hash]);
    if (section) {
      setTimeout(() => {
        section.scrollIntoView({ behavior: 'smooth' });
      }, 300);
    }
  }
});
</script>



</body>

</html>