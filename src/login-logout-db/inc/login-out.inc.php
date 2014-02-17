<?php
	session_start();
	include_once 'db.inc.php';
	include_once 'function.inc.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//form submitted
		if($_POST['submit'] == 'Login'){
			if(!empty($_POST['username']) && !empty($_POST['password'])){
				$username = htmlentities($_POST['username']);
				$password = htmlentities($_POST['password']);
				
				$link = new PDO(DB_INFO, DB_USER, DB_PASS);
				
				$e = loginChecking($username, $password, $link);
				echo "return value = $e";
				if($e!=null){
					//correct username & password
					$_SESSION['username'] = $username;
					header("Location: ../index.php");
				}else{
					//incorrect username & password
					header("Location: ../index.php?err=login");
				}
			}
			else{
				//field(s) empty
				header('Location: ../index.php');
			}
		}else if($_POST['submit'] == 'Logout'){
			session_destroy();
			header("Location: ../index.php");
		}
	}else{
		//form not submitted
		header('Location: ../index.php');
	}
?>