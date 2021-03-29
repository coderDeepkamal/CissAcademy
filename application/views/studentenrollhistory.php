<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
          <div class="container-fluid">
           <div class="row">  
            <div class="col-xl-12 bg-warning">
            	<header class="panel-heading">
	               <h1>Student Enroll Details</h1>
	            </header>
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="icon_profile"></i> Student ID</th>
                    <th><i class="icon_profile"></i> Course ID</th> 
                    <th><i class="icon_profile"></i> Enrolled course</th>
                    <th><i class="icon_profile"></i> Student Name</th>      
                  </tr>
                </thead>
                <?php
                  foreach($records as $r)
                  {
                    foreach($records1 as $r1)
                    { 
                      foreach($records2 as $r2)
                      { 
                        if($r->course_id==$r1->course_id && $r2->student_id==$this->session->userdata('student_id') && $r->student_id==$this->session->userdata('student_id'))
                        { 
                  ?>
                <tbody>
                  <tr>
                    <td><?php echo "$r->student_id";?></td>
                    <td><?php echo "$r->course_id";?></td>
                    <td><?php echo "$r1->course_name";?></td>
                    <td><?php echo "$r2->name";?></td>
                  </tr>
                </tbody>
              <?php
                      }
                    }
                  }
                }
                ?>
              </table>
            </div>
            
        </div>
    </div>
            </section>
          </div>
        </div>
      </section>
    </section>