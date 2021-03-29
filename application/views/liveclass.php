<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<section id="main-content">
 <section class="wrapper">       
  <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">&nbsp;
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;CREATE NEW LIVE CLASS</a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body">
                
                
      <?php echo form_open(base_url() . 'Mycontroller/live_class/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
          <div class="row">
                    <div class="col-sm-6">
  
          <div class="form-group">
                    <label class="col-md-12" for="example-text">title</label>
                      <div class="col-sm-12">
              <input type="text" class="form-control" name="title" required>

            </div>
          </div>
          
          <div class="form-group">
                    <label class="col-md-12" for="example-text">zoom_meeting_id</label>
                      <div class="col-sm-12">
              <input type="text" class="form-control" name="meeting_id" required>

            </div>
          </div>
          
          <div class="form-group">
                    <label class="col-md-12" for="example-text">zoom_meeting_password</label>
                      <div class="col-sm-12">
              <input type="text" class="form-control" name="meeting_password" required>

            </div>
          </div>
          
         <!--  <div class="form-group">
                    <label class="col-md-12" for="example-text">class</label>
                      <div class="col-sm-12">
              <select name="class_id" class="form-control select2" style="width:100%"id="class_id" onchange="return get_class_sections(this.value)">
                              <option value="">select</option>
                              <?php 
                $classes = $this->crud_model->get_classes(); foreach($classes as $row): ?>
                                <option value="<?php echo $row['class_id'];?>"><?php echo $row['name'];?></option>
                                <?php endforeach; ?>
                          </select>
            </div> 
          </div> -->
          
          
          <div class="form-group">
                      <label class="col-md-9" for="example-text">section</label>
                        <div class="col-sm-12">
                            <select name="section_id" class="form-control" style="width:100%" id="section_selector_holder">
                                <option value="">select_class_first</option>
                          </select>
                      </div>
          </div>
        
      </div>  
          
           <div class="col-sm-6">
           
             <div class="form-group">
              <label class="col-sm-12">date</label>
              <div class="col-sm-12">
                 <input type="date" class="form-control datepicker" name="date" value="<?php echo date('Y-m-d');?>" required>
              </div> 
          </div>
          
          
     <!-- .row -->
                            <div class="row">
              <label class="col-md-12" for="example-text">meeting_time</label>
                                <div class="col-lg-6">
                                    <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                        <input type="text" name="start_time" class="form-control" value="13:14">
                                        <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> 
                                    </div>
                  <label class="col-md-12" for="example-text">time_start</label>
                                </div>
                
                                <div class="col-lg-6">
                                    <div class="input-group clockpicker " data-placement="left" data-align="top" data-autoclose="true">
                                        <input type="text" name="end_time" class="form-control" value="13:14">
                                        <span class="input-group-addon"> <span class="glyphicon glyphicon-time">
                    </span> 
                                    </div>
                  <label class="col-md-12" for="example-text">time_end</label>
                                </div>

          </div>
        
                <!-- /.row -->
        <hr class="sep-3">
        
        <div class="form-group">
                    <label class="col-md-12" for="example-text">remarks</label>
                      <div class="col-sm-12">
                      <textarea rows="5" name="remarks" class="form-control" placeholder="please specify meeting remarks here" ></textarea>
            </div>
              </div>
        
        <div class="form-group">
                      <div class="col-sm-12">
                      <input type="checkbox" class="js-switch" value="1" name="send_notification_sms" checked> <i></i> send_notification_sms
            </div>
              </div>
        
        
    

    </div>
  </div>
          
    <input type="submit" class="btn btn-success btn-rounded btn-block btn-sm" value="save">               
                    
                <?php echo form_close();?>  
                  
                  
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
          
            <div class="row">
                    <div class="col-sm-12">
            <div class="panel panel-info">
                          
                                <div class="panel-body table-responsive">
                  list_live_class
                  <hr class="sep-2">
      
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>meeting_id</th>
                            <th>class</th>
                            <th>section</th>
                            <th>date</th>
                            <th>start_time</th>
                            <th>end_time</th>
                            <th>created_by</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
           
                        <tr>
                            <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
                            <td></td>
              <td></td>
              <td></td>
    
                            <td>
              
              <a href=""><button type="button" class="btn btn-info btn-rounded btn-sm"><i class="fa fa-edit"></i> edit</button></a>
              
            
              <a href=""><button type="button" class="btn btn-success btn-rounded btn-sm"><i class="fa fa-youtube-play"></i> start streaming</button></a>
              
              
                            <a href="#" onclick="confirm_modal('');"><button type="button" class="btn btn-danger btn-rounded btn-sm"><i class="fa fa-times"></i> delete</button></a>
              
                            </td>
                        </tr>

            
            
                    </tbody>
                </table>
        </div>
      </div>
    </div>
  </div>
</div>
 </section>
</section>

  <script>
    $('form').submit(function (e) {
        $('#install_progress').show();
        $('#modal_1').show();
        $('.btn').val('saving, please wait...');
        $('form').submit();
        e.preventDefault();
    });
  
</script>


<script type="text/javascript">

  function get_class_sections(class_id) {

      $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>

