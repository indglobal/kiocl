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
	
	  <script>
		  $(function() {
		    $( "#accordion" ).accordion();
		  });
	 </script>
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

		  <div class="col-md-9">
		    <h3 class="backCorporate" style="text-align:left; padding-left:2%;"> Unit Profile</h3>
		  	<p class="text-justify iconLeft"> Bangalore Unit is the first Plant of ITI set up in 1948. With its, vertically   integrated, state-of-the-art infrastructure a vast range of telecom products are manufactured. They include digital switches (large, medium, small), Digital   Microwave equipment, optic fibre equipments, satellite communication  equipment, access products, terminal equipments.</p>
		  	<h3 class="backCorporate" style="text-align:left; padding-left:2%;"> Areas of Business</h3>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> Telecom Equipment Manufacture for Defence and Civilians applications</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> Installation & Communication</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> Turnkey Solutions</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> IT Networks</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> Diversified Products</p>
		  	<h3 class="backCorporate" style="text-align:left; padding-left:2%;"> Products</h3>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> <strong>Switching : </strong>CSN-MM,C-DOT,ISDN and PABX</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> <strong>Access: </strong>WLL/CDMA INFRA, Broadband CorDECT(EDWAS),Antenna GSM/CDMA</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> <strong>Transmission: </strong>IDR   SATCOM   Microwave</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> <strong>Terminal Equipments:</strong>Caller ID Phones</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> <strong>Defence Equipments: </strong>ORDERWIRE SECRECY(OWS) , ANADA MK II BEU,  MIL PCM SECRECY , L VSAT 5B/5C TELEPHONES, PRIMARY MUX</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> ASCON</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> EPBT</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> ADSL-CPEs, Secrecy Equipments</p>
		  	<p class="text-justify iconLeft"><i class="fa fa-caret-right"></i> INFO KIOSKS and Desktop Computers</p> <br/>
		  	<div class="row">
		  		<div class="col-md-3 text-center">
		  			<img src="images/pcm.jpg"><br/><br/>
		  			<h4> PCM Secrecy </h4>
		  		</div>
		  		<div class="col-md-3 text-center">
		  			<img src="images/ows.jpg"><br/><br/>
		  			<h4> OWS </h4>
		  		</div>
		  		<div class="col-md-3 text-center">
		  			<img src="images/tnsr.jpg"><br/><br/>
		  			<h4> TNSR </h4>
		  		</div>
		  		<div class="col-md-3 text-center">
		  			<img src="images/dcs.jpg"><br/><br/>
		  			<h4> ADSL MODEM </h4>
		  		</div>
		  	</div><br/>
		  	 <h3 class="backCorporate" style="text-align:left; padding-left:2%;"> Facilities</h3>
		  	 
		  	 <!-- facilities accordion -->
		  	 <div id="accordion">
					  <h3>SMT Line</h3>
					  <div>
					    <p class="text-justify">
					    Consists of Screen Printer,Glue Dispenser,Chip Shooter,Fine Placer and Reflow Oven
							Capability : 40000 components / hr.
							Chip shooter : Placement minimum size 0603 (1.5mm x 0.75mm) components to max. size 55mm x 55 mm ICs. Fine placement upto 0.5mm Pitch & Accuracy of 25 microns
							Capacity : 150 million components per annum
					    </p>
					    <img src="images/smt1.jpg">
					     <img src="images/smt2.jpg">
					    <br/><br/>
					  </div>
					  <h3>Mechanical Fabricaton and Assembly</h3>
					  <div>
					  <h3>Machines Available :</h3>
					    <p class="text-justify">
					    CNC Turret Punch Press (30 tons), NC Pressbrakes (upto 120 tons), CNC Shearing (2.5 mtrs) and General purpose machines
						Capability: Handling sheet metal work of 2mm thickness of stainless steel, 2.5mm MS & 3.2mm Aluminium
						Capacity: Process about 100 tons of Sheet Metal per month
					    </p>
					    <img src="images/mech.jpg">
					  </div>
					  <h3>Through-Hole Component Assembly</h3>
					  <div>
					    <p class="text-justify">Capability :Dual wave and Nitrogen atmosphere wave soldering </p>
						<p class="text-justify">	Capacity : 36 million components per annum</p><br/>
					    <img src="images/throughHole.jpg">
					  </div>
					  <h3>PCB Manufacturing</h3>
					  <div>
					    <p class="text-justify">Capability :Single Layer to 4 Layer </p>
					    <p class="text-justify">Capacity : 3000 Sq.Metres per annum</p> <br/>
					    <img src="images/pcb.jpg">
					     <img src="images/pcb1.jpg">
					  </div>
					   <h3>Testing Facilities</h3>
					  <div>
					    <p class="text-justify">In-Circuit Testers (upto 2000 nodes)
						Capability :Detects open, short, continuity, correctness of the components with respect to Orientation, Value, etc</p>
					    <p>Capacity : 1,50,000 cards per year (average)
						Functional testing for cards
						System Testing</p>
						 <img src="images/testing.jpg">
					  </div>
					   <h3>Plastic Injection Technology</h3>
					  <div>
					    <p class="text-justify">Capability: 25 to 300 tons </p>
						<p class="text-justify">Capacity: 0.5 million shots per annum</p>
					    <img src="images/plasticInjection.jpg">
					  </div>
					   <h3>Tool Room</h3>
					  <div>
					    <p class="text-justify">Capability:Manufacture and maintenance of moulding tools, press tools, jigs & fixtures </p>
					    <p class="text-justify">Capacity:Supporting in-house requirements</p>
					    <img src="images/toolRoom.jpg">
					  </div>
					   <h3>Finishing</h3>
					  <div>
					    <p class="text-justify">Capability: Electroplating and Powder coating facilities</p>
					    <p class="text-justify">Capacity: Supporting in-house fabrication</p>
					    <div class="row">
					    <div class="col-md-4">
					    <h3>Nickle Plating</h3>
					     <img src="images/nickle.jpg">
					    </div>
					     <div class="col-md-4">
					    <h3>Non-cyanide plating</h3>
					     <img src="images/nonCyanida.jpg">
					    </div>
					     <div class="col-md-4">
					    <h3>Upgraded Zinc Phosphating plant</h3>
					     <img src="images/upgradedZinc.jpg">
					    </div>
					     </div>
					  </div>
					   <h3>Other Support Facilities</h3>
					  <div>
					   <ul>
					   		<li>EMI Shielded Chamber</li>
							<li>Electrical Test Lab.</li> 
							<li>Mechanical Test Lab.</li>
							<li>Chemical Test Lab</li>
							<li>Environmental Testing Facility</li>
					   </ul>
					  </div>
					  <h3>Total Turnkey Solutions</h3>
					  <div>
						<ul>
							<li>CDMA Network : 4.4 Million Lines - Supply, Installation and Commissioning for BSNL</li>
							<li>Army Static Communication Network (ASCON) for Defence Forces (Covering entire country)</li>
							<li>CIVICON PROJECT for Ministry of Home Affairs (Turn-key Network Implementation)</li>
							<li>CARNATION Project for Indian ARMY (Wide Area Strategic Network)</li>
							<li>IDR Project for BSNL</li>
							<li>MCPC VSAT for BSNL</li>
							<li>Point to Point Satellite based Links for RCPO</li>
							<li>LICO VSAT for Indian ARMY</li>
							<li>SCPC DAMA Equipment</li>
						</ul>
					  </div>
					</div>
		  </div>

		  <div class="col-md-3 text-left">
		  	<h3 class="backCorporate">Bangalore Unit</h3>
		  	<div class="text-center"><img src="images/bangalore.jpg"></div> <br/>
		  	<h3 class="backCorporate">Contact Details</h3>
		  	<p class="text-justify"> Phone : 080 25651211 </p>
		  	<p class="text-justify"> Fax :  080 25651724  </p>
		  	<p class="text-justify"> <strong>J. PREMCHAND</strong> <br/>
				Deputy General Manager, <br/>
				Bangalore Plant and R&D <br/>
				ITI Limited, Dooravaninagar,<br/>
				Bangalore-560016, Karnataka,India.
		  	  </p>
		  	<p class="text-justify"> Phone : 080 25651211 <br/>
		  	Fax :  080 25651724<br/>
		  	<strong>Email : </strong><br/>dgmb_bgp@itiltd.co.in
				premchand_bgp@itiltd.co.in
		  	</p>
		  	<h3 class="backCorporate">Quality system</h3>
		  	<p class="text-justify iconLeft">  <i class="glyphicon glyphicon-play"></i> ISO 9001:2008 </p>
			<p class="text-justify iconLeft">  <i class="glyphicon glyphicon-play"></i> ISO 14001 :2004 </p>
		  </div>
		</div>

		
		
		

	</div>

	<?php 
		include_once 'footer.php';
	?>


</div>

<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Jquery UI links -->
	<script type="text/javascript" src="plugins/jquery-ui-1.11.4/external/jquery/jquery.js"></script>
	<script type="text/javascript" src="plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.11.4/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.11.4/jquery-ui.theme.css">
	 <script>
</body>
</html>