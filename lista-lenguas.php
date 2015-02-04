<?php
	include("conect.php");
	$sql_listar="select * from lenguas";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Codigo</td>";
		echo "<td>Nombre</td>";
		echo "<td>Numero de hablantes</td>";
		echo "<td>Borrar</td>";
		echo "<td>Actualizar</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['COD_LENG']."</td>";
			echo "<td>".$row['NOM_LENG']."</td>";
			echo "<td>".$row['N_HABLANTES']."</td>";
			echo "<td><a href='delete-lenguas.php?id=".$row['id']."'>Eliminar</td>";
			echo "<td><a href='actualizar-lenguas.php?id=".$row['id']."'>Actualizar</td>";
		echo "</tr>";
	}
	echo "</table>";
?>