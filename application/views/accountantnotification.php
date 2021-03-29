<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>Accountant Details</h1>
              </header>

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i></i>ID</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_mobile"></i> Phone</th>       
                    <th><i class="icon_cogs"></i> Status</th>
                  </tr>
                </thead>
                <?php
                  foreach($records as $r)
                  {
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo "$r->id";?></td>
                    <td><?php echo "$r->name";?></td>
                    <td><?php echo "$r->email";?></td>
                    <td><?php echo "$r->phone";?></td>
                    <td>
                    <?php
                    $status = $r->isapprove;
                    if($status == 1)
                    {
                    ?>
                    <a href="<?php echo base_url();?>Mycontroller/update_account_status/<?php echo $r->id;?>/<?php echo $r->isapprove;?>" class="btn btn-success">Approve</a>
                    <?php
                    }
                    else{
                      ?>
                      <a href="<?php echo base_url();?>Mycontroller/update_account_status/<?php echo $r->id;?>/<?php echo $r->isapprove;?>" class="btn btn-danger">Disapproved</a>
                    <?php 
                    }
                    ?>
                  </td>
                  </tr>
                </tbody>
              <?php
              }
              ?>
              </table>
            </section>
          </div>
        </div>