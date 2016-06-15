<?php include('include/header.php'); ?>
      <?php include('include/sidebar.php') ; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Units List
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">units</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="<?php echo base_url();?>admin/addunit" class="btn btn-block btn-success" style="width: 85px;;">Add Units</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Units Id</th>
                        <th>Units</th>
                        
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                    foreach ($query1  as $unit)
				{
						
			?>
                      <tr>
                        <td><?php echo $unit->units_id;?></td>
                        <td><?php echo $unit->units_name;?></td>
                        
                        <td><a href="<?php echo base_url();?>admin/editunit/<?php echo $unit->units_id;?>" class="btn btn-block btn-info" style="width: 59px;">Edit</a>
                        <a href="<?php echo base_url();?>admin/removeunit/<?php echo $unit->units_id;?>" class="btn btn-block btn-danger" style="width: 59px;margin-top: -34px;
  margin-left: 64px;" onclick="return confirm('Delete this : <?php echo  $unit->units_name; ?>  ')">Delete</a></td>
                      </tr>
                      <?php } ?>
                     
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php include('include/footer.php'); ?>