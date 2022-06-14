<?php
class Staff extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("Staff_Model");
		$this->load->helper("url");
	}


	public function index(){
		$data=$this->Staff_Model->All();
		$this->load->view("admin/pages/staff/add");
	}

	public function create(){
		print_r($_POST);
		print_r($_FILES);
	}
}


?>