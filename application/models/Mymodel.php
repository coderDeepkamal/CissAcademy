<?php
class Mymodel extends CI_Model
{

 function __construct()
 {
  parent::__construct();
 }

 function add($data)
 {
	if($this->db->insert("student",$data))
      return true;		
 }

 public function checkuser($phone) 
  {
    $this->db->where('phone',$phone);
    //$this->db->where('email',$email);
    $query=$this->db->get('student');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }

  public function checkInstructor($phone,$email) 
  {
    $this->db->where('phone',$phone);
    $this->db->where('email',$email);
    $query=$this->db->get('instructor');
    if($query->num_rows()>0)
    {
    return 1; 
    }
    else
    {
    return 0; 
    }
  }

 function add1($data)
 {
	if($this->db->insert("instructor",$data))
      return true;		
 }

 function validate($email,$password){
    $this->db->where("(student.email = '$email' OR student.phone = '$email')");
    $this->db->where('password',$password);
    $result = $this->db->get('student');
    return $result;
  }

 function validate1($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('instructor');
    return $result;
  }

  function validate2($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('admin');
    return $result;
  } 

  function addcourse($data)
 {
  $this->db->insert("course",$data);
  $response['message'] = 'course added successfully';
  return $response;        
 } 

 function addmodule($data)
 {
  //$id=$this->input->post('module_id');
  $this->db->insert('course_module', $data);
  $response['message'] = 'module added successfully';
  return $response;        
 }

 function addchat($data)
 {
  //$id=$this->input->post('student_id');
  $this->db->insert('messages', $data);
  $response['message'] = 'message sent successfully';
  return $response;        
 }

 function enroll($data)
 {
  $this->db->insert("enroll",$data);
  $response['message'] = 'course added successfully';
  return $response;        
 } 

 function addcontent($data)
 {
  //$id=$this->input->post('module_id');
  $this->db->insert('course_content', $data);
  $response['message'] = 'Content added successfully';
  return $response;        
 }

 function addinvoice($data)
 {
  $this->db->insert('invoice', $data);
  $response['message'] = 'invoice added successfully';
  return $response;        
 }

 function addcertificate($data)
 {
  $this->db->insert('certificate', $data);
  $response['message'] = 'certificate added successfully';
  return $response;        
 }

 function del($id)
 {
  $this->db->delete("course","course_id=".$id);
 }

 function delinstructor($id)
 {
  $this->db->delete("instructor","id=".$id);
 }

 function delstudent($id)
 {
  $this->db->delete("student","student_id=".$id);
 }

 

 function deletemodule($id)
 {
  $this->db->delete("course_module","module_id=".$id);
 }

 function deletecontent($id)
 {
  $this->db->delete("course_content","content_id=".$id);
 }

 function updatestudent($data,$id)
  {
    $this->db->set($data);
    $this->db->where("student_id",$id);
    $this->db->update("student",$data);
  }

  function updateinstructor($data,$id)
  {
    $this->db->set($data);
    $this->db->where("id",$id);
    $this->db->update("instructor",$data);
  }

  function updateadminprofile($data,$id)
  {
    $this->db->set($data);
    $this->db->where("id",$id);
    $this->db->update("admin",$data);
  }

  function updateinstructorprofile($data,$id)
  {
    $this->db->set($data);
    $this->db->where("id",$id);
    $this->db->update("instructor",$data);
  }

  function updatestudentprofile($data,$id)
  {
    $this->db->set($data);
    $this->db->where("student_id",$id);
    $this->db->update("student",$data);
  }

  function fetch( $limit, $offset ){
    
    $query=$this->db->limit( $limit, $offset );
    $query=$this->db->get("student");
    return $query->result();
 }

 function num_rows(){
    $query=$this->db->get("student");
    return $query->num_rows();
 }

 function fetch1( $limit, $offset ){
    $query=$this->db->where("isapprove",1);
    $query=$this->db->limit( $limit, $offset );
    $query=$this->db->get("student");
    return $query->result();
 }

 function num_rows1(){
    $query=$this->db->where("isapprove",1);
    $query=$this->db->get("student");
    return $query->num_rows();
 }
}
?>