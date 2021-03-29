<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>ADD COURSE</h1>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="<?= base_url(); ?>Mycontroller/instructoraddcoursedo" enctype="multipart/form-data">
                    <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Course Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="course_name" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="description" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Duration <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="duration" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="course_price" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Thumbnail <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="file" type="file" required/>
                      </div>
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
    </section>
</section>
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

  
