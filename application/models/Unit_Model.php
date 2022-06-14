<?php
 class Unit_Model extends CI_Model{
 	function __construct(){
 		parent::__construct();
 		$this->load->database();
 	} 
 	function checkUnit($data){
		 $this->db->where('name',$data['name']);
     $this->db->from('unit');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }

	}


	function create($data){
		$check=$this->db->insert("unit",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function getAll(){
		$query=$this->db->get("unit");
		$data=$query->result_array();
		return $data;
	}
	function All(){
		$query=$this->db->get("unit");
		$data=$query->result_array();
		return $data;
	}


	function status($id){
		$query=$this->db->get_where("unit",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("unit",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("unit",['status'=>1]);
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
	$query=$this->db->get("unit");
	$data=$query->result_array();
	return $data;

}


function update($data){
	$this->db->where("id",$data['id']);
	$check=$this->db->update("unit",$data);
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function delete($id){
	$this->db->where("id",$id);
	$check=$this->db->delete("unit");
	if($check){
		return true;
	}
	else{
		return false;
	}
}
 }








 ?>