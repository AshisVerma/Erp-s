<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              PRODUCT LIST
            </h3>
            <a href="<?php echo site_url('PRODUCT/add') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">ADD PRODUCT</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >PRODUCT LIST</h5>

          			</div>
          			<div class="card-body">
          				 <table class="table text-center">
                 <tr>
                   <th>Sr.No</th>
                   <th>Name</th>
                   <th>Product Type</th>
                   <th>Description</th>
                   <th>Status</th>
                   <th>Action</th>
                 </tr>   
                 <?php foreach($data as $key=> $list ) {?> 
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $list['name']?></td>
                       <td><?php echo $list['product_type']?></td>
                          <td><?php echo $list['description']?></td>
                          <td><?php if($list['status']==1){?>
                            <a href="<?php echo site_url('PRODUCT/status/').$list['id']?>"><button class="btn btn-success">Active</button></a>

                          <?php } else{ ?>
                          <a href="<?php echo site_url('PRODUCT/status/').$list['id']?>"><button class="btn btn-danger">Deactive</button></a>

                        <?php }?>
                      </td>
                      <td>
                        <div class="d-flex justify-content-center align-items-center">
                          <a href="<?php echo site_url('PRODUCT/edit/').$list['id']?>"><button class="btn btn-warning" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>
                            <a href="<?php echo site_url('PRODUCT/delete/').$list['id']?>" onclick="return confirm('Are you sure')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        </div>
                      </td>
                  </tr>


                 <?php }?>
                   </table>
          			</div>
          		</div>
          	</div>
          </div>

        </div>
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