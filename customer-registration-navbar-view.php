<div>
		<div>
			<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);

			$rows = mysqli_fetch_assoc($result);		

			$image = $rows['image'];
			
			?>
	
			<h2>
<img  src="<?php echo $image;?>" style="margin-top:20px;height:20px;width:20px;"/>
		
			Website name 
	</h2>
</div>



</div>