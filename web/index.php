<!DOCTYPE html>

<!--HANDCRAFTED BY QUANTIO-->
<html>
	<head>
		<meta name="keywords" content="tecfor tecnologia forestal">
		<meta name="description" content="Tecfor">
		<meta name="author" content="Quantio">
		<title>TECFOR</title>
		<link rel="stylesheet" type="text/css" href="styles/tecfor.css">
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
		<script src="//stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>
		<script src="/js/unslider.js"></script>
		<script>
			$(function() {
				$('.banner').unslider({  
					dots: true,               //  Display dot navigation
					fluid: true,
					delay: 4000,
					speed: 500
				});
			});
		</script>
	</head>
	<body>
		<?php include_once('menu.html'); ?> 
		<section class="banner">
			<ul>
				<li style="background-image: url(/images/tecmin_banner.jpg);"><p class="subtitle">Acu&ntilde;ador trineum&aacute;tico</p></li>
		        <li style="background-image: url(/images/tec1.jpg);"><p class="subtitle">Trineum&aacute;ticos</p></li>
		        <li style="background-image: url(/images/gruas_industriales5.jpg); background-position: center center;"><p class="subtitle" style="">Gr&uacute;as Industriales</p></li> 
		        <li style="background-image: url(/images/auxilio3.jpg); background-position: center 30%;"><p class="subtitle">Auxilio Vehicular</p></li>
		        <li style="background-image: url(/images/plataforma_banner.jpg); background-position: center 80%;"><p class="subtitle">Plataformas hidr&aacute;ulicas</p></li>
		    </ul>
		</section>
		<section id="abstract">
			<div class="abstractCol">
				<a href="http://www.tecfor.cl/productos/trineumatico.php" class="contLink">
					<div class="iconBox" style="background-image: url('/images/trineumatico_icon.png');">
					</div>
					<div class="titleBox">
						Trineum&aacute;ticos
					</div>
				</a>
			</div>
			<div class="abstractCol">
				<a href="http://www.tecfor.cl/productos/auxilio_carretero.php" class="contLink">
					<div class="iconBox" style="background-image: url('/images/auxilio_icon2.png');">
					</div>
					<div class="titleBox">
						Auxilio vehicular
					</div>
				</a>
			</div>
			<div class="abstractCol">
				<a href="http://www.tecfor.cl/productos/gruas.php" class="contLink">
					<div class="iconBox" style="background-image: url('/images/grua_icon2.png');">
					</div>
					<div class="titleBox">
						Gr&uacute;as industriales
					</div>
				</a>
			</div>
			<div class="abstractCol">
				<a href="http://www.tecfor.cl/productos/plataformas.php" class="contLink">
					<div class="iconBox" style="background-image: url('/images/plataforma_icon2.png');">
					</div>
					<div class="titleBox">
						Plataformas hidr&aacute;ulicas
					</div>
				</a>
			</div>
		</section>
		<section id="columnas">
			<a href="http://www.tecfor.cl/nosotros.php" class="col" style="background-image: url('/images/tec2.jpg');">
			</a>
			<a href="http://www.tecmin.cl" class="col" style="background-image: url('/images/tecmin.jpg');">
			</a>
			<a href="http://www.tecfor.cl/contacto.php" class="col" style="background-image: url('/images/tec3.jpg');">
			</a>
			<div class="colTitle content">
				<a class="contLink" href="http://www.tecfor.cl/nosotros.html">NUESTRA EMPRESA</a>
			</div>
			<div class="colTitle content">
				<a class="contLink" href="http://www.tecmin.cl">TECMIN</a>
			</div>
			<div class="colTitle content">
				<a class="contLink" href="http://www.tecfor.cl/contacto.html">CONTACTO</a>
			</div>
		</section>
		<div class="clear" style="margin-bottom: 80px;">
		</div>
		<section id="slogan">
			<p class="subtitle green">Una empresa chilena comprometida con el mercado latinoamericano.</p>
		</section>
		<?php include_once('footer.html'); ?>
	</body>
</html>