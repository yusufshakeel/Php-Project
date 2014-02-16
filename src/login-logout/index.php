<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Simple login</title>
		<script type="text/javascript">
			function validate(){
				var u = document.forms["login-form"]["username"].value;
				if(u.length==0){
					document.getElementById("msg").innerHTML="Your forgot to enter your user name.";
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body>
		<?php
			if(!isset($_SESSION['username'])){
		?>
			<form name="login-form" action="login-out.php" method="post" onsubmit="return validate();">
				<fieldset style="width:32%;">
					<legend>Login</legend>
					<label>User name:</label>
					<input type="text" name="username">
					<input type="submit" value="Login" name="submit">
					<p><span id="msg" style="color:red;"></span></p>
				</fieldset>
			</form>
		<?php
			}else{
				//display welcome note
		?>
			<form action="login-out.php" method="post">
				<p><?php echo "Welcome $_SESSION[username]";?></p>
				<input type="submit" value="Logout" name="submit">
			</form>
		<?php }//else ends here?>
	</body>
</html>