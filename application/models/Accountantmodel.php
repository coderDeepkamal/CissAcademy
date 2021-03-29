<?php
class Accountantmodel extends CI_Model
{

 function __construct()
 {
  parent::__construct();
 }

 function validate($email,$password)
 {
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('accountant');
    return $result;
 }

 function delinvoice($id)
 {
  $this->db->delete("invoice","invoice_id=".$id);
 }

}

?>