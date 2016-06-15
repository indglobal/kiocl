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
                  <i class="glyphicon glyphicon-play"></i> जीएसएम उत्पादों <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products" style="display:inherit">
                     <li><a href="gsm">बीटीएस</a></li>
                    <li><a href="bts_shelter">बीटीएस आश्रय</a></li>
                    <li><a href="roof_top">छत के ऊपर टावर</a></li>
                    <li><a href="transceiver">ट्रान्सेसेइवेर</a></li>
                   
                </ul>

                  <li>
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
		  <h1><span class="submenuOne">ट्रान्सेसेइवेर</span></h1>

		  <div class="row">
		  	<div class="col-md-9">
		  	
		  	<p class="text-justify"> रैक में एक ही स्थान पर कब्जा है, जबकि अल्काटेल का नया ट्विन टरक्श्रे डियो ट्रांसीवर, मौजूदा उपकरणों की क्षमता डबल्स। </p> 
		  	<p class="text-justify">नई जुड़वां टरक्श्  विशेष रूप से बेस स्टेशन कैबिनेट प्रति 24 टरक्श्    की अधिकतम क्षमता के साथ, घनी आबादी वाले शहरी क्षेत्रों के लिए अनुकूलित है।</p> 
		  	<p class="text-justify"> जुड़वा टरक्श्  ट्रांससीवर्स अल्काटेल के इनडोर और आउटडोर बीटीएस की पूरी रेंज में स्थापित किया जा सकता है। </p> 
		  	
		  
		  	
		  
		  	</div>
			<div class="col-md-3">
			<img src="images/trx.jpg">
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