<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ITI </title>
	<link href="<?php echo base_url(); ?>assets_user/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets_user/plugins/bootstrap/css/bootstrap.theme.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets_user/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets_user/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets_user/css/menu-left.css" rel="stylesheet">
 
</head>
<body>

<div class="fullWidth">
	


	<?php 
		include_once 'header.php';
	?>
	


	<?php
date_default_timezone_set('America/New_York');
?>

	

	<div class="containerWidth backgroundBody">	
		<div class="row margin-Bottom" style="text-align:center">
		  <div class="col-md-12 submenu">
		  <h1><span class="submenuOne" style="padding:0">EOIs and Tenders</span></h1>
		 
		 	<!-- First table starts here -->
				<div class="tableBottom">
				<table class="table table-bordered" id="dataTables-example">
					<tr>
						<td class="form-inline"> 
							<label> Unit : </label>
                                                              <form action="<?php echo base_url();?>user/view_unit" method="post">
                                                        	<select  name="course_id" id="course_id" class="form-control input-sm" value="<?php echo set_value('course_id'); ?>" onchange='this.form.submit()'>												<option value="Select unit_id">Select Unit</option>
												<?php
															foreach($query3 as $unit){
																echo '<option value="'.$unit->units_id.'">'.$unit->units_name.'</option>';
															}?>	
											</select>
</form>
							
						</td> 
						<form action="<?php echo base_url();?>user/view_date" method="post">

						<td class="form-inline"> 
							<label> From Due Date : </label>
							<input type="text" id="datepicker" name="tender_due_date_from" />
						</td>
						<td class="form-inline"> 
							<label> To Due Date : </label>
							<input type="text" id="datepicker1" name="tender_due_date_to"  onchange='this.form.submit()' />
						</td>
                                            </form>

					</tr>
				</table>
				</div>
			<div class="tableEven">
				<table class="table table-bordered" id="dataTables-example">
 					<thead class="tableBackground">
 						<th>SL NO</th>
 						<th>Tender / EOI / Corrigendum </th>
 						<th>Date</th>
 						<th>Title</th>
 						<th>Due Date</th>
                                                 <th>Due Time</th>
 						<th>Location</th>
 						<th>Download</th>
 					</thead>
 					
 					<?php 
                                    foreach ($query1  as $tender)
				{
						
			         ?>
                                 <tr>
 					<tr id="hideTabelRowButton" style="text-align: left;">
 						<td><?php echo $tender->tender_id;?></td>
 						<td><?php echo $tender->tendor_code;?></td>
 						<td><?php $originalDate = $tender->tender_date;
 echo  $newDate = date("d-m-Y", strtotime($originalDate));  ?></td>
 						<td><?php echo $tender->tender_name ?></td>

 						<td><?php $originalDate = $tender->tender_due_date ;
 echo  $newDate = date("d-m-Y", strtotime($originalDate));  ?></td>
                                                 <td><?php echo $tender->tender_due_time ?></td>
 						<td><?php echo $tender->units_name;?></td>
 						<td><a href="<?php echo base_url().$tender->tender_path; ?>">Download</a></td>
 					</tr>
 					
 					
 					
 					<?php 
 					
 					if($tender->corrigendum_added=='1')
 					{
 					
                                    foreach ($query2  as $cor)
				{
						
			         ?>
 					<tr id="hideTabelRow" style="text-align: right;">
 						<td>Corrigendum<?php echo $cor->corrigendum_id;?></td>
 						<td><?php echo $cor->corrigendum_code;?></td>
 						<td><?php $originalDate = $cor->corrigendum_date ;
 echo  $newDate = date("d-m-Y", strtotime($originalDate));  ?></td>
 						<td><?php echo $cor->tender_name ?></td>
 						<td><?php $originalDate = $cor->corrigendum_due_date ;
 echo  $newDate = date("d-m-Y", strtotime($originalDate));  ?></td>
                                                <td><?php echo $cor->corrigendum_due_time ?></td>

 						<td><?php echo $cor->units_name;?></td>
 						<td><a href="<?php echo base_url().$cor->tender_path; ?>">Download</a></td>
 					</tr>
 					<?php
 					 
 					}
 					}
 					?>
 					<?php } ?>
				</table>
			</div>
		 	<!-- first table ends here -->
		  </div>

		</div>
	</div>


	<?php 
		include_once 'footer.php';
	?>


</div>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>	
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--<script type="text/javascript">
	$(document).ready(function(){
		$('#hideTabelRow').hide(); 
			$('#hideTabelRowButton').mouseover(function () {
			      $('#hideTabelRow').show();      
			});
			$('#hideTabelRowButton').mouseout(function () {
			      $('#hideTabelRow').hide();      
			});
	});
</script> --->
</body>
</html>