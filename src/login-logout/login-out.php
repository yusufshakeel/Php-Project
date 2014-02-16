<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST['submit'] == 'Login'){
			$_SESSION['username'] = htmlentities($_POST['username']);
			header("Location: index.php");
		}else if($_POST['submit'] == 'Logout'){
			session_destroy();
			header("Location: index.php");
		}
	}
?>