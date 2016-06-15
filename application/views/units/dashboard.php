<?php include('include/header.php'); ?>
      <?php include('include/sidebar.php') ; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Tenders List
           
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
                  <h3 class="box-title"><a href="<?php echo base_url();?>unit/addtendor" class="btn btn-block btn-success" style="width: 85px;;">Add Tender</a></h3>
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
                        <th>Tender Title</th>
                        <th>Tender Ref.No</th>
                        <th>Date</th>
                        
                         <th>Due date</th>
                         <th>Due Time</th>
                       <th>Opening Date</th>
                        <th>Opening Time</th>
                          
                          
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                                    foreach ($query1  as $tender)
				{
						
			?>
                      <tr>
                       
                        <td><?php echo $tender->tender_id;?></td>
                        <td><a href="<?php echo base_url().$tender->tender_path; ?>"><?php echo $tender->tender_name ?></a></td>
                          <td><?php echo $tender->tendor_code;?></td>
                            <td><?php echo $tender->tender_date;?></td>
                           
                            <td><?php echo $tender->tender_due_date;?></td>
                             <td><?php echo $tender->tender_due_time;?></td>
                              <td><?php echo $tender->tendor_opening_date;?></td>
                             <td><?php echo $tender->tendor_opening_time;?></td>
                             
                               
                               
                   
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