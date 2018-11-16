<?php
/**
 *
 */
class Tax_model extends CI_Model{

  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  function get_tax(){
    $query=$this->db->get("tax");
    return $query->result_array();
  }

  function insert(){
    $this->start=$_POST["start"];
    $this->rate=$_POST["rate"];
    $this->db->insert("tax",$this);
  }

  function get_blog($id){
    $this->db->where("id",$id);
    $query=$this->db->get("tax");
    return $query->row_array();
  }

  function delete_entry($id){
    // $this->id=$_POST["id"];
    $this->db->where("id",$id);
    $this->db->delete("tax");
    // $this->get_blog_all();
  }

}


?>
