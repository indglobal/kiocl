 <?php include('include/header.php'); ?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!-- jQuery Code executes on Date Format option ----->
     <?php include('include/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tenders
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active"> Tendors</li>
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
                  <h3 class="box-title">Add Tenders</h3>
                  <?php  echo validation_errors(); ?> 
                  <?php echo $this->session->flashdata('message');?> 

                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url();?>unit/addtendor" method="post" enctype="multipart/form-data" >
                 <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tender  EOI Ref No </label>
                      <input type="text" class="form-control" id="tendor_code" placeholder="Tendor EOI Ref No" name="tendor_code" style="width: 306px;">
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tender Name</label>
                      <input type="text" class="form-control" id="tender_name" placeholder="Tendor Name" name="tender_name" style="width: 306px;">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Tender  Date</label>
                      <div class="datetimepicker2 input-append date labDate">
		      <input type="text" class="form-control" id="datepicker"  placeholder="Tendor  Date" name="tender_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Tender Opening Date</label>
<div class="datetimepicker2 input-append date labDate">
		      <input type="text" class="form-control" id="tendor_opening_date" placeholder="Tendor Date" name="tendor_opening_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
</div>
                      
                    
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1"> Tender Opening Time</label>
<div class="datetimepicker3 input-append date labDate">
		     <input type="text" class="form-control" data-format="hh:mm:ss" id="tendor_opening_time" placeholder="Tendor time" name="tendor_opening_time" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-clock-o"></i></span>
                    </div>
                   </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Tender Due Date</label>
<div class="datetimepicker2 input-append date labDate">
		     <input type="text" class="form-control" id="tender_due_date" placeholder="Tendor Due Date" name="tender_due_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>                      
                   </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Tender Due Time</label>
<div class="datetimepicker3 input-append date labDate">
		     <input type="text" data-format="hh:mm:ss" class="form-control" id="tender_due_time" placeholder="Tendor Due Time" name="tender_due_time" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-clock-o"></i></span>
		    </div>                      
                   </div>
                   
                     <div class="form-group">
                      <label for="exampleInputFile">upload the Tender here</label>
                      <input type="file" id="tender_path" name="tender_path">
                      <p class="help-block">Upload Tenders</p>
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
