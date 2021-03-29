    <section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>ENROLL INSTRUCTOR</h1>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="<?= base_url(); ?>Mycontroller/instructordoenrollment" enctype="multipart/form-data">
                    <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>

                  <div class="form-group">
                    <label for="fullname" class="control-label col-lg-2">Instructor Name <span class="required">*</span></label>
                  <select class="btn btn-success" id="cars" name="instructor">
                  <?php
                  foreach($records2 as $r2)
                  {
                  ?>
                  <option value="<?php echo $r2->id;?>"><?php echo $r2->name;?></option>

                  <?php
                  }
                  ?>
                  </select> 
                  
                  </div>
                  
                  <div class="form-group">
                    <label for="fullname" class="control-label col-lg-2">Course Name <span class="required">*</span></label>
                  <select class="btn btn-success" id="cars" name="course">
                  <?php
                  foreach($records as $r)
                  {
                  ?>
                  <option value="<?php echo $r->course_id;?>"><?php echo $r->course_name;?></option>

                  <?php
                  }
                  ?>
                  </select> 
                  
                  </div>
                   
                      
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://tridentdigitech.com.com/">Trident Ventures</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  


</body>

</html>
