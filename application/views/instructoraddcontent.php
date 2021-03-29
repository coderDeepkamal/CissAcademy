    <section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>ADD CONTENT</h1>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="<?= base_url(); ?>Mycontroller/instructoraddcontentdo" enctype="multipart/form-data">
                    <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>

                  <div class="form-group">
                  
                  <select class="btn btn-success" id="cars" name="cat_id">
                  <?php
                  foreach($records2 as $r2)
                  {
                  ?>
                  <option value="<?php echo $r2->course_id;?>"><?php echo $r2->course_name;?></option>
                   <?php
                  }
                  ?>
                  </select> 
                     
                  </div>

                  <div class="form-group">
                  
                  <select class="btn btn-success" id="cars" name="cat">
                  <?php
                  foreach($records as $r)
                  {
                  ?>
                  <option value="<?php echo $r->module_id;?>"><?php echo $r->module_name;?></option>
                   <?php
                  }
                  ?>
                  </select> 
                     
                  </div>
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">ADD Content <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="file" type="file" required/>
                      </div>
                    </div>
                    <tr>
                      <td rowspan="2">Check</td>  
                          <td><input type="radio" name="status" value="1" required/>video</td><tr>  
                          <td><input type="radio" name="status" value="0" required/>File</td></tr>  
                      </tr>
                      
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
        <!-- page end-->
      
    <!--main content end-->
   
  <!-- container section end -->

  <!-- javascripts -->
  


</body>

</html>

