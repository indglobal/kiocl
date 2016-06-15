<?php include('include/header.php'); ?>
<?php include('include/sidebar.php') ; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php 
foreach($css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


<style type='text/css'>
body
{
  font-family: Arial;
  font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
  text-decoration: underline;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gallert List
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="fa fa-dashboard">
          </i> Home
        </a>
      </li>
      <li>
        <a href="#">Gallery
        </a>
      </li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" style="min-height:700px">
            <h3 class="box-title">
              <!-- Trigger the modal with a button -->
<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Gallery Category</button>-->
                       
            </h3>
<div style='height:20px;'></div>  
    <div>
    <?php echo $output; ?>
    </div>
          </div>
          <!-- /.box-header -->
         
          <div class="box-body">
            
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Gallery Type</h4>
      </div>
      <div class="modal-body">
       <form name="form" method="post"><input type="text" id="add_slider" name="add_slider"><input type="button" id='save' value="Save"></form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>$( "#save" ).click(function( event ) { $.post( "add_slider", { add_gal: $('#add_slider').val()})
  .done(function( data ) {
    alert( "Data Loaded: " + data );
  }); });</script>
<?php   //include('include/footer.php'); ?>

