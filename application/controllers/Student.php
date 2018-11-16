<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url"));
		$this->load->library("form_validation");
	}

	public function index(){
		$data["title"]="Classroom: Home Page";
		$data["headline"]="Welcome to the Classroom Management System";
		$data["include"]="student_index";
		$this->load->view("template2",$data);
	}

	public function add(){

		$data["title"]="Classroom: Add Page";
		$data["headline"]="Add a New Student";
		$data["include"]="student_add";

		$this->load->view("template2",$data);

	}

	public function create(){
		$this->load->model("Mstudent","",TRUE);
		$this->Mstudent->addStudent($_POST);
		redirect("student/add",refresh);
	}

	public function listing(){
		$this->load->library("table");

		$this->load->model("Mstudent","",TRUE);
		$students_qry=$this->Mstudent->listStudents();

		$tmpl = array (
  'table_open' => '<table border="0" cellpadding="3" cellspacing="0">',
  'heading_row_start' => '<tr bgcolor="#66cc44">',
  'row_start' => '<tr bgcolor="#dddddd">'
  );
$this->table->set_template($tmpl);

$this->table->set_empty("&nbsp;");

$this->table->set_heading('', 'Name','Text');

$table_row = array();
foreach ($students_qry->result() as $student)
{
  $table_row = NULL;
	$table_row[] = '<nobr>' .
	  anchor('student/edit/' . $student->id, 'edit') . ' | ' .
	  anchor('student/delete/' . $student->id, 'delete') .
	  '</nobr>';
		$table_row[] = $student->name;
  $table_row[] = $student->text;

  $this->table->add_row($table_row);
}

$students_table = $this->table->generate();

		// $students_table=$this->table->generate($students_qry);

		$data["title"]="Classroom: Student Listing";
		$data["headline"]="Student Listing";
		$data["include"]="student_listing";

		$data["data_table"]=$students_table;

		$this->load->view("template2",$data);

	}

	public function edit(){
		$id=$this->uri->segment(3);
		$this->load->model("Mstudent","",TRUE);
		$data["row"]=$this->Mstudent->getStudent($id)->result();

		$data["title"]="Classroom: Edit Listing";
		$data["headline"]="Edit Student Information";
		$data["include"]="student_edit";

		$this->load->view("template2",$data);

	}

	public function update(){
		$this->load->model("Mstudent","",TRUE);
		$this->Mstudent->updateStudent($_POST["id"],$_POST);
		redirect("student/listing","refresh");
	}

	function delete()
{
  $id = $this->uri->segment(3);

  $this->load->model('Mstudent','',TRUE);
  $this->Mstudent->deleteStudent($id);
  redirect('student/listing','refresh');
}

	// public function form(){
	// 	$this->form_validation->set_rules("title","タイトル","required");
	// 	if ($this->form_validation->run() === FALSE) {
	// 		$this->load->view("blog_form");
	// 	}else {
	// 		$this->Blog_model->insert_entry();
	// 		$this->load->view("success");
	// 	}
	// }
	//
	// public function update($id){
	// 	$this->form_validation->set_rules("title","タイトル","required");
	// 	if ($this->form_validation->run() === FALSE) {
	// 		$data["blog"]=$this->Blog_model->get_blog($id);
	// 		$this->load->view("blog_update",$data);
	// 	}else {
	// 		$this->Blog_model->update_entry($id);
	// 		$this->load->view("success");
	// 	}
	// }
	//
	// public function delete($id){
	// 	$this->Blog_model->delete_entry($id);
	// 	$this->load->view("success");
	// 	// $this->index();
	// }
}
?>
