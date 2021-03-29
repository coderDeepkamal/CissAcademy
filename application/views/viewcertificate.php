<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>Certificate Details</h1>
              </header>

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i></i>ID</th>
                    <th><i class="icon_profile"></i> Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_mobile"></i> Phone</th>       
                    <th><i class="icon_cogs"></i> Action</th>
                    <th><i class="icon_cogs"></i> Status</th>
                  </tr>
                </thead>
                <?php
                  foreach($records as $r)
                  {
                    foreach($records1 as $r1)
                    { 
                      if($r->student_id == $r1->student_id)
                      {  
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo "$r->student_id";?></td>
                    <td><?php echo "$r->name";?></td>
                    <td><?php echo "$r->email";?></td>
                    <td><?php echo "$r->phone";?></td>
                    <td>
                        <a href="<?= base_url(); ?>Mycontroller/pdfdetails/<?php echo $r->student_id;?>" class="btn btn-info">Download</a>     
                    </td>
                    <td>
                      <a href="<?= base_url(); ?>Mycontroller/certificate/<?php echo $r->student_id;?>" class="btn btn-danger">View Certificate</a>
                    </td>
                  </tr>
                </tbody>
              <?php
                  }
                }
              }
              ?>
              </table>
            </section>
          </div>
        </div>