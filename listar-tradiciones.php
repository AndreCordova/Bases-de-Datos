<?php
	include("conect.php");
	$sql_listar="select * from tradiciones";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Id</td>";
		echo "<td>Id2</td>";
		echo "<td>Nombre</td>";
		echo "<td>Simbolo</td>";
		echo "<td>Fecha de celebracion</td>";
		echo "<td>Descripcion</td>";
		echo "<td>Imagen</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['COD_TRAD']."</td>";
			echo "<td>".$row['COD_CIUD']."</td>";
			echo "<td>".$row['NOM_TRAD']."</td>";
			echo "<td>".$row['SIMBOLO']."</td>";
			echo "<td>".$row['FECHA']."</td>";
			echo "<td>".$row['DESC_TRAD']."</td>";
			echo "<td>".$row['TRADICION']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>