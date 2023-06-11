<?php include"adminheader.php"; ?>
<div class="container">
	<div class="row">
		<h3>Blog Posts</h3>
		<?php 
			
					$query="SELECT * FROM blogs";
					$result=mysqli_query($con,$query);
					$total=mysqli_num_rows($result);

				 ?>
				 <a href="addblog.php" class="btn btn-success pull-right"> Add Blog</a>
				 <table class="table table-hover">
				 	<thead>
				 		<th>Sr.no</th>
				 		<th>Title</th>
				 		<th>Image</th>
				 		<th>Action</th>
				 	</thead>
				 	<tbody>
				 		<?php 
				 		$i=1;
				 			while ($row=mysqli_fetch_assoc($result)) {
				 				?>
								<tr>
									<td><?php echo $i ?></td>
									<td> <?php echo $row['name']; ?></td>
									<td> <img src="<?php echo $row['image']; ?>" height="100px" width="100px" alt="Image Error"></td>
									
									<td><?php echo "<a href='edit_blog.php?id=$row[id]' class='btn btn-primary'> Edit</a>"; ?>
									<?php echo "<a href='delete_blog.php?id=$row[id]' class='btn btn-danger'> Delete</a>"; ?></td>
								</tr>
				 				<?php
				 				$i++;
				 			}
				 		 ?>
				 	</tbody>
				 </table>
		
	</div>
</div>