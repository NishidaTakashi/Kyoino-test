<?php
/**
 *
 */
class Tax_model extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function get_tax(){
    $query=$this->db->get("tax");
    return $query->result_array();
  }

  public function insert(){
    $this->start=$_POST["start"];
    $this->rate=$_POST["rate"];
    $this->db->insert("tax",$this);
  }

  public function select($id){
    $this->db->where("id",$id);
    $query=$this->db->get("tax");
    return $query->row_array();
  }

  public function delete($id){
    // $this->id=$_POST["id"];
    $this->db->where("id",$id);
    $this->db->delete("tax");
    // $this->get_blog_all();
  }

}


?>
