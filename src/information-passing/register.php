<!-- Same page form submission and checking -->

<?php
/*
 * Check if form submitted
 */

if($_SERVER["REQUEST_METHOD"]=="POST"){
	//form was submitted. display the result.
	echo "<p>Thank you for registering!</p>",
		"<p>Account Info</p>",
		"<p>User name:",htmlentities($_POST['username']),"</p>",
		"<p>Email: ",htmlentities($_POST['email']),"</p>";
}else{
	//form was not submitted. display form
?>

<form action="register.php" method="post">
	<p>Registration Form</p>
	<label for="username">Username:</label>
	<input type="text" name="username">
	<label for="email">Email:</label>
	<input type="text" name="email">
	<input type="submit" value="Register!">
</form>

<?php }// else ends here ?>