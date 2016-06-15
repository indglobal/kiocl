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
                  <i class="glyphicon glyphicon-play"></i> DEFENCE PRODUCTS <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products" style="display:inherit">
                     <li><a href="defence">ORDERWIRE SECRECY</a></li>
                    <li><a href="mil">MIL PCM SECRECY</a></li>
                    <li><a href="anada">ANADA MK II BEU</a></li>
                    <li><a href="stm1">STM1 ENCRYPTOR</a></li>
                    <li><a href="beu">BEU IP</a></li>
                    <li><a href="fax">FAX ENCRYPTOR</a></li>
                   
                </ul>

                 


            </ul>
     </div>
</div>






		  		
		  </div>

		  <div class="col-md-9 submenu">
		  <h1><span class="submenuOne">STM1 ENCRYPTOR</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  	
		  	<p class="text-justify">STM 1 Encryptor encrypts/decrypts SDH formatted data at bit rates of 155Mbps. It accepts either electrical / Optical Interface as clear data input and gives out encrypted data again as Electrical or Optical Interface. Works with proprietary algorithm and Key management. The encryptor provides NMS interface for monitoring and alarm indication. It is equipped in standard 19” sub rack. While working on long haul Optical lines it has in built facility of Optical regenerators. Unit has low power consumption and works from -48v DC Power supply.</p> 
		  	
		  	
		  
		  	
		  
		  	</div>
			<div class="col-md-3">
			<img src="images/stm1.jpg">
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