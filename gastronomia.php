<!DOCTYPE html>
<html lang="es">
<head>
	<title>GASTRONOMIA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="index.html">Inicio</a></li>
				<li id="cl"><a href="lenguas.php">Lenguas</a></li>
				<li id="cl"><a href="fiestas.php">Fiestas Populares</a></li>
				<li id="cl"><a href="gastronomia.php">Gastronomia</a></li>
				<li id="cl"><a href="tradiciones.php">Tradiciones</a></li>
				<li id="cl"><a href="etnias.php">Grupos Etnicos</a></li>
				<li id="cl"><a href="administrador.php">Administrador</a></li>
			</ul>
		</nav>
		<?php
	include("conect.php");
	$sql_listar="select * from gastronomia";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Id</td>";
		echo "<td>Nombre</td>";
		echo "<td>Ingredientes</td>";
		echo "<td>Descripcion</td>";
		echo "<td>Imagen</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['COD_GASTR']."</td>";
			echo "<td>".$row['NOM_PLATO']."</td>";
			echo "<td>".$row['INGREDIENTES']."</td>";
			echo "<td>".$row['DESCRIPCION']."</td>";
			echo "<td>".$row['IMG_PLATO']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
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