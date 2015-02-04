<?php
	include("conect.php");
	extract($_POST);
	$sql_insertar="update lenguas set Codigo='$id', Nombre='$nombres', Numero de hablantes='hablantes' where Codigo='$id'";

	$res_sql=mysql_query($sql_insertar,$link);
	if (!$res_sql) {
		echo '<script>alert("Error de insercion...")</script>';
		echo "script>location.href='listar-lenguas.php'</script";
	}else{
		echo '<script>alert("Se inserto correctamente...")</script>';
		echo "script>location.href='listar-lenguas.php'</script";
	}
?>