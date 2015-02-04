<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar grupos_etnicos</h1>
	<section>
		<form name="grupos_etnicos" action="guardar-etnias.php" method="post">
			<input type="text" name="id" placeholder="Id" required><br>
			<input type="text" name="nombres" placeholder="Nombre" required><br>
			<input type="text" name="habitantes" placeholder="Numero de habitantes"><br>
			<input type="img" name="imagenes" placeholder="Imagen"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html