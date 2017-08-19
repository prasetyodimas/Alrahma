$(document).ready(function(){
	$(function owlSliders(){
		$("#owl-example").owlCarousel({
	   	  autoPlay: 5000,
	      navigation : true,
	      singleItem:true,
	      lazyLoad :true,
	      transitionStyle : "fadeUp"
		});
	});

	function keatas(){
	  $('html, body').animate({scrollTop : 0},500);
	}

	$(function windowShowbutton(){
	    if ($(window).scrollTop() > 500) {
		  $('#balikkeatas').fadeIn();
	    }else {
		  $('#balikkeatas').fadeOut();
	    }
	});

	$(function minimizedHeader(){
		if ($(window) scrollTop() > 60) {
			$('#mobile').addClass('header-minimized');
		}
	});

	var didScroll;
	// on scroll, let the interval function know the user has scrolled
	$(window).scroll(function(){
		didScroll = true;
	});
	// run hasScrolled() and reset didScroll status
	setInterval(function(){
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	},2500);

	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('.navigate-top-upper').outerHeight();
	var st = $(this).scrollTop();
	function hasScrolled(){
		if (Math.abs(lastScrollTop-st)<= delta) {
			return;
		}
		// If current position > last position AND scrolled past navbar...
		if (st > lastScrollTop && st > navbarHeight){
		  // Scroll Down
		  $('.navigate-top-upper').removeClass('.nav-down').addClass('.nav-up');
		}else{
		  // Scroll Up
		  // If did not scroll past the document (possible on mac)...
		  if(st + $(window).height() < $(document).height()) { 
		    $('.navigate-top-upper').removeClass('.nav-up').addClass('.nav-down');
		  }
		}
	}
	// var senseSpeed = 0;
	// var previousScroll = 1;
	/*$(window).scroll(function(event){
	   var scroller = $(this).scrollTop(10);
	   if (scroller-senseSpeed > previousScroll){
	      $("div.navigate-top-upper").filter(':not(:animated)').slideUp();
	   }else if (scroller+senseSpeed < previousScroll) {
	      $("div.navigate-top-upper").filter(':not(:animated)').slideDown();
	   }
		   previousScroll = scroller;
   });*/
});

//function Show Arrow Back To The Top
