<?php
	//create mysqli connection and select database
	$sqlcon = new mysqli('localhost', 'username', 'password', 'test');
	if(!$sqlcon){
		die('Connection failed: '.$sqlcon->error());
	}
	
	//create sql query
	$sqlquery = 'select artist_name from artists';
	
	//execute query
	$result = $sqlcon->query($sqlquery);
	
	//display result
	while($row = $result->fetch_assoc()){
		printf("Aritst: %s<br>", $row['artist_name']);
	}
	
	//free memory associated with query
	$result->close();
	
	//close connection
	$sqlcon->close();
?>