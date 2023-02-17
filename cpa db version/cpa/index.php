<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include("admin/con.php");
  ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
    <?php
        //Company Name 
        echo $home_page['company_name'];
    ?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  
</head>
<body class="page-index">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">
        <?php
          //Heading Title as logo 
            echo $home_page['company_name'];
          ?>
        </h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="" class="active">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="team.html">Team</a></li>
          <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="#">Knowledge Base</a></li>
            </ul>
          </li>
          <li><a href="careers.html">Careers</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">
            <?php
                //Main Heading 
                echo $home_page['main_heading'];
            ?>
          </h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>
                <?php
                    //Main Paragraph 
                    echo $home_page['main_paragraph'];
                ?>
            </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="about.html" class="btn-get-started">
                <?php
                    //Main Button text
                    echo $home_page['main_button'];
                ?>
              </a>
            
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Why Choose Us</h2>
        </div>
        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">
            <div class="slides-1 swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Bussiness Accounting Services</h3>
                    <h4 class="mb-3">Timely and accurate financial reporting, accounting, and bookkeeping practices ensure that your business operations will run efficiently and are the foundation of any successful business.</h4>
                    <p>
                      Our team has the knowledge and skills needed to help you better manage the financial health of your business and simplify your bookkeeping.  You’ll receive monthly and quarterly reports on your accounting, bookkeeping, and taxes and know exactly where you stand financially on a recurring basis.
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Bookkeeping</h3>
                    <h4 class="mb-3">Are you running the business or is your business running you?</h4>
                    <p>
                      We will work both for you and with you to set up a system that is easy to manage, efficient, and tailored to your unique situation. Our accounting services will be customized to fit both your current and future businesses goals.  Additionally, we offer the convenience of bookkeeping services at your site or at ours.
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Individual Taxes</h3>
                    <h4 class="mb-3">Jeanine Hemingway CPA provides a variety of tax-related consulting services to families, trusts, and individuals. </h4>
                    <p>Our tax experts provide projections and specific tax planning advice to help you maximize your tax refund by taking advantage of all tax deductions eligible to you.  The tax laws are complex and change every year.  Working with our team provides you access to professional service, expert advice, and a secure client portal to safely exchange financial information.</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Tax Preparation</h3>
                    <h4 class="mb-3">Preparing your own tax return can be extremely difficult with today’s complex tax laws and the constant changes to regulations and legislation. </h4>
                    <p>
                      At Jeanine Hemingway, CPA we have the expertise that is needed to help you file your returns while also helping you to minimize your tax liability with careful planning.
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </section>
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Services</h2>
        </div>
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="service-bussiness.html" class="stretched-link">Bussiness Accounting</a></h4>
              <p class="description">Timely and accurate financial reporting, accounting, and bookkeeping practices ensure that your business operations will run efficiently and are the foundation of any successful business.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="service-bookkeeping.html" class="stretched-link">Bookkeeping</a></h4>
              <p class="description">
                Our accounting services will be customized to fit both your current and future businesses goals.  Additionally, we offer the convenience of bookkeeping services at your site or at ours.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="service-individual.html" class="stretched-link">Individual Taxes</a></h4>
              <p class="description">
                We can help you explore your tax-saving opportunities and develop your tax strategy. Drawing on multidisciplinary expertise, we provide you with customized guidance to fit your situation so that your tax strategy aligns with your financial framework.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="service-taxpreparation.html" class="stretched-link">Tax Preparation</a></h4>
              <p class="description">
                Preparing your own tax return can be extremely difficult with today’s complex tax laws and the constant changes to regulations and legislation.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="service-taxplanning.html" class="stretched-link">Tax Planning</a></h4>
              <p class="description">
                Proactive planning is the key to successfully reducing your potential tax liability.  Our approach goes far beyond a year-end task. Throughout the year, our tax experts look for ways to minimize your tax liability and recommend tax-saving strategies that maximize after-tax income.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Schedule A Consultation With A Highly Experienced Local CPA!</h3>
            <!--
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            -->
            <a class="cta-btn" href="clients.html">Click to Book Today</a>
          </div>
        </div>

      </div>
    </section>
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Recent Blog Posts</h2>
        </div>
        <div class="row gy-5">
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, November 18</span>
                <span class="post-author"> / Jeanine Hemingway CPA</span>
              </div>
              <h3 class="post-title">Tax Strategies Checklist</h3>
              <p>Now’s the time to take advantage of year-end moves to cut your next tax bill—before it’stoo late....</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, October 18</span>
                <span class="post-author"> / Jeanine Hemingway CPA</span>
              </div>
              <h3 class="post-title">Year-End Tax Planning: Ten Outside-of-the-box Tips for Your Business</h3>
              <p>It may seem early to talk about year-end tax planning, but with only roughly sixty days left in...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.png" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Thu, September 8</span>
                <span class="post-author">/ Jeanine Hemingway CPA</span>
              </div>
              <h3 class="post-title">The Inflation Reduction Act: What it Means to Your Business</h3>
              <p>You may have heard that President Biden recently signed the Inflation Reduction Act of 2022, a...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-4.png" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, June 7</span>
                <span class="post-author">/ Jeanine Hemingway CPA</span>
              </div>
              <h3 class="post-title">Estimated Quarterly Taxes: What You Need To Know</h3>
              <p>Are you familiar with the First-Time Homebuyer Tax Credit?  This tax credit, (as of June...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <span>
                <?php
                    //Company Name 
                    echo $home_page['company_name'];
                ?>
              </span>
            </a>
            <p>
              We respect your privacy 100%, so the information that you provide will remain strictly confidential. Nevertheless, a copy of your message might be stored in our records as a secure database entry for archival purposes.
            </p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="index.html">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="about.html">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="services.html">Services</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Client Document Portal</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Payment Portal</a></li>
              <li><i class="bi bi-dash"></i> <a href="clients.html">Book Appointment</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="service-bussiness.html">Bussiness Accounting</a></li>
              <li><i class="bi bi-dash"></i> <a href="service-bookkeeping.html">Bookkeeping</a></li>
              <li><i class="bi bi-dash"></i> <a href="service-individual.html">Individual Taxes</a></li>
              <li><i class="bi bi-dash"></i> <a href="service-taxpreparation.html">Tax Preparation</a></li>
              <li><i class="bi bi-dash"></i> <a href="service-taxplanning.html">Tax Planning</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jeanine Hemingway CPA, PC <br>
              8700 Manchaca Rd. Suite #304 <br>
              Austin, TX 78748-5374<br>
              United States <br><br>
              <strong>Phone: </strong><a href="tel:5122919955">(512) 291-9955</a><br>
              <strong>Email: </strong><a href="mailto:%20info@jeaninecpa.com?subject=Mail%20from%20Our%20Site">info@jeaninecpa.com</a><br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Jeanine Hemingway</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by SiteMaker
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>