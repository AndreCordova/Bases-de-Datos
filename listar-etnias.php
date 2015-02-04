<?php
	include("conect.php");
	$sql_listar="select * from grupos_etnicos";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Id</td>";
		echo "<td>Nombre</td>";
		echo "<td>Numero de habitantes</td>";
		echo "<td>Imagen</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['COD_GRUP']."</td>";
			echo "<td>".$row['ETNIA']."</td>";
			echo "<td>".$row['NUM_HABITANTES']."</td>";
			echo "<td>".$row['IMAGEN']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>