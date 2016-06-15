<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Chandraprakash N J">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book My Plot</title>
	<!-- Bootstrap css links -->
	<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<!-- font awesome link -->
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.css">
	<!-- jquery ui css links -->
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.11.4/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.11.4/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.11.4/jquery-ui.theme.css">
	<!-- Google fonts link -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	
	<!-- my style sheet -->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="plotslider/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="css/menustyle.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/animated-slider.css" />
    <link href="/public/fontastic/styles.css" rel="stylesheet">
</head>
<body>
	<header>
	<div class="header-cont">
		<div class="fullWidth">
			<div class="container">
				<div class="paddigTop">
					<div class="row">
						<div class="col-md-3">
							<img src="images/logo.png">
						</div>
						<div class="col-md-2">
							<i class="fa fa-map-marker faColor"></i>
							<select id="dropdown">
								<option class="Green">Select City</option>
								<option class="Green">Hydrabad</option>
								<option class="Green">Chennai</option>
								<option class="Green">Mumbai</option>
							</select>
						</div>
						<div class="col-md-2 col-md-offset-1 text-right">
							<select id="other">
								<option>Other Services</option>
							</select>
						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-success btnCustomized">List your property</button>
						</div>
						<div class="col-md-2 marginTop">
							<!-- <span class="colorWhite">Login</span><span class="colorWhite"> |</span> <span class="colorWhite">Sign Up</span> -->
							<button class="btn btn-login_Signup btn-login-index" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php include_once('modals.php'); ?>	
	<!-- start banner slider -->
 <div class="container-fluid pd0">
    <div class="banner-block">
      <div id="coe-banner" class="owl-carousel">
        <div>
            <img src="images/banner-img.jpg"> 
        </div>
        <div>
            <img src="images/banner-img.jpg"> 
        </div>
      </div>
            
        <div class="plot-search">
         <button id="reg-close" class="close hidden-lg hidden-md" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	       <h2>Find Purchase Ready Residential Plots</h2>
	       <div class="row" style="margin-top:2%;">
	       	<div class="col-md-12">
	       		<ul class="nav nav-pills navPillsCustomized">
				    <li class="active"><a href="#tab1" data-toggle="tab">Residential</a></li>
				    <li><a href="#tab2" data-toggle="tab">Commercial</a></li>
				    <li><a href="#tab3" data-toggle="tab">Agriculture</a></li>
				    
				</ul>
				 <div class="tab-content">
			        <div class="contents tab-pane active" id="tab1">
			            
			            
			            <!-- <div class="row paddingTopRow" style="margin-top: 2%;">
					            			<div class="col-md-4 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0">
							                  <button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomized"> Search</button>		
							            	</div>	
							            		
					            		</div> -->

					        <div class="row">
			            		<div class="col-md-9">
				            		<div class="paddingTopRowCommercial">
					            		<div class="row">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>	
							            		
					            			</div>
					            			<div class="row" style="margin-bottom: 1%;">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Select preffered locality</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-6 padding0" style="padding-right:10px;">
					            				<select id="buy">
							            			<option>Buy</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            		</div>
					            		</div>
				            		</div>
				            	
				            	<div class="col-md-3">
				            			<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomizedCommercial"> Search</button>
				            	</div>
			            	</div>
			           
			        </div><!-- /.contents -->     
			        <div class="contents tab-pane" id="tab2">
			            
			            	<div class="row">
			            		<div class="col-md-9">
				            		<div class="paddingTopRowCommercial">
					            		<div class="row">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Select preffered locality</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-6 padding0" style="padding-right:10px;">
					            				<select id="buy">
							            			<option>Buy</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            		</div>
					            		<div class="row" style="margin-top: 2%;">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>	
							            		
					            			</div>
					            		</div>
				            		</div>
				            	
				            	<div class="col-md-3">
				            			<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomizedCommercial"> Search</button>
				            	</div>
			            	</div>
			        </div><!-- /.contents -->
			        <div class="contents tab-pane" id="tab3">
			           <div class="row">
			            		<div class="col-md-9">
				            		<div class="paddingTopRowCommercial">
					            		<div class="row">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Select preffered locality</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-6 padding0" style="padding-right:10px;">
					            				<select id="buy">
							            			<option>Buy</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            		</div>
					            		<div class="row" style="margin-top: 2%;">
					            			<div class="col-md-6 padding0" style="padding-left:10px;">
					            				<select id="selectPreferedCommercial">
							            			<option>Looking for...</option>
							            			<option>Bangalore</option>
							            			<option>Chennai</option>
							            			<option>Hyderabad</option>
							            		</select>
					            			</div>
					            			<div class="col-md-2 padding0">
					            				<label class="colorLabelCommercial">Budget</label>
						            		</div>
				            				<div class="col-md-2 padding0">	
							            		<select id="selectPreferedCommercial">
							            			<option>Min</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>
							            	<div class="col-md-2 padding0" style="padding-right:10px;">	
							            		<select id="selectPreferedCommercial">
							            			<option>Max</option>
							            			<option>1 Lakh</option>
							            			<option>2 Lakh</option>
							            			<option>3 Lakh</option>
							            		</select>
							            	</div>	
							            		
					            		</div>
					            		</div>
				            		</div>
				            	
				            	<div class="col-md-3">
				            			<button class="btn btn-Search glyphicon glyphicon-th-large btnSearchCustomizedCommercial"> Search</button>
				            	</div>
			            	</div> 
			            
			            
			        </div><!-- /.contents -->
    			</div>
	       </div>
		</div>
	</div>
<button id="reg-open" class="btn btn-reg hidden-lg hidden-md">Search</span></button>
 </div>
  </div>
  </div>
    
  <!-- end banner slider -->
<div class="container-fluid FirstSection">
	<div class="container">
		<div class="InnerFirstSection">
			<div class="greenSection">
					<center>
						<h1>FIRST TIME IN INDIA</h1><br/>
						<h4>NOW PURCHASE PLOTS BY GROUP BY JOINING A TO COMMUNITY AND GET BEST PRICE</h4>
					</center>
					<ul class="list-inline">
						<li><img src="images/b1.png"><br/>
							<p>Discover Plots</p>
						</li>
					
						<li><img src="images/b2.png"><br/>
							<p>1 Person Enquiry</p>
						</li>
					
						<li><img src="images/b3.png"><br/>
							<p>2 Person Enquiry</p>
						</li>
						
						<li><img src="images/b4.png"><br/>
							<p>Group Enquiry</p>
							
						</li>
						
						<li><img src="images/b5.png"><br/>
							<p>Purchase with best price</p>
						</li>
					</ul>
			</div>
		</div>
	</div>
	
</div><!-- First Section Ends Here -->
<style type="text/css">
	
    .choose_slider {
        height: 383px;
        position: relative;
    }
    .plot-carousel-text{
    	background-color: #fff;
    	color: #000;
    	padding-bottom: 2%;
    }
    .plot-carousel-text-right{
    	background-color: #fff;
    	color: #ccc;
    	padding-top: 3%;
    	padding-bottom: 3%;
    }
    li.current_item {
    box-shadow: 1px 5px 5px #888888;
}
.plot-carousel-text p{
	color: #ccc;
}
a#btn_next1 {
    position: absolute;
    /*z-index: 9999;*/
    left: 8%;
    top: 39%;
}
a#btn_prev1 {
    position: absolute;
    /* z-index: 9999; */
    right: 8%;
    top: 39%;
}
</style>
<!-- Second Section Starts Here -->
<div class="container-fluid">
	<div class="container">
		<div class="secondSection">	
			<center>
				<h2>Recently Added Plots</h2>
				<!-- <div style="padding:20px 0;">
			        <div id="thumbnail-slider">
			            <div class="inner">
			                <ul>
			                    <li>
			                        <div class="slider-text">
			                        	Hello World Hello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello WorldHello World
			                        </div>
			                        <a class="thumb" href="images/s1.jpg">
			                        	
			                        </a>
			                        
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/7.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                        Hello world
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/3.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/5.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/9.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/s1.jpg"></a>
			                    </li>
			                    <li>
			                        <a class="thumb" href="images/11.jpg"></a>
			                    </li>
			                </ul>
			            </div>
			        </div>
	    		</div> -->
	    	<div class="outer_pad">	
	    		<div class="choose_slider">

                    <div class="choose_slider_items">
                        <ul id="mySlider1">
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                	<div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>
                            <li class="current_item">
                                <a href="#">
                                    <img src="images/s1.jpg" />
                                    <div class="row" style="padding-bottom:3%;">
                                    <div class="col-md-6 plot-carousel-text text-left">
                                    	<h4>Rs. 15.46 Lacs Rs.1.3 K/sqft<br/>
                                    	MAGNOLIA VALLEY WOODS
                                    	</h4>
                                    	<p>off Mysore Road, Bangalore</p>
                                    </div>	
                                    	 <div class="col-md-6 plot-carousel-text-right text-right">
                                    	<p>View Plot</p>
                                    	<button type="button" class="btn btn-primary btnJoin">Join Group Purchase</button>
                                    </div>
                                    
                                   </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div><a id="btn_next1" href="#">Next</a></div>
                    <div><a id="btn_prev1" href="#">Previous</a></div>
                </div>
                
                
            </div>
			</center>
		</div>	
	</div>
</div>

<!-- Second Section Ends Here -->

<!-- Third section Starts here -->
<div class="container-fluid thirdSection">
	<div class="container">
		<div class="areaMain">
			<center>
				<h2>Most Popular Area</h2>
					<div class="listOfArea">
						<ul class="list-inline">
							<li>
								<p>Airport Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Doddaballapura</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Whitefield</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kormangala</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kanakpura Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Airport Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Doddaballapura</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Whitefield</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kormangala</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kanakpura Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Airport Road</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Doddaballapura</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Whitefield</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kormangala</p>
								<span class="badge">32 Plots</span>	
							</li>
							<li>
								<p>Kanakpura Road</p>
								<span class="badge">32 Plots</span>	
							</li>

						</ul>
					</div>	
			</center>
		</div>	
	</div>
		
</div><!-- Third section Ends here-->
<!-- Fourth Section Starts here -->
<div class="container-fluid">
	<div class="container">
		<div class="fourthSection">
			<h3>POPULAR PROJECTS</h3>
				<div class="row">
					<div class="col-md-9">
						<div class="carousel slide" id="myCarousel">
					        <div class="carousel-inner">
					            <div class="item active">
					                    <ul class="thumbnails list-unstyled">
					                        <li class="col-sm-4">
					    						<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                         <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                         <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                    </ul>
					            </div><!-- /Slide1 --> 
					            <div class="item">
					                    <ul class="thumbnails list-unstyled">
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                    </ul>
					              </div><!-- /Slide2 --> 
					            <div class="item">
					                    <ul class="thumbnails">
					                        <li class="col-sm-4">	
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q2.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q3.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                        <li class="col-sm-4">
												<div class="fff">
													<div class="thumbnail">
														<a href="#"><img src="images/q11.jpg" alt=""></a>
													</div>
													<div class="caption">
														<h4>Praesent commodo</h4>
														<p>Nullam Condimentum Nibh Etiam Sem</p>
														<a class="btn btn-mini" href="#">» Read More</a>
													</div>
					                            </div>
					                        </li>
					                    </ul>
					              </div><!-- /Slide3 --> 
					        </div>
					        
					       
						   <nav>
								<ul class="control-box pager">
									<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
									<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
								</ul>
							</nav>
						   <!-- /.control-box -->   
					                              
					    </div><!-- /#myCarousel -->
					</div>

					<div class="col-md-3">
						<h4>Create free alert</h4>
						<div class="formFreeAlert">
							<form role="form">
								<div class="form-group">
									<label for="location">Preffered Location</label>
									<select class="form-control">
										<option>Sarjapur Road</option>
										<option>Whitefield</option>
									</select>
								</div>
								<div class="form-group">
									<label for="budget">Budget</label><br/>
									<select class="form-control minControl">
										<option>Min</option>
										<option>1 Lakh</option>
										<option>2 Lakh</option>
										<option>3 Lakh</option>
									</select>
									<select class="form-control maxControl">
										<option>Max</option>
										<option>1 Lakh</option>
										<option>2 Lakh</option>
										<option>3 Lakh</option>
									</select>
								</div><br/>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="mobile">Mobile Number</label>
									<div class="input-group">
										  <span class="input-group-addon" id="basic-addon1">+91</span>
										  <input type="text" class="form-control" id="number">
									</div>	  
								</div>
								<center>
									<button type="button" class="btn btn-primary btnCenterCustomized">Submit</button>
								</center>
							</form>	
						</div>
					</div>	
				</div>
		</div>
	</div>
</div>
<!-- Fourth Section ends here -->
<!-- Fifth Section Starts here -->
<div class="container-fluid topLine">
	<div class="container">
 		<center>
 			<div class="developersBeginning">
 				<h3>TOP DEVELOPERS</h3>
 				<div class="developersList">
 					<ul class="list-inline">
 						<li><img src="images/developer_1.png"></li>
 						<li><img src="images/developer_2.png"></li>
 						<li><img src="images/developer_3.png"></li>
 						<li><img src="images/developer_4.png"></li>
 						<li><img src="images/developer_5.png"></li>
 						<li><img src="images/developer_6.png"></li>
 						<li><img src="images/developer_7.png"></li>
 					</ul>
 				</div>
 			</div>
 		</center>
 	</div>
</div>

<!-- Fifth Section Ends here -->
<!-- Sixth Section Starts here -->
<div class="container-fluid thirdSection">
	<div class="container">
		<div class="testimonial-section">
			<center>
				<h3>Great things people are saying about us</h3>
			</center>	
				<div class="testimonial-content">
					<ul class="list-inline">
						<li>
							<div class="testimonialText">
									<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
							<img src="images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
							</div>	
						</li>
						<li>
							<div class="testimonialText">
								<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
								<img src="images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
								
							</div>
						</li>
						<li>
							<div class="testimonialText">
									<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
							<img src="images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
							</div>	
						</li>
						<li>
							<div class="testimonialText">
								<p><i class="fa fa-quote-left fa-3x coloredFont"></i>Lorem Ipsum is simply dummy text of 
									the printing and <br/>typesetting industry. 
									Lorem Ipsum has been the industry's standard <br/>
									dummy text ever since the 1500s, when an unknown<br/> 
									printer took a galley of type and  scrambled it to<br/> 
									make a type specimen book. </p>
							</div>
							<div class="testimonial-clientImg">
								<img src="images/client1.png" align="left"> 
								<h4>Maria Desouza</h4>
								<span>Software Engineer, Infosys</span>
								
							</div>
						</li>
					</ul>
				</div>
			
		</div>
	</div>
</div>


<!-- Sixth Section ends here -->

<!-- footer starts here -->
	<div class="FooterSection">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="FooterText text-justify">
						<h4>About Bookmyplots</h4><br/>
						<p>We use data intelligence to help buyers discover and evaluate the most relevant plot projects and land parcels, assist sellers showcase and offer the best deals, and enable agents bridge the gap between buyers and sellers in the most effective way.</p><br/>
						<p>The Plots and Land ecosystem aims to replace existing information asymmetry </p>
					</div>
				</div>
				<div class="col-md-3 borderLeftRight">
					<div class="FooterText">
						<h4>Popular Searches</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
										<li>Kormangala</li>
										<li>Kankpura Road</li>
										<li>Mysore Off Road</li>
										<li>Dodd Aladmara</li>
										<li>Doddballarpura</li>
										<li></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
										<li>Kormangala</li>
										<li>Kankpura Road</li>
										<li>Mysore Off Road</li>
										<li>Dodd Aladmara</li>
										<li>Doddballarpura</li>
										<li></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="FooterText"><!--FooterText starts here-->
						<h4>Quick Links</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
										<li>About Us</li>
										<li>Contact Us</li>
										<li>Careers</li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="FooterSecondText">
									<ul>
										<li>Help</li>
										<li>Advertise With Us</li>
										<li>Blog</li>
									</ul>
								</div>
							</div>
						</div>
					</div><!--FooterText ends here-->
					
				</div>

			</div>
		</div>
	</div>

	<div class="FooterSection FooterSecondSection">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5>Copyright © 2015 www.bookmyplot.com</h5>
				</div>
				<div class="col-md-4">
					<h5>Designed by - www.indglobal.in</h5>
				</div>
				<div class="col-md-4">
					<div class="FooterLastulli">
						<ul>
							<li>Listing Policy </li>
							<li>Terms of Use</li>
							<li>Privacy Policy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- footer ends here -->

<div class="modal fade bs-example-modal-lg" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="row">
      	<div class="col-md-12 popupleftbg">
      		<h4>Benefits of Group Buying - Unbeatable Price Challenge</h4>
      		<div class="row">
      			<div class="col-sm-6">
      				<p class="otherwesite">www.otherwebsite.com</p>
      				<img src="images/individual.png" class="individualimg">
      			</div>
      			<div class="col-sm-6">
      				<img src="images/logo.png">
      				<img src="images/ourpurchase.png">
      			</div>
      		</div>
      		<div class="row textbordertop">
      			<div class="col-sm-6" style="padding:0;">
      				<div class="priceplots">
		      			<ul>
		      				<li><i class="fa fa-circle-thin"></i> Group Discounts of Upto 25%</li>
		      				<li><i class="fa fa-circle-thin"></i> Added Benefits includes  maintenance for upto 2 years</li>
		      				<li><i class="fa fa-circle-thin"></i> Lifetime Tax Pay Assistance to members </li>
		      				<li><i class="fa fa-circle-thin"></i> Individual Plot Maintenance by BookmyPlots Team - 
								Photos and videos of your Plot shared every 6 months.</li>
		      			</ul>
		      		</div>
      			</div>
      			<div class="col-sm-6" style="padding:0;">
      				<div class="priceplots">
		      			<ul>
		      				<li><i class="fa fa-circle-thin"></i> Group Discounts of Upto 25%</li>
		      				<li><i class="fa fa-circle-thin"></i> Added Benefits includes  maintenance for upto 2 years</li>
		      				<li><i class="fa fa-circle-thin"></i> Lifetime Tax Pay Assistance to members </li>
		      				<li><i class="fa fa-circle-thin"></i> Individual Plot Maintenance by BookmyPlots Team - 
								Photos and videos of your Plot shared every 6 months.</li>
		      			</ul>
		      		</div>
      			</div>
      		</div>
      		
      	</div>
      	<div class="popupbottomstrip text-center">
      			<br><h3>FOR SMART PEOPLE. SMART SAVING</h3>
      			<button type="button" class="close popupclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		</div>
      	
      </div>
    </div>
  </div>
</div>


<!-- jquery library file -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.cssslider.js"></script>
	<script type="text/javascript">
		$(function() {
            $("#mySlider1").AnimatedSlider( { prevButton: "#btn_prev1", 
                                             nextButton: "#btn_next1",
                                             visibleItems: 3,
                                             infiniteScroll: true,
                                             willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
                                             changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
                                          });
        });
	</script>

	<!-- bootstrap js link -->
	<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#myModal12").modal('show');
			});
		</script>
	<script type="text/javascript">
		$(document).ready(function() {
		  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});
		});
	</script>

	<!-- jquery ui js links -->
	<script type="text/javascript" src="plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
		  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
	</script>
	<script src="plotslider/thumbnail-slider.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript">
		/* Starts banner script */
    $("#coe-banner").owlCarousel({ 
      autoplay:true,
      autoplayTimeout:3000, 
      autoplayHoverPause:true,
      items:1,
      nav: true,
      loop:true,
      dots:true,
      thumbs: false   
   });
   /* Ends banner script */

   $("#reg-open").click(function(){
      $(".plot-search").show();
   });

   $("#reg-close").click(function(){
      $(".plot-search").hide();
   });
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
 
		  $("#owl-demo").owlCarousel({
		 
		      autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
		      items : 4,
		      itemsDesktop : [1199,3],
		      itemsDesktopSmall : [979,3]
		 
		  });
		 
		});
	</script>
	
</body>
</html>