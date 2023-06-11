<?php include('adminheader.php'); ?>
<?php 
$id = $_GET['id'];
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$description=$_POST['description'];
	
	$filename = $_FILES["uploadfile"]['name'];
	$tempname = $_FILES["uploadfile"]['tmp_name'];
	$ext 			  = pathinfo($filename, PATHINFO_EXTENSION);
	$size	= $_FILES["uploadfile"]["size"]; 
	$folder="images/".$filename;
	if($folder)
	{

		move_uploaded_file($tempname, $folder);
		$query="UPDATE brands SET name = '$name',image = '$folder',descrition = '$description' WHERE id = '$id'";
		
		$result=mysqli_query($con,$query);
		if ($result) {
			
		header("location:adminbrands.php");
		}
		else
		{
			echo mysqli_error($con);
			echo "data not inserted due to invalid file ";
		}
	}
	else
	{

	}
	
}

$query1="SELECT * FROM brands where id =  $id";
					$result1=mysqli_query($con,$query1);
					$row=mysqli_fetch_assoc($result1)

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="post" enctype="multipart/form-data">
				<h3>Edit Brand</h3>
				<div class="form-group">
					<label>Brand Name</label>
					<input type="text" name="name" class="form-control" required="" value="<?php echo $row['name'] ?>">

				</div>
				<div class="form-group">
					<label>Product Image</label>
					<input type="file" name="uploadfile" class="form-control" >
					
				</div>
				<div class="form-group">
					<label>Blending Description</label>
					<textarea name="description" class="form-control" rows="10"><?php echo $row['description'] ?></textarea>
					
				</div>
				<div class="form-group">
					
					<input type="submit" name="submit" class="btn btn-success">
					<a href="adminproducts.php" class="btn btn-danger"> Cancel </a>
					
				</div>
			</form>
		</div>
	</div>
</div>