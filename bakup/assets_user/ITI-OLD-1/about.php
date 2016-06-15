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
		  <div class="col-md-3">
			    <div class="nav-side-menu">  
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
            
                <li  data-toggle="collapse" data-target="#products">
                  <i class="glyphicon glyphicon-play"></i><a href="javascript:void(0)"> Manufacturing Units <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="bangalore">Bangalore (Karnataka)</a></li>
                    <li><a href="naini">Naini (UP)</a></li>
                    <li><a href="raebareli">Rae Bareli (UP)</a></li>
                    <li><a href="mankapur">Mankapur (UP)</a></li>
                    <li><a href="palakkad">Palakkad (Kerala)</a></li>
                    <li><a href="srinagar">Srinagar (J&K)</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                 <i class="glyphicon glyphicon-play"></i><a href="javascript:void(0)"> Regional Offices <span class="arrow"></span></a> 
                </li>
             	 <ul class="sub-menu collapse" id="service">
                    <li class="active"><a href="regionalOffices.php#regional4">New Delhi</a></li>
                    <li><a href="regionalOffices.php#regional1">Bangalore</a></li>
                    <li><a href="regionalOffices.php#regional3">Kolkatta</a></li>
                    <li><a href="regionalOffices.php#regional3">Lucknow</a></li>
                    <li><a href="regionalOffices.php#regional4">Mumbai</a></li>
                    <li><a href="regionalOffices.php#regional2">Chennai</a></li>
                    <li><a href="regionalOffices.php#regional2">Hyderabad</a></li>
                    <li><a href="regionalOffices.php#regional1">Bhubaneshwar</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <i class="glyphicon glyphicon-play"></i> <a href="javascript:void(0)">Network Systems Unit<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="nsunits">Bangalore</a></li>
                </ul>
            </ul>
     </div>
</div>






		  		
		  </div>

		  <div class="col-md-6 submenu">
		  <h1><span class="submenuOne">Company Profile </span></h1>
		  	<p class="text-justify"> India’s first Public Sector Unit (PSU) - ITI Ltd was established in 1948. Ever since, as a pioneering venture in the field of telecommunications, it has contributed to 50% of the present national telecom network. With state-of-the-art manufacturing facilities spread across six locations and a countrywide network of marketing/service outlets, the company offers a complete range of telecom products and total solutions covering the whole spectrum of Switching, Transmission, Access and Subscriber Premises equipment.  </p>
		  	<p class="text-justify">ITI joined the league of world class vendors of Global System for Mobile (GSM) technology with the inauguration of mobile equipment manufacturing facilities at its Mankapur and Rae Bareli Plants in 2005-06. This ushered in a new era of indigenous mobile equipment production in the country. These two facilities supply more than nine million lines per annum to both domestic as well as export markets.</p>
		  	<p class="text-justify">The company is consolidating its diversification into Information and Communication Technology (ICT) to hone its competitive edge in the convergence market by deploying its rich telecom expertise and vast infrastructure. Network Management Systems, Encryption and Networking Solutions for Internet Connectivity are some of the major initiatives taken by the company. </p>
		  	<p class="text-justify">Secure communications is the company's forte with a proven record of engineering strategic communication networks for India's Defence forces. Extensive in-house R&D work is devoted towards specialized areas of Encryption, NMS, IT and Access products to provide complete customized solutions to various customers. </p>
		  </div>

		  <div class="col-md-3 text-left">
		  	<h3 class="backCorporate">Corporate Office</h3>
		  	<p style="font-size:16px; font-weight:600">REGISTERED & CORPORATE OFFICE</p>
		  	<p class="text-justify">ITI BHAVAN, DOORAVANINAGAR <br/>
				BANGALORE-560016, INDIA <br/>
				CIN No. L32202KA1950GOI000640 <br/>
				PH :080-25614466<br/>
				FAX : 080-25617525
		  	</p>
			<div class="text-center"><img src="images/itiBhavan.jpg"></div>
		  	<h3 class="backCorporate">Number of Employees</h3>
		  	<p class="text-justify"> Total : 5976 </p>
		  	<h3 class="backCorporate">R & D Centers</h3>
		  	<p class="text-justify">  <i class="glyphicon glyphicon-play"></i> <a href="javascript:void(0)">Bangalore</a> </p>
		  	<p class="text-justify">  <i class="glyphicon glyphicon-play"></i> Naini </p>
		  	<p class="text-justify">  <i class="glyphicon glyphicon-play"></i> Mankapur </p>
		  	<h3 class="backCorporate">Quality System</h3>
			<p class="text-justify">  <i class="glyphicon glyphicon-play"></i> ISO 9001:2000 </p>
			<p class="text-justify">  <i class="glyphicon glyphicon-play"></i> ISO 14001 :2004 </p>
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