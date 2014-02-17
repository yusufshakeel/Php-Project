<?php
function loginChecking($username, $password, $link){
	$sql = 'select id,countrycode from city where id = ? and countrycode = ?';
	$stmt = $link->prepare($sql);
	if($stmt->execute(array($username,$password))){
		while($row = $stmt->fetch()){
			if($row['id'] == $username && $row['countrycode'] == $password){
				$stmt->closeCursor();
				return $username;
			}
		}
	}
	$stmt->closeCursor();
	return null;
}

function displayProfile($link, $username){
	$sql = 'select id,name,countrycode,district,population from city where id = ?';
	$stmt = $link->prepare($sql);
	if($stmt->execute(array($username))){
		while($row = $stmt->fetch()){
			if($row['id'] == $username){
				echo '<div>'.
						'<p>ID: '.$row['id'].'</p>'.
						'<p>Name: '.$row['name'].'</p>'.
						'<p>CountryCode: '.$row['countrycode'].'</p>'.
						'<p>State: '.$row['district'].'</p>'.
						'<p>Population: '.$row['population'].'</p>'.
					 '</div>';
				$stmt->closeCursor();
				return;
			}
		}
	}
}
?>