<?php include('include/header.php'); ?>
     <?php include('include/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Submenu 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active"> Submenu </li>
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
                  <h3 class="box-title">Add Submenu </h3>
                  <?php  echo validation_errors(); ?> 
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url();?>admin/addsub/<?php echo $id;?>" method="post" enctype="multipart/form-data" >
                  <div class="box-body">
                <input type="hidden" name="id" value="<?php if(!empty($getsubCat_byid)){echo $getsubCat_byid[0]['cat_id'];}?>">

                   <div class="form-group">
                      <label>Select</label>
                      <select class="form-control"  name="cat_id" id="cat_id"  style="width: 306px;" >
                        <option>Select Menu</option>
                       <?php if(!empty($getsubCat_byid)){ ?>
                    <?php foreach ($query as $cat) { ?>
                         <?php if($cat->cat_id == $getCat_byid[0]['cat_id']) { ?>
                        <option value="<?php echo $cat->cat_id; ?>" selected><?php echo getCategoryname_byid($cat->cat_id); ?>
                        </option>
                    <?php } else { ?>
                        <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?></option>
                    <?php } ?>
                    <?php } ?>
                    <?php }else{?>

                        <?php
														foreach($query as $cat){ ?>
              <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name;?>
															<?php }
                    } ?>		
                      </select>
                    </div>
                    
                   

                     <div class="form-group">
          <label id="label">Submenu:*</label>
            <input type="text" name="subcat_name" class="form-control" id="subcat" value="<?php if(!empty($getsubCat_byid)){echo $getsubCat_byid[0]['cat_name'];}?>">
             <?php echo form_error('subcat', '<div class="error" style="color:red;">', '</div>');?> 

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
      <script type="text/javascript">
  $(document).ready(function() {
   $('#cat_id').on('change', function() {
            var me = $(this);
            $.post('<?php echo site_url("admin/getSubat_id/"); ?>',{cat_id: me.val()}, function(data) {
             $('#subcat').html(data);

            });
        });
 });
      </script>