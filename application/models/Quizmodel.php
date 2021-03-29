<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizmodel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getQuestions($module_id)
    {
        $this->db->select("quizID, question, choice1, choice2, choice3, answer");
        $this->db->from("quiz");
        $this->db->where("module_id",$module_id);
        $query = $this->db->get();
        
        return $query->result();
        
        $num_data_returned = $query->num_rows;
        
        if ($num_data_returned < 1) {
          echo "There is no data in the database";
          exit();   
        }
    }

    public function getAllQuestions($module_id)
    {
        $result = $this->db->select('quizID, module_id, question, choice1, choice2, choice3, answer')
                            ->from("quiz")
                            ->where('module_id', $module_id)
                            ->order_by('quizID', 'asc')
                            ->get()->result();

        return $result;
        
        
        $num_data_returned = $query->num_rows;
        
        if ($num_data_returned < 1) {
          echo "There is no data in the database";
          exit();   
        }
    }

    

    function addmodule($data)
    {
        //$id=$this->input->post('module_id');
        $this->db->insert('quiz', $data);
        $response['message'] = 'quiz added successfully';
        return $response;        
    }

    function addresult($data)
    {
        //$id=$this->input->post('module_id');
        $this->db->insert('answer', $data);
        $response['message'] = 'result added successfully';
        return $response;        
    }

    function delquiz($id){  
        $this->db->delete("quiz","quizID=".$id);
    }
}