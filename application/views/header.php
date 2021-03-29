<?php
  ob_start();       
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

  <title>ADMIN-Dashboard</title>

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
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">2</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have new notifications</p>
              </li>
              <li>
                <a href="<?= base_url();?>Mycontroller/studentnotification">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Student Request
                                </a>
              </li>
              <li>
                <a href="<?= base_url();?>Mycontroller/instructornotification">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    Instructor Request
                                </a>
              </li>
              <li>
                <a href="<?= base_url();?>Mycontroller/accountantnotification">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    Accountant Request
                                </a>
              </li>
            </ul>
          </li>
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
                <a href="<?= base_url();?>Mycontroller/updateadminprofile/<?=$this->session->userdata('id');?>"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="<?= base_url(); ?>Mycontroller/adminlogout"><i class="icon_key_alt"></i> Log Out</a>
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
            <a class="" href="<?= base_url(); ?>Mycontroller/adminview">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Courses</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url();?>Mycontroller/aviewcourse">View Course</a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/addcourse">Add Course</a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/addmodule">Add Module</a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/addcontent">Add Content</a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/course">View Module</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Live Class</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Test</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url(); ?>Questions/addquiz">Add Test</a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/viewresult">View Result</a></li>           
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Instructors</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url();?>Mycontroller/instructorlist">Instructor List</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="<?= base_url();?>Mycontroller/studentlist" class="">
                          <i class="icon_table"></i>
                          <span>Student</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_table"></i>
                          <span>Certificate</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url();?>Mycontroller/addcertificate">Add Certificate</a></li>
              <li><a class="" href="<?= base_url();?>Mycontroller/viewcertificate">View Certificate</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Invoice</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url();?>Mycontroller/viewinvoice">View Invoice</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Enrollment</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url(); ?>Mycontroller/enrollhistory">Enroll History</a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/enrollment"><span>Enroll a Student </span></a></li>
              <li><a class="" href="<?= base_url(); ?>Mycontroller/instructorenrollment"><span>Enroll an Instructor </span></a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Report</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#">Admin Revenue</a></li>
              <li><a class="" href="#"><span>Instructor Revenue </span></a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="<?= base_url(); ?>Mycontroller/chat" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Message</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="<?= base_url();?>Mycontroller/updateadminprofile/<?=$this->session->userdata('id');?>" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Manage Profile</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->