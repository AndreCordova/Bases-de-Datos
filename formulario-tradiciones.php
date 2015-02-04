<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar tradiciones</h1>
	<section>
		<form name="tradiciones" action="guardar-tradiciones.php" method="post">
			<input type="text" name="id" placeholder="Id" required><br>
			<input type="text" name="id2" placeholder="Id2" required><br>
			<input type="text" name="nombres" placeholder="Nombre" required><br>
			<input type="text" name="simbolos" placeholder="Simbolo"><br>
			<input type="text" name="fechas" placeholder="Fecha de celebracion" required><br>
			<input type="text" name="descripciones" placeholder="Descripcion"><br>
			<input type="text" name="imagenes" placeholder="Imagen"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html