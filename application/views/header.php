<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var strcount
var x = new Date()
x=x.toLocaleString();
document.getElementById('ct').innerHTML = x;
tt=display_c();
}
</script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
 <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>

<link rel="shortcut icon" href="images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<div class="containerWidth headerPart">
		<div class="row">
		  <div class="col-md-3">
		  	<a href="index"><img src="<?php echo base_url(); ?>assets_user/images/logo.jpg"></a>
		  </div>
		  <div class="col-md-5 text-center">
			<a href="index"><img src="<?php echo base_url(); ?>assets_user/images/logo1.jpg"></a>
		  </div>
		  <div class="col-md-4 text-right">
		  <br/>
         <img src="http://c8.statcounter.com/t.php?sc_project=892798&resolution=1600&camefrom=https%3A//www.google.co.in/&u=http%3A//www.itiltd-india.com/&t=Telecom%20Pioneer%20In%20India&java=1&security=dad0462a&sc_random=0.5205986015498638"/>
         <br>
			<div class="language">
			
			</div>
		  	
		  <br/>
		  <body onload=display_ct();>
			<div style="font-weight:600">
				<span id='ct' ></span>
			</div>
		  </body>
		  </div>
		</div>
	</div>