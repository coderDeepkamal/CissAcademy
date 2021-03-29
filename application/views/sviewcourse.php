<body>
<div id="page-wrapper">
      <div class="main-page">
        <div class="tables">
          <h3 class="title1">VIEW COURSE</h3>
          <!-- <div class="panel-body widget-shadow"> -->
            <div class="alert alert-success" style="display: none;">
              
            </div>
            <div class="table-responsive bs-example widget-shadow">
            

              <table id="example2" class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th> Course Name</th>
                    <th> Description</th>
                    <th> Duration</th>
                    <th> Price</th>       
                    <th> Module Name</th>
                  </tr>
                </thead>
                <?php
                  foreach($records as $r)
                  {
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo "$r->course_name";?></td>
                    <td><?php echo "$r->description";?></td>
                    <td><?php echo "$r->duration";?></td>
                    <td><?php echo "$r->course_price";?></td>
                    <td><?php echo "$r->module_name";?></td>
                  </tr>
                </tbody>
              <?php
              }
              ?>
               </table>
            </div>
        <!-- </div> -->
      </div>
    </div>
  </div>



<!-- Classie -->
    <script src="<?php echo base_url(); ?>assets1/js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      
      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->
  <script src="<?php echo base_url(); ?>assets1/js/jquery.nicescroll.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url(); ?>assets1/js/bootstrap.js"> </script>
</body>
</html>