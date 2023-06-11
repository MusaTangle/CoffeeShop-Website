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
		$query="UPDATE blogs SET name = '$name',image = '$folder' ,description =  '$description' WHERE id = '$id'";
		
		$result=mysqli_query($con,$query);
		if ($result) {
			
		header("location:adminblog.php");
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

$query1="SELECT * FROM blogs where id =  $id";
					$result1=mysqli_query($con,$query1);
					$row=mysqli_fetch_assoc($result1)

?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="post" enctype="multipart/form-data">
				<h3>Edit Blog</h3>
				<div class="form-group">
					<label>Blog Title </label>
					<input type="text" name="name" class="form-control" required="" value="<?php echo $row['name'] ?>">

				</div>
				<div class="form-group">
					<label>Blog Image</label>
					<input type="file" name="uploadfile" class="form-control" >
					
				</div>
				<div class="form-group">
					<label>BLog Image</label>
					<textarea name="description" class="form-control" required="" rows="10"><?php echo $row['description'] ?></textarea> 
					
					
				</div>
				<div class="form-group">
					
					<input type="submit" name="submit" class="btn btn-success">
					<a href="adminblog.php" class="btn btn-danger"> Cancel </a>
					
				</div>
			</form>
		</div>
	</div>
</div>