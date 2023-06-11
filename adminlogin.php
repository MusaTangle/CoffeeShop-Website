<?php
session_start();
include('connection.php');
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
    $password = $_POST['pass'];
   
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$query);
	$total=mysqli_num_rows($result);
		if ($total>=1) {
			$_SESSION['$email']=$email;
				header("location:admin.php");
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
</form>
<body>
</head>
</html>