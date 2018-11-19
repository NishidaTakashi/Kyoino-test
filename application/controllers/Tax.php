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
		$this->form_validation->set_rules("start","開始日付","required");
		$this->form_validation->set_rules("rate","税率","required");
		if ($this->form_validation->run() === FALSE) {
			redirect("tax","refresh");
		}else {
			$this->Tax_model->insert($_POST);
			redirect("tax","refresh");
		}
	}

	public function delete(){
	$id = $this->uri->segment(3);
	$this->Tax_model->delete($id);
	redirect('tax','refresh');
	}

	public function select(){
		$this->form_validation->set_rules("money","お金","required");
		$this->form_validation->set_rules("started","日付","required");

		$data["taxes"]=$this->Tax_model->get_tax();
		$data["tax_money"]=$this->Tax_model->select();
		$data["money"]=$_POST["money"];
		$data["started"]=$_POST["started"];

		if ($this->form_validation->run() === FALSE) {
			redirect("tax","refresh");
		}else {
			$this->load->view("tax",$data);
		}
	}


}
