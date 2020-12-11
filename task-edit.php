<?php 

	include_once 'database.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];

	$sql = "UPDATE task SET name = '$name', description = '$description' WHERE id = '$id'";
	$result = $conexion->query($sql);

	if (!$result) {
		die('Query Falied.');
	}

	echo "Update task Successfully";
?>