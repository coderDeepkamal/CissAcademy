<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

  <title>STUDENT-Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url(); ?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
  <!-- <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet"> -->
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css">
  <link href="<?php echo base_url(); ?>assets/css/widgets.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo">CISS Academy</a>
      <!--logo end-->

      

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <!-- alert notification start-->
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url(); ?>assets/img/admin1.jpg">
                            </span>
                            <span class="username"><?= $this->session->userdata('email'); ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="<?= base_url();?>Mycontroller/studentprofile/<?=$this->session->userdata('student_id');?>"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="<?= base_url(); ?>Mycontroller/studentlogout"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?= base_url(); ?>Mycontroller/studentdashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="<?= base_url();?>Mycontroller/sviewcourse/" class="">
                          <i class="icon_desktop"></i>
                          <span>All Courses</span>
                      </a>
          </li>
          

          <li class="sub-menu">
            <a href="<?= base_url();?>Mycontroller/studentchat/" class="">
                          <i class="icon_table"></i>
                          <span>Messages</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>View Invoice</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url();?>Mycontroller/viewstudentinvoice/<?=$this->session->userdata('student_id');?>">View Invoice</a></li>
              <li><a class="" href="<?= base_url();?>Mycontroller/pdfstudentinvoice/<?=$this->session->userdata('student_id');?>">Download Invoice</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="<?= base_url();?>Mycontroller/viewstudentcertificate/<?=$this->session->userdata('student_id');?>" class="">
                          <i class="icon_table"></i>
                          <span>View Certificate</span>
                      </a>
          </li>

          

          <li class="sub-menu">
            <a href="<?= base_url(); ?>Mycontroller/studentenrollhistory" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Enroll History</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            
          </li>

          <li class="sub-menu">
            <a href="<?= base_url(); ?>Mycontroller/studentviewresult" class="">
                          <i class="icon_documents_alt"></i>
                          <span>View Result</span>
                      </a>
          </li>

          
          
          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->