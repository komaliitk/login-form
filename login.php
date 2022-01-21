<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">
</head>
<body>
	<div class="formOuter">
		<form action="login.php" method="post">
			<h3>Enter Credentials to Login</h3>
			<div class="labelContainer">
				<label>Email</label> <input type="email" name="email">
			</div>
			<div class="labelContainer">
				<label>Password</label> <input type="password" name="pwd">
			</div>
			<div class="labelContainer">
				<input type="submit" name="submit" value="Login">
			</div>
		</form>
	</div>
</body>
</html>

<?php

include 'connect.php';
	
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		$query = "SELECT * FROM userdetails WHERE email='$email' AND password='$pwd' ";
		$run = mysqli_query($con, $query);
		$run = mysqli_num_rows($run);
		if($run==0){
			echo "<script>";
			echo 'alert("Invalid Details");'; 
			echo "window.location.href='login.php' ";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo "window.open('welcome.php', '_self')";
			echo "</script>";
		}
	}
?>
