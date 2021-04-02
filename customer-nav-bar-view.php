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
<img  src="data:image/jpeg;base64,<?php echo $image;?>" style="margin-top:20px;height:20px;width:20px;"/>
		
			<?php echo $webname;?>
	</h2>
</div>
	<div>
<?php require_once("authin-customer.php"); ?>
		<?php
			include('connect_db.php');
			
			$email_owner=$_SESSION['session_email'];

$query = "SELECT * FROM product_tb WHERE cmail='$email_owner'";
			$result = mysqli_query($con,$query);
?>
				<button ><a href="customer-home-view.php">Home</a></button>				
				<button ><a href='customer-cart-list-view.php?email_owner=<?php echo $email_owner;?>'>View Cart List</a></button>
				<button ><a href="customer-logout-process.php">Logout</a></button>
			
			<h2>
		</div>


</div>