<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar gastronomia</h1>
	<section>
		<form name="gastronomia" action="guardar-gastronomia.php" method="post">
			<input type="text" name="id" placeholder="Id" required><br>
			<input type="text" name="nombres" placeholder="Nombre" required><br>
			<input type="text" name="ingredientes" placeholder="Ingredientes"><br>
			<input type="text" name="descripciones" placeholder="Descripcion" required><br>
			<input type="text" name="imagenes" placeholder="Imagen"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html