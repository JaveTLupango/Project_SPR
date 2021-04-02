<?php

include("connect_db.php");

$order_no = $_GET['order_no'];



$query = "DELETE FROM order_tb WHERE order_no = '$order_no' ";
$delete = mysqli_query($con,$query);

if($delete){
	header("Location:admin-orderlist-view.php");
} else {
	echo 'Failed to update.<br/>';
	//echo "<a href='admin-product-view.php'>Click here</a> to go back";
}

			
?>
