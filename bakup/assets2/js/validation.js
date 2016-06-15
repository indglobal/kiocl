
// phone Number validation
// $(document).ready(function () {

// 	 $(".content-wrpr").on("click", function(){
// 		$(".phoneNumber input#Pnumber").attr("placeholder", "").css("color", "#666");
// 	});
	
//   $(".phoneNumber input#Pnumber").keypress(function (e) {
//      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
//         $(".phoneNumber input#Pnumber").attr("placeholder", "Digits Only");
//                return false;
//     }
//    });
// });




//<!-- FORM VALIDATION -->
// On Click Form Wrappr Remopves All Error
$("document").ready(function($) {
	$(".content-wrpr").on("click", function(){
		$("input, textarea, select").css({'border-color':'#ddd', 'color':'#666'});
		$("input, textarea, select").attr("placeholder", "");

	});
});

// HOME LOANS
// submit function starts
function formValidationHOME(){
	var fname = $('#Fname1').val();
	var lname = $('#Lname1').val();
	var email = $('#Email1').val();
	var pnumber = $('#Pnumber1').val();
	var city = $('#City1').val();
	var reMarks = $('#reMarks1').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname1').css({'border-color':'red', 'color':'red'});
			$('#Fname1').attr("placeholder", "Enter Name");
			return false;
		}else{
			$('#Fname1').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname1').attr("placeholder", "Enter Name");
			$('#Lname1').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Lname1').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber1').css({'border-color':'red', 'color':'red'});
			$('#Pnumber1').attr("placeholder", "Enter Phone Number");

			return false;
		}else{
			$('#Pnumber1').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email1');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email1').attr("placeholder", "Enter Valid Email");
			$('#Email1').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email1').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City1').css({'border-color':'red', 'color':'red'});
			$('#City1').attr("placeholder", "Select City");
			return false;
		}else{
			$('#City1').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks1').css({'border-color':'red', 'color':'red'});
			$('#reMarks1').attr("placeholder", "Required");
			return false;
		}else{
			$('#reMarks1').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends





// PLOT PURCHASE LOAN
// submit function starts
function formValidationPLOT(){
	var fname = $('#Fname2').val();
	var lname = $('#Lname2').val();
	var email = $('#Email2').val();
	var pnumber = $('#Pnumber2').val();
	var city = $('#City2').val();
	var reMarks = $('#reMarks2').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname2').attr("placeholder", "Enter Name");
			$('#Fname2').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname2').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname2').attr("placeholder", "Enter Name");
			$('#Lname2').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Lname2').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber2').attr("placeholder", "Enter Phone Number");
			$('#Pnumber2').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Pnumber2').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email2');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email2').attr("placeholder", "Enter Valid Email");
			$('#Email2').attr("placeholder", "Enter Valid Email");
			$('#Email2').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email2').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City2').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#City2').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks2').attr("placeholder", "Required");
			$('#reMarks2').css({'border-color':'red', 'color':'red'});
			$('#reMarks2').attr("placeholder", "Required");
			return false;
		}else{
			$('#reMarks2').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends




// submit function starts
function formValidationTAX(){
	var fname = $('#Fname3').val();
	var lname = $('#Lname3').val();
	var email = $('#Email3').val();
	var pnumber = $('#Pnumber3').val();
	var city = $('#City3').val();
	var reMarks = $('#reMarks3').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname3').attr("placeholder", "Enter Name");
			$('#Fname3').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname3').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname3').attr("placeholder", "Enter Name");
			$('#Lname3').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Lname3').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber3').attr("placeholder", "Enter Phone Number");
			$('#Pnumber3').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Pnumber3').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email3');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email3').attr("placeholder", "Enter Valid Email");
			$('#Email3').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email3').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City3').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#City3').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks3').attr("placeholder", "Required");
			$('#reMarks3').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#reMarks3').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends




// submit function starts
function formValidationAPLY(){
	var fname = $('#Fname4').val();
	var lname = $('#Lname4').val();
	var email = $('#Email4').val();
	var pnumber = $('#Pnumber4').val();
	var city = $('#City4').val();
	var reMarks = $('#reMarks4').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname4').attr("placeholder", "Enter Name");
			$('#Fname4').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname4').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname4').attr("placeholder", "Enter Name");
			$('#Lname4').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Lname4').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber4').attr("placeholder", "Enter Phone Number");
			$('#Pnumber4').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Pnumber4').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email4');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email4').attr("placeholder", "Enter Valid Email");
			$('#Email4').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email4').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City4').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#City4').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks4').attr("placeholder", "Required");
			$('#reMarks4').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#reMarks4').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends




// submit function starts
function formValidationAUDIT(){
	var fname = $('#Fname5').val();
	var lname = $('#Lname5').val();
	var email = $('#Email5').val();
	var pnumber = $('#Pnumber5').val();
	var city = $('#City5').val();
	var reMarks = $('#reMarks5').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname5').attr("placeholder", "Enter Name");
			$('#Fname5').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname5').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname5').attr("placeholder", "Enter Name");
			$('#Lname5').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Lname5').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber5').attr("placeholder", "Enter Phone Number");
			$('#Pnumber5').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Pnumber5').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email5');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email5').attr("placeholder", "Enter Valid Email");
			$('#Email5').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email5').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City5').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#City5').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks5').attr("placeholder", "Required");
			$('#reMarks5').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#reMarks5').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends




// submit function starts
function formValidationDEED(){
	var fname = $('#Fname6').val();
	var lname = $('#Lname6').val();
	var email = $('#Email6').val();
	var pnumber = $('#Pnumber6').val();
	var city = $('#City6').val();
	var reMarks = $('#reMarks6').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname6').attr("placeholder", "Enter Name");
			$('#Fname6').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname6').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname6').attr("placeholder", "Enter Name");
			$('#Lname6').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname6').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber6').attr("placeholder", "Enter Phone Number");
			$('#Pnumber6').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Pnumber6').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email6');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email6').attr("placeholder", "Enter Valid Email");
			$('#Email6').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email6').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City6').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#City6').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks6').attr("placeholder", "Required");
			$('#reMarks6').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#reMarks6').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends




// submit function starts
function formValidationAGENT(){
	var fname = $('#Fname7').val();
	var lname = $('#Lname7').val();
	var email = $('#Email7').val();
	var pnumber = $('#Pnumber7').val();
	var city = $('#City7').val();
	var reMarks = $('#reMarks7').val();

// First Name
	$(document).ready(function(){
		if(fname ==""){
			$('#Fname7').attr("placeholder", "Enter Name");
			$('#Fname7').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Fname7').css('border-color','#ddd');
			return true;
		}
	});

// Second Name
	$(document).ready(function(){
		if(lname ==""){
			$('#Lname7').attr("placeholder", "Enter Name");
			$('#Lname7').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Lname7').css('border-color','#ddd');
			return true;
		}
	});

// Phone Number
	$(document).ready(function(){
		var x = pnumber.length;
		if(x <10 || x>10){
			$('#Pnumber7').attr("placeholder", "Enter Phone Number");
			$('#Pnumber7').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#Pnumber7').css('border-color','#ddd');
			return true;
		}
	});

// Email
	$(document).ready(function(){
		var email = document.getElementById('Email7');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
			$('#Email7').attr("placeholder", "Enter Valid Email");
			$('#Email7').css({'border-color':'red', 'color':'red'});
		    return false;
		}else {
			$('#Email7').css('border-color','#ddd');
				return true;
		}
	});

// City 
	$(document).ready(function(){
		if(city ==0){
			$('#City7').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#City7').css('border-color','#ddd');
			return true;
		}
	});

// Rmarks
    $(document).ready(function(){
		if(reMarks ==0){
			$('#reMarks7').attr("placeholder", "Required");
			$('#reMarks7').css({'border-color':'red', 'color':'red'});
			return false;
		}else{
			$('#reMarks7').css('border-color','#ddd');
			return true;
		}
	});


} // submit function Ends