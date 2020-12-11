<?php  
	$conexion = new mysqli("localhost", "root", "", "tasks-bd");
		if ($conexion->connect_errno){
			die("Error 404 ".$conexion->error);
		}
?>

