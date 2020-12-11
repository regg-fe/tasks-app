<?php  

	include_once 'database.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM task WHERE id = '$id'";
	$result = $conexion->query($sql);
	if (!$result) {
		die('Query Failed');
	}

	$json = array();
	while ($row = $result->fetch_assoc()) {
		$json[] = array(
			'name' => $row['name'],
			'description' => $row['description'],
			'id' => $row['id']
		);
	}

	$jsonstring = json_encode($json[0]);
	echo $jsonstring;
?>