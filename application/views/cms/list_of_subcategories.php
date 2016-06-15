

<?php include('include/header.php'); ?>
<?php include('include/sidebar.php') ; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    CMS List
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
             <h3 class="box-title">
              <a href="<?php echo base_url();?>cms/addnew_content_type" class="btn btn-block btn-success" style="width: 120px;;">Add New
              </a>             
            </h3>
            <h3 class="box-title">              
               <a href="javascript:void(0);" title="Drag and Drop rows to assign priority" class="btn outlined mleft_no reorder_link btn btn-block btn-success" >Assign Priority
          </a>
            </h3>
          </div>
          <!-- /.box-header -->
         
          <div class="box-body">
          

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
    <thead>
       <tr>
                  <th>S No
                  </th>
                  <th>Category
                  </th>

                  <th>Actions
                  </th>
                </tr>
    </thead>
    <tbody> 
        <div style="height:10px;"></div> 
          <?php $i=1;?>
            <?php foreach ($query1  as $dept): 
            ?>
               <tr id="<?php echo $dept->cat_id;?>">
<!--                <tr id="image_li_<?php echo $dept->cat_id; ?>">
 --> 
<!-- <input id="image_li_<?php echo $dept->cat_id; ?>">
 -->                  <td>
                    <?php echo $i;?>
                  </td>
                  <td class="edit">
                    <?php echo $dept->cat_name;?>
                  </td>
                 
      <?php $chk=chkContent($dept->cat_id);
      if(empty($chk)){?>
                  <td>
                    <a href="<?php echo base_url();?>cms/manage_content/<?php echo $dept->cat_id;?>" class="btn btn-block btn-info" style="width: 70px;">Manage
                    </a>
                  </td>

        <?php }else{ ?>
        
              <td>
                    <a href="<?php echo base_url();?>cms/manage_content/<?php echo $dept->cat_id;?>/<?php echo $uri=2;?>" class="btn btn-block btn-info" style="width: 70px;">update
                    </a>
                  </td>

          <?php } ?>
                </tr>
              <?php $i++; ?>

            <?php endforeach ?>
    </tbody>
</table>


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
  $(document).ready(function(){
  // $("#example").dataTable();
    $('.reorder_link').on('click',function(){
      $('.reorder_link').html('Save Priority');
      $('.reorder_link').attr("id","save_reorder");
      var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index) {
          $(this).width($originals.eq(index).width())
        }
        );
        return $helper;
      }
      ,
          updateIndex = function(e, ui) {
            $('td.index', ui.item.parent()).each(function (i) {
              $(this).html(i + 1);
            }
                                                );
          };


      $("#example1 tbody").sortable({
        helper: fixHelperModified,
        stop: updateIndex
      }).disableSelection();
      $("#save_reorder").click(function( e ){
        // alert($("#save_reorder i").length);
        if( !$("#save_reorder i").length )
        {
          $("ul.reorder-photos-list").sortable('destroy');
          var h = [];
          $("#example1 tbody tr").each(function() {
            h.push($(this).attr('id').substr(9));
          }
          );
          $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>admin/update_priority',
            data: {
              ids: " " + h + "",
            },
            success: function(html) 
            {
              if(html == 1)
               window.location.reload();
              /*$("#reorder-helper").html( "Reorder Completed - Image reorder have been successfully completed. Please reload the page for testing the reorder." ).removeClass('light_box').addClass('notice notice_success');
            $('.reorder_link').html('reorder photos');
            $('.reorder_link').attr("id","");*/
            }
          }
                );
          return false;
        }
        e.preventDefault();
      }
                              );
    }
                         );
  }
                   );
</script>  


<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>includes/jquery.jeditable.js"></script>


<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();

    });




</script>

<script type="text/javascript">
  $(document).on('click', '.approved',function(){

  var id = $(this).attr('id');
  var cat_id1 = id.split("_");
  var cat_id=cat_id1[1];
  alert(cat_id);
    $.ajax({
             url:'<?php echo base_url();?>cms/update_status_content',
                 type: "POST",
                  data: {cat_id:cat_id},
                  success: function(res){ 
                    alert(res);
                    if (res=="success")
                     {
                      $("#approved_"+cat_id).removeClass("btn btn-success");
                       $("#approved_"+cat_id).addClass("btn btn-default"); 

                      
                     }else if(res=="fail"){
                        $("#approved_"+cat_id).removeClass("btn btn-default");
                       $("#approved_"+cat_id).addClass("btn btn-success"); 
                     }

                                        }
       });
  

  });


                  </script>