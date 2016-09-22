
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Carona Unifeob</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
<meta name="keywords"
	content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
<meta name="author" content="FREEHTML5.CO" />

<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content="" />
<meta property="og:image" content="" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">
<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

<!-- Stylesheets -->
<!-- Dropdown Menu -->
<link rel="stylesheet" href="../css/superfish.css">
<!-- Owl Slider -->
<link rel="stylesheet" href="../css/owl.carousel.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<!-- Date Picker -->
<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="../css/cs-select.css">
<link rel="stylesheet" href="../css/cs-skin-border.css">

<!-- Themify Icons -->
<link rel="stylesheet" href="../css/themify-icons.css">
<!-- Flat Icon -->
<link rel="stylesheet" href="../css/flaticon.css">
<!-- Icomoon -->
<link rel="stylesheet" href="../css/icomoon.css">
<!-- Flexslider  -->
<link rel="stylesheet" href="../css/flexslider.css">

<!-- Style -->
<link rel="stylesheet" href="../css/style.css">

<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<?php
require_once ("../controller/usuario.controller.class.php");
require_once ("../controller/veiculo.controller.class.php");
require_once ("../model/veiculo.class.php");
require_once ("../model/usuario.class.php");

$Ucontroller = new UsuarioController ();
$Vcontroller = new VeiculoController ();
$usuario = new usuarios ();
$veiculo = new veiculos ();

if (isset ( $_POST ['submit'] )) {
	$nome = $_POST ['nome'];
	$email = $_POST ['email'];
	$endereco = $_POST ['endereco'];
	$senha = $_POST ['senha'];
	$telefone = $_POST ['telefone'];
	$modelo = $_POST ['modelo'];
	$vagas = $_POST ['vagas'];
	
	$usuario->setNome ( $nome );
	$usuario->setEmail ( $email );
	$usuario->setCidade ( $endereco );
	$usuario->setSenha ( $senha );
	$usuario->setTelefone ( $telefone );
	
	if ($Ucontroller->save ( $usuario )) {
		$registros = $Ucontroller->ultimoUsuario ();
		$reg = mysqli_fetch_assoc ( $registros );
		$id_usuario = $reg ['idUsuario'];
		$veiculo->setModelo ( $modelo );
		$veiculo->setVagas ( $vagas );
		$veiculo->setUsuario_idUsuario ( $id_usuario );
		$Vcontroller->save ( $veiculo );
	}
	
}

?>
<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<div id="fh5co-header" style="background-color: #3c4146 !important;">
				<header id="fh5co-header-section">
					<div class="container">
						<div class="nav-header">
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
							<h1 id="fh5co-logo">
								<a href="index.php">Carona Unifeob</a>
							</h1>
							<nav id="fh5co-menu-wrap" role="navigation">
								<ul class="sf-menu" id="fh5co-primary-menu">
									<li><a class="active" href="index.html">Home</a></li>

									<li><a href="usuario.php">Entrar</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

			</div>
			<!-- end:fh5co-header -->
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						<li style="background-image: url(../img/slider1.jpg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="col-md-12 col-md-offset-0 text-center slider-text">
									<div class="slider-text-inner js-fullheight">
										<div class="desc">
											<p>
												<span>Carona Unifeob</span>

											</p>

											<h2>Pode oferecer carona?</h2>
											<p>
												<a href="#" data-toggle="modal" data-target="#modal1"
													class="btn btn-primary btn-lg">Cadastrar</a> OU <a href="#"
													data-toggle="modal" data-target="#modal2"
													class="btn btn-primary btn-lg">Entrar</a>

											</p>
											<h2>Precisa de carona?</h2>
											<h2>Preencha:</h2>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li style="background-image: url(../img/slider2.jpg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="col-md-12 col-md-offset-0 text-center slider-text">
									<div class="slider-text-inner js-fullheight">
										<div class="desc">
											<p>
												<span>Carona Unifeob</span>
											</p>
											<h2>Pode oferecer carona?</h2>
											<p>
												<a href="#" data-toggle="modal" data-target="#modal1"
													class="btn btn-primary btn-lg">Cadastrar</a> OU <a href="#"
													data-toggle="modal" data-target="#modal2"
													class="btn btn-primary btn-lg">Entrar</a>

											</p>
											<h2>Precisa de carona?</h2>
											<h2>Preencha:</h2>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li style="background-image: url(../img/slider3.jpg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="col-md-12 col-md-offset-0 text-center slider-text">
									<div class="slider-text-inner js-fullheight">
										<div class="desc">
											<p>
												<span>Carona Unifeob</span>
											</p>
											<h2>Pode oferecer carona?</h2>
											<p>
												<a href="#" data-toggle="modal" data-target="#modal1"
													class="btn btn-primary btn-lg">Cadastrar</a> OU <a href="#"
													data-toggle="modal" data-target="#modal2"
													class="btn btn-primary btn-lg">Entrar</a>

											</p>
											<h2>Precisa de carona?</h2>
											<h2>Preencha:</h2>
										</div>
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</aside>

			<div class="wrap">
				<div class="container">
					<div class="row">

						<div id="availability">
							<form action="caronas.class.php" method="post">

								<div class="a-col alternate">
									<section>
										<div class="input-field">
											<select class="cs-select cs-skin-border" name="cidade"
												id="cidade">
												<option value="" disabled selected>Selecione sua Cidade</option>
												<option value="Casa Branca">Casa Branca</option>
												<option value="Vargem Grande do Sul">Vargem Grande do Sul</option>
												<option value="São João da Boa Vista">São João da Boa
													Vista</option>
											</select>
										</div>
									</section>
								</div>
								<div class="a-col alternate">
									<div class="input-field">
										<select class="cs-select cs-skin-border" name="campus">
											<option value="" disabled selected>Selecione um Campus</option>
											<option value="Campus I">Campus I</option>
											<option value="Campus II">Campus II</option>
											<option value="Escola Fazenda">Escola Fazenda</option>

										</select>
									</div>
								</div>
								<div class="a-col alternate">
									<div class="input-field">
										<select class="cs-select cs-skin-border" name="horario">
											<option disabled selected>Escolha um periodo</option>
											<option value="Diurno">Diurno</option>
											<option value="Noturno">Noturno</option>
										</select>
									</div>
								</div>
								<div class="a-col action">
									<a> <span><input type="submit" class="buttonV"
											value="CHECAR CARONA"></span>
									</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="modal1" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content modal-popup">
						<h2>Faça seu cadastro.</h2>
						<form action="index.php" class="popup-form" method="post">
							<input type="text" class="form-control form-white"
								placeholder="Nome Completo" name="nome"> <input type="text"
								class="form-control form-white" placeholder="Endereço de Email"
								name="email"> <input type="password"
								class="form-control form-white" placeholder="Senha" name="senha">
							<input type="text" class="form-control form-white"
								placeholder="Endere�o" name="endereco"> <input type="text"
								class="form-control form-white" placeholder="Telefone"
								name="telefone">
							<h4>Descrição do Veiculo</h4>
							<input type="text" class="form-control form-white"
								placeholder="Modelo" name="modelo"> <input type="text"
								class="form-control form-white" placeholder="Vagas" name="vagas">
							<a><span><button type="submit" class="btn btn-primary btn-lg"
										name="submit">Cadastrar</button></span></a>
						</form>
					</div>
				</div>
			</div>

			<div class="modal fade" id="modal2" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content modal-popup">
					<h2>Acesse sua conta.</h2>
						<form action="usuario.php" class="popup-form" method="post">
						<input type="text" class="form-control form-white"
								placeholder="E-Mail" name="email">
								<input type="password" class="form-control form-white"
								placeholder="Senha" name="senha">
							<a><span><button type="submit" class="btn btn-primary btn-lg"
										name="submit">Entrar</button></span></a><br>
										<p>Caso ainda n�o tenha uma conta cadastre-se cilicando <a data-toggle="modal" data-target="#modal1">aqui</a>.</p>
						</form>
					</div>
				</div>
			</div>



			<footer id="footer" class="fh5co-bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="copyright">
								<p>
									<small>&copy; 2016 Free HTML5 Template. All Rights Reserved.
										Designed by FreeHTML5.co Demo Images.</small>
								</p>
							</div>
						</div>

						<div class="col-md-3">
							<ul class="social-icons">
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a> <a
									href="#"><i class="icon-facebook-with-circle"></i></a> <a
									href="#"><i class="icon-instagram-with-circle"></i></a> <a
									href="#"><i class="icon-linkedin-with-circle"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Javascripts -->
	<script src="../js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="../js/hoverIntent.js"></script>
	<script src="../js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="../js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="../js/classie.js"></script>
	<script src="../js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>

	<script src="../js/custom.js"></script>

</body>
</html>
<?php ?>
