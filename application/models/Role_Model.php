<?php
class Role_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function All(){
		$query=$this->db->get("role");
		return $query->result_array();
	}


	function checkRole($data){

		$this->db->where("name",$data['name']);
		 $this->db->from('role');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }


	}

	function create($data){
		$check=$this->db->insert("role",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function change_Status($id){
		$query=$this->db->get_where("role",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("role",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("role",['status'=>1]);
			if($check){
				return true;
			}
			else{
				return false;
			}
		}
	}
}


?>