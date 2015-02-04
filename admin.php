<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:administrador.php?nologin=false");
    
}
$_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Validacion de Formulario PHP</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
  	<script type="text/javascript" src="js/jquery.min.js"></script>
  	<script type="text/javascript" src="js/carousel.js"></script>
  	<script type="text/javascript" src="js/transition.js"></script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="lenguas1.php">LENGUAS</a></li>
				<li id="cl"><a href="fiestas1.php">FIESTAS POPULARES</a></li>
				<li id="cl"><a href="gastronomia1.php">GASTRONOMIA</a></li>
				<li id="cl"><a href="tradiciones1.php">TRADICIONES</a></li>
				<li id="cl"><a href="etnias1.php">GRUPOS ETNICOS</a></li>
			</ul>
		</nav>
	</header>
	<div class=" contenedor_principal">		
		<div id="wrapper">
		    <div id="myCarousel" class="carousel slide">
		        <div class="carousel-inner">
			        <div class="item">
				        <img src="images/Img1.jpg" alt="">
				        <div class="carousel-caption">
				           <h4>La fiesta de las Flores y las Frutas</h4>
				           <p> Esta Fiesta es una celebración popular y una de las más hermosas celebraciones alrededor del país, que se realiza 40 dias antes de Semana Santa.</p>
				        </div>
			        </div>
			        <div class="item">
			            <img src="images/Img2.jpg" alt="">
			            <div class="carousel-caption">
			            	<h4>Fiesta del Maiz</h4>
			            	<p>Las fiestas del Maíz y el Turismo tienen su origen en una celebración muy antigua que es la celebración de la cosecha.</p>
			            </div>
			        </div>
			        <div class="item active">
			          	<img src="images/Img3.jpg" alt="">
			          	<div class="carousel-caption">
			            	<h4>Romería de La Virgen del Cisne</h4>
			            	<p>La Romería de la Virgen del Cisne se realiza cada 15 de Agosto, cuando la madre de los Lojanos emprende un largo periplo desde su santuario hasta la catedral de la capital provincial.</p>
			          	</div>
			        </div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>    
	  		</div>
	  	</div>
	  	<section id="mini_contenedor">
	  		<h2>CONOCE MAS ACERCA DE:</h2><br>
	  		<a href="fiestas.php" class="img1"><h2>FIESTAS POPULARES</h2></a>
	  		<a href="tradiciones.php" class="img2"><h2>TRADICIONES</h2></a>
	  		<a href="gastronomia.php"class="img3"><h2>GASTRONOMIA</h2></a>
	  	</section>
	</div>
	<footer id="pinferior">
		<div class="infor">
			Contactos: 2568546
		</div>
		<div class="derechos">
			© Todos los derechos reservados 2015
		</div>
		<div class="logos">
			<img src="images/logo_ecuador.jpg">
			<img src="images/logoAllYouNeed.png">
		</div>
	</footer>	
</body>
</html>