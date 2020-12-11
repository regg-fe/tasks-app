<?php 
	include_once 'database.php';

	$search = $_POST['search']; 

	if(!empty($search)) {
		$sql = "SELECT * FROM task WHERE name LIKE '$search%'";
		$result = $conexion->query($sql);	
		if(!$result) {
			die("Query Error".mysqli_error($conexion));
		}
		$json = array();
		while($row = $result->fetch_assoc()) {
			$json[] = array(
				'name' => $row['name'],
				'description' => $row['description'],
				'id' => $row['id']
			);
		}
		$jsonstring = json_encode($json);
		echo $jsonstring;
	}
?>
