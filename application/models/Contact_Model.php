<?php
 class Contact_Model extends CI_Model{
 	function __construct(){
 		parent::__construct();
 		$this->load->database();
 	} 
 	function checkcontact($data){
		 
		 $this->db->where("email",$data['email']);
     $this->db->from('contact');
     $query= $this->db->get();
     if($query->num_rows() > 0){
      return true;
      }else{
         return false;
         }

	}


	function create($data){
		$check=$this->db->insert("contact",$data);
		if($check){
			return true;
		}
		else{
			return false;
		}
	}


	function getAll(){
		$query=$this->db->get("contact");
		$data=$query->result_array();
		return $data;
	}
	function All(){
		$query=$this->db->get("contact");
		$data=$query->result_array();
		return $data;
	}


	function status($id){
		$query=$this->db->get_where("contact",array("id"=>$id));
		$data=$query->result_array();
		
		if($data[0]['status']==1){
			$this->db->where("id",$id);
			$check=$this->db->update("contact",['status'=>0]);
			if($check){
				return true;
			}
			else{
				return false;
			}

		}
		else{
			$this->db->where("id",$id);
			$check=$this->db->update("contact",['status'=>1]);
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
	$query=$this->db->get("contact");
	$data=$query->result_array();
	return $data;

}


function update($data){
	$this->db->where("id",$data['id']);
	$check=$this->db->update("contact",$data);
	if($check){
		return true;
	}
	else{
		return false;
	}
}

function delete($id){
	$this->db->where("id",$id);
	$check=$this->db->delete("contact");
	if($check){
		return true;
	}
	else{
		return false;
	}
}


//country get
function country(){
	$query=$this->db->get("country");
	return $query->result_array();
}

//end country get


//state get
function state($country){
	
	 $this->db->where("country_id",$country);
	
	$query=$this->db->get("state");
	return $query->result_array();
}
//end state get

//city get
function city($state){
	 $this->db->where("state_id",$state);
	
	$query=$this->db->get("city");
	return $query->result_array();
}
//end city get
 }








 ?>