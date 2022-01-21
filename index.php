<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">
</head>
<body>
	<div class="formOuter">
		<form action="insert.php" method="post">
			<h3>Fill up the form to create an account</h3>
			<div class="labelContainer">
				<label>Email</label> <input type="email" name="email">
			</div>
			<div class="labelContainer">
				<label>Username</label> <input type="text" name="username">
			</div>
			
			<div class="labelContainer">
				<label>Password</label> <input type="password" name="pwd">
			</div>
			<div class="labelContainer">
				<label>Repassword</label> <input type="password" name="repwd">
			</div>
			 <div class="labelContainer">
				<input type="submit" name="submit" value="Sign Up">
				<a href="login.php">Alredy have an Account? Login Here</a>
			</div>
		</form>
	</div>
</body>
</html>
