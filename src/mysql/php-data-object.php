<?php
	//is form submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//open mysql connection
		$db = "mysql:host=localhost;dbname=test";
		$user = "username";
		$passwd = "password";
		$sqlcon = new PDO($db, $user, $passwd);
		
		//create sql querry
		$sqlquery = "select album_name from albums where artist_id = ?";
		
		//prepare statement
		$stmt = $sqlcon->prepare($sqlquery);
		
		//execute statement
		if($stmt->execute(array($_POST['artist']))){
			
			//print output
			while($row = $stmt->fetch()){
				printf("Album: %s<br>", $row['album_name']);
			}
			
			//free memory
			$stmt->closeCursor();
		}
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