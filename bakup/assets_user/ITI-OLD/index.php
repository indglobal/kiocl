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
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
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
			
			<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
			<div id="wowslider-container1">
			<div class="ws_images"><ul>
				<li><img src="data1/images/slide1.jpg" alt="slide-1" title="slide-1" id="wows1_0"/></li>
				<li><img src="data1/images/slide2.jpg" alt="slide-2" title="slide-2" id="wows1_1"/></li>
				<li><a href="http://wowslider.com/vi"><img src="data1/images/slide3.jpg" alt="slideshow jquery" title="slide-3" id="wows1_2"/></a></li>
				<li><img src="data1/images/slide4.jpg" alt="slide-4" title="slide-4" id="wows1_3"/></li>
			</ul></div>
		<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery slider free download</a> by WOWSlider.com v8.2</div>
			<div class="ws_shadow"></div>
			</div>	
			<script type="text/javascript" src="engine1/wowslider.js"></script>
			<script type="text/javascript" src="engine1/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
	</div>

<?php 
include_once 'bottomMenu.php';
?>

	<div class="containerWidth backgroundBody">
		<h3 class="text-center text-bold "> <span class="borderBottom"> News And Events</span> </h3>   <br/>

		<div class="row margin-Bottom">
		  <div class="col-md-2">
		  		<img src="images/imgOne.jpg" width="150px" height="100px">
		  </div>
		  <div class="col-md-4">
		   <p class="fontWeight">ITI Limited gets “Certificate of Excellence” Award</p>
		  	<p class="text-justify">ITI Limited has been conferred with “Certificate of Excellence” award by the Institute of Economic Studies, Delhi (IES). <br/>
		  	<span class="colorBlue"> <a href="http://www.itiltd-india.com/upload/News%20Events/Certificate%20of%20Excellence%20award_18-05-2015.pdf">Read More </a> </span> </p>
		  </div>
		  <div class="col-md-2">
		  	<img src="images/imgTwo.jpg" width="150px" height="100px">
		  </div>
		  <div class="col-md-4">
		   <p class="fontWeight">ITI Limited Conferred SKOCH Order of Merit Award 2014 </p>
		  	<p class="text-justify">SKOCH Group organized its 38th SKOCH Summit on 20th - 21st November, 2014 at Habitat Centre, New Delhi.<br/>
		  	<span class="colorBlue"> <a href="http://www.itiltd-india.com/upload/News%20Events/ITI%20Limited%20Conferred%20SKOCH%20Order%20of%20Merit_24-11-2014.pdf">Read More </a></span></p>
		  </div>
		</div>

		<div class="row margin-Bottom">
		  <div class="col-md-2">
		  		<img src="images/imgThree.jpg" width="150px" height="100px">
		  </div>
		  <div class="col-md-4">
		  	 <p class="fontWeight">ITI signed MoU with HAL</p>
		  	<p class="text-justify">An MoU was signed between M/s. ITI and M/s. HAL for exploring mutually
beneficial business opportunities in the manufacturing and service domains.<br/>
		  	<span class="colorBlue"> <a href="http://www.itiltd-india.com/upload/News%20Events/ITI%20signed%20MoU%20with%20HAL_28-11-2014.pdf">Read More </a> </span></p>
		  </div>
		  <div class="col-md-2">
		  	<img src="images/imgFour.jpg" width="150px" height="100px">
		  </div>
		  <div class="col-md-4">
		  	  <p class="fontWeight">Shri K K Gupta takes over as CMD of ITI Limited</p>
		  	<p class="text-justify"> Shri K.K.Gupta, Director (Production), ITI Limited, has taken over the additional charge of the post of Chairman and Managing Director, ITI Limited, on 4th of June 2015.<br/> 
		  	<span class="colorBlue"> <a href="http://www.itiltd-india.com/upload/News%20Events/Shri%20K%20K%20Gupta%20takes%20over%20as%20CMD%20of%20ITI%20Limited_05-06-2015.pdf">Read More </a></span></p>
		  </div>
		</div>
			<br/><br/>
		<div class="row">
			<div class="col-md-2 col-md-offset-3">
			<img src="images/icon.png">
			</div>
			<div class="col-md-3">
			<img src="images/icon1.png">
			</div>
			<div class="col-md-2">
			<img src="images/icon2.png">
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