<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url"));
		$this->load->library("form_validation");
		$this->load->model("Tax_model");
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data["taxes"]=$this->Tax_model->get_tax();
		$this->load->view("tax",$data);
	}

	public function insert(){
		$this->Tax_model->insert($_POST);
		redirect("tax","refresh");
	}
  
	public function delete(){
	$id = $this->uri->segment(3);
	$this->Tax_model->delete($id);
	redirect('tax','refresh');
　}

}
