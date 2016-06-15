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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1_4.min.js"></script>  
               <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui_1_8.min.js"></script> 
<script type="text/javascript">
		$(document).ready(function() {  
			$("#unit_id").change(function(){ 
				var units_name  =   $( "#unit_id option:selected" ).text();
						if(units_name!='Select Course'){
							$.ajax({  
								url:"http://poc.itiltd-india.com/user/units_list",  
								data: {id:$(this).val()},  
								type: "POST",  
								success:function(data){	
								var string_s=data.split("@imp");
								$("#branch_id").css("display","block");	
								$("#branch_id").html(string_s[0]);
								$("#dataTables-example").html(string_s[1]);
								}  
							});
						}    
				});
			
</script>
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
				<table class="table table-bordered">
					<tr>
						<td class="form-inline"> 
							<label> Unit : </label>
                                                        	<select  name="unit_id" id="unit_id" class="form-control input-md" value="<?php echo set_value('course_id'); ?>">
												<option value="Select course_id">Select Course</option>
												<?php
															foreach($query3 as $unit){
																echo '<option value="'.$unit->units_id.'">'.$unit->units_name.'</option>';
															}?>	
											</select>
							
						</td> 
						
						<td class="form-inline"> 
							<label> From Due Date : </label>
							<input type="text" id="datepicker" />
						</td>
						<td class="form-inline"> 
							<label> To Due Date : </label>
							<input type="text" id="datepicker1" />
						</td>
					</tr>
				</table>
				</div>
			<div class="tableEven">
				<table class="table table-bordered">
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
 						<td><?php echo $tender->tender_date; ?></td>
 						<td><?php echo $tender->tender_name ?></td>
 						<td><?php echo $tender->tender_due_date ?></td>
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
 					<tr id="hideTabelRow">
 						<td><?php echo $cor->corrigendum_id;?></td>
 						<td><?php echo $cor->corrigendum_code;?></td>
 						<td><?php echo $cor->corrigendum_date;?></td>
 						<td><?php echo $cor->tender_name ?></td>
 						<td></td>
                                                <td></td>

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