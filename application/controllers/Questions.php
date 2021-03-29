<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Quizmodel');
	}

	public function index(){
		$query=$this->db->get("course");
        $data['records']=$query->result();
		//$this->load->view('studentheader');
        $this->load->view('quiz',$data);
        //$this->load->view('studentfooter');
	}

	public function quizdisplay()
	{
		// get module id
		$module_id=$this->uri->segment('3');

		// load model
		$this->load->model('Quizmodel');

		// get data
		$this->data['questions'] = $this->Quizmodel->getQuestions($module_id);

		// set module id
		$this->data['module_id'] = $module_id;
		
		// load view
		$this->load->view('play_quiz', $this->data);
	}
	
	public function resultdisplay() {
		// get quiz id
		$getId = $this->db->select('quizID')
							->from("quiz")
							->where('module_id', $this->input->post('module_id'))
							->get()->result();
		
		// init array
		$arr = [];

		// loop quiz id
		foreach ($getId as $key => $value) {
			// update data
			$arr['ques'.++$key] = $this->input->post('quizid'.$value->quizID);
		}
		
		$this->data['checks'] = $arr;
		
		// $this->data['checks'] = array(
		//      'ques1' => $this->input->post('quizid1'),
		//      'ques2' => $this->input->post('quizid2'),
		// 	 'ques3' => $this->input->post('quizid3'),
		// 	 'ques4' => $this->input->post('quizid4'),
		//      'ques5' => $this->input->post('quizid5'),
		// 	 'ques6' => $this->input->post('quizid6'),
		// 	 'ques7' => $this->input->post('quizid7'),
		// 	 'ques8' => $this->input->post('quizid8'),
		//      'ques9' => $this->input->post('quizid9'),
		// 	 'ques10' => $this->input->post('quizid10'),
		// 	 'ques11' => $this->input->post('quizid11'),
		// 	 'ques12' => $this->input->post('quizid12'),
		// 	 'ques13' => $this->input->post('quizid13'),
		// );
        //$course_id=$this->input->post('course_id');
        $this->load->model('Quizmodel');
		$this->data['results'] = $this->Quizmodel->getAllQuestions($this->input->post('module_id'));
		$this->load->view('result_display', $this->data);
	}

	function addquiz(){

	$query2=$this->db->get("course");
    $data2['records1']=$query2->result();

    $query2=$this->db->get("course_module");
    $data2['records2']=$query2->result();

    $this->load->view('header');
    $this->load->view('addquiz',$data2);
    $this->load->view('footer');
  }

  function addquizdo(){
        
    $data=array("module_id"=>$this->input->post("cat_id"), "question"=>$this->input->post("question"),"choice1"=>$this->input->post("choice1"),"choice2"=>$this->input->post("choice2"),"choice3"=>$this->input->post("choice3"),"answer"=>$this->input->post("answer"));
    $this->session->set_flashdata('msg1',"Test Inserted Successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    $this->load->model('Quizmodel');
    $response=$this->Quizmodel->addmodule($data); 
    $this->addquiz();
  }

  public function viewquiz()
	{
		// get module id
		$module_id=$this->uri->segment('3');

		// load model
		$this->load->model('Quizmodel');

		// get data
		$this->data['records'] = $this->Quizmodel->getQuestions($module_id);

		// set module id
		$this->data['module_id'] = $module_id;
		
		// load view
		$this->load->view('viewquiz', $this->data);
	}


  function deletequiz()
  {
    $id=$this->uri->segment('3');
    $this->load->model('Quizmodel');
    $this->Quizmodel->delquiz($id);
    $this->viewquiz();
  }

  function addresult(){
  	$module_id=$this->input->post('module_id');
  	$data = array("student_id"=>$this->session->userdata('student_id'),"module_id"=>$module_id,"result"=>$this->session->userdata('score'));
  	$this->load->model('Quizmodel');
    $response=$this->Quizmodel->addresult($data);
	$this->resultdisplay();
  }
}