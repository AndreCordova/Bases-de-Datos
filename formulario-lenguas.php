<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar lenguas</h1>
	<section>
		<form name="lenguas" action="guardar-lenguas.php" method="post">
			<input type="text" name="id" placeholder="Codigo" required><br>
			<input type="text" name="nombres" placeholder="Nombre" required><br>
			<input type="text" name="hablantes" placeholder="Numero de hablantes"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html