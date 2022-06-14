<?php

class Staff_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function checkStaff($data){
		 $this->db->where('email',$data['email']);
     $this->db->from('staff');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }

	}


	function create($data){
		$check=$this->db->insert("staff",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function getAll(){
		$query=$this->db->get("staff");
		$data=$query->result_array();
		return $data;
	}
	function All(){
		$query=$this->db->get("staff");
		$data=$query->result_array();
		return $data;
	}


	function status($id){
		$query=$this->db->get_where("staff",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("staff",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("staff",['status'=>1]);
			if($check){
				return true;
			}
			else{
				return false;
			}
		}

	}

function edit($id){
	$this->db->where("id",$id);
	$query=$this->db->get("staff");
	$data=$query->result_array();
	return $data;

}


function update($data){
	$this->db->where("id",$data['id']);
	$check=$this->db->update("staff",$data);
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function delete($id){
	$this->db->where("id",$id);
	$check=$this->db->delete("staff");
	if($check){
		return true;
	}
	else{
		return false;
	}
}
}


?>