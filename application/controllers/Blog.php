<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url"));
		$this->load->library("form_validation");
		$this->load->model("Blog_model");
	}

	function index(){
		$data["blogs"]=$this->Blog_model->get_blog_all();
		$this->load->view("blog",$data);
	}

	public function form(){
		$this->form_validation->set_rules("title","タイトル","required");
		if ($this->form_validation->run() === FALSE) {
			$this->load->view("blog_form");
		}else {
			$this->Blog_model->insert_entry();
			$this->load->view("success");
		}
	}

	public function update($id){
		$this->form_validation->set_rules("title","タイトル","required");
		if ($this->form_validation->run() === FALSE) {
			$data["blog"]=$this->Blog_model->get_blog($id);
			$this->load->view("blog_update",$data);
		}else {
			$this->Blog_model->update_entry($id);
			$this->load->view("success");
		}
	}

	public function delete($id){
		$this->Blog_model->delete_entry($id);
		$this->load->view("success");
		// $this->index();
	}
}
?>
