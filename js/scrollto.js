$(document).ready(function(){
	$(window).scroll(function(){
	    if ($(window).scrollTop() > 500) {
	 		  $('#balikkeatas').fadeIn();
	    }else {
	     	$('#balikkeatas').fadeOut();
	    }
	});
});

function keatas(){
  $('html, body').animate({scrollTop : 0},500);
}
