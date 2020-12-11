<?php  
include_once 'database.php';

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$description = $_POST['description'];
		$sql = "INSERT INTO task(name, description) VALUES ('$name','$description')";
		$result = $conexion->query($sql);

		if (!$result) {
			die("Query Failed");
		}
	
		echo 'Task Added Successfully';
	}

?>