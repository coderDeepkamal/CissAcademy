<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Academy</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets2/assets/img/cisslogo.png" rel="icon">
  <link href="<?= base_url(); ?>assets2/assets/img/cisslogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets2/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  .move{
    float:left;
    margin-right: 265px;
    position:fixed;
  }
  .mr-auto{
    color:black;
  }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
     <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?= base_url(); ?>Mycontroller" class="logo1 mr-auto"><img src="<?= base_url(); ?>assets2/assets/img/ciss-academy_logo.png" alt="" class="img-fluid"></a>
      <div class="move"><h1><a href="<?= base_url(); ?>Mycontroller" class="logo2 mr-auto">CISS Academy</a></h1></div>

      <a href="#" class="logo"><img src="<?= base_url(); ?>assets2/assets/img/easylogo.jpeg" alt="" class="img-fluid"></a>
      <h1><a href="#" class="logo mr-auto">SISPA, RSU</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url(); ?>Mycontroller">Home</a></li>
          <li><a href="<?= base_url(); ?>Mycontroller/about">About</a></li>
          <li class="active"><a href="<?= base_url(); ?>Mycontroller/allcourses">Courses</a></li>
          <li class="drop-down"><a href="">Login</a>
            <ul>
              <li><a href="<?= base_url(); ?>Mycontroller/studentlogin">Student</a></li>
              <li><a href="<?= base_url(); ?>Mycontroller/instructorlogin">Instructor</a></li>
              <li><a href="<?= base_url(); ?>Mycontroller/adminlogin">Admin</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url(); ?>Mycontroller/contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?= base_url(); ?>Mycontroller/studentlogin" class="get-started-btn">Get Started</a>

    </div>
  </header>
  <!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>To skill, reskill and upskill employed Private Security Personnel & other job seeking aspirants move up the skill value chain thereby enabling better placement & income earning opportunities via short online interventions, leveraging knowledge and expertise of practitioners and academia.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p style="text-align:center">Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?= base_url();?>assets2/assets/img/Picture6.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Unarmed Security Guard</h4>
                  <p class="price">Rs. 3,000/-</p>
                </div>

                <h3><a href="course-details.html">Unarmed Security Guard</a></h3>
                <p>This program is aimed at training candidates for the job of a “Unarmed Security Guard”, in the “Management & Entrepreneurship and Professional Skills” Sector/Industry and aims at building the following key competencies amongst the learner.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="<?= base_url();?>assets2/assets/img/Picture5.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security Supervisor</h4>
                  <p class="price">Rs. 6,000/-</p>
                </div>

                <h3><a href="course-details.html">Security Supervisor</a></h3>
                <p>This program is aimed at training candidates for the job of a “Security Supervisor”, in the “Management & Entrepreneurship and Professional Skills” Sector/Industry and aims at building the following key competencies amongst the learner.
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="<?= base_url();?>assets2/assets/img/Picture4.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Field Officer</h4>
                  <p class="price">Rs. 6,000/-</p>
                </div>

                <h3><a href="course-details.html">Field Officer</a></h3>
                <p>This program is aimed at training candidates for the job of a “Field Officer” in the private security industry/Sector and aims at building the key competencies amongst the learner.
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section>
    <!-- End Courses Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CISS Academy For Skill Human Development Pvt Ltd</h3>
            <p>
              <strong>Campus:</strong>Piplaj, Gandhinagar Gujarat (382610) <br>
              <strong>Registered Office:</strong> 405, Cosmos Plaza, Near D N Nagar Metro Station,Andheri (West), Mumbai. 400058<br>
              <strong>Phone:</strong>+91 9978925167<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9978925183<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9825464384<br>
              <strong>Email:</strong> ciss.skills@cissindia.co.in<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h3>Useful Links</h3>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>Mycontroller">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>Mycontroller/allcourses">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>Mycontroller/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>School Of Internal Security & Police Administration </h3>
            <p>
              Raksha Shakti University<br>
              Lavad, Dehgam, Gandhinagar Gujarat
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h3>Join Our Newsletter</h3>
            <p>We request you to kindly subscribe to our skills training magazine</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>CISS</span></strong>
        </div>
        <div class="credits">
          Designed by <a href="https://tridentdigitech.com.com/">Trident Ventures</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/CISSINDIA" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/CISS-113549760509862/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/ciss_pvt_ltd/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCI9yTEKd-h0t-faPBxxR46g" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets2/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>assets2/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets2/assets/js/main.js"></script>

</body>

</html>