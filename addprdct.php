<?php include('adminheader.php'); ?>
<?php 
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$price=$_POST['price'];
	
	$filename = $_FILES["uploadfile"]['name'];
	$tempname = $_FILES["uploadfile"]['tmp_name'];
	$ext 			  = pathinfo($filename, PATHINFO_EXTENSION);
	$size	= $_FILES["uploadfile"]["size"]; 
	$folder="images/".$filename;
	
	
 				
 				 
 				
	 
		move_uploaded_file($tempname, $folder);
		$query="INSERT INTO products (name,image,price) VALUES('$name','$folder' , '$price')";
		$result=mysqli_query($con,$query);
		if ($result) {
			
		header("location:adminproducts.php");
		}
		else
		{
			echo mysqli_error($con);
			echo "data not inserted due to invalid file ";
		}
	
}

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="post" enctype="multipart/form-data">
				<h3>Add Prodcut</h3>
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="name" class="form-control" required="">

				</div>
				<div class="form-group">
					<label>Product Image</label>
					<input type="file" name="uploadfile" class="form-control" required="">
					
				</div>
				<div class="form-group">
					<label>Product Price</label>
					<input type="number"  min="1" name="price" class="form-control" required="">
					
				</div>
				<div class="form-group">
					
					<input type="submit" name="submit" class="btn btn-success">
					<a href="adminproducts.php" class="btn btn-danger"> Cancel </a>
					
				</div>
			</form>
		</div>
	</div>
</div>