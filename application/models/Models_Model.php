<?php
class Models_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function checkmodel($data){
		 $this->db->where('name',$data['name']);
     $this->db->from('model');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }

	}


	function create($data){
		$check=$this->db->insert("model",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function getAll($limit,$offset){
		$query=$this->db->select()
		->from("model")
		->limit($limit,$offset)
		->get();
		return $query->result_array();
	}
	function All(){
		$query=$this->db->select()
		->from("model")
		
		->get();
		return $query->result_array();
	}


	function status($id){
		$query=$this->db->get_where("model",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("model",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("model",['status'=>1]);
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
	$query=$this->db->get("model");
	$data=$query->result_array();
	return $data;

}


function update($data){
	$this->db->where("id",$data['id']);
	$check=$this->db->update("model",$data);
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function delete($id){
	$this->db->where("id",$id);
	$check=$this->db->delete("model");
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function total_rows(){
	$query=$this->db->select()
	->from("model")
	
	->get();
	return $query->result(); 
}
}


?>