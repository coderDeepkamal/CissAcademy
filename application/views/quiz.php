<section id="main-content">
     <section class="wrapper">
		<div id="container">
			<h1>Welcome to the Test!</h1>


			 

					<!-- ======= Courses Section ======= -->
		    <section id="courses" class="courses">
		      <div class="container" data-aos="fade-up">
		             
		        <div class="row" data-aos="zoom-in" data-aos-delay="100">
		            <?php
				    foreach($records as $r)
				    {  
				    ?>
		          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
		            <div class="course-item">
		              <a href="<?php echo base_url();?>Questions/quizdisplay/<?php echo $r->course_id;?>"><img src="<?php echo base_url();?>upload/courses/<?php echo $r->thumbnail;?>" style="width: 400px; height:200px;" class="img-fluid" alt="..."></a>
		              <div class="course-content">
		                <div class="d-flex justify-content-between align-items-center mb-3">
		                  <h4><?php echo $r->course_name;?></h4>
		                  <p class="price"><?php echo $r->course_price;?></p>
		                </div>

		                <h3><a href="<?php echo base_url();?>Questions/quizdisplay/<?php echo $r->course_id;?>"><?php echo $r->course_name;?></a></h3>
		                <p><?php echo $r->description;?>.</p>
		              </div>
		            </div>
		          </div> <!-- End Course Item-->
		          <?php
		          }
		          ?>
		        </div>
		           
		      </div>
		    </section><!-- End Courses Section -->


		</div>

	</section>
</section>

