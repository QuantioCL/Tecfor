<!DOCTYPE html>
<!--HANDCRAFTED BY QUANTIO-->
<html>
	<head>
		<meta name="keywords" content="tecfor tecnologia forestal">
		<meta name="description" content="Tecfor">
		<meta name="author" content="Quantio">
		<title>TECFOR | Contacto</title>
		<link rel="stylesheet" type="text/css" href="styles/tecfor.css">
		<link rel="stylesheet" type="text/css" href="styles/contacto.css">
		<link rel="stylesheet" type="text/css" href="styles/parsley.css">
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/parsley.js"></script>
		<script src="js/es.js"></script>
	</head>
	<body>
		<?php include_once("menu.html"); ?>
		<?php
				if ($_GET["status"] == 'success') {
					echo '<div id="messageBox" class="hidden success-box">Tu mensaje fue enviado exitosamente.</div>';
				} elseif ($_GET["status"] == 'error') {
					echo '<div id="messageBox" class="hidden error-box">Hubo un error. Por favor intenta nuevamente.</div>';
				}
			?>
		<section id="bannerContacto">
			CONTACTO
		</section>
		<section id="abstractContacto">
			<p class="title green">Ponte en contacto</p>
			<br><br>
			<p class="light">Completa el formulario de contacto y nos comunicaremos contigo a la brevedad.</p>
		</section>
		<form id="contactForm" method="post" action="processContacto.php" data-parsley-validate>
			<input name="fname" type="text" class="formLeft light" placeholder="Nombre" value="" required data-parsley-errors-messages-disabled/>
			<input name="lname" type="text" class="formRight light" placeholder="Apellido" value="" required data-parsley-errors-messages-disabled/>
			<input name="email" type="email" class="formFull light" placeholder="Email" value="" required data-parsley-errors-messages-disabled/>
			<input name="telefono" type="text" class="formFull light" placeholder="Teléfono" value="" required data-parsley-errors-messages-disabled/>
			<input name="empresa" type="text" class="formFull light" placeholder="Empresa" value="" />
			<select class="styled light" style="color: #848484;" name="para" required data-parsley-errors-messages-disabled>
				<option selected disabled>&iquest;Con qui&eacute;n deseas contactarte?</option>
				<option value="tecfor@tecfor.cl">Santiago - Casa Matriz</option>
				<option value="tecforccp@tecfor.cl">Sucursal Concepci&oacute;n</option>
				<option value="contacto@clashyd.cl">Antofagasta</option>
				<option value="maquinas@tymaq.com.ar">Argentina</option>
				<option value="contactenos@aristizabalyjinete.com">Colombia</option>
			</select>
			<textarea placeholder="Mensaje" class="light" name="mensaje" required data-parsley-errors-messages-disabled></textarea><br><br>
			<input type="text" name="proof" class="proof" value="" placeholder="3+5">
			<input type="submit" name="enviar" value="Enviar" class="content"/>
		</form>
		<p class="title green">Informaci&oacute;n de contacto</p><br>
		<section class="contactInfo">
			<p class="subtitle green">SANTIAGO</p>
			<p class="content" style="margin-bottom: 20px;">Casa Matriz</p>
			<table>
				<tr>
					<th class="content">Gerente General:</th>
					<td class="light">Alfredo Kunze Sch</td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:akunze@tecfor.cl">akunze@tecfor.cl</a></td>
				</tr>
				<tr>
					<th class="content">Ventas:</th>
					<td class="light">Dpto. Ventas</td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:ventas@tecfor.cl">ventas@tecfor.cl</a></td>
				</tr>
				<tr>
					<th class="content">Repuestos:</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:repuestos@tecfor.cl">repuestos@tecfor.cl</a></td>
				</tr>
				<tr>
					<th class="content">Servicio T&eacute;cnico:</th>
					<td class="light">Luis Cerda V.</td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:lcerda@tecfor.cl">lcerda@tecfor.cl</a></td>
				</tr>
				<tr>
					<td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono:</th>
					<td class="light"></td>
					<td class="light">+ 56 2 28581000</td>
				</tr>
				<tr>
					<td class="light"></td>
					<td class="light"></td>
					<td class="light">+ 56 2 23077200</td>
				</tr>
			</table>
		</section>
		<section class="contactInfo">
			<p class="subtitle green">CONCEPCI&Oacute;N</p>
			<p class="content" style="margin-bottom: 20px;">Sucursal</p>
			<table>
				<tr>
					<th class="content">Jefe de Sucursal:</th>
					<td class="light">Carlos Munita Z.</td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:cmunita@tecfor.cl">cmunita@tecfor.cl</a></td>
				</tr>
				<tr>
					<th class="content">Servicio T&eacute;cnico:</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:stecnico@tecfor.cl">stecnico@tecfor.cl</a></td>
				</tr>
				<tr>
					<td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono:</th>
					<td class="light"></td>
					<td class="light">+ 56 41 2237990</td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono:</th>
					<td class="light"></td>
					<td class="light">+ 56 41 2232665</td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono:</th>
					<td class="light"></td>
					<td class="light">+ 56 41 2232403</td>
				</tr>
				<tr>
					<th class="content">Email:</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:tecforccp@tecfor.cl">tecforccp@tecfor.cl</a></td>
				</tr>
			</table>
		</section>
		<section class="contactInfo">
			<p class="subtitle green">ANTOFAGASTA</p>
			<p class="content" style="margin-bottom: 20px;">Servicio T&eacute;cnico</p>
			<table>
				<tr>
					<th class="content">Av. Salvador Allende 174</th>
					<td class="light"></td>
					<td class="light"></td>
				</tr>
				<tr>
					<th class="content">Sr. Max Collao</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:mcollao@bsaltda.com">mcollao@bsaltda.com</a></td>
				</tr>
				<tr>
					<th class="content">Sr. Cristian Collao</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:ccollao@bsaltda.com">ccollao@bsaltda.com</a></td>
				</tr>
				<tr>
					<td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono / Fax:</th>
					<td class="light"></td>
					<td class="light">+ 56 55 2777055</td>
				</tr>
				<tr>
					<th class="content">Email:</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:administracion@bsaltda.com">administracion@bsaltda.com</a></td>
				</tr>
			</table>
		</section>
		<section class="contactInfo">
			<p class="subtitle green">ARGENTINA</p>
			<p class="content" style="margin-bottom: 20px;">Posadas Misiones</p>
			<table>
				<tr>
					<th class="content">Tymaq S.R.L.</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="http://www.tymaq.com.ar" target="_blank">www.tymaq.com.ar</a></td>
				</tr>
				<tr>
					<th class="content">Av. Maip&uacute; 2454, Posadas, Misiones, CP:3300</th>
					<td class="light"></td>
					<td class="light"></td>
				</tr>
				<tr>
					<th class="content">Sr. Oscar Timmer</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:gerencia@tymaq.com.ar">gerencia@tymaq.com.ar</a></td>
				</tr>
				<tr>
					<td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono:</th>
					<td class="light"></td>
					<td class="light">+ 54 03752 431033</td>
				</tr>
				<tr>
					<th class="content">Fax:</th>
					<td class="light"></td>
					<td class="light">+ 54 03752 431055</td>
				</tr>
				<tr>
					<th class="content">Email:</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:maquinas@tymaq.com.ar">maquinas@tymaq.com.ar</a></td>
				</tr>
			</table>
		</section>
		<section class="contactInfo" style="margin-bottom: 100px;">
			<p class="subtitle green">COLOMBIA</p>
			<p class="content" style="margin-bottom: 20px;">Bogot&aacute;</p>
			<table>
				<tr>
					<th class="content">Aristizabal y Jinete Ltda.</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="http://www.ayj.com.co" target="_blank">www.ayj.com.co</a></td>
				</tr>
				<tr>
					<th class="content">Sr. Adolfo Aristizabal</th>
					<td class="light"></td>
					<td class="light"></td>
				</tr>
				<tr>
					<th class="content">Carrera 40 N&deg; 17A - 44 , Bogot&aacute; - Colombia</th>
					<td class="light"></td>
					<td class="light"></td>
				</tr>
				<tr>
					<th class="content">Tel&eacute;fono:</th>
					<td class="light"></td>
					<td class="light">+ 57 1 2688600</td>
				</tr>
				<tr>
					<th class="content">Fax:</th>
					<td class="light"></td>
					<td class="light">+ 57 1 2688600 extensi&oacute;n 135</td>
				</tr>
				<tr>
					<th class="content">Email:</th>
					<td class="light"></td>
					<td class="light"><a class="contLink" style="text-decoration: underline;" href="mailto:info@ayj.com.co">info@ayj.com.co</a></td>
				</tr>
			</table>
		</section>
		<?php include_once("footer.html"); ?>
		<script>
			$(document).ready(function () {
				$('#messageBox').fadeIn(1000).removeClass('hidden');
				$("#messageBox").delay(4200).fadeOut('slow');
			});
		</script>
	</body>
</html>
