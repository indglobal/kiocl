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
                  <i class="glyphicon glyphicon-play"></i> GSM Products <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products" style="display:inherit">
                    <li><a href="gsm">BTS</a></li>
                    <li><a href="bts_shelter">BTS SHELTER</a></li>
                    <li><a href="roof_top">ROOF TOP TOWER</a></li>
                    <li><a href="transceiver">TRANSECEIVER</a></li>
                   
                </ul>

                  <li >
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
		  <h1><span class="submenuOne">BTS</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  	<p class="text-justify"> Base Trans-Receiver Station (BTS) “BTS A-9100”, is radio frequency mobile communication product based on GSM technology. It is a set of equipments that facilitates wireless communication between user equipment (UE) and a network. A BTS in general consists of Trans-receiver module, Antenna Network Combiner, Controller (SUMA) & Alarm Extension System (XIBM). It is a self contained unit for transmitting / receiving signal for mobile communication. </p> 
		  	<h3><span class="submenuOne">Types Of BTS</span></h3>
		  	<ol>
			  	<li>Indoor BTS </li>
			  	<li>Outdoor BTS  </li>
			  	<li> Dual Band BTS  </li>
			  	<li> Twin TRX BTS  </li>
		  	</ol>
		  	</div>
			<div class="col-md-3">
			<img src="images/bts.jpg">
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