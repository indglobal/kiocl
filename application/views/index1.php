<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ITI</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
.form-control
{

	background: #EAEAEA;
}	










</style>
<script type="text/javascript">

   //Created / Generates the captcha function    
    function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
        var d = Math.ceil(Math.random() * 10)+ '';  
        var e = Math.ceil(Math.random() * 10)+ '';  
        var f = Math.ceil(Math.random() * 10)+ '';  
        var g = Math.ceil(Math.random() * 10)+ '';  
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
        document.getElementById("txtCaptcha").value = code
    }

    // Validate the Entered input aganist the generated security code function   
    function ValidCaptcha(){
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('txtInput').value);
        if (str1 == str2) return true;        
        return false;
        
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }
    
 
    </script>




</head>

<body>

    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
       
        
        <div class="row">

<div class="col-md-6">
<img src="<?php echo base_url(); ?>assets/bg.png" style="width:20%;" />

</div>





            <div class="col-md-6">
            
            
             <?php if(isset($message_error) && $message_error)
								  {
									echo '<div class="alert alert-error">';
									echo '<a class="close" data-dismiss="alert">×</a>';
									echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
									echo '</div>';             
								}
							?>    
               
                <form name="review"  action="<?php echo base_url();?>unit/validate_credentials" method="post" onsubmit="return checkform(this);">
                    <div class="control-group form-group">
                        <div class="controls">
                            
                            <input type="text"  name="username" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder=" Email Address">
                            <p class="help-block"></p>
                        </div>
                    </div>
                   
<div class="control-group form-group">
                        <div class="controls">
                            
                            <input type="password"  name="password"
                            class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder=" Password">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    
                   
<div class="control-group form-group">
                        <div class="controls">
<input type="text" id="txtInput"/>  
<input type="text" id="txtCaptcha" 
            style="background-image:url(http://iti.herbaldiacare.com/assets_admin/1.JPG); text-align:center; border:none;
            font-weight:bold; font-family:Modern" />
       


 </div>
                    </div>

















                   
                   
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <p style="text-align:center";>
                    <input type="submit" class="btn btn-primary" value="SIGN IN"  onclick="alert(ValidCaptcha());"  />
                    </p>
                </form>
            </div>

        </div>
        <!-- /.row -->

       

       
       

    </div>
    <!-- /.container -->

   <script type="text/javascript">
function checkform(theform){
var why = "";

if(theform.txtInput.value == ""){
why += "- Security code should not be empty.\n";
}
if(theform.txtInput.value != ""){
if(ValidCaptcha(theform.txtInput.value) == false){
why += "- Security code did not match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

//Generates the captcha function
var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("txtCaptchaDiv").innerHTML = code;

// Validate the Entered input aganist the generated security code function
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('txtInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>


    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

</body>

</html>