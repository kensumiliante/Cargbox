<?php 

	$varReg = @$_GET['var']; 

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>MyCarg</title>
	<link rel="stylesheet" type="text/css" href="Css/Style.css">
	<link rel="stylesheet" type="text/css" href="Css/demo.css">
	<script type="text/javascript" src="Js/Validation.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
			<a marginwidth="0" marginheight="0" scrolling="no" frameborder="0" href="../cargbox/"><div class="top_header"><img class="logo" src="Images/Logo.png" width="240"></a><label class="titles ti1"><a href="About-us.php?Cg=1">Contáctanos</a></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="titles"><a href="About-us.php">Que hacemos</a></label></div><br><br><br><br><br></div>
			<div class="menu-bar">
			<ul class="topnav" id="myTopnav">
					<li><a class="active" href="#home">Home</a></li>
					<li><a href="About-us.php?Cg=1">Contactanos</a></li>
					<li><a href="About-us.php">Que hacemos</a></li>
					<li><a href="Info-Botons.php?Sec=1">SERVICIOS</a></li>
					<li><a href="Info-Botons.php?Sec=2">ENVIAR</a></li>
					<li><a href="Info-Botons.php?Sec=4">RASTREAR</a></li>
					<li><a href="Info-Botons.php?Sec=3">HISTORICO</a></li>
					<li class="icon">
   				<a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
	  		</li>
			</ul>
			</div>
	</header>
	<section>
<i class="fa fa-user-circle-o" aria-hidden="true"></i>
	
	<?php require 'Home.php'; ?>

	<video id="video1" loop autoplay preload poster="Images/Load.png">
		<source src="Videos/Cargbox.mp4" type="video/mp4" />
		<source src="Videos/Cargbox.webm" type="video/webm" />
		<source src="Videos/Cargbox.ogv" type="video/ogg" />
	</video>

	<div class="slider"> 
			<input type="radio" class="boton" name="boton" checked="checked"><label></label>
			<input type="radio" class="boton" name="boton"><label></label>
			<input type="radio" class="boton" name="boton"><label></label>
			<input type="radio" class="boton" name="boton"><label></label>
		<div class="contenedor-img cuatro-imagenes">
			<span class="imgL" alt="">Compañía Líder en logistica urbana</span>
			<span class="imgL" alt="">Programa tus Envíos de una Manera Fácil y Rápida</span>
			<span class="imgL" alt="">Solicita Recolecciones por Medio del Sistema MyCarg</span>
			<span class="imgL" alt="">Estadísticas, Historial de Envios y Trazabilidad</span>
		</div> 		
	</div>

	<div class="cont_botons">
		<center>
			<div id="b0">
			    <div class="serv ig0"></div>
				<a href="Info-Botons.php?Sec=1"><div class="botons b0"><div class="min-title m0">SERVICIOS</div></div></div></a>
			    <a href="Info-Botons.php?Sec=2"><div id="b0"><div class="serv ig1"></div><div class="botons b1"><div class="min-title m1">ENVIAR</div></div></div></a>
				<a href="Info-Botons.php?Sec=4"><div id="b0"><div class="serv ig2"></div><div class="botons b2"><div class="min-title m2">RASTREAR</div></div></div></a>
				<a href="Info-Botons.php?Sec=3"><div id="b0"><div class="serv ig3"></div><div class="botons b3"><div class="min-title m3">HISTORICO</div></div></div></a>
			</div>
		</center>
	</div>


		<div class="div-info-cg">
			<center>
	
				<div>Somos un Operador Logistico de confianza</div>
			</center>
		</div>
	<div class="div-int-1">
	<div class="div-int-2">GESTION LOGÍSTICA URBANA</div>
	</div>
	<div class="fixed-bg photo-1">
		<div class="div-int-pht">
			<div class="txt-ini">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. 
			</div>
			<div class="div-images-icon">
				<i class="fa fa-users images-icon" aria-hidden="true"><br><label class="p-icon">Área</label></i>
				<i class="fa fa-cubes images-icon" aria-hidden="true"><br><label class="p-icon">Centro Ccia.</label></i>
				<i class="fa fa-tasks images-icon" aria-hidden="true"><br><label class="p-icon">Monitoreo</label></i>
				<i class="fa fa-paper-plane-o p-ic" aria-hidden="true"><br><label class="p-icon">Envío</label></i>
			</div>
		</div>
	</div>

	<div class="div-int-1">
		<div class="div-int-2">GESTION LOGÍSTICA NACIONAL</div>
	</div>
	<div class="fixed-bg photo-2">
		<div class="div-int-pht">
			<div class="txt-ini">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. 
			</div>
			<div class="div-images-icon">
				<i class="fa fa-sitemap images-icon" aria-hidden="true"><br><label class="p-icon">Software</label></i>
				<i class="fa fa-truck images-icon" aria-hidden="true"><br><label class="p-icon">Recolección</label></i>
				<i class="fa fa-star images-icon" aria-hidden="true"><br><label class="p-icon">Logística</label></i>
				<i class="fa fa-lock p-ic" aria-hidden="true"><br><label class="p-icon">Seguridad</label></i>
			</div>
		</div>
	</div>

	<div class="div-int-1">
		<div class="div-int-2">ADMINISTRACIÓN DE CENTROS DE CORRESPONDENCIA</div>
	</div>
	<div class="fixed-bg photo-3">
		<div class="div-int-pht">
			<div class="txt-ini">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. 
			</div>
			<div class="div-images-icon">
				<i class="fa fa-envelope images-icon" aria-hidden="true"><br><label class="p-icon">Mensajería</label></i>
				<i class="fa fa-motorcycle images-icon" aria-hidden="true"><br><label class="p-icon">Diligencias</label></i>
				<i class="fa fa-check images-icon" aria-hidden="true"><br><label class="p-icon">Validación</label></i>
				<i class="fa fa-pie-chart p-ic" aria-hidden="true"><br><label class="p-icon">Estadísticas</label></i>
			</div>
		</div>
	</div>

	<div class="div-int-1">
		<div class="div-int-2">LOGÍSTICA PERSONALIZADA</div>
	</div>
	<div class="fixed-bg photo-4">
		<div class="div-int-pht">
			<div class="txt-ini">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. 
			</div>
			<div class="div-images-icon">
				<i class="fa fa-building images-icon" aria-hidden="true"><br><label class="p-icon">Empresas</label></i>
				<i class="fa fa-line-chart images-icon" aria-hidden="true"><br><label class="p-icon">Soluciones</label></i>
				<i class="fa fa-lightbulb-o images-icon" aria-hidden="true"><br><label class="p-icon">Personal</label></i>
				<i class="fa fa-check-circle p-ic" aria-hidden="true"><br><label class="p-icon">Confianza</label></i>
			</div>
		</div>
	</div>

	<div class="div-int-1">
		<div class="div-int-2">TRAZABILIDAD</div>
	</div>
	<div class="fixed-bg photo-5">
		<div class="div-int-pht">
			<div class="txt-ini">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</div>
			<div class="div-images-icon">
				<i class="fa fa-map-marker images-icon" aria-hidden="true"><br><label class="p-icon">Estados</label></i>
				<i class="fa fa-exclamation-triangle images-icon" aria-hidden="true"><br><label class="p-icon">Env. Especial</label></i>
				<i class="fa fa-comments images-icon" aria-hidden="true"><br><label class="p-icon">Novedades</label></i>
				<i class="fa fa-pencil-square-o p-ic" aria-hidden="true"><br><label class="p-icon">Entrega</label></i>
			</div>
		</div>
	</div>

	<div class="div-int-1">
		<div class="div-int-2">SOFTWARE MULTIDISCIPLINARÍO</div>
	</div>
	<div class="fixed-bg photo-6">
		<div class="div-int-pht">
			<div class="txt-ini">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</div>
			<div class="div-images-icon">
				<i class="fa fa-desktop images-icon" aria-hidden="true"><br><label class="p-icon">MyCarg</label></i>
				<i class="fa fa-mouse-pointer images-icon" aria-hidden="true"><br><label class="p-icon">En línea</label></i>
				<i class="fa fa-sitemap images-icon" aria-hidden="true"><br><label class="p-icon">Sof Cargbox</label></i>
				<i class="fa fa-cloud p-ic" aria-hidden="true" ><br><label class="p-icon">Servers</label></i>
			</div>
		</div>
	</div>
		<div class="div-contact">
			<center>
				<button class="submit submit-cont-ini">QUIERO CONTACTARME</button><br>
			</center>
		</div>
	</section>
	<footer>
	<!---->
    <div class="footer">
    	<div class="networks">
			<a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter img-Social" aria-hidden="true"></a>
			<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook img-Social" aria-hidden="true"></a>
			<a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin img-Social" aria-hidden="true"></a>
    	</div>
    	<div class="foot-info">
    		 MyCARG &copy 2016 - 2017 <br><br>
    		<table class="tbl-foot"> 
    		<tr>
				<td> &nbsp; </td>
			</tr>
			<tr>
				<td> &nbsp; </td>
			</tr>
			<tr>	
				<td> &nbsp; </td>
			</tr>
    		</table>
    	</div>
    </div>
	</footer>
</body>
</html>

