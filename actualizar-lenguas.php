<?php
	include("conect.php");
	extract($_GET);
	$sql_insertar="select * from lenguas where Codigo='$id'";

	$res_sql=mysql_query($sql_insertar,$link);
	while ($row = mysql_fetch_array($res_sql)) {
		$id_user=$row['COD_LENG'];
		$nombres_user=$row['NOM_LENG'];
		$hablantes_user=$row['N_HABLANTES'];
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
	<h1>Insertar lenguas</h1>
	<section>
		<form name="lenguas" action="update-lenguas.php" method="post">
			<input type="text" name="id" placeholder="Codigo" required value="<?php echo $id_user;?>"><br>
			<input type="text" name="nombres" placeholder="Nombre" required value="<?php echo $nombres_user;?>"><br>
			<input type="text" name="hablantes" placeholder="Numero de hablantes" value="<?php echo $hablantes_user;?>"><br>
			<input name="guardar" value="Actualizar" type="submit">
		</form>
	</section>
</body>
</html