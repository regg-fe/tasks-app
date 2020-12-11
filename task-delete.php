<?php  
	include_once 'database.php';

	if (isset($_POST['id'])) {
		
		$id = $_POST['id'];
		$sql = "DELETE FROM task WHERE id = '$id'";
		$result = $conexion->query($sql);
		if (!$result) {
			die('Query Falied');
		}
		echo 'Task Deleted Successfully';
	}
?>