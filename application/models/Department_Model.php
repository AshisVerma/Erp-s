<?php
class Department_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function All(){
		$query=$this->db->select()
		->from("department")
		->get();
		return $query->result_array();
	}
}


?>