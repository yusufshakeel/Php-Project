<?php
	session_start();
	include_once 'inc/db.inc.php';
	include_once 'inc/function.inc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>login-checking</title>
		<script type="text/javascript">
			function validate(){
				var u = document.forms["login-form"]["username"].value;
				var p = document.forms["login-form"]["password"].value;
				if(u.length==0){
					document.getElementById("msg").innerHTML="Your forgot to enter your user name.";
					return false;
				}
				if(p.length==0){
					document.getElementById("msg").innerHTML="Your forgot to enter your password.";
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body>
		<?php
			//not yet logged in
			if(!isset($_SESSION['username'])){
		?>
			<form name="login-form" action="inc/login-out.inc.php" method="post" onsubmit="return validate();">
				<fieldset style="width:32%;">
					<legend>Login</legend>
					<p><label>User name:</label>
					<input type="text" name="username"></p>
					<p><label>Password:</label>
					<input type="password" name="password"></p>
					<input type="submit" value="Login" name="submit">
					<p><span id="msg" style="color:red;">
						<?php
							if(isset($_GET['err'])){
								echo "Wrong user name or password.";
							}
						?>
						</span>
					</p>
				</fieldset>
			</form>
		<?php
			}else{
				//user logged in
		?>
				<form action="inc/login-out.inc.php" method="post">
					<p><?php echo "Welcome $_SESSION[username]";?></p>
					<input type="submit" value="Logout" name="submit">
				</form>
		<?php
				$link = new PDO(DB_INFO, DB_USER, DB_PASS);
				$username = $_SESSION['username'];
				displayProfile($link, $username);
				//displayProfile($link, $username);
			}//else ends here
		?>
	</body>
</html>