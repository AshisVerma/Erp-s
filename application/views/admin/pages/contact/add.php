<?php  $this->load->view("admin/layout/header") ?>
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add CONTACT
            </h3>
          <a href="<?php echo site_url('CONTACT') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">CONTACT LIST</button></a>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white" >ADD CONTACT</h5>

          			</div>
          			<div class="card-body">
          				 <form action="<?php echo site_url('CONTACT/create') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col">
             <div class="form-group">
           <label>Contact Type</label>
          <select class="form-control shadow-none" name="contact_type">
            <option>Supplier</option>
            <option>Customer</option>
          </select>
              <div class="text-danger"><?php echo form_error('contact_type') ?></div>
         </div>
          </div>
          <div class="col">
             <div class="form-group">
           <label>Contact Name</label>
           <input type="text" name="name" placeholder="Contact Name" class="form-control" required="" value="<?=set_value('name')?>">
              <div class="text-danger"><?php echo form_error('name') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Profile Picture</label>
           <input type="file" name="image" placeholder="" class="form-control" required="" value="<?=set_value('image')?>">
              <div class="text-danger"><?php echo form_error('image') ?></div>
         </div>
          </div>

        </div>
        <div class="row">
           <div class="col">
             <div class="form-group">
           <label>Business Name</label>
           <input type="text" name="business_name" placeholder="Business Name" class="form-control" required="" value="<?=set_value('business_name')?>">
              <div class="text-danger"><?php echo form_error('business_name') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Tax No</label>
           <input type="text" name="tax-no" placeholder="Tax No" class="form-control" required="" value="<?=set_value('tax-no')?>">
              <div class="text-danger"><?php echo form_error('tax-no') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Opening Balance</label>
           <input type="text" name="open-balance" placeholder="Opening Balance" class="form-control" required="" value="<?=set_value('open-balance')?>">
              <div class="text-danger"><?php echo form_error('open-balance') ?></div>
         </div>
          </div>
        </div>

        <div class="row">
           <div class="col">
             <div class="form-group">
           <label>Pay Term</label>
           <input type="text" name="pay-term" placeholder="Pay Term" class="form-control" required="" value="<?=set_value('pay-term')?>">
              <div class="text-danger"><?php echo form_error('pay-term') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Pay Term Condition</label>
          <select class="form-control shadow-none" name="pay-term-condition">
            <option>Month</option>
            <option>Days</option>
          </select>
              <div class="text-danger"><?php echo form_error('pay-term') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Email</label>
           <input type="text" name="email" placeholder="Email" class="form-control" required="" value="<?=set_value('email')?>">
              <div class="text-danger"><?php echo form_error('email') ?></div>
         </div>
          </div>
        </div>
        <div class="row">
           <div class="col">
             <div class="form-group">
           <label>Mobile</label>
           <input type="text" name="mobile" placeholder="Mobile" class="form-control" required="" value="<?=set_value('mobile')?>">
              <div class="text-danger"><?php echo form_error('mobile') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Alternate Contact No</label>
           <input type="text" name="alertnate-contact-no" placeholder="Alternate Contact No" class="form-control" required="" value="<?=set_value('alertnate-contact-no')?>">
              <div class="text-danger"><?php echo form_error('alertnate-contact-no') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>Password (minimun 8 letter)</label>
           <input type="text" name="password" placeholder="Password" class="form-control" required="" value="<?=set_value('password')?>">
              <div class="text-danger"><?php echo form_error('password') ?></div>
         </div>
          </div>
        </div>
        <div class="row">
           <div class="col">
             <div class="form-group">
           <label>Country</label>
          <select class="form-control shadow-none p-font" name="country">
            <option>Select country</option>
            <?php foreach($country as $country_list) {?>
   <option value="<?php echo $country_list['id'] ?>"><?php echo $country_list['name'] ?> (<?php echo $country_list['sortname'] ?>)</option>


            <?php }?>
          </select>
              <div class="text-danger"><?php echo form_error('country') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>State</label>
          <select class="form-control shadow-none" name="state">
            <option>Select State</option>
          </select>
              <div class="text-danger"><?php echo form_error('state') ?></div>
         </div>
          </div>
           <div class="col">
             <div class="form-group">
           <label>City</label>
          <select class="form-control shadow-none" name="city">
            <option>Select City</option>
          </select>
              <div class="text-danger"><?php echo form_error('city') ?></div>
         </div>
          </div>

        </div>
 <div class="form-group">
           <label>STATUS</label>
          <select class="form-control" name="status">
            <option value="1">Active</option>
            <option value="0">Deactive</option>
            <
          </select>
          <div class="text-danger"><?php echo form_error('status') ?></div>
         </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control shadow-none" name="address"></textarea>
              <div class="text-danger"><?php echo form_error('address') ?></div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Notes</label>
         <textarea name="notes"></textarea>
         <div class="text-danger"><?php echo form_error('notes') ?></div>
        </div>
        
         
         

         <button class="btn btn-danger mb-0 rounded-0">ADD CONTACT</button>
         
       </form>

       <div class="container">
         <div class="row product-box">
          
         </div>
       </div>
          			</div>
          		</div>
          	</div>
          </div>

        </div>

         <script>
                        CKEDITOR.replace( 'notes' );
                </script>
<!---add CONTACT modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">ADD CONTACT</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
           <label>CONTACT NAME</label>
           <input type="text" name="name" placeholder="CONTACT Name" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>CONTACT CODE</label>
           <input type="text" name="code" placeholder="CONTACT Code" class="form-control" required="">
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

         <button class="btn btn-primary mb-0">ADD CONTACT</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end add CONTACT modal ----------->

<?php  $this->load->view("admin/layout/footer") ?>

<script type="text/javascript">

 $(document).ready(function(){
 // $(window).on("load",function(){
 //    $.ajax({
 //    type:"GET",
 //    url:"https://fakestoreapi.com/products",
 //    beforeSend:function(){
 //      $(".loader").removeClass("d-none");
 //    },
 //    success:function(response){
 //       $(".loader").addClass("d-none");
 //      $(response).each(function(index,data){
 //      var box=`<div class="col-sm-3 mb-4">
 //             <div class="card">
 //             <div class="card-body">
 //               <div class="card-image">
 //                 <img src="`+data.image+`" width="100">
 //               </div>
 //               <p>`+data.price+`</p>
 //               <button class="btn btn-primary">Buy Now!</button>
 //             </div>
 //           </div>
 //          </div>`;
 //          $(".product-box").append(box);

 //      });
 //    }
 //  });
 // });
 });
</script>

<script type="text/javascript">
  $("select[name='country']").change(function(){

   $("select[name='state']").html("");
     $.ajax({
         url:"state/"+$(this).val(),
         type:"GET",
         beforeSend:function(){
          $(".loader").removeClass("d-none");
         },
         success:function(response){
          $(".loader").addClass("d-none");
          var option="<option>Select state</option>";
          $("select[name='state']").append(option);
          var data=JSON.parse(response);
         $(data.data).each(function(index,state){
           var option="<option value="+state.id+">"+state.name+"</option>";
          $("select[name='state']").append(option);
         });
         }
     });
  });

   $("select[name='state']").change(function(){
   $("select[name='city']").html("");
   
     $.ajax({
         url:"city/"+$(this).val(),
         type:"GET",
         beforeSend:function(){
          $(".loader").removeClass("d-none");
         },
         success:function(response){
          $(".loader").addClass("d-none");
          var data=JSON.parse(response);
          console.log(data);
           var option="<option>Select city</option>";
           $("select[name='city']").append(option);
         $(data.data).each(function(index,state){
          var option="<option value="+state.id+">"+state.name+"</option>";
          $("select[name='city']").append(option);
         });
         }
     });
  });
</script>