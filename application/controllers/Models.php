<?php
class Models extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Models_Model");
		$this->load->library("form_validation");
		$this->load->library("pagination");
	}


	public function index($offset=0){

		
		$total_row=$this->Models_Model->total_rows();
		$config=[
			"base_url"=>base_url('models'),
			"per_page"=>8,
			"total_rows"=>$total_row,

		];
		$this->pagination->initialize($config);
		$data=$this->Models_Model->getAll($config['per_page'],$this->uri->segment(3));
		
		$this->load->view("admin/pages/model/list",['data'=>$data,]);
	}



	

	


	public function create(){
		$this->form_validation->set_rules("name","name","trim|required",array("required"=>"Model name can`t be empty "));
		
		$this->form_validation->set_rules("desc","name","trim|required",array("required"=>"Model description can`t be empty "));

		if($this->form_validation->run()==false){
			$this->load->view("admin/pages/models/add");
		}
		else{
			$data=array(
                "name"=>$this->input->post("name"),
               
                "description"=>$this->input->post("desc"),
                "status"=>$this->input->post("status"),
           
			);

			$checkmodel=$this->Models_Model->checkmodel($data);
			if(!$checkmodel){
				$create=$this->Models_Model->create($data);
				if(!$check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i>Model Created Succesfully</div>');
               redirect('models/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('models/add');
		}

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>model name already exist </div>');
             redirect('models/add');
			}
		}

	}

	public function status($id){
		$check=$this->Models_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Model Status Updated  Succesfully</div>');
               redirect('models/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('models/');
		}
	}

	public function edit($id){
		$data=$this->Models_Model->edit($id);

		$this->load->view("admin/pages/models/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             
             "description"=>$this->input->post("desc")
         );
		$check=$this->Models_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Model  Updated  Succesfully</div>');
               redirect('models/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('models');
		}
	}

	public function delete($id){
		$check=$this->Models_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Model  Deleted  Succesfully</div>');
               redirect('models/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('models');
		}

	}
	public function add(){
		$this->load->view("admin/pages/model/add");
	}




	




	


}

?>