

<?php include('include/header.php'); ?>
<?php include('include/sidebar.php') ; ?>
<!--     <link href="<?php echo base_url()?>style.css" rel="stylesheet"/>
 --><script src="<?php echo base_url()?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>js/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
 Permissions List
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="fa fa-dashboard">
          </i> Home
        </a>
      </li>
      <li>
        <a href="#">CMS
        </a>
      </li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            
          </div>
          <!-- /.box-header -->
         
    <div class="box-body" style="height:1200px;">
<?php $msg = $this->session->flashdata('message');
      echo $msg;
?>
     <?php    
    if(empty($chk[0])){ 
$permissions=array('0' => array('permissions_id'=>0), );
}else{
$record=$selected_permissions[0];
$permissions=array();
$permissions=unserialize($record['permissions_id']);
    }
?>
<form method="POST" action="<?php echo site_url('admin/set_permissions/'.$dept_id)?>">
 <input type="hidden" name="dept_id" value="<?php echo $dept_id;?>">
<div class="tab-pane-active" id="receipt">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
            <th width="5%">#</th>
            <!--<th width="5%">id</th>-->
            <th width="10%">Permissions</th>
        </tr>
    </thead>
    <tbody>
     
                            <?php $old=array();
                                  $old1=array();
                            ?>
                            <?php foreach ($all_permissions as $value) { 
                              $old[$value->cat_id]=$value->cat_name; } ?>

                            <?php $new=array(); for($i=0;$i<count($permissions);$i++){ array_push($new, $permissions[$i]['permissions_id']); } //?>

                                <?php foreach ($old as $key=> $value) { ?>
                                <?php if(in_array($key, $new)) { ?>
              <tr>                  
            <td><input type="checkbox" id="abc" name="permissions_id[]" checked value="<?php echo $key;?>"></td>
            <!-- <td><?php echo $key; ?></td>-->

                 <td><?php echo $value; ?></td> 
                 <!-- <td><?php echo $old1; ?></td>  -->


                 </tr>

            <?php } else {?>
            <td><input type="checkbox" id="abc" name="permissions_id[]" value="<?php echo $key;?>"></td>
            <!-- <td><?php echo $key; ?></td> -->

                 <td><?php echo $value; ?></td> 
                 <!-- <td><?php echo $old1; ?></td>  -->
                 </tr>
                                
                            
                           <?php } ?>
                                <?php } ?>
                
    
            
                
                
                </tr>
            <?php //endforeach ?>
    </tbody>
</table>
</div>
<div align="center" >
         <button type="submit" id="firstBtn" class="btn btn-primary firstBtn">Submit</button>
</div>
</form>


            


          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('include/footer.php'); ?>

<script type="text/javascript">
var editor=CKEDITOR.replace('postBody');
  
</script>  


<script type="text/javascript">

$(document).ready(function() {

      // $("#example").dataTable();

    });



</script>






