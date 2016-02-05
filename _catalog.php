<?php
	require 'db.php';
	
	// database columns
	$columns = array('name', 'description', 'x', 'y', 'z', 'cost', 'price');

	$columnString = implode(",", $columns);
	//Fetching from your database table.
	$query = "SELECT $columnString FROM catalog";
	$result = mysql_query($query);
	
	
	$names = array();

	$catalog = array();
	if ($result) {
	    while($row = mysql_fetch_array($result)) {
	    	$obj = array();
	    	foreach ($columns as $column) {
	    		$obj[$column] = $row[$column];
	    	}
	    	$names[] = $row['name'];
	    	$catalog[] = $obj;
	    }
	}
?>