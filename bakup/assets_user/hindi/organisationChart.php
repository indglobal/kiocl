<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ITI </title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>	
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap.theme.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
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
		<div class="row margin-Bottom">
		  <div class="col-md-12 submenu">
		  <h1 class="text-center"><span style="border-bottom: 2px solid #006FB7; padding:0px 15px;" > संगठन चार्ट  </span></h1>
		  	<div class="embed-responsive embed-responsive-4by3 text-center">
			  <img src="images/organisationChart.jpg">
			</div>
		  </div>

		</div>

		
		
		

	</div>

	<?php 
		include_once 'footer.php';
	?>


</div>

<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>