<?php
	//check if cookie is set
	if(isset($_COOKIE['username'])){
		echo "Welcome back ", htmlentities($_COOKIE['username']), "!<br>";
	}
	
	//check if form submitted
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty(trim($_POST['username']))){
			$username = htmlentities($_POST['username']);
			
			//set expire in 60 seconds.
			$expire = time() + 60;
			
			//set cookie
			setcookie('username', $username, $expire, "/");
			
			//output message
			echo "Thanks for registering ", $username,"!<br>";
		}else{
			echo "<p>Please fill the user name field.</p>";
		}
	}else{
		//display form
?>
<form method="post">
<label for="username">Username:</label>
<input type="text" name="username" />
<input type="submit" value="Register!" />
</form>
<?php }//else ends here?>