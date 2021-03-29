


<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
                    <?php 
                      foreach($records as $r){ 
                    ?>
<section id="main-content">
  <section class="wrapper">
    <div class="container bootstrap snippet">
      <form class="form" action="<?= base_url();?>Mycontroller/updatedoadminprofile" method="post" id="registrationForm" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-10"><h1><?= $this->session->userdata('email'); ?></h1></div> 
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->

                  

          <div class="text-center">
            <img src="<?php echo base_url();?>upload/profile/<?php echo $r->file_name;?>" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Upload a different photo...</h6>
            <input type="file" name="file" class="text-center center-block file-upload">
          </div></hr><br>

              <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                </div>
              </div>
              
            </div><!--/col-3-->
            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Edit</a></li>                 
                </ul>

                  
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    
                    
                      
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="name"><h4>Name</h4></label>
                                  <input type="text" class="form-control" name="name" id="first_name" placeholder="Enter Name" value="<?= $r->name;?>" title="enter your first name if any.">
                              </div>
                          </div>
                          
              
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="phone"><h4>Phone</h4></label>
                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" value="<?= $r->phone;?>" title="enter your phone number if any.">
                              </div>
                          </div>
              
                          
                          <div class="form-group">  
                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="<?= $r->email;?>" title="enter your email.">
                              </div>
                          </div>
                         
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="password2"><h4>Change Password</h4></label>
                                  <input type="password" class="form-control" name="password" id="password2" placeholder="password" value="<?= $r->password;?>" title="enter your password2.">
                              </div>
                          </div>
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                    <input type="hidden" name="id" value="<?php echo $r->id;?>">
                                    <button class="btn btn-lg btn-success" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                          </div>
                    
                     
                  
                  
                 
                 
                   
                  </div><!--/tab-pane-->
              </div><!--/tab-content-->

            </div><!--/col-9-->
            </form>
        </div><!--/row-->
  </section>
</section>
                    <?php
                     }
                     ?>