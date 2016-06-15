<?php include('include/header.php'); ?>
     <?php include('include/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active"> Manage </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Add  </h3>
                  <?php  //echo validation_errors(); ?> 
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php $msg = $this->session->flashdata('message');
                      echo $msg;
                   ?>
     <?php    
 if($this->session->userdata['is_logged_in']['email_address']=="admin@gmail.com"){
  $permissions=array('0' => array('permissions_id'=>0), );

}else{
$record=$selected_permissions[0];
$permissions=array();
$permissions=unserialize($record['permissions_id']);
}
?>
          <form role="form" id="formId" action="<?php echo base_url();?>admin/manage" method="post" enctype="multipart/form-data" >
                  <div class="box-body">
                  
                            <?php $old=array();
                                  $old1=array();
                            ?>
                            <?php foreach ($all_permissions as $value) { 
                              $old[$value['permission_id']]=$value['permission_name']; } ?>

                            <?php $new=array(); for($i=0;$i<count($permissions);$i++){ array_push($new, $permissions[$i]['permissions_id']); } ?>

                      <div class="form-group">
                      <label>Permission List</label>
                      <select class="form-control"  id="permission_id" name="permission_id"  style="width: 306px;" >
                      <option value="">Select</option>
                 
                                <?php foreach ($old as $key=> $value) { ?>
 <?php if($this->session->userdata['is_logged_in']['email_address']=="admin@gmail.com"){?>
                      <option value="<?php echo $key;?>"><?php echo $value;?></option>
                        <?php }else{ ?>
                                <?php if(in_array($key, $new)) { ?>
                      <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                 <?php } else {?>
            
                                <?php } ?>

                           <?php } ?>
                                <?php } ?>
                       </select><?php echo form_error('permission_id', '<div class="error" style="color:red;">', '</div>');?> 
                           </div>



          

       <!--  <?php if($this->session->userdata['is_logged_in']['email_address']=="admin@gmail.com"){?>


          <div class="form-group">
                      <label>Department</label>
                      <select class="form-control"  name="dept_id"  style="width: 306px;" >
                      <option value="0">Select</option>
                 <?php foreach ($all_department as $value) { ?>
                         <option value="<?php echo $value['departments_id'];?>"><?php echo $value['departments_name']; ?></option>
                    <?php } ?>
                  </select>

          </div>
          <div class="form-group">
                      <label>Unit</label>
                      <select class="form-control"  name="unit_id"  style="width: 306px;" >
                      <option value="0">Select</option>
                 <?php foreach ($all_unit as $value) { ?>
                         <option value="<?php echo $value['units_id'];?>"><?php echo $value['units_name']; ?></option>
                    <?php } ?>
                    </select>

          </div>
          <?php } ?>

          <div class="form-group">
            <label id="label">Input :*</label>
           <input type="text" class="form-control" style="width:200px" id="pin_dev" name="pin_dev" placeholder="Enter Input:"></input><?php echo form_error('pin_dev', '<div class="error" style="color:red;">', '</div>');?> 
        </div>   --> 

                   
       
            

                   
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>


                </form>
              </div><!-- /.box -->

             

             

          

            </div><!--/.col (left) -->
            
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include('include/footer.php') ; ?>

<script type="text/javascript">
  
      $(document).ready(function() {
      $("#permission_id").change(function(){
      $("#formId").submit();

       });
    });


</script>