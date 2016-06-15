<?php include('include/header.php'); ?>
<?php include('include/sidebar.php') ; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Submenu List
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="fa fa-dashboard">
          </i> Home
        </a>
      </li>
      <li>
        <a href="#">Submenu
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
              <a href="<?php echo base_url();?>admin/addsub" class="btn btn-block btn-success" style="width: 120px;;">Add Submenu
              </a>             
            </h3>
            <h3 class="box-title">              
               <a href="javascript:void(0);" title="Drag and Drop rows to assign priority" class="btn outlined mleft_no reorder_link btn btn-block btn-success" >Assign Priority
          </a>
            </h3>
          </div>
          <!-- /.box-header -->
         
          <div class="box-body">
            <table id="example" class="table table-bordered table-striped sorted_table">
              <thead>
                <tr>
                  <th>S No
                  </th>
                  <th>Menu
                  </th>
                  <th>Sub Menu
                  </th>
                  <th>Status
                  </th>
                  <th>Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php 
$i = 1;
foreach ($query1  as $dept)
{     
?>
                <tr id="image_li_<?php echo $dept->cat_id; ?>">
                 <td id1="<?php echo $dept->cat_id; ?>">
                    <?php echo $i;?>
                  </td>
                  <td>
                    <?php echo getCategoryname_byid($dept->parent_id);?>
                  </td>
                  <td>
                    <?php echo $dept->cat_name;?>
                  </td>
                    <td >
<button id="approved_<?php echo $dept->cat_id;?>" <?php if($dept->status=="0"){?>class="btn btn-default approved"<?php }else{?>class="btn btn-success approved"<?php } ?>>Active</button>
                     </td>
                <td>
                    <a href="<?php echo base_url();?>admin/addsub/<?php echo $dept->cat_id;;?>" class="btn btn-block btn-info" style="width: 59px;">Edit
                    </a>
                    
                  </td>
                                                                                                                                    
                </tr>
                <?php $i++; } ?>
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
      $("#example tbody").sortable({
        helper: fixHelperModified,
        stop: updateIndex
      }).disableSelection();
      $("#save_reorder").click(function( e ){
        // alert($("#save_reorder i").length);
        if( !$("#save_reorder i").length )
        {
          $("ul.reorder-photos-list").sortable('destroy');
          var h = [];
          $("#example tbody tr").each(function() {
            h.push($(this).attr('id').substr(9));
          }
                                      );
          $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>admin/update_priority',
            data: {
              ids: " " + h + ""},
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

<script type="text/javascript">
  $(document).on('click', '.approved',function(){
  var id = $(this).attr('id');
  var subcat_id1 = id.split("_");
  var subcat_id=subcat_id1[1];
    $.ajax({
             url:'<?php echo base_url();?>admin/update_status_subcategory',
                 type: "POST",
                  data: {subcat_id:subcat_id},
                  success: function(res){ 
                    if (res=="success")
                     {
                     $("#approved_"+subcat_id).removeClass("btn btn-success");
                     $("#approved_"+subcat_id).addClass("btn btn-default"); 
                     }else if(res=="fail"){
                     $("#approved_"+subcat_id).removeClass("btn btn-default");
                     $("#approved_"+subcat_id).addClass("btn btn-success"); 
                     }

                                        }
       });
  

  });


                  </script>

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>includes/jquery.jeditable.js"></script>


<script type="text/javascript">
 
$(document).ready(function() {
       $("#example").dataTable();

    });

$(document).ready(function() {
        var oTable=$('#example').dataTable();
        oTable.$('.edit').editable("<?php echo site_url('admin/update_ajax_categories') ?>", {
    
                    "callback": function( sValue, y ) {
                        var aPos = oTable.fnGetPosition( this );
                        oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                    },
                    "submitdata":function(value,settings) {
                        return {
                            "row_id": this.parentNode.getAttribute('id1'),
                            "column": oTable.fnGetPosition(this)[2]
                        };
                    },
      
                    "height": "24px",
                    "width": "100%",
                    "onblur": "submit"
               });
    });

</script>