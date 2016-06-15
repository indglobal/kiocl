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
            <li><a href="#">User</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="<?php echo base_url();?>admin/addUser" class="btn btn-block btn-success" style="width: 120px;;">Add User</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Units</th>
                        <th>Departments Name</th>
                        <th>Username</th>
                        <th>Password</th>
                       
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                    foreach ($query1  as $user)
				{
						
			?>
                      <tr>
                        <td><?php echo $user->user_id;?></td>
                        <td><?php echo $user->units_name;?></td>
                        <td><?php echo $user->departments_name;?></td>
                          <td><?php echo $user->username;?></td>
                            <td><?php echo $user->password;?></td>
                             
                        
                        <td><a href="<?php echo base_url();?>admin/edituser/<?php echo $user->user_id;?>" class="btn btn-block btn-info" style="width: 59px;">Edit</a>
                        <a href="<?php echo base_url();?>admin/removeuser/<?php echo $user->user_id;?>" class="btn btn-block btn-danger" style="width: 59px;margin-top: -34px;
  margin-left: 64px;">Delete</a>
                         <a href="<?php echo base_url();?>admin/set_permission/<?php echo $user->user_id;?>" class="btn btn-block btn-danger" style="width: 59px;margin-top: -34px;
  margin-left: 64px;">Delete</a>
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