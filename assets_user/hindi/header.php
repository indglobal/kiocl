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
<link rel="shortcut icon" href="images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<div class="containerWidth headerPart">
		<div class="row">
		  <div class="col-md-3">
		  	<a href="index"><img src="images/logo.jpg"></a>
		  </div>
		  <div class="col-md-5 text-center">
			<a href="index"><img src="images/logo1.jpg"></a>
		  </div>
		  <div class="col-md-4 text-right">
		  <br/>
          <img src="http://c8.statcounter.com/t.php?sc_project=892798&amp;resolution=1600&amp;camefrom=https%3A//www.google.co.in/&amp;u=http%3A//www.itiltd-india.com/&amp;t=Telecom%20Pioneer%20In%20India&amp;java=1&amp;security=dad0462a&amp;sc_random=0.5205986015498638">
        
			<div class="language">
			<h4>View Site In : <a href="../index"> English </a></h4>
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