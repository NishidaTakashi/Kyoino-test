<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->helper('form');
		$data["title"] = "Welcome to our Site";
		$data["headline"] = "Welcome!";
		$data["include"] = "home";
		$this->load->vars($data);
		$this->load->view("template");
	}

	public function contact(){
		$this->load->helper("url");
		if ($this->input->post("email")) {
			$this->load->model("MContacts","",TRUE);
			$this->MContacts->addContact();
			redirect("welcome/thankyou","refresh");
		}else {
			redirect("welcome/index","refresh");
		}
	}

	public function thankyou(){
		$data["title"]="Thank You!";
		$data["headline"]="Thanks!";
		$data["include"]="thanks";
		$this->load->vars($data);
		$this->load->view("template");
	}
}