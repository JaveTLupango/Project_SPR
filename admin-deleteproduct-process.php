<?php

include("connect_db.php");



	

			$product_id = $_GET['product_id'];

$query = "DELETE FROM product_tb WHERE product_id = '$product_id' ";
$update = mysqli_query($con,$query);

if($update){
	header("Location:admin-product-view.php");
	echo 'Successfully Updated.<br/>';
} else {
	echo 'Failed to update.<br/>';
	//echo "<a href='admin-product-view.php'>Click here</a> to go back";
}

			
?>