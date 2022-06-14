<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              UPDATE category
            </h3>
          <a href="<?php echo site_url('category/') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">BACK</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >UPDATE CATEGORY</h5>

          			</div>
          			<div class="card-body">
          				 <form action="<?php echo site_url('category/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
         <div class="form-group">
           <label>CATEGORY NAME</label>
           <input type="text" name="name" placeholder="Category Name" class="form-control" required="" value="<?php echo $data[0]['name']?>">
           <div class="text-danger"><?php echo form_error('name') ?></div>
         </div>
         <div class="form-group">
           <label>CATEGORY CODE</label>
           <input type="text" name="code" placeholder="Category Code" class="form-control" required="" value="<?php echo $data[0]['code']?>">
              <div class="text-danger"><?php echo form_error('code') ?></div>
         </div>
         <div class="form-group">
           <label>DESCRIPTION</label>
           <input type="text" name="desc" placeholder="Put some description" class="form-control" required=" " value="<?php echo $data[0]['description']?>">
              <div class="text-danger"><?php echo form_error('desc') ?></div>
         </div>
          

         <button class="btn btn-primary mb-0">UPDATE CATEGORY</button>
         
       </form>
          			</div>
          		</div>
          	</div>
          </div>

        </div>
<!---UPDATE category modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">UPDATE CATEGORY</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
           <label>CATEGORY NAME</label>
           <input type="text" name="name" placeholder="Category Name" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>CATEGORY CODE</label>
           <input type="text" name="code" placeholder="Category Code" class="form-control" required="">
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

         <button class="btn btn-primary mb-0">UPDATE CATEGORY</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end UPDATE category modal ----------->

<?php  $this->load->view("admin/layout/footer") ?>