<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar lenguas</h1>
	<section>
		<form name="lenguas" action="guardar-lenguas.php" method="post">
			<input type="varchar" name="NOM_LENG" placeholder="Nombres" required><br>
			<input type="varchar" name="N_HABLANTES" placeholder="Numero de hablantes"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html