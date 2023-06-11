<?php
session_start();
include('connection.php');
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
    $password = $_POST['pass'];
   
    $query="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$query);
	$total=mysqli_num_rows($result);
		if ($total>=1) {
			$_SESSION['usermail']=$email;
				header("location:user.php");
		}
		else
		{
			echo "
			  <strong>Invalid User name or Password</strong>
			";
		}
	
}



?>
<html>
<head>
<body>
<form  method="POST">
	<h2>User Login</h2>
EMAIL:      <input type="email" name="email"><br>
PASSWORD:   <input type="password" name="pass"><br>
<input type="submit" value="LOGIN" name="submit">
<a href="register.php">Register </a>
</form>
<body>
</head>
</html>