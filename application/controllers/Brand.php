<?php
class Brand extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Brand_Model");
		$this->load->library("form_validation");
	}


	public function index(){
		$data=$this->Brand_Model->getAll();
		$this->load->view("admin/pages/brand/list",['data'=>$data]);
	}

	public function add(){
		$this->load->view("admin/pages/brand/add");
	}


	public function create(){
		$this->form_validation->set_rules("name","name","trim|required",array("required"=>"Brand name can`t be empty "));
		
		$this->form_validation->set_rules("desc","name","trim|required",array("required"=>"Brand description can`t be empty "));

		if($this->form_validation->run()==false){
			$this->load->view("admin/pages/brand/add");
		}
		else{
			$data=array(
                "name"=>$this->input->post("name"),
               
                "description"=>$this->input->post("desc"),
                "status"=>$this->input->post("status"),
           
			);

			$checkBrand=$this->Brand_Model->checkBrand($data);
			if(!$checkBrand){
				$create=$this->Brand_Model->create($data);
				if(!$check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i>Brand Created Succesfully</div>');
               redirect('brand/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('brand/add');
		}

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Brand name already exist </div>');
             redirect('brand/add');
			}
		}

	}

	public function status($id){
		$check=$this->Brand_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Brand Status Updated  Succesfully</div>');
               redirect('brand/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('brand');
		}
	}

	public function edit($id){
		$data=$this->Brand_Model->edit($id);

		$this->load->view("admin/pages/brand/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             
             "description"=>$this->input->post("desc")
         );
		$check=$this->Brand_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Brand  Updated  Succesfully</div>');
               redirect('brand/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('brand');
		}
	}

	public function delete($id){
		$check=$this->Brand_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Brand  Deleted  Succesfully</div>');
               redirect('brand/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('brand');
		}

	}
}


?>