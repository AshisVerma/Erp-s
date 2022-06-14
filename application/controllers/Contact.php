<?php
class Contact extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Contact_Model");
		$this->load->library("form_validation");
	}

	public function index(){
		$data=$this->Contact_Model->getAll();
		$this->load->view("admin/pages/contact/list",['data'=>$data]);
	}

	public function add(){
		$country=$this->Contact_Model->country();
		$this->load->view("admin/pages/contact/add",['country'=>$country]);
	}


	public function create(){
		$file=$_FILES['image'];
		$image=$file['name'];
		$data=array(
                "name"=>$this->input->post("name"),
                "email"=>$this->input->post("email"),
                "description"=>$this->input->post("desc"),
                "status"=>$this->input->post("status"),
                "contact_type"=>$this->input->post("contact_type"),
                "business_name"=>$this->input->post("business_name"),
                "tax_no"=>$this->input->post("tax-no"),
                "opening_balance"=>$this->input->post("open-balance"),
                "pay_term"=>$this->input->post("pay-term"),
                "pay_term_condition"=>$this->input->post("pay-term-condition"),
                "email"=>$this->input->post("email"),
                "mobile"=>$this->input->post("mobile"),
                "emp_contact_no"=>$this->input->post("alertnate-contact-no"),
                "password"=>$this->input->post("password"),
                "country"=>$this->input->post("country"),
                "state"=>$this->input->post("state"),
                "city"=>$this->input->post("city"),
                "address"=>$this->input->post("address"),
                "description"=>$this->input->post("notes"),
                "image"=>$image,
           
			);

			$checkcontact=$this->Contact_Model->checkcontact($data);
			if(!$checkcontact){
				$create=$this->Contact_Model->create($data);
				if(!$check){
					move_uploaded_file($file['tmp_name'], "./upload/contact/image/".$image);
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> contact Created Succesfully</div>');
               redirect('contact/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('contact/add');
		}

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>Email already exist </div>');
             redirect('contact/add');
			}

	}

	public function status($id){
		$check=$this->Contact_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> contact Status Updated  Succesfully</div>');
               redirect('contact/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('contact');
		}
	}

	public function edit($id){
		$data=$this->Contact_Model->edit($id);

		$this->load->view("admin/pages/contact/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             "code"=>$this->input->post("code"),
             "description"=>$this->input->post("desc")
         );
		$check=$this->Contact_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> contact  Updated  Succesfully</div>');
               redirect('contact/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('contact');
		}
	}

	public function delete($id){
		$check=$this->Contact_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> contact  Deleted  Succesfully</div>');
               redirect('contact/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('contact');
		}

	}


	public function state($country){

		$data=$this->Contact_Model->state($country);
		echo json_encode(['data'=>$data]);
		
	}
	public function city($state){

		$data=$this->Contact_Model->city($state);
		echo json_encode(['data'=>$data]);
		
	}
}


?>