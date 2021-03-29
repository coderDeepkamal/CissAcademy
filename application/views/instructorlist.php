<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>Instructor Details</h1>
              </header>

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i></i>ID</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_mobile"></i> Phone</th>       
                    <th><i class="icon_cogs"></i> Action</th>
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
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo base_url();?>Mycontroller/updateinstructor/<?php echo $r->id;?>"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" href="<?php echo base_url();?>Mycontroller/deleteinstructor/<?php echo $r->id;?>" onclick='return checkdelete()'><i class="icon_close_alt2"></i></a>
                      </div>
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
  <script>
    function checkdelete(){
      return confirm('Do you want to delete this?');
    }
  </script>