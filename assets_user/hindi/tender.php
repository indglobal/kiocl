<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ITI </title>
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap.theme.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu-left.css" rel="stylesheet">
</head>
<body>

<div class="fullWidth">
	


	<?php 
		include_once 'header.php';
	?>
	<?php
		include_once 'topMenu.php';
	?>

	<div class="containerWidth homeSlider" style="padding:0px 15px">
			
			<div class="imageBack"> .</div>
	</div>

	<?php 
		include_once 'bottomMenu.php';
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
							<select class="form-control input-md">
								<option> All </option>
								<option> Bangalore </option>
								<option> Chennai </option>
								<option> Palakkad </option>
							</select> 
						</td> 
						<td class="form-inline"> 
							<label> Title : </label>
							<select class="form-control input-md">
								<option> All </option>
								<option> Bangalore </option>
								<option> Chennai </option>
								<option> Palakkad </option>
							</select> 
						</td>
						<td class="form-inline"> 
							<label> From Due Date : </label>
							<select class="form-control input-md">
								<option> All </option>
								<option> Bangalore </option>
								<option> Chennai </option>
								<option> Palakkad </option>
							</select> 
						</td>
						<td class="form-inline"> 
							<label> To Due Date : </label>
							<select class="form-control input-md">
								<option> All </option>
								<option> Bangalore </option>
								<option> Chennai </option>
								<option> Palakkad </option>
							</select> 
						</td>
					</tr>
				</table>
				</div>
			<div class="tableEven">
				<table class="table table-bordered">
 					<thead class="tableBackground">
 						<th>SL NO</th>
 						<th>Tender / EPI Reference No</th>
 						<th>Date</th>
 						<th>Title</th>
 						<th>Due Date</th>
 						<th>Location</th>
 						<th>VIEW</th>
 					</thead>
 					<tr id="hideTabelRowButton">
 						<td>1</td>
 						<td>PKD/ASR/fd/300</td>
 						<td>01-08-2014</td>
 						<td>Purchase of PCs and Printers</td>
 						<td>15-08-2014</td>
 						<td>Bangalore</td>
 						<td>Download</td>
 					</tr>
 					<tr id="hideTabelRow">
 						<td></td>
 						<td>PKD/ASR/fd/300</td>
 						<td>01-08-2014</td>
 						<td>Purchase of PCs and Printers</td>
 						<td>15-08-2014</td>
 						<td>Bangalore</td>
 						<td></td>
 					</tr>
 					<tr>
 						<td>2</td>
 						<td>PKD/ASR/fd/300</td>
 						<td>01-08-2014</td>
 						<td>Purchase of PCs and Printers</td>
 						<td>15-08-2014</td>
 						<td>Bangalore</td>
 						<td>Download</td>
 					</tr>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#hideTabelRow').hide(); 
			$('#hideTabelRowButton').mouseover(function () {
			      $('#hideTabelRow').show();      
			});
			$('#hideTabelRowButton').mouseout(function () {
			      $('#hideTabelRow').hide();      
			});
	});
</script>
</body>
</html>