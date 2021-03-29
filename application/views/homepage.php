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
  .video-background{
    position: relative;
    width: 100%;
    min-height: 100vh;  
  }
  
  .video-wrap{
    position: absolute;
    width:100%;
    overflow: hidden;
  }
  
  video{
    width: 100%;
    overflow-x: hidden;
      right: 0;
        left: 0;
  }
  
  .caption{
    position: absolute;
    top: 75%;
    display: flex;  
  }
  #video {  
    max-width: 100%;
    height: auto;  
}
</style>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
     <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo1 mr-auto"><img src="<?= base_url(); ?>assets2/assets/img/ciss-academy_logo.png" alt="" class="img-fluid"></a>
      <div class="move">
        <h1><a href="<?= base_url(); ?>Mycontroller" class="logo2 mr-auto">CISS Academy</a></h1>
      </div>

      <a style="float:left;" href="<?= base_url(); ?>Mycontroller" class="logo"><img src="<?= base_url(); ?>assets2/assets/img/easylogo.jpeg" alt="" class="img-fluid"></a>
      <h1 style="float:left;"><a href="<?= base_url(); ?>Mycontroller" class="logo mr-auto">SISPA, RSU</a></h1>
      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url(); ?>Mycontroller">Home</a></li>
          <li><a href="<?= base_url(); ?>Mycontroller/about">About</a></li>
          <li><a href="<?= base_url(); ?>Mycontroller/allcourses">Courses</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    
          <video id="bgvid" autoplay loop muted playsinline>
              <source src="<?= base_url(); ?>assets2/assets/img/parade-video.mp4" type="video/mp4">
          </video>
        

    <div class="caption text-center">
      <h1 style="color: white; font-size: 3rem; font-weight: 700;
      letter-spacing: .2rem;
      text-shadow: .1rem .1rem .8rem black; background-color: #FFD700; " >
      <span class="animate"></span>
      </h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
         <br>
          <p style="text-align:center;">About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?= base_url(); ?>assets2/assets/img/aboutnew.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p style="text-align:justify;">CISS  Academy is  a fully owned subsidiary  of  CISS  Limited,  an  integrated  total security  services  providing company.
            </p>
            <p style="text-align:justify;">
            CISS  Academy E-learning  
            Portal  is  the result  of  an  unique  affiliation  of  CISS  Academy with  The School  of  Internal  Security  and Police  AdministraHon  (SISPA)  at  Raksh 
            ShakH University  (RSU),  Gandhinagar Gujarat.  
            </p>
            <ul style="text-align:justify;">
              <li><i class="icofont-check-circled"></i> CISS   Academy   For   Skill   Human   Development   Pvt   Ltd</li>
              <li><i class="icofont-check-circled"></i> The School  of  Internal  Security  and Police  AdministraEon (SISPA) </li> 
            </ul>
            <p style="text-align:justify;">
              The academic  program are aligned  to  standardized QPs and NOSs   spanning  skill  knowledge domains 
              from  high  school  class 8<sup>th</sup> to  post  graduation level,  further valuably  accredited  and certified  by  the SISPA (RSU) 
            </p>
            <a href="<?= base_url(); ?>Mycontroller/about" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">650</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">42</span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content"><br><br>
              <h3>Why Choose CISS ACADEMY?</h3><br><br>
              <p style="text-align:left;">
                CISS  Academy offers  skill training  for Total Security  Solutions  based on  360 
                view  of  visible & invisible threats lurking in  your  OrganizaHon.<br><br>  
                <i class="icofont-check-circled"></i> CISS  Academy positions  itself  as  an  ambidextrous  research  driven  & risk  
                mitigation  security  training  academy. <br><br> 
                <i class="icofont-check-circled"></i> CISS  Academy co-creates  value using best  practices.<br><br> 
                <i class="icofont-check-circled"></i> CISS  Academy provides  a 3<sup>rd</sup> party training  ecosystem supporting the knowledge and skill delivery  of  security  services  & electronic  systems. 
                
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4 style="text-align:left;">Deep Research & Specialized Knowledge In Security Sector</h4>
                    <p style="text-align:left;">
                        CISS Academy offers highly researched and customized security knowledge and skill training program for every market segment. Resources are trained for across segments from educational institutes, military base, cement plants to banks, from Refineries to ATMs,
                      
                       from metro rail Infrastructure
                       projects to corporate offices,
                       from hotels to  
                       hospitals etc all. </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4 style="text-align:left;">Most Preferred Security Training  
                        Provider </h4>
                    <p style="text-align:left;"> 
                    CISS Academy 
                        philosophy of crashing costeffective, well deliberated 
                        security training solutions and 
                        our reliability makes us the most  
                        preferred security training  
                        service provider with some  
                        clients having retained us for 
                        over 25- 33 years. Qualified and professional  
                        guards, our trained guards are 
                        professionally qualified to meet  
                        the exacting service needs at  
                        your premises.  </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4 style="text-align:justify;">Deeply customized 360º Security  
                        Training Provider </h4>
                    <p style="text-align:left;">We  create  a 
                       unique  training  program for your  
                       organizaHon based on  your  
                       organizaHon’s budget  and 
                       requirements.Qualified  and professional  
                       faculty;  Our highly  qualified and 
                       knowledgeable trainers  and 
                       educators meet  the exacHng 
                       service needs at  your  premises. </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    
    <!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <br>
          <p style="text-align:center;">Popular Courses</p>
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
                <p style="text-align:left;">This program is aimed at training candidates for the job of a “Unarmed Security Guard”, in the “Management & Entrepreneurship and Professional Skills” Sector/Industry and aims at building the following key competencies amongst the learner.</p>
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
                <p style="text-align:left;">This program is aimed at training candidates for the job of a “Security Supervisor”, in the “Management & Entrepreneurship and Professional Skills” Sector/Industry and aims at building the following key competencies amongst the learner.</p>       
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
                <p style="text-align:left;">This program is aimed at training candidates for the job of a “Field Officer” in the private security industry/Sector and aims at building the key competencies amongst the learner.
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section>
    <!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    
    <!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CISS Academy For Skill Human Development Pvt Ltd</h3>
            <p><br><br>
              <strong>Campus:</strong>Piplaj, Gandhinagar Gujarat (382610) <br>
              <strong>Registered Office:</strong> 405, Cosmos Plaza, Near D N Nagar Metro Station,Andheri (West), Mumbai. 400058<br>
              <strong>Phone:</strong>+91 9978925167<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9978925183<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 9825464384<br>
              <strong>Email:</strong> ciss.skills@cissindia.co.in<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
             <h3>School Of Internal Security & Police Administration,  Raksha Shakti University </h3>
            <p>
             <br>
              <strong>Campus:</strong>Lavad, Dehgam, Gandhinagar Gujarat
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Useful Links</h3>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>Mycontroller">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>Mycontroller/allcourses">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>Mycontroller/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
           
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
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
          Designed by <a href="https://tridentdigitech.com/">Trident Ventures</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/CISSINDIA" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/CISS-113549760509862/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/ciss_academy/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
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
  <script>
  var typed = new Typed('.animate', {
  strings: [
  "Learning Today",
  "Leading Tomorrow",
  "CISS ACADEMY",
  "Online Courses"
  ],
  typeSpeed: 200,
  backSpeed: 200,
  loop: true 
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>