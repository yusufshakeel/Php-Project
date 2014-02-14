<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//form submitted. display result.
		echo "<p>Thank you for registering!</p>",
		"<p>Account Info</p>",
		"<p>User name:",htmlentities($_POST['username']),"</p>",
		"<p>Email: ",htmlentities($_POST['email']),"</p>";
	}else{
		echo "Form not submitted.<br>";
	}
?>