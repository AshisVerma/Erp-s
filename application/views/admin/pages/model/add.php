<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add MODEL
            </h3>
          <a href="<?php echo site_url('models') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">MODEL LIST</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >ADD MODEL</h5>

          			</div>
          			<div class="card-body">
          				 <form action="<?php echo site_url('models/create') ?>" method="post">
         <div class="form-group">
           <label>MODEL NAME</label>
           <input type="text" name="name" placeholder="Model Name" class="form-control"  value="<?=set_value('fee_group')?>">
           <div class="text-danger"><?php echo form_error('name') ?></div>
         </div>
        
         <div class="form-group">
           <label>DESCRIPTION</label>
           <input type="text" name="desc" placeholder="Put some description" class="form-control" value="<?=set_value('desc')?>">
              <div class="text-danger"><?php echo form_error('desc') ?></div>
         </div>
          <div class="form-group">
           <label>STATUS</label>
          <select class="form-control" name="status"> 
            <option value="1">Active</option>
            <option value="o">Deactive</option>
            <
          </select>
         </div>

         <button class="btn btn-primary mb-0">ADD MODEL</button>
         
       </form>
          			</div>
          		</div>
          	</div>
          </div>

        </div>
<!---add models modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">ADD models</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
           <label>models NAME</label>
           <input type="text" name="name" placeholder="models Name" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>models CODE</label>
           <input type="text" name="code" placeholder="models Code" class="form-control" required="">
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

         <button class="btn btn-primary mb-0">ADD models</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end add models modal ----------->

<?php  $this->load->view("admin/layout/footer") ?>