<?php include('include/header.php'); ?>
      <?php include('include/sidebar.php') ; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Contracts List
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">List</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="<?php echo base_url();?>unit/addcontracts" class="btn btn-block btn-success" style="width:125px;;">Add Contracts</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php  
function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Contract No</th>
                        <th>Contract Date</th>
                        <th>Tender Ref.No</th>
                        <th>Contractor Name</th>
                        <th>Contract Value</th>
                        <th>Action</th>
                        
                          
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                                    foreach ($query1  as $tender)
				{
						
			?>
                      <tr>
                       
                        <td><?php echo $tender->Contracts_id;?></td>
                        <td><?php echo $tender->contracts_no?></a></td>
                        <td><?php echo $tender->contracts_date;?></td>
                          <td><?php echo $tender->tendor_code;?></td>
                            <td><?php echo $tender->name_of_contractor;?></td>
                            <td><?php echo $tender->value_of_contractor;?></td>
                             <td>
                             <a href="<?php echo base_url();?>unit/viewcontract/<?php echo $tender->Contracts_id;?>" class="btn btn-block btn-info" style="width: 59px;">View</a>
                            
                             <a href="<?php echo base_url();?>unit/removecontract/<?php echo $tender->Contracts_id;?>" class="btn btn-block btn-danger" style="width: 59px;margin-top: -34px;
  margin-left: 64px;">Delete</a></td>
                               
                               
                   
                  </a></td>
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