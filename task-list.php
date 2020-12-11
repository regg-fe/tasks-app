<?php  

include_once 'database.php';

	$sql = "SELECT * FROM task";
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

	$jsonstring = json_encode($json);
	echo $jsonstring;
?>
