<?php 
	include("connection.php");
	$id = $_GET['id'];
	$query="DELETE FROM blogs WHERE id='$id'";
     $result=mysqli_query($con,$query);
     if ($result) {
     	header("location:adminblog.php");
     }
?>