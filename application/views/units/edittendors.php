 <?php include('include/header.php'); ?>
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
                  <h3 class="box-title">Edit Tendors</h3>
                  <?php  echo validation_errors(); ?> 
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url();?>unit/addtendor" method="post" enctype="multipart/form-data" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tendor Name</label>
                      <input type="text" class="form-control" id="tender_name" placeholder="Tendor Name" name="tender_name" style="width: 306px;">
                    </div>
                   <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Due Date</label>
                      <input type="date" class="form-control" id="tender_due_date" placeholder="Tendor Due Date" name="tender_due_date" style="width: 306px;">
                    </div>
                   <div class="box-body">
                     <div class="form-group">
                      <label for="exampleInputFile">upload</label>
                      <input type="file" id="tender_path" name="tender_path">
                      <p class="help-block">Upload Tendors</p>
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