 
    <section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>Generate Invoice for Students</h1>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="<?= base_url(); ?>Mycontroller/addinvoicedo" enctype="multipart/form-data">
                    <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>

                  <div class="form-group">

                  <label for="fullname" class="control-label col-lg-2">ADD COURSE <span class="required">*</span></label>
                  
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
                  
                  <label for="fullname" class="control-label col-lg-2">ADD STUDENT <span class="required">*</span></label>

                  <select class="btn btn-success" id="cars" name="cat">
                  <?php
                  foreach($records as $r)
                  {
                  ?>
                  <option value="<?php echo $r->student_id;?>"><?php echo $r->name;?></option>
                  <?php
                  }
                  ?>
                  </select>  
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Add Invoice Number <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="invoice_no" type="text" required/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Due-Date <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="due_date" type="date" required/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Particular <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="particular" type="text" required/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">SAC Code <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="sac_code" type="text" required/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Rate <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="rate" type="text" required/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Enter Amount <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="amount" onchange="calculateAmount(this.value)" type="text" required/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Total Amount after tax <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control"  name="total_amount" id="tot_amount"  type="text" readonly/>
                      </div>
                  </div>

                  <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Tax Amount <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control"  name="tax_amount" id="tot_amount1"  type="text" readonly/>
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
  
<script>
            function calculateAmount(val) {
                var price = val * 1;
                //display the result
                var tot_price = price + (price * 0.18);
                var tot_price1 = price * 0.18;

                var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
                var divobj = document.getElementById('tot_amount1');
                divobj.value = tot_price1;
            }
        </script>

</body>

</html>

