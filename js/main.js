/*FAZENDO UM SCROLL SUAVE PELOS LINKS DA PÁGINA. FOI USADO 1 SEGUNDO DE TRANSIÇÃO DA ANIMAÇÃO*/

function ativaScrollSuave(selector) {
	$(selector).click(function(event){
	event.preventDefault();

	var target = $(this).attr('href');
	
	$('html, body').animate({
	scrollTop: $(target).offset().top
	}, 1000);
	});
}


ativaScrollSuave('a[href*=sobre]');
ativaScrollSuave('a[href*=receitas]');
ativaScrollSuave('a[href*=noticias]');
ativaScrollSuave('a[href*=contato]');
ativaScrollSuave('a[href*=home]');
ativaScrollSuave('a[href*=nav]');



/*************FUNÇÃO PARA O MENU MOBILE***************/

$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');

		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}

	});