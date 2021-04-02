<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);

			$rows = mysqli_fetch_assoc($result);		

			$image = $rows['image'];
			
//echo '<img  src="data:image/jpeg;base64,'.base64_encode($image) .'"/>';
echo '<link rel="icon" type="image" href="data:image/jpeg;base64,'.base64_encode($image) .'"/>';
			?>