<?php
	//open sql connection
	$sqlcon = mysql_connect('localhost', 'username', 'password');
	if(!$sqlcon){
		die('Connection failed: ' . mysql_error());
	}
	
	//select database
	$db = mysql_select_db('test');
	if(!$db){
		die('Selected database is unavailable: '. mysql_error());
	}
	
	//create sql query
	$sqlquery = "select artist_name from artists";
	
	//execute sql query
	$result = mysql_query($sqlquery);
	
	//loop through returned data and display it
	while($row = mysql_fetch_array($result)){
		printf("Artists: %s<br>",$row['artist_name']);
	}
	
	//free memory associated with query
	mysql_free_result($result);
	
	//close connection
	mysql_close($sqlcon);
?>