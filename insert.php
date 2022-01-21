<?php
	
	include'connect.php';

	if(isset($_POST['submit'])){


		$conn = new mysqli($host, $uname, $pwd, $db);

		if(mysqli_connect_error()){
			die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}


		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['pwd'];
		$repassword = $_POST['repwd'];


		if($email=='' or  $username=='' or  $password=='' or $repassword==''){
			echo "<script>";
			echo 'alert("All Fields are Mandatory");'; 
			echo 'window.location.href = "signup.php";';
			echo "</script>";
			exit;
		}
		
    if ($password == $repassword) {
		$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
	}
	}else{
           echo "<script>alert('Password Not Matched.')</script>";
		}
		
		
		
		$queryEmailCheck = mysqli_query($con,"SELECT email FROM userdetails where email='$email'");	
		if(mysqli_num_rows($queryEmailCheck) != 0){
			echo "<script>";
			echo 'alert("Email ID already exist");'; 
			echo 'window.location.href = "index.php";';
			echo "</script>";
			exit;
		}



		$query = "
			insert into userdetails (
				email, username, password, repassword
			)
			values(
				'$email', '$username', '$password', '$repassword'
			)
		";

		if(mysqli_query($conn, $query)){
			
			echo "<script>";
			echo 'alert("Successfully Registered");'; 
			echo 'window.location.href = "login.php";';
			echo "</script>";
			exit;
		}
		else{
			echo"an error occured:" .mysqli_error($conn);
		}
	}

?>