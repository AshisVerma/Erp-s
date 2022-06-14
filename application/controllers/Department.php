<?php
class Department extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Department_Model");
		$this->load->library("form_validation");
	}


	public function index(){
		$data=$this->Department_Model->All();
		$this->load->view("admin/pages/department/add",['data'=>$data]);



	}

	public function create(){
		print_r($_POST);
	}
}


?>