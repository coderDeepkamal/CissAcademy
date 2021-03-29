<?php 
ob_start();
require_once(APPPATH.'libraries/class.phpmailer.php');
require_once(APPPATH.'libraries/class.smtp.php');
class Mycontroller extends CI_Controller
{
 function __construct()
 {
  parent::__construct();
  $this->load->database(); //connect database
  $this->load->helper('url');
  $this->load->helper('file'); 
  $this->load->library('session');
  $this->load->model('Mymodel');
  $this->load->helper('text');
 }

 function index(){
  $this->load->view('homepage');
 }

 function allcourses(){
  $this->load->view('allcourses');
 }

 function about(){
  $this->load->view('about');
 }

 function contact(){
  $this->load->view('contact');
 }

 function adminview()
 {
  if($this->session->userdata('email'))
  {
    $this->load->view('header'); 
  	$this->load->view('dashboard');
    $this->load->view('footer'); 
  }else{
    $this->load->view('homepage');
  } 
 }	 
 function studentsignup() 
 {
	$this->load->view('studentsignup');
 }	
 function studentsignupdo()  
 { 
  $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"),"address"=>$this->input->post("address"),"center_location"=>$this->input->post("center_location"),"fo_name"=>$this->input->post("fo_name"));
  $this->load->model('Mymodel');
  if($this->Mymodel->add($data)) 
    $this->load->view('studentlogin');
  else
    $this->load->view('studentsignup'); 
 }

 public function checkUser()
  {
      
    $phone=$this->input->post('phone');
    //$email=$this->input->post('email');
    
    $result=$this->Mymodel->checkuser($phone);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }
  

  function studentnotification(){
    $this->load->library('pagination');
    $config = [
      'base_url' => base_url('Mycontroller/studentnotification'),
      'per_page' => 8,
      'total_rows' =>$this->Mymodel->num_rows(),
      'full_tag_open'=>"<ul class='pagination'>",
      'full_tag_close'=>"</ul>",
      'next_tag_open' =>"<li>",
      'next_tag_close' =>"</li>",
      'prev_tag_open' =>"<li>",
      'prev_tag_close' =>"</li>",
      'num_tag_open' =>"<li>",
      'num_tag_close' =>"<li>",
      'cur_tag_open' =>"<li class='active'><a>",
      'cur_tag_close' =>"</a></li>"
    ];
    $this->pagination->initialize($config);
    $data['records']=$this->Mymodel->fetch($config['per_page'],$this->uri->segment(3));
    $this->load->view('header');
    $this->load->view('notification',$data);   
  }

  function accountantnotification(){ 
    $query=$this->db->get("accountant");
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('accountantnotification',$data);
    $this->load->view('footer'); 
  }

  // function studentlist(){ 
  // if($this->session->userdata('email'))
  //  {
  //   $query=$this->db->where("isapprove",1);
  //   $query=$this->db->get("student");
  //   $data['records']=$query->result();
  //   $this->load->view('header');
  //   $this->load->view('studentlist',$data);
  //   $this->load->view('footer');
  //  }else{
  //   $this->load->view('homepage');
  //  } 
  // }

  function studentlist(){
    $this->load->library('pagination');
    $config = [
      'base_url' => base_url('Mycontroller/studentlist'),
      'per_page' => 8,
      'total_rows' =>$this->Mymodel->num_rows1(),
      'full_tag_open'=>"<ul class='pagination'>",
      'full_tag_close'=>"</ul>",
      'next_tag_open' =>"<li>",
      'next_tag_close' =>"</li>",
      'prev_tag_open' =>"<li>",
      'prev_tag_close' =>"</li>",
      'num_tag_open' =>"<li>",
      'num_tag_close' =>"<li>",
      'cur_tag_open' =>"<li class='active'><a>",
      'cur_tag_close' =>"</a></li>"
    ];
    $this->pagination->initialize($config);
    $data['records']=$this->Mymodel->fetch1($config['per_page'],$this->uri->segment(3));
    $this->load->view('header');
    $this->load->view('studentlist',$data);
    $this->load->view('footer');   
  }

  function deletestudent()
  {
    $id=$this->uri->segment('3');
    $this->Mymodel->delstudent($id);
    $this->studentlist();
  }

  function deletestudentnotification()
  {
    $id=$this->uri->segment('3');
    $this->Mymodel->delstudent($id);
    $this->studentnotification();
  }

  function updatestudent()
  {
    $id=$this->uri->segment('3');
    $query=$this->db->get_where("student",array("student_id"=>$id));
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('updatestudent',$data);
    $this->load->view('footer');
  }

  function updatedostudent()
  {
    $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"));
    $id=$this->input->post('student_id');
    $this->Mymodel->updatestudent($data,$id);
    $this->studentlist();
  }

  public function update_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
        $this->db->set('isapprove', 1);
        $this->db->where('student_id',$id);
        $this->db->update('student');
      }
      elseif($status==1)
      {
        $this->db->set('isapprove', 0);
        $this->db->where('student_id',$id);
        $this->db->update('student');
      }
      $this->studentnotification(); 
  }

  public function update_account_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
        $this->db->set('isapprove', 1);
        $this->db->where('id',$id);
        $this->db->update('accountant');
      }
      elseif($status==1)
      {
        $this->db->set('isapprove', 0);
        $this->db->where('id',$id);
        $this->db->update('accountant');
      }
      $this->accountantnotification(); 
  }

 function instructorsignup() 
 {
  $this->load->view('instructorsignup');
 }

 function instructorsignupdo()  
 {
  $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"));
  $this->load->model('Mymodel');
  if($this->Mymodel->add1($data)) 
    $this->load->view('instructorlogin');
  else
    echo "Data is not Added"; 
 }

 public function checkInstructor()
  {
      
    $phone=$this->input->post('phone');
    $email=$this->input->post('email');
    
    $result=$this->Mymodel->checkInstructor($phone,$email);
    if($result)
    {
    echo  1;  
    }
    else
    {
    echo  0;  
    }
  }

 function instructornotification(){ 
    $query=$this->db->get("instructor");
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('instructornotification',$data);
    $this->load->view('footer'); 
  }

  function instructorlist(){ 
    $query=$this->db->where("isapprove",1);
    $query=$this->db->get("instructor");
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('instructorlist',$data);
    $this->load->view('footer'); 
  }

  function updateinstructor()
  {
    $id=$this->uri->segment('3');
    $query=$this->db->get_where("instructor",array("id"=>$id));
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('updateinstructor',$data);
    $this->load->view('footer');
  }

  function updatedoinstructor()
  {
    $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"));
    $id=$this->input->post('id');
    $this->Mymodel->updateinstructor($data,$id);
    $this->instructorlist();
  }

  function deleteinstructor()
  {
    $id=$this->uri->segment('3');
    $this->Mymodel->delinstructor($id);
    $this->instructorlist();
  }

  public function instructor_update_status()
    {
      $id=$this->uri->segment(3);
      $status=$this->uri->segment(4);
      if($status==0)
      {
      $this->db->set('isapprove',1);
      $this->db->where('id',$id);
      $this->db->update('instructor');
      }
      elseif($status==1)
      {
      $this->db->set('isapprove',0);
      $this->db->where('id',$id);
      $this->db->update('instructor');
      }
      $this->instructornotification();
    }

  function studentlogin(){
    $this->load->view('studentlogin');
  }

  function studentdashboard(){
    $this->load->view('studentheader');
    $this->load->view('studentdashboard');
    $this->load->view('studentfooter');
  }

  function studentlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->Mymodel->validate($email,$password);

    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['email'];
        $type = $data['isapprove'];
        $id = $data['student_id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            "isapprove"     => $type,
            'logged_in' => TRUE,
            'student_id' => $id
        );


        $this->session->set_userdata($sesdata);

        if($type == 1) {
          $this->load->view('studentheader');
          $this->load->view('studentdashboard');
          $this->load->view('studentfooter');
        } else {
            $this->session->set_flashdata('msg1',"Admin approval needed");
            $this->session->set_flashdata('msg_class','alert-success');
            $this->load->view('studentlogin');
        }
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('studentlogin');

     }
  }

  function studentlogout(){
    unset($_SESSION['email']);
    $this->load->view('homepage');
  }

  function instructordashboard(){
    $this->load->view('instructorheader');
    $this->load->view('instructordashboard');
    $this->load->view('instructorfooter');
  }

  function instructorlogin(){
    $this->load->view('instructorlogin');
  }

  function instructorlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->Mymodel->validate1($email,$password);

    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['email'];
        $type = $data['isapprove'];
        $id = $data['id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            "isapprove"     => $type,
            'logged_in' => TRUE,
            'id' => $id
        );


        $this->session->set_userdata($sesdata);

        if($type == 1) {
          $this->load->view('instructorheader');
          $this->load->view('instructordashboard');
          $this->load->view('instructorfooter');
        } else {
            $this->session->set_flashdata('msg1',"Admin approval needed");
            $this->session->set_flashdata('msg_class','alert-success');
            $this->load->view('instructorlogin');
        }
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('instructorlogin');

     }
  }

  function instructorlogout(){
    unset($_SESSION['email']);
    $this->load->view('homepage');
  }

  function adminlogin(){
    $this->load->view('adminlogin');
  }

  function adminlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->Mymodel->validate2($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $password  = $data['password'];
        $email = $data['email'];
        $id = $data['id'];
        $sesdata = array(
            'password'  => $password,
            'email'     => $email,
            'logged_in' => TRUE,
            'id' => $id
        );
        $this->session->set_userdata($sesdata);
        $this->adminview();
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('adminlogin');

     }
  }

  function adminlogout(){
    unset($_SESSION['email']);
    $this->load->view('homepage');
  }
  //Admin add course 
  function addcourse(){
    $this->load->view('header');
    $this->load->view('addcourse');
    $this->load->view('footer');

  }

  function addcoursedo(){
      //Check whether usert upload picture
          if(!empty($_FILES['file']['name'])){
              $config['upload_path'] = 'upload/courses/';
              $config['allowed_types'] = '*';
              $config['file_name'] = $_FILES['file']['name'];
              
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              
              if($this->upload->do_upload('file')){
                  $uploadData = $this->upload->data();
                  $file = $uploadData['file_name'];
              }else{
                  $file = '';
              }
          }else{
              $file = '';
      }
      $data=array("course_name"=>$this->input->post("course_name"),"description"=>$this->input->post("description"),"duration"=>$this->input->post("duration"),"course_price"=>$this->input->post("course_price"),'thumbnail' => $file);
      $response=$this->Mymodel->addcourse($data); 
      $this->session->set_flashdata('msg1',"Course Inserted Successfully");
      $this->session->set_flashdata('msg_class','alert-success');
      $this->load->view('header');
      $this->load->view('addcourse');
      $this->load->view('footer');
  }

  function addmodule(){
    $query2=$this->db->get("course");
    $data2['records2']=$query2->result();
    $this->load->view('header');
    $this->load->view('addmodule',$data2);
    $this->load->view('footer');
  }

  function addmoduledo(){
        
    $data=array("course_id"=>$this->input->post("cat_id"), "module_name"=>$this->input->post("module_name"));
    $this->session->set_flashdata('msg1',"Module Inserted Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addmodule($data); 
    $this->addmodule();
  }

  function addcontent(){
    $query2=$this->db->get("course");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("course_module");
    $data2['records']=$query2->result();
    $this->load->view('header');
    $this->load->view('addcontent',$data2);
    $this->load->view('footer');
  }

  function addcontentdo(){

            //Check whether usert upload picture
            if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = '././upload/images/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }
        
        $data=array("course_id"=>$this->input->post("cat_id"), "module_id"=>$this->input->post("cat"),'file_name' => $file,'status'=>$this->input->post('status'));
        $this->session->set_flashdata('msg1',"Content Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');
        $response=$this->Mymodel->addcontent($data); 
        $this->addcontent();
  }
  //End of Admin Course

  //Instructor add course 
  function instructoraddcourse(){
    $this->load->view('instructorheader');
    $this->load->view('instructoraddcourse');
    $this->load->view('instructorfooter');
  }

  function instructoraddcoursedo(){
      //Check whether usert upload picture
          if(!empty($_FILES['file']['name'])){
              $config['upload_path'] = 'upload/courses/';
              $config['allowed_types'] = '*';
              $config['file_name'] = $_FILES['file']['name'];
              
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              
              if($this->upload->do_upload('file')){
                  $uploadData = $this->upload->data();
                  $file = $uploadData['file_name'];
              }else{
                  $file = '';
              }
          }else{
              $file = '';
      }
      $data=array("course_name"=>$this->input->post("course_name"),"description"=>$this->input->post("description"),"duration"=>$this->input->post("duration"),"course_price"=>$this->input->post("course_price"),'thumbnail' => $file);
      $response=$this->Mymodel->addcourse($data); 
      $this->session->set_flashdata('msg1',"Course Inserted Successfully");
      $this->session->set_flashdata('msg_class','alert-success');
      $this->load->view('instructorheader');
      $this->load->view('instructoraddcourse');
      $this->load->view('instructorfooter');
  }

  function instructoraddmodule(){
    $this->db->join("enroll","enroll.course_id = course.course_id");
    $query2=$this->db->get("course");
    $data2['records2']=$query2->result();
    $this->load->view('instructorheader');
    $this->load->view('instructoraddmodule',$data2);
    $this->load->view('instructorfooter');
  }

  function instructoraddmoduledo(){       
    $data=array("course_id"=>$this->input->post("cat_id"), "module_name"=>$this->input->post("module_name"));
    $this->session->set_flashdata('msg1',"Module Inserted Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addmodule($data); 
    $this->instructoraddmodule();
  }

  function instructoraddcontent(){
    $query2=$this->db->get("course");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("course_module");
    $data2['records']=$query2->result();
    $this->load->view('instructorheader');
    $this->load->view('instructoraddcontent',$data2);
    $this->load->view('instructorfooter');
  }

  function instructoraddcontentdo(){

            //Check whether usert upload picture
            if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = '././upload/images/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }
        
        $data=array("course_id"=>$this->input->post("cat_id"), "module_id"=>$this->input->post("cat"),'file_name' => $file,'status'=>$this->input->post('status'));
        $this->session->set_flashdata('msg1',"Content Inserted Successfully");
        $this->session->set_flashdata('msg_class','alert-success');
        $response=$this->Mymodel->addcontent($data); 
        $this->instructoraddcontent();
  }

  function sviewcourse(){  
  $this->db->join("enroll","enroll.course_id = course.course_id"); 
  //$query=$this->db->where("student_id",1);
  $query=$this->db->get("course");
  $data['records']=$query->result();
  
  $this->load->view('studentheader');
  $this->load->view('studentcourse',$data);
  $this->load->view('studentfooter');
 }

 function studentviewmodule()
 {
  $course_id=$this->uri->segment('3');

  $query=$this->db->get_where("course",array("course_id"=>$course_id));
  $data1['records1']=$query->result();
 
  $query=$this->db->get_where("course_module",array("course_id"=>$course_id));
  $data1['records2']=$query->result();
     
  $query=$this->db->get_where("course_content",array("course_id"=>$course_id));
  $data1['records3']=$query->result();
  
  $this->load->view('studentheader');
  $this->load->view('studentmoduleview',$data1);
  $this->load->view('studentfooter');
 }

 function iviewcourse(){  
  $this->db->join("enroll","enroll.course_id = course.course_id"); 
  $query=$this->db->where("isapprove",2); 
  $query=$this->db->get("course");
  $data['records']=$query->result();
  $this->load->view('instructorheader');
  $this->load->view('instructorcourse',$data);
  $this->load->view('instructorfooter');
 }

 function aviewcourse(){
 if($this->session->userdata('email'))
  {   
    $query=$this->db->get("course");
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('aviewcourse',$data);
    $this->load->view('footer');
  }else{
    $this->load->view('homepage');
  }
 }

 function deletecourse()
  {
    $id=$this->uri->segment('3');
    $this->Mymodel->del($id);
    $this->aviewcourse();
  }

 function course(){ 
  if($this->session->userdata('email'))
  {  
    $query=$this->db->get("course");
    $data['records']=$query->result();
    $query=$this->db->get("course_module");
    $data['records1']=$query->result();
    $this->load->view('header');
    $this->load->view('course',$data);
    $this->load->view('footer');
  }else{
    $this->load->view('homepage');
  }
 }

 function viewmodule(){
  if($this->session->userdata('email'))
  {
    $course_id=$this->uri->segment(3);

    $query=$this->db->get_where("course",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("course_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("course_content",array("course_id"=>$course_id));
    //$query=substr(($this->db->get('course_content')->result()), 0, 10);
    $data1['records3']=$query->result();
    
    $this->load->view('header');
    $this->load->view('moduleview',$data1);
    $this->load->view('footer');
  }else{
    $this->load->view('homepage');
  }
 }

 function deletemodule()
  {
    $id=$this->uri->segment('3');
    $this->Mymodel->deletemodule($id);

    $course_id=$this->uri->segment(4);
    $query=$this->db->get_where("course",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("course_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("course_content",array("course_id"=>$course_id));
    $data1['records3']=$query->result();
    
    $this->load->view('header');
    $this->load->view('moduleview',$data1);
    $this->load->view('footer');
  }

 function deletecontent()
  {
    $id=$this->uri->segment('3');
    $this->Mymodel->deletecontent($id);

    $course_id=$this->uri->segment(4);
    $query=$this->db->get_where("course",array("course_id"=>$course_id));
    $data1['records1']=$query->result();
   
    $query=$this->db->get_where("course_module",array("course_id"=>$course_id));
    $data1['records2']=$query->result();
       
    $query=$this->db->get_where("course_content",array("course_id"=>$course_id));
    $data1['records3']=$query->result();
    
    $this->load->view('header');
    $this->load->view('moduleview',$data1);
    $this->load->view('footer');
  }


 function instructorviewmodule()
 {
  $course_id=$this->uri->segment('3');

  $query=$this->db->get_where("course",array("course_id"=>$course_id));
  $data1['records1']=$query->result();
 
  $query=$this->db->get_where("course_module",array("course_id"=>$course_id));
  $data1['records2']=$query->result();
     
  $query=$this->db->get_where("course_content",array("course_id"=>$course_id));
  $data1['records3']=$query->result();
  
  $this->load->view('instructorheader');
  $this->load->view('instructormoduleview',$data1);
  $this->load->view('instructorfooter');
 }

 function enrollment(){
  if($this->session->userdata('email'))
  {
    $query=$this->db->get("course");
    $data2['records']=$query->result();
    $query2=$this->db->where("isapprove",1);
    $query2=$this->db->get("student");
    $data2['records2']=$query2->result();
    $this->load->view('header');
    $this->load->view('enroll',$data2);
    $this->load->view('footer');
  }else{
    $this->load->view('homepage');
  }
 }

 function enrollhistory(){
  if($this->session->userdata('email'))
  {
    $query=$this->db->get_where("enroll");
    $data['records']=$query->result();

    $query=$this->db->get_where("course");
    $data['records1']=$query->result();

    $query=$this->db->get_where("student");
    $data['records2']=$query->result();

    $query=$this->db->get_where("instructor");
    $data['records3']=$query->result();
    
    $this->load->view('header');
    $this->load->view('enrollhistory',$data);
    $this->load->view('footer');
  }else{
    $this->load->view('homepage');
  }
 }

 function studentenrollhistory(){
  if($this->session->userdata('email'))
  {
    $query=$this->db->get_where("enroll");
    $data['records']=$query->result();

    $query=$this->db->get_where("course");
    $data['records1']=$query->result();

    $query=$this->db->get_where("student");
    $data['records2']=$query->result();
    
    $this->load->view('studentheader');
    $this->load->view('studentenrollhistory',$data);
    $this->load->view('studentfooter');
  }else{
    $this->load->view('homepage');
  }
 }

  function instructorenrollment(){
  if($this->session->userdata('email'))
  {
    $query=$this->db->get("course");
    $data2['records']=$query->result();
    $query2=$this->db->get("instructor");
    $data2['records2']=$query2->result();
    $this->load->view('header');
    $this->load->view('instructorenroll',$data2);
    $this->load->view('footer');
  }else{
    $this->load->view('homepage');
  }
 }

  function doenrollment(){
    $data=array("student_id"=>$this->input->post("cat_id"), "course_id"=>$this->input->post("cat"),'isapprove'=>1);
    $this->session->set_flashdata('msg1',"Student Enrolled Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->enroll($data); 
    $this->enrollment();
  }

  function instructordoenrollment(){
    $data=array("id"=>$this->input->post("instructor"), "course_id"=>$this->input->post("course"),'isapprove'=>2);
    $this->session->set_flashdata('msg1',"instructor Enrolled Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->enroll($data); 
    $this->instructorenrollment();
  }

  function studentprofile(){
    $id=$this->uri->segment('3');
    $query=$this->db->get_where('student',array('student_id'=>$id));
    $data['records']=$query->result();
    $this->load->view('studentheader');
    $this->load->view('studentprofile',$data);
    $this->load->view('studentfooter');
  }

  function updatedostudentprofile()
  {
    
    if($this->session->userdata("email"))
      {
        $id=$this->input->post("student_id");
                if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = 'upload/profile/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }
            // $data=array('image'=>$file,'title'=>$this->input->post('title'),'subtitle'=>$this->input->post('subtitle'));

             $this->db->set('name',$this->input->post('name'));
             $this->db->set('email',$this->input->post('email'));
             $this->db->set('phone',$this->input->post('phone'));
             if($file!='')
             {
               $this->db->set('file_name',$file);
             }
            $this->db->where('student_id', $id);
            $this->db->update('student');
            $query=$this->db->get('student');
            $data['records']=$query->result();
            $this->load->view('studentheader');
            $this->load->view('studentprofile',$data);
            $this->load->view('studentfooter');
             
      }
      else
        {
          redirect('studentlogin');
        }
  }

  function updateadminprofile(){
    $id=$this->uri->segment('3');
    $query=$this->db->get_where('admin',array('id'=>$id));
    $data['records']=$query->result();
    $this->load->view('header');
    $this->load->view('adminprofile',$data);
    $this->load->view('footer');
  }

  function updatedoadminprofile()
  {
      if($this->session->userdata("email"))
      {
        $id=$this->input->post("id");
                if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = 'upload/profile/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }

             $this->db->set('name',$this->input->post('name'));
             $this->db->set('email',$this->input->post('email'));
             $this->db->set('phone',$this->input->post('phone'));
             if($file!='')
             {
               $this->db->set('file_name',$file);
             }
            $this->db->where('id', $id);
            $this->db->update('admin');
            $query=$this->db->get('admin');
            $data['records']=$query->result();
            $this->load->view('header');
    		    $this->load->view('adminprofile',$data);
    		    $this->load->view('footer');
             
      }
      else
        {
          redirect('adminlogin');
        }
  }

  function updateinstructorprofile(){
    $id=$this->uri->segment('3');
    $query=$this->db->get_where('instructor',array('id'=>$id));
    $data['records']=$query->result();
    $this->load->view('instructorheader');
    $this->load->view('instructorprofile',$data);
    $this->load->view('instructorfooter');
  }

  function updatedoinstructorprofile()
  {
   
    if($this->session->userdata("email"))
      {
        $id=$this->input->post("id");
                if(!empty($_FILES['file']['name'])){
                $config['upload_path'] = 'upload/profile/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $file = $uploadData['file_name'];
                }else{
                    $file = '';
                }
            }else{
                $file = '';
        }

             $this->db->set('name',$this->input->post('name'));
             $this->db->set('email',$this->input->post('email'));
             $this->db->set('phone',$this->input->post('phone'));
             if($file!='')
             {
               $this->db->set('file_name',$file);
             }
            $this->db->where('id', $id);
            $this->db->update('instructor');
            $query=$this->db->get('instructor');
            $data['records']=$query->result();
            $this->load->view('instructorheader');
            $this->load->view('instructorprofile',$data);
            $this->load->view('instructorfooter');
             
      }
      else
        {
          redirect('instructorlogin');
        }
  }

  function chat(){
    $id=$this->session->userdata('id');
    $query2=$this->db->get("student");
    $data2['records2']=$query2->result();
    $query2=$this->db->get_where("messages",array('id'=>$id));
    $data2['records1']=$query2->result();
    $this->load->view('header');
    $this->load->view('chat',$data2);
    $this->load->view('footer');
  }

  function dochat(){
    $time = new DateTime('now', new DateTimeZone('Asia/Kolkata'));    
    $data=array("student_id"=>$this->input->post("cat_id"), "message"=>$this->input->post("message"),'id'=>$this->session->userdata('id'),'time' =>$time->format('H:i'));
    $this->session->set_flashdata('msg1',"message sent Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addchat($data); 
    $this->chat();
  }

  function instructorchat(){
    $query2=$this->db->get("student");
    $data2['records2']=$query2->result();
    $query2=$this->db->get_where("messages",array('id'=>$this->session->userdata('id')));
    $data2['records1']=$query2->result();
    $this->load->view('instructorheader');
    $this->load->view('instructorchat',$data2);
    $this->load->view('instructorfooter');
  }

  function instructordochat(){
    $time = new DateTime('now', new DateTimeZone('Asia/Kolkata'));    
    $data=array("student_id"=>$this->input->post("cat_id"), "message"=>$this->input->post("message"),'id'=>$this->session->userdata('id'),'time' =>$time->format('H:i'));
    $this->session->set_flashdata('msg1',"message sent Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addchat($data); 
    $this->instructorchat();
  }

  function studentchat(){
    $query1=$this->db->get("messages");
    $data2['records1']=$query1->result();
    $query2=$this->db->get("admin");
    $data2['records2']=$query2->result();
    $query3=$this->db->get("instructor");
    $data2['records3']=$query3->result();
    $this->load->view('studentheader');
    $this->load->view('studentchat',$data2);
    $this->load->view('studentfooter');
  }

  function studentdochat(){
    $time = new DateTime('now', new DateTimeZone('Asia/Kolkata'));    
    $data=array("student_id"=>$this->session->userdata('student_id'), "message"=>$this->input->post("message"),'id'=>$this->input->post('id'),'time' =>$time->format('H:i'));
    $this->session->set_flashdata('msg1',"message sent Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addchat($data); 
    $this->studentchat();
  }

  function liveclass(){
    //$this->load->view('header');
    $this->load->view('liveclass');
    //$this->load->view('footer');
  }

  function addinvoice(){
    $query2=$this->db->get("course");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("student");
    $data2['records']=$query2->result();
    $this->load->view('accountheader');
    $this->load->view('addinvoice',$data2);
    $this->load->view('accountfooter');
  }

  function addinvoicedo(){
    $data=array("course_id"=>$this->input->post("cat_id"), "student_id"=>$this->input->post("cat"),"invoice_no"=>$this->input->post("invoice_no"),"due_date"=>$this->input->post("due_date"),"particular"=>$this->input->post("particular"),"sac_code"=>$this->input->post("sac_code"),"rate"=>$this->input->post("rate"),"amount"=>$this->input->post("amount"),"total_amount"=>$this->input->post("total_amount"),"tax_amount"=>$this->input->post("tax_amount"));
    $this->session->set_flashdata('msg1',"Invoice added Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addinvoice($data); 
    $this->addinvoice();
  }

  function invoice(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('header');
    $this->load->view('invoice',$data);
    $this->load->view('footer');
  }

  function viewinvoice(){
    $query=$this->db->get("student");
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $this->load->view('header');
    $this->load->view('viewinvoice',$data);
    $this->load->view('footer');
  }

  function pdfinvoice(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('invoice',$data);
    // Get output html
    $html = $this->output->get_output();
    
    // Load pdf library
    $this->load->library('pdf');
    
    // Load HTML content
    $this->dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation
    $this->dompdf->setPaper('A4', 'portrait');
    
    // Render the HTML as PDF
    $this->dompdf->render();
    
    // Output the generated PDF (1 = download and 0 = preview)
    $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
  }

  

  function viewstudentinvoice(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('studentheader');
    $this->load->view('invoice',$data);
    $this->load->view('studentfooter');
  }

  function pdfstudentinvoice(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('invoice',$data);
    // Get output html
    $html = $this->output->get_output();
    
    // Load pdf library
    $this->load->library('pdf');
    
    // Load HTML content
    $this->dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation
    $this->dompdf->setPaper('A4', 'portrait');
    
    // Render the HTML as PDF
    $this->dompdf->render();
    
    // Output the generated PDF (1 = download and 0 = preview)
    $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
  }

  function addcertificate(){
    $query2=$this->db->get("course");
    $data2['records2']=$query2->result();
    $query2=$this->db->get("student");
    $data2['records']=$query2->result();
    $this->load->view('header');
    $this->load->view('addcertificate',$data2);
    $this->load->view('footer');
  }

  function addcertificatedo(){
    $data=array("course_id"=>$this->input->post("cat_id"), "student_id"=>$this->input->post("cat"),"from"=>$this->input->post("from"),"to"=>$this->input->post("to"),"date_of_issue"=>$this->input->post("date_of_issue"));
    $this->session->set_flashdata('msg1',"Certificate added Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $response=$this->Mymodel->addcertificate($data); 
    $this->addcertificate();
  }

  function viewcertificate(){
    $query=$this->db->get("student");
    $data['records']=$query->result();
    $query=$this->db->get("certificate");
    $data['records1']=$query->result();
    $this->load->view('header');
    $this->load->view('viewcertificate',$data);
    $this->load->view('footer');
  }

  function certificate(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("certificate");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('header');
    $this->load->view('certificate',$data);
    $this->load->view('footer');
  }

  public function pdfdetails()
  {
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("certificate");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    //$this->load->view('header');
    $this->load->view('pdfcertificate',$data);
    //$this->load->view('footer');
    // Get output html
    $html = $this->output->get_output();
    
    // Load pdf library
    $this->load->library('pdf');
    
    // Load HTML content
    $this->dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation
    $this->dompdf->setPaper('A3', 'portrait');
    
    // Render the HTML as PDF
    $this->dompdf->render();
    
    // Output the generated PDF (1 = download and 0 = preview)
    $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
  }

  function viewstudentcertificate(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("certificate");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('studentheader');
    $this->load->view('certificate',$data);
    $this->load->view('studentfooter');
  }

  function policy(){
    $this->load->view('header');
    $this->load->view('policy');
    $this->load->view('footer');
  }

  function terms(){
    $this->load->view('header');
    $this->load->view('terms');
    $this->load->view('footer');
  }

  function support(){
    $this->load->view('header');
    $this->load->view('support');
    $this->load->view('footer');
  }

  function endpointurl(){
    $this->load->view('header');
    $this->load->view('endpointurl');
    $this->load->view('footer');
  }

  function viewresult(){
    $query = $this->db->get('answer');
    $data['records'] = $query->result();
    $query = $this->db->get('student');
    $data['records1'] = $query->result();
    $query = $this->db->get('course_module');
    $data['records2'] = $query->result();
    $this->load->view('header');
    $this->load->view('viewresult',$data);
    $this->load->view('footer');
  }

  function instructorviewresult(){
    $query = $this->db->get('answer');
    $data['records'] = $query->result();
    $query = $this->db->get('student');
    $data['records1'] = $query->result();
    $query = $this->db->get('course_module');
    $data['records2'] = $query->result();
    $this->load->view('instructorheader');
    $this->load->view('viewresult',$data);
    $this->load->view('instructorfooter');
  }

  function studentviewresult(){
    $query = $this->db->get('answer');
    $data['records'] = $query->result();
    $query = $this->db->get_where('student',array('student_id'=>$this->session->userdata('student_id')));
    $data['records1'] = $query->result();
    $query = $this->db->get('course_module');
    $data['records2'] = $query->result();
    $this->load->view('studentheader');
    $this->load->view('viewresult',$data);
    $this->load->view('studentfooter');
  }

 
}	
?>