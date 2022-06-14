<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add category
            </h3>
          <a href="<?php echo site_url('category') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">CATEGORY LIST</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	
          </div>

          <div class="row">
            <div class="col-sm-5">
              
              <div class="card">
               <div class="card-header bg-primary">
                  <h5 class="text-white" >ADD ROLE</h5>

                </div>
                <div class="card-body pb-0">
                  <form action="<?php echo site_url('role/create') ?>" method="post">
         <div class="form-group">
           <label>ROLE</label>
           <input type="text" name="name" placeholder="Role" class="form-control" required="" value="<?=set_value('fee_group')?>">
           <div class="text-danger"><?php echo form_error('name') ?></div>
         </div>
        
        
          

         <button class="btn btn-primary mb-0">ADD</button>
         
       </form>
                </div>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="card">
                <div class="card-header bg-primary text-white">
                  <h6>ROLE LIST</h6>
                </div>
                <div class="card-body">
                  <table class="table text-center">
                    <tr>
                      <th>Sr.No</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    <?php foreach($data as $key=> $role_list){ ?>
                <tr>
                  <td>
                    <?php echo $key+1 ?>
                  </td>
                  <td><?php echo $role_list['name'] ?></td>
                  <td><?php if($role_list['status']==1){ ?>
                 <a href="<?php echo site_url('role/status/');echo $role_list['id']?>"><button class="btn btn-success">Active</button></a>
                  <?php } else{ ?>
                     <a href="<?php echo site_url('role/status/');echo $role_list['id']?>"><button class="btn btn-danger">Deactive</button></a>

                  <?php } ?></td>
                  <td>
                    <div>
                      <a href="<?php echo site_url('role/status/');echo $role_list['id']?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                       <a href="<?php echo site_url('role/status/');echo $role_list['id']?>" onclick="return confirm('Are you sure')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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
<!---add category modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">ADD CATEGORY</h5>
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

         <button class="btn btn-primary mb-0">ADD CATEGORY</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end add category modal ----------->

<?php  $this->load->view("admin/layout/footer") ?>