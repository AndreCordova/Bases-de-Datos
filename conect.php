<?php
	include("confi.php");
	
	//cadena de conexion al mysql
	if(!($link=mysql_connect($db_host,$db_user,$db_pass))){
		echo "Error de conexion al servidor";
		exit();
	}
	if(!(mysql_select_db($db_name,$link))){
		echo "Error de conexion a la base de datos";
		exit();
	}	

?>