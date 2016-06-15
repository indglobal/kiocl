 <?php include('include/header.php'); ?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
 <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>


     <?php include('include/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tendors
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Corrigendum</li>
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
                  <h3 class="box-title">Add Corrigendum</h3>
                  <?php  echo validation_errors(); ?> 
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url();?>unit/addcorrigendum" method="post" enctype="multipart/form-data" >
                 <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tender  EOI Ref No </label>
                      <select  name="tendor_code" id="tendor_code" class="form-control select"  style="width: 300px;" value="<?php echo set_value('tendor_code'); ?>">
												<option value="Select tendor_code">Select Tendor EOI Ref No</option>
												<?php
												foreach($query as $blog)
        
											{
									echo '<option value="'.$blog->tender_id.'">'.$blog->tendor_code.'</option>';
							                   }

												?>		
											</select>
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Corrigendum Ref No</label>
                      <input type="text" class="form-control" id="corrigendum_code" placeholder="Corrigendum Ref No" name="corrigendum_code" style="width: 306px;">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Corrigendum  Date</label>
<div class="datetimepicker2 input-append date labDate">
		      <input type="text" class="form-control" id="datepicker" placeholder="Corrigendum Date" name="corrigendum_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
                     </div>
                 
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1"> Corrigendum  Due Date</label>
<div class="datetimepicker2 input-append date labDate">
		       <input type="text" class="form-control" id="datepicker" placeholder="Corrigendum Due Date" name="corrigendum_due_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
                     </div>
                   
                             
                      <div class="form-group">
                      <label for="exampleInputEmail1"> Corrigendum  Due Time</label>
<div class="datetimepicker3 input-append date labDate">
		     <input type="text" class="form-control" data-format="hh:mm:ss" id="corrigendum_due_time" placeholder="Corrigendum Due Time" name="corrigendum_due_time" style="width: 306px;">
		      <span class="add-on"><i class="fa fa-clock-o"></i></span>
                    </div>
                      
                    </div>

                   
                   
                     <div class="form-group">
                      <label for="exampleInputFile">upload the Corrigendum here</label>
                      <input type="file" id="tender_path" name="tender_path">
                      <p class="help-block">Upload Corrigendum</p>
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