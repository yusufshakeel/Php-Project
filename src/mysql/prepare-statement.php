<?php
	//is form submitted
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//open mysqli connection
		$sqlcon = new mysqli('localhost', 'username', 'password', 'test');
		if(!$sqlcon){
			die('Connection failed: '. $sqlcon->error());
		}
		
		//create query
		$sqlquery = 'select album_name from albums where artist_id = ?';

		//prepare statement and execute query
		if($stmt = $sqlcon->prepare($sqlquery)){
			$stmt->bind_param('i', $_POST['artist']);
			$stmt->execute();
			$stmt->bind_result($result);
			
			//print output
			while($stmt->fetch()){
				printf("Album: %s<br>", $result);
			}
			
			//free memory
			$stmt->close();
		}
		
		//close connection
		$sqlcon->close();
	}else{
?>
<form method='post'>
<label for='artist'>Select an artist</label>
<select name='artist'>
<option value='1'>Lata Mangeshkar</option>
<option value='2'>Mohammed Rafi</option>
<option value='3'>R. D. Burman</option>
</select>
<input type='submit'>
</form>
<?php }//else ends here?>