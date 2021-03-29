<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->database(); //connect database
	    $this->load->helper('url'); 
	    $this->load->library('session');
	    $this->load->model('Accountantmodel');
	}

	public function index()
	{
		$this->load->view('accountantlogin');
		
	}

	function accountantlogindo()
  { 
    $email   = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->Accountantmodel->validate($email,$password);

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
          $this->load->view('accountheader');
          $this->load->view('accountdashboard');
          $this->load->view('accountfooter');
        } else {
            $this->session->set_flashdata('msg1',"Admin approval needed");
            $this->session->set_flashdata('msg_class','alert-success');
            $this->load->view('accountantlogin');
        }
     }
     else
     {
       $this->session->set_flashdata('msg1',"wrong Number or password");
        $this->session->set_flashdata('msg_class','alert-success');
        $this->load->view('accountantlogin');

     }
  }

  function accountantlogout(){
    unset($_SESSION['email']);
    $this->load->view('homepage');
  }

  function viewinvoice(){
    $query=$this->db->get("student");
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $this->load->view('accountheader');
    $this->load->view('accountviewinvoice',$data);
    $this->load->view('accountfooter');
  }

  function invoice(){
    $student_id = $this->uri->segment('3');
    $query=$this->db->get_where("student",array('student_id'=>$student_id));
    $data['records']=$query->result();
    $query=$this->db->get("invoice");
    $data['records1']=$query->result();
    $query=$this->db->get("course");
    $data['records2']=$query->result();
    $this->load->view('accountheader');
    $this->load->view('invoice',$data);
    $this->load->view('accountfooter');
  }

  function deleteinvoice()
  {
    $id=$this->uri->segment('3');
    $this->Accountantmodel->delinvoice($id);
    $this->viewinvoice();
  }

}
