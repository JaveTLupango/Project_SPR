<div>
		<div>
			<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);

			$rows = mysqli_fetch_assoc($result);		

			$image = $rows['image'];
			$webname = $rows['webname'];
			?>
	
			<h2>
<img  src="<?php echo $image;?>" style="margin-top:20px;height:20px;width:20px;"/>
		
			<?php echo $webname;?>
	</h2>
</div>
	<div>
				<button ><a href="admin-home-view.php">Home</a></button>
				<button ><a href="admin-addproduct-view.php">Add Product</a></button>
				<button ><a href="admin-product-view.php">Product List</a></button>
				<button ><a href="admin-addlogo-view.php">Create web information</a></button>
				<button ><a href="admin-logodelete-view.php">Delete Web informtation</a></button>
				<button ><a href="admin-orderlist-view.php">Order List</a></button>
				<button ><a href="admin-logout-process.php">Logout</a></button>
			
			<h2>
		</div>


</div>