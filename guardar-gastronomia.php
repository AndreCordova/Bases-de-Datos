<?php
	include("conect.php");
	extract($_POST);
	$sql_insertar="insert into gastronomia values ('$id','$nombres','$ingredientes','$descripciones','$imagenes')";

	$res_sql=mysql_query($sql_insertar,$link);
	if (!$res_sql) {
		echo '<script>alert("Error de insercion...")</script>';
		echo "script>location.href='formulario-gastronomia.php'</script";
	}else{
		echo '<script>alert("Se inserto correctamente...")</script>';
		echo "script>location.href='formulario-gastronomia.php'</script";
	}
?>