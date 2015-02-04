<?php
	include("conect.php");
	$sql_listar="select * from gastronomia";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Id</td>";
		echo "<td>Nombre</td>";
		echo "<td>Ingredientes</td>";
		echo "<td>Descripcion</td>";
		echo "<td>Imagen</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['COD_GASTR']."</td>";
			echo "<td>".$row['NOM_PLATO']."</td>";
			echo "<td>".$row['INGREDIENTES']."</td>";
			echo "<td>".$row['DESCRIPCION']."</td>";
			echo "<td>".$row['IMG_PLATO']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>