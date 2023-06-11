<?php include"adminheader.php"; ?>
<div class="container">
	<div class="row">
		<h3>Products</h3>
		<?php 
			
					$query="SELECT * FROM products";
					$result=mysqli_query($con,$query);
					$total=mysqli_num_rows($result);

				 ?>
				 <a href="addprdct.php" class="btn btn-success pull-right"> Add Prodcut</a>
				 <table class="table table-hover">
				 	<thead>
				 		<th>Sr.no</th>
				 		<th>Name</th>
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
									
									<td><?php echo "<a href='edit_product.php?id=$row[id]' class='btn btn-primary'> Edit</a>"; ?>
									<?php echo "<a href='delete_product.php?id=$row[id]' class='btn btn-danger'> Delete</a>"; ?></td>
								</tr>
				 				<?php
				 				$i++;
				 			}
				 		 ?>
				 	</tbody>
				 </table>
		
	</div>
</div>