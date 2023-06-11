<?php 
	include"session.php";
	include"connection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Side</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Panel </a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="admin.php">Home</a></li>
      <li><a href="adminbrands.php">Brands</a></li>
      <li><a href="adminproducts.php">Products</a></li>
      <li><a href="adminblog.php">Blog </a></li>
      <li><a href="contactusmessage.php">Contact Us Message</a></li>
    </ul>
    <ul class="nav navbar-nav-right">
      <li class="pull-right"><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>