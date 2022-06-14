<?php
class unit extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Unit_Model");
		$this->load->library("form_validation");
	}


	public function index(){
		$data=$this->Unit_Model->getAll();
		$this->load->view("admin/pages/unit/list",['data'=>$data]);
	}

	public function add(){
		$this->load->view("admin/pages/unit/add");
	}


	public function create(){
		$this->form_validation->set_rules("name","name","trim|required",array("required"=>"Unit name can`t be empty "));
		
		$this->form_validation->set_rules("desc","name","trim|required",array("required"=>"Unit description can`t be empty "));

		if($this->form_validation->run()==false){
			$this->load->view("admin/pages/unit/add");
		}
		else{
			$data=array(
                "name"=>$this->input->post("name"),
               
                "description"=>$this->input->post("desc"),
                "status"=>$this->input->post("status"),
           
			);

			$checkunit=$this->Unit_Model->checkunit($data);
			if(!$checkunit){
				$create=$this->Unit_Model->create($data);
				if(!$check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i>Unit Created Succesfully</div>');
               redirect('unit/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('unit/add');
		}

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Unit name already exist </div>');
             redirect('unit/add');
			}
		}

	}

	public function status($id){
		$check=$this->Unit_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Unit Status Updated  Succesfully</div>');
               redirect('unit/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('unit');
		}
	}

	public function edit($id){
		$data=$this->Unit_Model->edit($id);

		$this->load->view("admin/pages/unit/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             
             "description"=>$this->input->post("desc")
         );
		$check=$this->Unit_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Unit  Updated  Succesfully</div>');
               redirect('unit/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('unit');
		}
	}

	public function delete($id){
		$check=$this->Unit_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Unit  Deleted  Succesfully</div>');
               redirect('unit/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('unit');
		}

	}
}


?>