<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Cadastre-se</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">

<script src="form.js"></script>
<link rel="stylesheet" href="form.css" >


</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Procura -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navegação -->
	<div class="menu_nav">
		<ul>
			<li><a href="mulheres.html">Mulheres</a></li>
			<li><a href="homens.html">Homens</a></li>
			<li><a href="criancas.html">Crianças</a></li>
			<li><a href="index.html">Home</a></li>
			<li><a href="contato.html">Contato</a></li>
		</ul>
	</div>
	<!-- Informação de contato -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+55 (21) 97959-3673 </div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="logo_loja.png" width="70px" height="79px" alt=""></div>
						<div><img src="nome_loja.png" width="150px" height="79px" alt=""></div>
				
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="mulheres.html">Mulheres</a></li>
			<li><a href="homens.html">Homens</a></li>
			<li><a href="criancas.html">Crianças</a></li>
			<li><a href="index.html">Home</a></li>
			<li><a href="contato.html">Contato</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Pesquisar" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="cadastro_form.html"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>cadastro</div></div></a></div>
				
				<div class="user"><a href="login.html"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>log</div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+55 (21) 97959-3673 </div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Cadastre-se</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Cadastre-se</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<br><br>
		<!-- Checkout -->

		<!-- <div class="checkout">-->
		  <div class="form-container">
			<div class="container">
				<!--<div class="row">-->
					
					<!---teste-->
					<div>
					<form action="cadastro_cliente.php" enctype="multpart/form-data" method="POST">
					<fieldset>
						<legend> CADASTRO </legend> <br><br>
						<label for="nome">Nome:* </label>
						<input type="text" name="nome" id="nome" pattern="[A-Za-z]+$" placeholder="Coloque seu nome" autofocus required> <br><br> 
						
						<label for="foto">Faça upload de uma foto sua!  </label>
						<input type="hidden" name="foto" id="foto" value="4194304"/>
						<input type="file"/><br><br>
						
						
						<label for="data_nasc">Data de nascimento:* </label>
						<input type="date" name="data_nasc" id="data_nasc" required> <br><br> 
						
						<label for="cpf">CPF:* </label>
						<input type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required> <br><br> 
						
						<label for="identidade">Número do documento de Identificação:* </label>
						<input type="text" name="identidade" id="identidade" pattern="\d{2}\.\d{3}\.\d{3}-\d{1}" placeholder="00.000.000-0" required> <br><br> 
						
						<label for="orgao_exp">Órgão expeditor:* </label>
						<input type="text" name="orgao_exp" id="orgao_exp" title="DETRAN, etc" autofocus required> <br><br>
						
						
						
						<label for="sexo">Sexo:</label> <br><br>
						<input class="botao" type="radio" value="F" name="sexo"> Feminino <br>
						<input class="botao" type="radio" value="M" name="sexo"> Masculino<br>
						<input class="botao" type="radio" value="O" name="sexo" checked> Outros<br><br>
						
						
						
						<label for="tel_contato"> Telefone de contato:</label>
						<input type="text" name="tel_contato" id="tel_contato" placeholder="Digite seu DDD + número sem traços" min="10" max="11" required> <br><br>
									
						<label for="email"> E-mail:</label>
						<input type="email" name="email" id="email" placeholder="example@example.com" required> <br><br>
						
						
							<label for="cep">CEP:* </label>
						<input type="text" name="cep" id="cep" pattern="[0-9]{5}-[0-9]{3}" placeholder="00000-000" title="Separar por hífen" required> <br><br>
						
						<label for="estado">Estado: </label>
						<select name="estado" id="estado"> 
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select>
						<br><br>
						
						<label for="cidade">Cidade:* </label>
						<input type="text" name="cidade" id="cidade" placeholder="Nome da cidade"  required> 
						<label for="bairro">Bairro:* </label>
						<input type="text" name="bairro" id="bairro" placeholder="Nome do bairro"  required>
						<br><br> 
					
						<label for="rua">Rua*: </label>
						<input type="text" name="rua" id="rua" placeholder="Nome da Rua" required> 
						
						<label for="num_casa">Número da rua*: </label>
						<input type="number" name="num_casa" id="num_casa"  required> <br><br>
						
						<label for="complemento">Complemento: </label>
						<input type="text" name="complemento" id="complemento" title="Não obrigatório"><br><br>
						
						<label for="user"> Nome de usuário </label>
						<input type="text" id="user" name="user"><br><br>
						
						<label for="senha"> Senha </label> (no máximo 8 caracteres)
						<input type="password" id="senha" name="senha"><br><br>
						
						
						</fieldset>
						<br><br>
						<!--BOTÃO-->
		
						<input type="reset" value="Limpar"><br><br>
			
						<input type="submit" value="Enviar" name="reg_user">
			</form>
								
					
					
					</div>
				</div>
			<!--</div>-->
		</div>
<br><br>
		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="index.html">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="logo_loja.png" alt=""></div>
											<div><img src="nome_loja.png"></div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Trabalhando para selecionar as melhores peças para você. Obrigada pela preferência!</p>
								</div>
							</div>
						</div>

		<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Suporte</div>
								<ul class="footer_list">
									<li>
										<a href="index.html"><div>Home<div class="footer_tag_1">online now</div></div></a>
									</li>
								
									<li>
										<a href="contato.html"><div>Contato</div></a>
									</li>
								</ul>
							</div>
						</div>

						
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="mulheres.html">Mulheres</a></li>
										<li><a href="homens.html">Homens</a></li>
										<li><a href="criancas.html">Crianças</a></li>
										<li><a href="index.html">Home</a></li>
										<li><a href="contato.html">Contato</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/checkout.js"></script>
</body>
</html>

