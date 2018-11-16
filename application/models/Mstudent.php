<?php
/**
 *
 */
class Mstudent extends CI_Model{

  public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url"));
		$this->load->library("form_validation");
  }

  public function addStudent($data){
    $this->db->insert("student",$data);
  }

  public function listStudents(){
    return $this->db->get("student");
  }

  public function getStudent($id){
    return $this->db->get_where("student",array("id"=>$id));
  }

  public function updateStudent($id,$data){
    $this->db->where("id",$id);
    $this->db->update("student",$data);
  }

  public function deleteStudent($id)
{
  $this->db->where('id', $id);
  $this->db->delete('student');
}

}



?>
