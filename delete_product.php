<?php 
	include("connection.php");
	$id = $_GET['id'];
	$query="DELETE FROM products WHERE id='$id'";
     $result=mysqli_query($con,$query);
     if ($result) {
     	header("location:adminproducts.php");
     }
?>