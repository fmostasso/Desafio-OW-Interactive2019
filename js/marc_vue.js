var sobre = new Vue({
		  	el: '#sobre',
		  	data: {
		    	message: "Sobre a bakery",
		    	message1: "Ut vitae volutpat risus. Nam vitae congue odio, mattis dignissim neque. Nam eros sapien, semper in pellentesque ut, suscipit eu nunc. Donec malesuada egestas ligula, non malesuada sapien suscipit ut.",

		    	message2: "Praesent sed ipsum ullamcorper purus scelerisq laoreet. Nulla lobortis ex eu mi accumsan, non hendrerit ex rhoncus. Etiam auctor libero porttitor tellus imperdiet consequat. Nam porttitor diam in eleifend fringilla."

		 	}, 

		});

		var noticias = new Vue({
			el: '#noticias',
			data: {
				titulo: "Últimas notícias",
				date: "20/01/2017",
				message: "Nulla commodo lorem at elit scelerisque mollis. Maecenas et libero sed purus..."

			}
		});

		var parceiros = new Vue({
			el: '#parceiros',
			data: {
				titulo: "parceiros"
			}
		});

		var contato = new Vue({
			el: '#contato',
			data: {
				titulo: "Contato",
				message: "Ut vitae volutpat risus. Nam vitae congue odio, mattis dignissim neque. Nam eros sapien, semper in pellentesque ut, suscipit eu nunc. Donec malesuada egestas ligula, non malesuada sapien suscipit ut. ",
				label: "Nome*",
				label2: "E-mail*",
				label3: "Cidade",
				label4: "Telefone*",
				label5: "Assunto*",
				label6: "Mensagem*",
				texto: "Digite aqui sua mensagem..",
				botao: "Enviar"

			}
		});


		var rodape = new Vue({
			el: '#rodape',
			data:{
				cont: "contato",
				num: "99) 9999-9999  |  (99) 99999-9999",
				loc: "Localização",
				end: "am porttitor diam in eleifend fringilla, 3180"

			}
		})