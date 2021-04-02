<?php

include("connect_db.php");

$cart_no = $_GET['cart_no'];



$query = "DELETE FROM cart_tb WHERE cart_no = '$cart_no' ";
$delete = mysqli_query($con,$query);

if($delete){
	header("Location:customer-cart-list-view.php");
} else {
	echo 'Failed to update.<br/>';
	//echo "<a href='admin-product-view.php'>Click here</a> to go back";
}

			
?>
