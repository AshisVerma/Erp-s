<?php
class Category extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Category_Model");
		$this->load->library("form_validation");
	}

	public function index(){
		$data=$this->Category_Model->getAll();
		$this->load->view("admin/pages/category/list",['data'=>$data]);
	}

	public function add(){
		$this->load->view("admin/pages/category/add");
	}


	public function create(){
		$this->form_validation->set_rules("name","name","trim|required",array("required"=>"Category name can`t be empty "));
		$this->form_validation->set_rules("code","code","trim|required",array("required"=>"Category code  can`t be empty "));
		$this->form_validation->set_rules("desc","name","trim|required",array("required"=>"Category description can`t be empty "));

		if($this->form_validation->run()==false){
			$this->load->view("admin/pages/category/add");
		}
		else{
			$data=array(
                "name"=>$this->input->post("name"),
                "code"=>$this->input->post("code"),
                "description"=>$this->input->post("desc"),
                "status"=>$this->input->post("status"),
           
			);

			$checkCategory=$this->Category_Model->checkCategory($data);
			if(!$checkCategory){
				$create=$this->Category_Model->create($data);
				if(!$check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Category Created Succesfully</div>');
               redirect('category/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('category/add');
		}

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Category name already exist </div>');
             redirect('category/add');
			}
		}

	}

	public function status($id){
		$check=$this->Category_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Category Status Updated  Succesfully</div>');
               redirect('category/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('category');
		}
	}

	public function edit($id){
		$data=$this->Category_Model->edit($id);

		$this->load->view("admin/pages/category/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             "code"=>$this->input->post("code"),
             "description"=>$this->input->post("desc")
         );
		$check=$this->Category_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Category  Updated  Succesfully</div>');
               redirect('category/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('category');
		}
	}

	public function delete($id){
		$check=$this->Category_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Category  Deleted  Succesfully</div>');
               redirect('category/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('category');
		}

	}
}


?>