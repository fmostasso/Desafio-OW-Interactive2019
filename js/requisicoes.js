/*************FUNÇÃO DA REQUISIÃO AO CARREGAR A PÁGINA***************/

function requestByAjax(url, callback) {
	var xhr = new XMLHttpRequest();
	xhr.open('get', url);
	xhr.onreadystatechange = function () { 
		if (xhr.readyState === 4) {
			callback(xhr);
		}
	};
	xhr.send();
}

/************ NÃO FUNCIONOU A REQUISIÇÃO PARA O BANNER **********/

const divConteudo = document.getElementById('conteudo1');
requestByAjax('https://api.myjson.com/bins/y3zct', function (xhr) {
	var response = JSON.parse(xhr.responseText);
	console.log(response);
	for (var i = 0; i < response.length; i++) {
        let div = document.createElement('div');
        div.style.backgroundImage = 'url(' + response[i].image_url + ')';
        div.classList.add('banner-div-image');
        divConteudo.appendChild(div);
 	}
});

/*************CHAMADA DA FUNÇÃO PARA RECEITAS***************/

const conteudo = document.getElementById('conteudo');
requestByAjax('https://api.myjson.com/bins/dbycd', function (xhr) {
    var response = JSON.parse(xhr.responseText);
     console.log(response);
     
    for (var i = 0; i < response.length; i++) {
    let divNova = document.createElement('div');
    let divMascara = document.createElement('div');
    divMascara.classList.add('mascara');
     divNova.classList.add('image-wrapper');
        var item = response[i];
        var image = new Image();
        image.src = item.image_url;
        divNova.appendChild(image);
        divNova.appendChild(divMascara);
        conteudo.appendChild(divNova);
     }        
});

/*************CHAMADA DA FUNÇÃO PARA PARCEIROS***************/

const parc = document.getElementById('parceiro');
requestByAjax('https://api.myjson.com/bins/qfhnh', function (xhr) {
    var response = JSON.parse(xhr.responseText);
     console.log(response);
     
    for (var i = 0; i < response.length; i++) {
    let divParc = document.createElement('div');
     divParc.classList.add('col-xl-3');
     divParc.classList.add('col-12');
     divParc.classList.add('col-sm-12');
        var item = response[i];
        var image = new Image();
        image.src = item.image_url;
        divParc.appendChild(image);
        parc.appendChild(divParc);
     }        
});


 

	