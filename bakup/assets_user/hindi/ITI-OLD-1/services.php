<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ITI </title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>	
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
		<div class="row margin-Bottom">
		  <div class="col-md-3">
		  
		  			


			    <div class="nav-side-menu">
    
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">


                 <li  >
                  <i class="glyphicon glyphicon-play"></i> <a href="datacenter">Data Center</a>
                </li>
              

                  <li >
                 <i class="glyphicon glyphicon-play"></i> <a href="nsunits">NS Unit</a>
                </li>  
               

            </ul>
     </div>
</div>






		  		
		  </div>

		  <div class="col-md-9 submenu">
		  <h1><span class="submenuOne">SERVICES</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  		<ul>
		  			<li> <a href="mlln"> MLLN- Managed Leased Line Network </a></li>
		  			<li> <a href="sstp">SSTP- Stand Alone Signaling Transfer Point Network </a></li>
		  			<li> <a href="system_integration">Systems Integration Telecom  </a></li>
		  			<li> <a href="system_integration">Systems Integration IT </a></li>
		  			<li> <a href="javascript:void(0)">Shared Hub V-SAT Services </a></li>
		  			<li> <a href="javascript:void(0)">Customer Care Service </a></li>
		  			<li> <a href="javascript:void(0)">Installation & Commissioning Microwave, Optical Fibre, etc. </a></li>
		  			<li> <a href="javascript:void(0)">Pre-warranty & Post-warranty maintenance services </a></li>
		  			<li> <a href="javascript:void(0)">Services for all Products/Projects</a></li>
		  			<li> <a href="javascript:void(0)">Enterprise businesses like Data Centers etc</a></li>
		  		</ul>
		  	</div>
			<div class="col-md-3">
			<img src="images/services.gif">
			</div>
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