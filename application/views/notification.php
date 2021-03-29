    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>Student Details</h1>
              </header>

              <table id="example"class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i></i>ID</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_mobile"></i> Phone</th>       
                    <th><i class="icon_cogs"></i> Action</th>
                    <th><i class="icon_cogs"></i> Status</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php
                  foreach($records as $r)
                  {
                  ?>
                  <tr>
                    <td><?php echo "$r->student_id";?></td>
                    <td><?php echo "$r->name";?></td>
                    <td><?php echo "$r->email";?></td>
                    <td><?php echo "$r->phone";?></td>
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-danger" href="<?php echo base_url();?>Mycontroller/deletestudentnotification/<?php echo $r->student_id;?>" onclick='return checkdelete()'><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                    <td>
                    <?php
                    $status = $r->isapprove;
                    if($status == 1)
                    {
                    ?>
                    <a href="<?php echo base_url();?>Mycontroller/update_status/<?php echo $r->student_id;?>/<?php echo $r->isapprove;?>" class="btn btn-success">Approve</a>
                    <?php
                    }
                    else{
                      ?>
                      <a href="<?php echo base_url();?>Mycontroller/update_status/<?php echo $r->student_id;?>/<?php echo $r->isapprove;?>" class="btn btn-danger">Disapproved</a>
                    <?php 
                    }
                    ?>
                  </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              
              </table>
              <?= $this->pagination->create_links();?>
            </section>
          </div>
        </div>
   <!-- container section start -->

  <!-- javascripts -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url(); ?>assets/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url(); ?>assets/js/calendar-custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/xcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/gdp-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sparklines.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/charts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
    
      
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <script>
    function checkdelete(){
      return confirm('Do you want to delete this?');
    }
  </script>

</body>

</html>
