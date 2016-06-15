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


                 <li >
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
		  <h1><span class="submenuOne">CDMA (Code Division Multiple Access)</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  	
		  	<p class="text-justify">CDMA (Code Division Multiple Access) is a digital wireless technology to provide mobile communication. CDMA works by converting speech into digital information, which is then transmitted as a radio signal over a wireless network.  CDMA uses a unique code to distinguish each different call.  The receiving device is instructed to decipher only the data corresponding to a particular code to reconstruct the signal.  This enables many subscribers to share the same frequency band and, at the same time, without any cross talk or interference. </p> 
		  	
		  	<p class="text-justify"> CDMA WLL technology provides option of limited as well as full mobility to the customers.  This helps to provide faster last mile connectivity, where laying of cables is difficult. </p> 
		  	
		  
		  	
		  
		  	</div>
			<div class="col-md-3">
			<img src="images/cdma.jpg">
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