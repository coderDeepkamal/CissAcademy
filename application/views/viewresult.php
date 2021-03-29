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
                <h1>Student Result</h1>
              </header>

              <table id="example2" class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="icon_profile"></i> Student Name</th>
                    <th><i class="icon_mail_alt"></i> Module Name</th>
                    <th><i class="icon_mobile"></i> Result</th>       
                  </tr>
                </thead>
                <?php
                  foreach($records as $r)
                  { 
                    foreach($records1 as $r1)
                    {
                      foreach($records2 as $r2)
                      {  
                        if($r->student_id == $r1->student_id & $r->module_id == $r2->module_id)
                        { 
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo "$r1->name";?></td>
                    <td><?php echo "$r2->module_name";?></td>
                    <td><?php echo "$r->result";?></td>
                  </tr>
                </tbody>
              <?php
                    }
                  }
                }
              }
              ?>
              </table>
            </section>
          </div>
        </div>

  </body>
</html>