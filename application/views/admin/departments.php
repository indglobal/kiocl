<?php include('include/header.php'); ?>
      <?php include('include/sidebar.php') ; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Departments List
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Departments</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="<?php echo base_url();?>admin/adddepartments" class="btn btn-block btn-success" style="width: 120px;;">Add Departments</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Departments Id</th>
                        <th>Units</th>
                        <th>Departments Name</th>
                        <th>Actions</th>

                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                foreach ($query1  as $dept){
						?>
                      <tr>
                        <td><?php echo $dept->departments_id;?></td>
                        <td><?php echo $dept->units_name;?></td>
                        <td><?php echo $dept->departments_name;?></td>
                        
                        <td><a href="<?php echo base_url();?>admin/editdepartments/<?php echo $dept->departments_id;?>" class="btn btn-block btn-info" style="width: 59px;">Edit</a>

                        <a href="<?php echo base_url();?>admin/removedepartments/<?php echo $dept->departments_id;?>" class="btn btn-block btn-danger" style="width: 59px;margin-top: -34px;
  margin-left: 64px;">Delete</a>


                       <a href="<?php echo base_url();?>admin/set_permissions/<?php echo $dept->departments_id;?>" class="btn btn-block btn-info" style="width: 100px;">Permissions</a>
                         </td>
                         
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