<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   <script type="text/JavaScript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>  
    
</head>

    
<body>
  


<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>Student Details</h1>
              </header>

              <table id="example2" class="table table-striped table-advance table-hover">
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
                    <td><?php echo "$r->student_id";?></td>
                    <td><?php echo "$r->name";?></td>
                    <td><?php echo "$r->email";?></td>
                    <td><?php echo "$r->phone";?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo base_url();?>Mycontroller/updatestudent/<?php echo $r->student_id;?>"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" href="<?php echo base_url();?>Mycontroller/deletestudent/<?php echo $r->student_id;?>" onclick='return checkdelete()'><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              <?php
              }
              ?>
              </table>
              <?= $this->pagination->create_links();?>
            </section>
          </div>
        </div>

  </body>
  <script>
    function checkdelete(){
      return confirm('Do you want to delete this?');
    }
  </script>
   <script>
      $(document).ready( function () {
        $('#example2').DataTable();
    });
    </script>
</html>