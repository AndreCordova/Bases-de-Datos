<!DOCTYPE html>
<html lang="es">
<head>
	<title>LENGUAS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="lenguas1.php">Lenguas</a></li>
				<li id="cl"><a href="fiestas1.php">Fiestas Populares</a></li>
				<li id="cl"><a href="gastronomia1.php">Gastronomia</a></li>
				<li id="cl"><a href="tradiciones1.php">Tradiciones</a></li>
				<li id="cl"><a href="etnias1.php">Grupos Etnicos</a></li>
			</ul>
		</nav>
		<h1>Insertar lenguas</h1>
		<section>
		<form name="lenguas" action="guardar-lenguas.php" method="post">
			<input type="varchar" name="NOM_LENG" placeholder="Nombres" required><br>
			<input type="varchar" name="N_HABLANTES" placeholder="Numero de hablantes"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
		</section>
	</header>
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