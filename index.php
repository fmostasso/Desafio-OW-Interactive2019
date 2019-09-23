<!DOCTYPE html>
<html>
<head>
	<title>Bakery</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
</head>
<body>

	<!-----------------------------TOPO-------------------------------->

	<header class="header" id="header">
		<nav class="navegacao">
			<div class="logo">
				<img src="images/logo.png" alt="logomarca"/>
			</div>
			<div class="lista">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#receitas">Receitas</a></li>
					<li><a href="#noticias">Notícias</a></li>
					<li><a href="#contato">Contato</a></li>
					<li><i class="fas fa-search"></i></li>
				</ul>
			</div><!--lista-->
		</nav>

	<!-----------------------------TOPO MOBILE-------------------------------->
		<nav class="mobile">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<div class="lista-mobile">
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#receitas">Receitas</a></li>
						<li><a href="#noticias">Notícias</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
				</div>
			</nav>
			<div class="clear"></div><!--clear-->

<!----------------------------- BANNER -------------------------------->

		<div class="banner" id="conteudo1"></div><!--banner-->

		<!--RECEITAS-->
		<div>
			<div id="conteudo" class="images"></div><!--imagens hover-->

		<div class="clear"></div>
	</header>

	<!-----------------------------INICIO PAINEL SOBRE E DE NOTICIAS-------------------------------->

	<div class="container painel">
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-12 col-sm-12">
					<div class="panific">
						<img src="images/panificacao.jpg"/>
					</div><!--panific-->
				</div><!--fim primeira coluna-->
				<div id="sobre" class="col-xl-5 col-lg-6 col-12 col-sm-12 sobre">
					<h3>{{message}}</h3>

					<p>{{message1}}</p>

					<p>{{message2}}</p>
				</div><!--sobre-  Fim segunda coluna-->

				<div id="noticias" class="col-xl-4 col-md-12 col-12 col-sm-12 noticias">
					<div class="noticia">
						<h3>{{titulo}}</h3>
						<h6>{{date}}</h6>
						<p>{{message}}</p>
					</div><!--noticia-->

					<div class="noticia">
						<h6>{{date}}</h6>
						<p>{{message}}</p>
					</div><!--noticia-->

					<div class="noticia">
						<h6>{{date}}</h6>
						<p class="no-border">{{message}}</p>
					</div><!--noticia-->
					<div class="lista-completa" onclick="requestNoticias('https://api.myjson.com/bins/11qq59')">
						<h6>Lista completa <img src="images/seta.png"/></h6>
					</div>
					<div class="clear"></div>
				</div><!--noticias- Fim terceira coluna-->

			</div>
		</div><!--painel-->
		<div class="clear"></div>


	<!-----------------------------PARCEIROS-------------------------------->

		<div class="parceiros" id="parceiros">
			<div class="container">
				<h3>{{titulo}}</h3>
				<div class="slider" id="parceiro"></div>						
			</div><!--container-->
		
		</div><!--parceiros-->
		
			<div class="container">
				<div id="contato" class="contato">
					<h3>{{titulo}}</h3>
					<p>{{message}}</p>
				<form>
				<div class="row">
					<div class="col-xl-6 col-12 col-sm-12">
						<div>
							<label>{{label}}</label>
							<input type="text" name="nome" maxlength="140" placeholder="Nome"/>
						</div>

						<div>
							<label>{{label2}}</label>
							<input type="email" name="email" placeholder="E-mail"/>
						</div>

						<div>
							<label>{{label3}}</label>
							<input type="text" name="cidade" maxlength="140"  placeholder="Cidade"/>
						</div>

						<div>
							<label>{{label4}}</label>
							<input type="phone" name="telefone" placeholder="(99)99999999" class="phone_with_ddd"/>
						</div>
					</div><!--fim primeira coluna-->

					<div class="col-xl-6 col-12 col-sm-12">
						<div>
							<label>{{label5}}</label>
							<input type="text" name="assunto" maxlength="140"  placeholder="Assunto"/>
						</div>

						<div>
							<label>{{label6}}</label>
							<textarea>{{texto}}</textarea>
						</div>

						<div>
							<button>{{botao}}</button>
						</div>
					</div><!--Fim segunda coluna-->
				</div><!--row-->
				</form>
			</div><!--contato-->
		</div><!--container-->

		<!-----------------------------INICIO RODAPÉ-------------------------------->

		<footer class="footer" id="rodape">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-12 col-md-4 col-sm-12">
							<img class="logo" src="images/logo.png"/>
							<div class="linha"></div>
							<div class="icons">
								<h4><i class="fab fa-twitter-square"></i></h4>
								<h4><i class="fab fa-google-plus-square"></i></h4>
								<h4><i class="fab fa-facebook-square"></i></h4>
							</div>
						<div class="direitos-reservados">
							<p>&copy Bakery 2017. Todos direitos reservados.</p>
						</div>
					</div><!--Fim primeira coluna-->
					<div class="col-xl-3 col-12 col-md-4 col-sm-12">
						<div class="linha"></div>
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="#sobre">Sobre</a></li>
							<li><a href="#receitas">Receitas</a></li>
							<li><a href="#noticias">Notícias</a></li>
							<li><a href="#contato">Contato</a></li>
						</ul>
					</div><!--Fim segunda coluna-->

					<div class="col-xl-5 col-12 col-md-4 col-sm-12 contatos">
						<div>
							<h3><i class="fas fa-phone-square"></i>{{cont}}</h3>
							<p>{{num}}</p>
						</div>

						<div>
							<h3><i class="fas fa-map-marker-alt"></i>{{loc}}</h3>
							<p>{{end}}</p>
						</div>

						<div class="ow">
							<a href="http://www.owinteractive.com/"><img src="images/Shape 7.png" alt="logo OW Interactive"/></a>
						</div>
					</div><!--Fim terceira coluna-->
				</div><!--row-->
			</div><!--container-->
		</footer><!--footer-->

		<script src="js/jquery.js"></script>
		<script src="js/jquery.mask.min.js"></script>
		<script src="js/mascara.js"></script>
		<script src="js/main.js"></script>
		<script src="slick/slick/slick.min.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/requisicoes.js"></script>
		<script src="https://unpkg.com/vue"></script>
		<script src="js/marc_vue.js"></script>
</body>
</html>