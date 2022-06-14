<?php
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Product_Model");
		$this->load->library("form_validation");
		$this->load->model("Category_Model");
		$this->load->model("Brand_Model");
		$this->load->model("Models_Model");
		$this->load->model("Unit_Model");
	}


	public function index(){
		
		$data=$this->Product_Model->getAll();
		
       
		$this->load->view("admin/pages/product/list",['data'=>$data]);
	}

	public function add(){
		$category=$this->Category_Model->All();
		$brand=$this->Brand_Model->All();
		$model=$this->Models_Model->All();
		
		$unit=$this->Unit_Model->All();
		$this->load->view("admin/pages/product/add",['category'=>$category,'brand'=>$brand,'model'=>$model,'unit'=>$unit]);
	}


	public function create(){
		// $this->form_validation->set_rules('type','type','required|callback_check_default1');
  //        $this->form_validation->set_message('check_default1', 'Select Product Type');
		$this->form_validation->set_rules("name","name","trim|required",array("required"=>"Product name can`t be empty "));
		$this->form_validation->set_rules("sku","sku","trim|required",array("required"=>"Product SKU can`t be empty "));
	    // $this->form_validation->set_rules('unit','unit','required|callback_check_default2');
     //     $this->form_validation->set_message('check_default2', 'Select Unit');
         //   $this->form_validation->set_rules('barcode','barcode','required|callback_check_default3');
         // $this->form_validation->set_message('check_default3', 'Select Bardcode Type');
         //   $this->form_validation->set_rules('brand','brand','required|callback_check_default4');
         // $this->form_validation->set_message('check_default4', 'Select Brand');

         //   $this->form_validation->set_rules('category','category','required|callback_check_default5');
         // $this->form_validation->set_message('check_default5', 'Select Category');
         //   $this->form_validation->set_rules('model','model','required|callback_check_default6');
         // $this->form_validation->set_message('check_default6', 'Select Model');

         //   $this->form_validation->set_rules('tax_type','tax_type','required|callback_check_default7');
         // $this->form_validation->set_message('check_default7', 'Select Tax Type');
         
		$this->form_validation->set_rules("tax","tax","trim|required",array("required"=>"Tax can`t be empty "));

          $this->form_validation->set_rules("min_selling_price","min_selling_price","trim|required",array("required"=>"Min Selling Price can`t be empty "));
          $this->form_validation->set_rules("product_price","product_price","trim|required",array("required"=>"Product price can`t be empty "));
          $this->form_validation->set_rules("selling_price","selling_price","trim|required",array("required"=>"Selling Price  can`t be empty "));
          // $this->form_validation->set_rules("image","image","trim|required",array("required"=>"Product image can`t be empty "));
		$this->form_validation->set_rules("desc","name","trim|required",array("required"=>"Product description can`t be empty "));

		if($this->form_validation->run()==false){
			$category=$this->Category_Model->All();
		$brand=$this->Brand_Model->All();
		$model=$this->Models_Model->All();
		
		$unit=$this->Unit_Model->All();
		$this->load->view("admin/pages/product/add",['category'=>$category,'brand'=>$brand,'model'=>$model,'unit'=>$unit]);
		}
		else{
			$file=$_FILES['image'];
			$image=$file['name'];
			$data=array(
                "name"=>$this->input->post("name"),
                "description"=>$this->input->post("desc"),
                "status"=>$this->input->post("status"),
                "product_type"=>$this->input->post("type"),
                "sku"=>$this->input->post("sku"),
                "unit"=>$this->input->post("unit"),
                "barcode"=>$this->input->post("barcode"),
                "brand"=>$this->input->post("brand"),
                "category"=>$this->input->post("category"),
                "model"=>$this->input->post("model"),
                "status"=>$this->input->post("status"),
                "image"=>$image,
                "purchase_price"=>$this->input->post("product_price"),
                "selling_price"=>$this->input->post("selling_price"),
                "min_selling_price"=>$this->input->post("min_selling_price"),
                "tax"=>$this->input->post("tax"),
                "tax_type"=>$this->input->post("tax_type"),
                "description"=>$this->input->post("desc"),

           
			);
			

			$checkproduct=$this->Product_Model->checkproduct($data['name']);
			
			if($checkproduct){
				$create=$this->Product_Model->create($data);
				if($create){
					move_uploaded_file($file['tmp_name'], "./upload/product/image/".$image);
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i>product Created Succesfully</div>');
               redirect('product/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('product/add');
		}

			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i>product name already exist </div>');
             redirect('product/add');
			}
		}

	}

	public function status($id){
		$check=$this->Product_Model->status($id);

		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> product Status Updated  Succesfully</div>');
               redirect('product/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('product');
		}
	}

	public function edit($id){
		$data=$this->Product_Model->edit($id);

		$this->load->view("admin/pages/product/edit",['data'=>$data]);
	}


	public function update(){
		$data=array(
             "id"=>$this->input->post("id"),
             "name"=>$this->input->post("name"),
             
             "description"=>$this->input->post("desc")
         );
		$check=$this->Product_Model->update($data);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> product  Updated  Succesfully</div>');
               redirect('product/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('product');
		}
	}

	public function delete($id){
		$check=$this->Product_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> product  Deleted  Succesfully</div>');
               redirect('product/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('product');
		}

	}
}


?>