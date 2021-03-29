<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>View Course</h1>
              </header>

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th> Course ID</th>
                    <th> Course Name</th>
                    <th> Description</th>
                    <th> Duration</th>
                    <th> Price</th>       
                    <th> Action</th>
                  </tr>
                </thead>
                <?php
                  foreach($records as $r)
                  {
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo "$r->course_id";?></td>
                    <td><?php echo "$r->course_name";?></td>
                    <td><?php echo "$r->description";?></td>
                    <td><?php echo "$r->duration";?></td>
                    <td><?php echo "$r->course_price";?></td>
                    <td><a href="<?php echo base_url();?>Mycontroller/deletecourse/<?php echo $r->course_id;?>" class="btn btn-info" onclick='return checkdelete()'>Delete</a></td>
                  </tr>
                </tbody>
              <?php
              }
              ?>
               </table>
            </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <script>
    function checkdelete(){
      return confirm('Do you want to delete this?');
    }
  </script>



