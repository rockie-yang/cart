<html>
<head>
</head>
<body>
<?php
	require '_catalog.php';
	require '_photos.php';
	
	foreach ($photos as $photo) {
		if (in_array($photo, $names)) {
			// $sql = "INSERT INTO CATALOG(name) VALUES('{$photo}');";
			echo "{$photo} existed in catalog<br>";
		}
		else {
			$sql = "INSERT INTO catalog(name) VALUES('{$photo}');";
			$result = mysql_query($sql);
			echo "{$result}<br>";
		}
	}


	// header('Content-Type: application/json');
	// echo '\n';
	// echo json_encode($catalog);
	// echo '\n';
	// echo json_encode($names);
	// echo '\n';
	// echo json_encode($photos);
?>
</body>
</html>