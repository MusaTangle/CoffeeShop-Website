<?php include"adminheader.php"; ?>
<div class="container">
	<div class="row">
		<h3>Contact Us Message </h3>
		<?php 
			
					$query="SELECT * FROM contactus";
					$result=mysqli_query($con,$query);
					$total=mysqli_num_rows($result);

				 ?>
				 <table class="table table-hover">
				 	<thead>
				 		<th>Sr.no</th>
				 		<th>Name</th>
				 		<th>Email Address</th>
				 		<th>Message</th>
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
									<td> <?php echo $row['email']; ?></td>
									<td> <?php echo $row['message']; ?></td>

									<td><?php echo "<a href='delete_message.php?id=$row[id]' class='btn btn-danger'> Delete</a>"; ?></td>
								</tr>
				 				<?php
				 				$i++;
				 			}
				 		 ?>
				 	</tbody>
				 </table>
		
	</div>
</div>