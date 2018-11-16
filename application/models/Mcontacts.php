<?php
/**
 *
 */
class Mcontacts extends CI_Model{

  public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url"));
		$this->load->library("form_validation");
		$this->load->model("Mcontacts");
  }

  function addContact(){
    $now = date("Y-m-d H:i:s");
    $data = array(
      "name" =>$this->input->post("name"),
      "email" =>$this->input->post("email"),
      "notes" =>$this->input->post("notes"),
      "ipaddress" =>$this->input->ip_address(),
      "stamp"=>$now
    );

    $this->db->insert("lesson",$data);
  }
}



?>
