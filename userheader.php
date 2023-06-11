<?php 
	include"usersession.php";
	include"connection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Customer  Side</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Customer Panel </a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="blogs.php">Blog</a></li>
          </ul>
    <ul class="nav navbar-nav-right">
      <li class="pull-right"><a href="userlogout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>