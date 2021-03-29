<section id="main-content">
  <section class="wrapper">
   <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  <h1>Update Student Details</h1>
                </header>
                <div class="panel-body">
                  <div class="form">
                    <?php
                    foreach($records as $r)
                    {
                    ?>
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?= base_url(); ?>Mycontroller/updatedostudent">
                      <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input class="form-control" id="cname" name="name" value="<?php echo $r->name ;?>" minlength="5" type="text" required />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input class="form-control " id="cemail" type="email" name="email" value="<?php echo $r->email ;?>" required />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="curl" class="control-label col-lg-2">Phone</label>
                        <div class="col-lg-10">
                          <input class="form-control " id="curl" type="number" name="phone" value="<?php echo $r->phone ;?>" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <input type="hidden" name="student_id" value="<?php echo $r->student_id;?>">
                          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </section>
            </div>
   </div>
         <div class="text-right">
  </section>
</section>
