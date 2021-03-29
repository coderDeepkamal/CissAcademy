<style>
  .courses{
    padding-left: 0px;
  }
</style>
  <link href="<?= base_url();?>assets2/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>assets2/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>assets2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets2/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets2/<?= base_url();?>assets2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url();?>assets2/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets2/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
 <link href="<?= base_url();?>assets2/assets/css/style.css" rel="stylesheet">

 <section id="main-content">
  
 <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
      </div>
    </div><!-- End Breadcrumbs -->

   

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
             
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <?php
    foreach($records as $r)
    {
      if($r->student_id==$this->session->userdata('student_id'))
      { 
    ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <a href="<?php echo base_url();?>Mycontroller/studentviewmodule/<?php echo $r->course_id;?>"><img src="<?php echo base_url();?>upload/courses/<?php echo $r->thumbnail;?>" style="width: 400px; height:200px;" class="img-fluid" alt="..."></a>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo $r->course_name;?></h4>
                  <p class="price"><?php echo $r->course_price;?></p>
                </div>

                <h3><a href="<?php echo base_url();?>Mycontroller/studentviewmodule/<?php echo $r->course_id;?>"><?php echo $r->course_name;?></a></h3>
                <p><?php echo $r->description;?>.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php
           }
          }
          ?>
        </div>
           
      </div>
    </section><!-- End Courses Section -->
  </main>
</section>
    

  

 