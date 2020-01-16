$(document).ready(function(){

//parallax
$.stellar({
	responsive: true,
	horizontalOffset: 50
});


//carousel
$(".owl-carousel").owlCarousel({
	loop:true,
  responsive:{
      0:{
          items:1,
          nav:true
      }
  }
});

});