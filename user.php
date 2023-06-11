<?php include"userheader.php" ?>
<div class="container"> 
	<div class="row">
		<?php 

				$query="SELECT * FROM blogs";
					$result=mysqli_query($con,$query);
					$total=mysqli_num_rows($result);
					while ($row=mysqli_fetch_assoc($result)) {?>
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel panel-heading"><?php echo $row['name'] ?></div>
								<div class="panel panel-body">
									<img src="<?php echo $row['image'] ?>" width="100%">
									<b>Descrition</b>
									<p><?php echo $row['description'] ?></p>	
								</div>
							</div>
						</div>
					<?php
				}
		?>
		
	</div>
</div>