$(document).ready(function() {
    $('#carousel-1, #carousel-2').carousel({
        interval: 3000
    });
});
$(document).ready(function(){
	$('.question_container:nth-child(2n) .views').addClass('pull-left');
	$('.question_container:nth-child(2n) .views1').addClass('pull-right');
	$('.question_container:nth-child(2n) .views1').css('text-align','left');
});


$(document).ready(function() {
	var showChar = 150;
	var ellipsestext = "...";
	var moretext = "Read More...";
	var lesstext = "Read less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreelipses">'+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span> &nbsp;&nbsp; <a href="" class="morelink">' +moretext+'</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
$(document).ready(function(){
	$('.moreelipses').after('<br/>')
});
$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
$('.choose-reward .carousel').carousel({
    interval: false
});