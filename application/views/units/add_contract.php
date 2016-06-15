 <?php include('include/header.php'); ?>
     <?php include('include/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Contracts
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Contracts</li>
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
                  <h3 class="box-title">Add Contracts</h3>
                  <?php  echo validation_errors(); ?> 
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url();?>unit/addcontracts" method="post" enctype="multipart/form-data" >
                 <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tender  EOI Ref No </label>
                      <select  name="tendor_code" id="tendor_code" class="form-control select"  style="width: 306px;" value="<?php echo set_value('tendor_code'); ?>">
												<option value="Select tendor_code">Select Tendor EOI Ref No</option>
												<?php
												foreach($query as $blog)
        
											{
									echo '<option value="'.$blog->tendor_code.'">'.$blog->tendor_code.'</option>';
							                   }

												?>		
											</select>
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tender Date</label>
<div class="datetimepicker2 input-append date labDate">
		      <input type="text" class="form-control" id="tendor_date" placeholder="Tender Date" name="tendor_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>

                      
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Nature Of Work</label>
                      <textarea  style="width:306px" name="nature_work" id="nature_work" class="form-control" ></textarea>
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1">Mode of Tender Enquiry</label>
                      <input type="text" class="form-control" id="mode_tendor_enquiry" placeholder="Mode of Tender Enquiry" name="mode_tendor_enquiry" style="width: 306px;">
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date of Publication of NIT</label>
<div class="datetimepicker2 input-append date labDate">
		      <input type="text" class="form-control" id="date_of_publication" placeholder="Date of Publication of NIT" name="date_of_publication" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
                      
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Type of Bidding(Single/Two bid system)</label>
                      <input type="text" class="form-control" id="type_bidding" placeholder="Type of Bidding(Single/Two bid system)" name="type_bidding" style="width: 306px;">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Date of Reciept of Tender</label>
<div class="datetimepicker2 input-append date labDate">
		      <input type="text" class="form-control" id="due_date_tendor" placeholder="Last Date of Reciept of Tender" name="due_date_tendor" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
                 
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1">No Of Tender Recived</label>
                      <input type="text" class="form-control" id="no_of_tendor" placeholder="No Of Tender Recived" name="no_of_tendor" style="width: 306px;">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1">No Of  Parties qualified after techinal evaluation</label>
                      <input type="text" class="form-control" id="no_of_parties" placeholder="No Of Tender Parties qualified after techinal evaluation" name="no_of_parties" style="width: 306px;">
                    </div>
                   
                     <div class="form-group">
                      <label for="exampleInputEmail1">Name Of Parties qualified after techinal evaluation</label>
                       <textarea  style="width:306px" name="name_of_parties" class="form-control" ></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Of  Parties not qualified after techinal evaluation</label>
                      <input type="text" class="form-control" id="no_of_n_parties" placeholder="No Of Tender Parties qualified after techinal evaluation" name="no_of_n_parties" style="width: 306px;">
                    </div>
                   
                     <div class="form-group">
                      <label for="exampleInputEmail1">Name Of Parties not  qualified after techinal evaluation</label>
                       <textarea  style="width:306px" name="name_of_n_parties" class="form-control" ></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Whether Contract awarded to lowest tender/Evaluated LI</label>
                      <input type="text" class="form-control" id="contracta_awared" placeholder="Whether Contract awarded to lowest tender/Evaluated LI" name="contracta_awared" style="width: 306px;">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1">Contract Ref No</label>
                      <input type="text" class="form-control" id="contracts_no" placeholder="Contract Ref No" name="contracts_no" style="width: 306px;">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1">Contract Ref Date</label>
<div class="datetimepicker2 input-append date labDate">
		       <input type="text" class="form-control" id="contracts_date" placeholder="Contract Ref No" name="contracts_date" style="width: 279px;">
		      <span class="add-on"><i class="fa fa-calendar icon-calendar"></i></span>
		    </div>
                     
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1">Name of Contractor</label>
                      <input type="text" class="form-control" id="name_of_contractor" placeholder="Name of Contractor" name="name_of_contractor" style="width: 306px;">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputEmail1"> Contract value(in Rs)</label>
                      <input type="text" class="form-control" id="value_of_contractor" placeholder="Contract value(in Rs)" name="value_of_contractor" style="width: 306px;">
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