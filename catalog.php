<?php
	require 'db.php';
	
	//Fetching from your database table.
	$query = "SELECT * FROM catalog";
	$result = mysql_query($query);
	header('Content-Type: application/json');
	
	$catalog = array();
	if ($result) {
	    while($row = mysql_fetch_array($result)) {
	        $catalog[] = array(
	        	'name' => $row['name'], 
	        	'description' => $row['description']);
	    }
	}
	echo json_encode($catalog);
?>