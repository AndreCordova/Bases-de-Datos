<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar fiestas_populares</h1>
	<section>
		<form name="fiestas_populares" action="guardar-fiestas.php" method="post">
			<input type="text" name="id" placeholder="Id" required><br>
			<input type="text" name="id2" placeholder="Id2" required><br>
			<input type="text" name="nombres" placeholder="Nombre" required><br>
			<input type="text" name="fechas" placeholder="Fecha de celebracion"><br>
			<input type="text" name="descripciones" placeholder="Descripcion" required><br>
			<input type="img" name="imagenes" placeholder="Imagen"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html