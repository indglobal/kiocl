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


                 <li>
                  <i class="glyphicon glyphicon-play"></i> GSM Products <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products" style="display:inherit">
                     <li><a href="gsm">BTS</a></li>
                    <li><a href="bts_shelter">BTS SHELTER</a></li>
                    <li><a href="roof_top">ROOF TOP TOWER</a></li>
                    <li><a href="transceiver">TRANSECEIVER</a></li>
                   
                </ul>

                  <li>
                 <i class="glyphicon glyphicon-play"></i> CDMA Products <span class="arrow"></span>
                </li>  
                <ul class="sub-menu collapse" id="service" style="display:inherit">
                  <li><a href="cdma_wll">CDMA WLL</a></li>
                
                </ul>


            </ul>
     </div>
</div>






		  		
		  </div>

		  <div class="col-md-9 submenu">
		  <h1><span class="submenuOne">ROOF TOP TOWER</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  	<h3 style="border:none;">Technical Specification</h3>
		  	<p class="text-justify"> <i class="fa fa-caret-right"></i> Square Lattice type of RTT are manufactured as per GR No. GR/TWR-09 FEB. 2004 </p> 
		  	<p class="text-justify"><i class="fa fa-caret-right"></i> Design of triangular type RTT is duly approved from Structural Engineering Research Center (SERC), Chennai. </p> 
		  	<p class="text-justify"> <i class="fa fa-caret-right"></i> All members of RTT are made up of structural steel as per IS2062 Grade A & hot dip Zinc galvanized as per IS 4759. </p> 
		  	<p class="text-justify"><i class="fa fa-caret-right"></i> It can carry 6 Nos. GSM/WLL Antenna & 3 Nos. 0.6M dia Microwave Antenna. </p> 
		  	<p class="text-justify"> <i class="fa fa-caret-right"></i> Basic design of RTT is for wind speed 200 Km/h. It can survive wind velocity up to of 210 km/h for short duration. </p>
		  
		  	<h3><span class="submenuOne">PRODUCT RANGE</span></h3>
		  	
		  	<p><i class="fa fa-chevron-circle-right"></i> Square Lattice Type of RTT(as per GR) : - 10M, 15M, 20M Height.  </p>
			  	<p><i class="fa fa-chevron-circle-right"></i>Triangular Type RTT(SERC) : - 9M, 12M, 15M & 18M Height.  </p>
			  
		  	</ol>
		  	</div>
			<div class="col-md-3">
			<img src="images/tower.jpg">
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