<?php include('include/header.php'); ?>
 <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1_4.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui_1_8.min.js"></script>
                    <script type="text/javascript">
		$(document).ready(function() {  
                     $("#units_id").change(function(){ 

                     $.ajax({  
                        url:"http://iti.herbaldiacare.com/admin/dept_selection",  
                        data: {id:$(this).val()},  
                        type: "POST",  
                        success:function(data){  
							
                        $("#deparments_id").html(data);  
                     }  
                  });  
               }); 
			   
		});
	
	</script> 
     <?php include('include/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Users
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active"> User</li>
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
                  <h3 class="box-title">EDit User </h3>
                  <?php  echo validation_errors(); ?> 
                </div><!-- /.box-header -->
                <!-- form start -->
                 <?php $id = $product['user_id'];  ?>
                <form role="form" action="<?php echo base_url();?>admin/edituser/<?php echo $id ?>" method="post" enctype="multipart/form-data" >
                  <div class="box-body">
                  
                   <div class="form-group">
                      <label>Select</label>
                      <select class="form-control"  name="units_id" id="units_id" style="width: 306px;" >
                        <option value="<?php echo $product['units_id']; ?>"><?php echo $product['units_name']; ?></option>
                        <?php
															        foreach($query as $unit){
																echo '<option value="'.$unit->units_id.'">'.$unit->units_name.'</option>';
															}?>		
                      </select>
                    </div>
                    
                     <div class="form-group">
                      <label>Select</label>
                      <select class="form-control"  name="deparments_id" id="deparments_id" style="width: 306px;" >
                        <option value="<?php echo $product['deparments_id']; ?> "><?php echo $product['departments_name']; ?></option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">UserName</label>
                      <?php echo form_input($username); ?>
                    </div>
                   
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                     <?php echo form_input($password); ?>
                    </div>
                   
                   
                    
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