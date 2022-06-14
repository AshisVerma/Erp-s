<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              MODEL LIST
            </h3>
            <a href="<?php echo site_url('models/add') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">ADD MODEL</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >MODEL LIST</h5>

          			</div>
          			<div class="card-body">
          				 <table class="table text-center">
                 <tr>
                   <th>Sr.No</th>
                   <th>NAME</th>
                  
                   <th>DESCRIPTION</th>
                   <th>STATUS</th>
                   <th>ACTION</th>
                 </tr>   
                    <?php if(!empty($data )) {?>

                     <?php foreach($data as $key=> $list ) {?> 
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $list['name']?></td>
                     
                          <td><?php echo $list['description']?></td>
                          <td><?php if($list['status']==1){?>
                            <a href="<?php echo site_url('models/status/').$list['id']?>"><button class="btn btn-success">Active</button></a>

                          <?php } else{ ?>
                          <a href="<?php echo site_url('models/status/').$list['id']?>"><button class="btn btn-danger">Deactive</button></a>

                        <?php }?>
                      </td>
                      <td>
                        <div class="d-flex justify-content-center align-items-center">
                          <a href="<?php echo site_url('models/edit/').$list['id']?>"><button class="btn btn-warning" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>
                            <a href="<?php echo site_url('models/delete/').$list['id']?>" onclick="return confirm('Are you sure')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        </div>
                      </td>
                  </tr>


                 <?php }?>


                    <?php } ?>
                   </table>

                  
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