<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jeanine Hemingway CPA, PC - Contact</title>
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
  <?php 
    //DB Connection
    $connection = mysqli_connect("localhost","root","","cpa");
  ?>
</head>
<body class="page-contact">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Jeanine Hemingway CPA, PC</h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
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
          <li><a href="contact.html" class="active">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div>
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>
                  8700 Manchaca Rd. Suite #304
                  Austin, TX 78748-5374
                </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>
                  <a href="mailto:%20info@jeaninecpa.com?subject=Mail%20from%20Our%20Site">info@jeaninecpa.com</a>
                </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>
                  <a href="tel:5122919955">(512) 291-9955</a>
                </p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form method="post" enctype="multipart/form-data" role="form" class="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <?php                
                //DB Insert Logic
                if (isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    
                    $insert_query = "INSERT INTO contact_form (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
                    $insert = mysqli_query($connection,$insert_query);
                    
                    if ($insert){
                        ?>
                        
                        <div class="sent-message text-success">Your message has been sent. Thank you!</div>
                        
                        <?php
                    }
                }
                ?>
                
              </div>
              <div class="text-center">
                <input type="submit" name="submit" value="submit">
                <!-- <button type="submit" name="submit" id="submit">Send Message</button> -->
            </div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
  </main>
  <footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Jeanine Hemingway CPA, PC</span>
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