<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jeanine Hemingway CPA, PC - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <?php 
    include("con.php");  

            
  ?>
</head>
<body class="page-contact">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
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
          <li><a href="index.php">Dashboard</a></li>  
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
        </ul>
      </nav>
    </div>
  </header>
  <main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Dashboard</h2>
        <ol>
          <li><a href="index.php">Dashboard</a></li>
          <li>Home</li>
        </ol>

      </div>
    </div>
    <section id="contact-form_data" class="contact-form_data">
      <div class="container position-relative" data-aos="fade-up">
        <div class="section-header">
          <h2>Home Page</h2>
        </div>
        <div class="row gy-4 d-flex justify-content-end">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="250">

                <form method="post" enctype="multipart/form-data" role="form" class="">
                    <div class="row">
                        <!-- Main Heading Input -->
                        <div class="col-md-5 form-group mt-3 mt-md-0">
                            <label for="main_heading">Main Heading</label>
                            <input type="text" class="form-control" name="main_heading" id="main_heading" placeholder="Main Heading" 
                            value="<?php echo $home_page['main_heading'];?>"
                            required>
                        </div>
                        <!-- Main Button Input -->
                        <div class="col-md-5 form-group mt-3 mt-md-0">
                            <label for="main_heading">Main Button</label>
                            <input type="text" class="form-control" name="main_button" id="main_button" placeholder="Main Button" 
                            value="<?php echo $home_page['main_button'];?>"
                            required>
                        </div>
                    </div>
                    <div class="row form-group mt-3">
                        <!-- Main Paragraph Input -->
                        <div class="col-md-10 form-group">
                          <label class="" for="main_paragraph">Main Paragraph</label>  
                          <textarea type="text" rows="5" name="main_paragraph" class="form-control" id="main_paragraph" placeholder="Main Paragraph" required><?php 
                            echo $home_page['main_paragraph'];
                          ?></textarea>
                        </div>
                    </div>
                    <div class="my-3">
                        <?php
                          //Fetching Form Posted Data and storing in db
                          if(isset($_POST['update'])){
                            $mainHeading = $_POST['main_heading'];
                            $mainParagraph = $_POST['main_paragraph'];
                            $mainButton = $_POST['main_button'];
                            $updateHomePage = homePageUpdate($connection,$mainHeading,$mainParagraph,$mainButton);                            
                            if ($updateHomePage){
                                ?>
                                
                                <div class="sent-message text-success" id="msg-succes">Contect Updated Check <a target="_blank" href="../index.php">Home Page!</a></div>
                                
                                <?php
                            }
                          }                        
                        ?>                        
                    </div>
                    <div class="text-center col-md-10">
                        <input class="btn btn-primary" style="width:8rem;" type="submit" name="update" value="Update">
                        
                        <a href="" class="btn btn-primary ms-3" style="width:8rem;"  type="reset" value="Reload" >Reload</a>
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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/main.js"></script>

</body>
</html>