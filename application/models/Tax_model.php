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


  public function select(){
    $started=$_POST["started"];
    $money=$_POST["money"];
    $query=$this->db->query("select rate*{$money}/100+{$money} as tax_money from tax
                                 where start <= '{$started}'
                                 order by start DESC
                                 limit 1");
    return $query->row_array();
  }

  public function delete($id){
    $this->db->where("id",$id);
    $this->db->delete("tax");
  }

}


?>
