<?php  $this->load->view("admin/layout/header") ?>
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add PRODUCT
            </h3>
          <a href="<?php echo site_url('PRODUCT') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">PRODUCT LIST</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >ADD PRODUCT</h5>

          			</div>
          			<div class="card-body">
          				 <form action="<?php echo site_url('PRODUCT/create') ?>" method="post"  enctype="multipart/form-data">
        <div class="row">
          <div class="col"> <div class="form-group">
           <label>PRODUCT TYPE</label>
          
          <select class="form-control shadow-none" name="type">
            <option>SELECT PRTODUCT TYPE</option>
            <option value="single" <?php if(set_value('sku')=='single') echo "selected"; ?>>SINGLE</option>
             <option value="variant">VARIANT</option>
              <option value="combo">COMBO</option>
               <option value="service">SERVICE</option>
          </select>
           <div class="text-danger"><?php echo form_error('type') ?></div>
         </div></div>
          <div class="col"> 
            <div class="form-group">
              <label>PRODUCT NAME</label>
              <input type="text" name="name" placeholder="Product Name" class="form-control"  value="<?=set_value('name')?>">
               <div class="text-danger"><?php echo form_error('name') ?></div>
            </div></div>
          <div class="col">
             <div class="form-group">
              <label>PRODUCT SKU</label>
              <input type="text" name="sku" placeholder="Product Name" class="form-control"  value="<?=set_value('sku')?>">
               <div class="text-danger"><?php echo form_error('sku') ?></div>
            </div>
            
          </div>
        </div>
         <div class="row">
           <div class="col">
             <div class="form-group">
           <label>UNIT</label>
           <select class="form-control shadow-none" name="unit">
             <option>Select Unit</option>
             <?php foreach($unit as $unit_list) {?>
               <option><?php echo $unit_list['name']?></option>


             <?php }?>
           </select>
              <div class="text-danger"><?php echo form_error('unit') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>BARCODE TYPE</label>
           <select class="form-control shadow-none" name="barcode">
             <option>Select Barcode Type</option>
             <option>C39</option>
           </select>
              <div class="text-danger"><?php echo form_error('barcode') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>BRAND</label>
          <select class="form-control shadow-none" name="brand">
            <option>Select Brand</option>
          
             <?php foreach($brand as $brand_list) {?>
               <option><?php echo $brand_list['name']?></option>


             <?php }?>
          </select>
              <div class="text-danger"><?php echo form_error('brand') ?></div>
         </div>
           </div>
         </div>
          <div class="row">
           <div class="col">
             <div class="form-group">
           <label>CATEGORY</label>
           <select class="form-control shadow-none" name="category">
             <option>Select CATEGORY</option>
            
             <?php foreach($category as $category_list) {?>
               <option><?php echo $category_list['name']?></option>


             <?php }?>
           </select>
              <div class="text-danger"><?php echo form_error('category') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>MODEL</label>
           <select class="form-control shadow-none" name="model">
             <option>Select Model</option>
             <?php foreach($model as $model_list) {?>
               <option><?php echo $model_list['name']?></option>


             <?php }?>
           </select>
              <div class="text-danger"><?php echo form_error('model') ?></div>
         </div>
           </div>
           <div class="col">
              <div class="form-group">
           <label>STATUS</label>
          <select class="form-control" name="status">
            <option value="1">Active</option>
            <option value="0">Deactive</option>
            <
          </select>
         </div>
           </div>
         </div>
          <div class="row">
           <div class="col">
             <div class="form-group">
           <label>PRODUCT IMAGE</label>
           <input type="file" name="image" class="form-control shadow-none">
              <div class="text-danger"><?php echo form_error('image') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>PRODUCT PRICE</label>
           <input type="number" name="product_price" class="form-control shadow-none" placeholder="Product Price">
              <div class="text-danger"><?php echo form_error('product_price') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>SELLING PRICE</label>
            <input type="number" name="selling_price" class="form-control shadow-none" placeholder="Selling Price">
              <div class="text-danger"><?php echo form_error('selling_price') ?></div>
         </div>
           </div>
         </div>
          <div class="row">
           <div class="col">
             <div class="form-group">
           <label>MIN SELLING PRICE</label>
         <input type="number" name="min_selling_price" class="form-control shadow-none" placeholder="Min Selling price">
              <div class="text-danger"><?php echo form_error('min_selling_price') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>TAX</label>
           <input type="number" name="tax" class="form-control shadow-none" placeholder="Tax">
              <div class="text-danger"><?php echo form_error('tax') ?></div>
         </div>
           </div>
           <div class="col">
             <div class="form-group">
           <label>Tax Type</label>
          <select class="form-control shadow-none" name="tax_type">
            <option>Select Tax Type</option>
            <option value="percent">Percentage(%)</option>
            <option value="fixed">Fixed</option>
          </select>
              <div class="text-danger"><?php echo form_error('tax_type') ?></div>
         </div>
           </div>
         </div>
         
         <div class="form-group">
           <label>DESCRIPTION</label>
         <textarea name="desc"></textarea>
              <div class="text-danger"><?php echo form_error('desc') ?></div>
         </div>
         

         <button class="btn btn-primary mb-0">ADD PRODUCT</button>
         
       </form>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


                <script>
                        CKEDITOR.replace( 'desc' );
                </script>
<!---add PRODUCT modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">ADD PRODUCT</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
           <label>PRODUCT NAME</label>
           <input type="text" name="name" placeholder="PRODUCT Name" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>PRODUCT CODE</label>
           <input type="text" name="code" placeholder="PRODUCT Code" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>DESCRITPION</label>
           <input type="text" name="desc" placeholder="Put some description" class="form-control" required="">
         </div>
          <div class="form-group">
           <label>STATUS</label>
          <select class="form-control">
            <option value="1">Active</option>
            <option value="o">Deactive</option>
            <
          </select>
         </div>

         <button class="btn btn-primary mb-0">ADD PRODUCT</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end add PRODUCT modal ----------->

<?php  $this->load->view("admin/layout/footer") ?>