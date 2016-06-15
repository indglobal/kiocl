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
                  <i class="glyphicon glyphicon-play"></i> जीएसएम उत्पादों <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products" style="display:inherit">
                    <li><a href="gsm">बीटीएस</a></li>
                    <li><a href="bts_shelter">बीटीएस आश्रय</a></li>
                    <li><a href="roof_top">छत के ऊपर टावर</a></li>
                    <li><a href="transceiver">ट्रान्सेसेइवेर</a></li>
                   
                </ul>

                  <li >
                 <i class="glyphicon glyphicon-play"></i> सीडीएमए उत्पादों <span class="arrow"></span>
                </li>  
                <ul class="sub-menu collapse" id="service" style="display:inherit">
                  <li><a href="cdma_wll">सीडीएमए डब्ल्यूएलएल</a></li>
                
                </ul>


            </ul>
     </div>
</div>






		  		
		  </div>

		  <div class="col-md-9 submenu">
		  <h1><span class="submenuOne">बीटीएस</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  	<p class="text-justify"> बेस ट्रांस रिसीवर स्टेशन (बीटीएस) जीएसएम तकनीक पर आधारित रेडियो आवृत्ति मोबाइल संचार उत्पाद, "एक-9100 बीटीएस में है।" यह उपयोगकर्ता के उपकरण (ऊए) और एक नेटवर्क के बीच बेतार संचार की सुविधा है कि उपकरणों का एक सेट है। सामान्य तौर पर एक बीटीएस ट्रांस रिसीवर मॉड्यूल, एंटीना नेटवर्क कॉम्बिनेर , नियंत्रक (सुमा) और अलार्म विस्तार प्रणाली (क्षिबम्) के होते हैं। यह / संचारण मोबाइल संचार के लिए संकेत प्राप्त करने के लिए एक आत्म निहित इकाई है।</p> 
		  	<h3><span class="submenuOne">बीटीएस के प्रकार</span></h3>
		  	<ol>
			  	<li> इंडोर बीटीएस </li>
			  	<li> आउटडोर बीटीएस </li>
			  	<li> दोहरी बैंड बीटीएस </li>
			  	<li> जुड़वा टरक्श् बीटीएस  </li>
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