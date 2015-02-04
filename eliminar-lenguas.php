<?php
	include("conect.php");
	extract($_GET);
	echo "<tr>";
		echo "<td>Id</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['COD_LENG']."</td>";
		echo "</tr>";
	$sql_insertar="delete from lenguas where Codigo='$id'";
	$res_sql=mysql_query($sql_insertar,$link);
	if (!$res_sql) {
		echo '<script>alert("Error de insercion...")</script>';
		echo "script>location.href='listar-lenguas.php'</script";

	}else{
		echo '<script>alert("Se inserto correctamente...")</script>';
		echo "script>location.href='listar-lenguas.php'</script";
	}
	
?>