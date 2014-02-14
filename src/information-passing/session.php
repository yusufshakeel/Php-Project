<?php
	//initialize session
	session_start();
	
	//is user already registered? if yes let them know.
	if(isset($_SESSION['username'])){
		echo "You are already registered as $_SESSION[username]<br>";
	}
	
	//check if form was submitted
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		//check if user provided both name and email
		if(!empty(trim($_POST['username'])) && !empty(trim($_POST['email']))){
			
			$username = htmlentities($_POST['username']);
			$email = htmlentities($_POST['email']);
			
			//save username in session.
			$_SESSION['username'] = $username;
			
			//display registration greeting.
			echo "<p>Registration successful!</p>",
			"<p>User name: ",$username,"</p>",
			"<p>Email: ",$email,"</p>";
		}else{
			echo "<p>Please fill both the fields.</p>";
		}
	}else{
		//display form for registration.
?>
<form action="session.php?" method="post">
<label for="username">Username:</label>
<input type="text" name="username" />
<label for="email">Email:</label>
<input type="text" name="email" />
<input type="submit" value="Register!" />
</form>
<?php } //else ends here?>