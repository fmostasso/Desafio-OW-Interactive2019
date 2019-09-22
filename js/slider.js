/*************FUNÇÃO SLIDER DO SLICK PARA PARCEIROS***************/

$(function(){

	if(window.innerWidth < 700){
	  $('.slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1000,
	});
	} else{

	$('.slider').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1000,
	});
	}
});
