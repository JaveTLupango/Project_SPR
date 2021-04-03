<?php
include("connect_db.php");



			
			$productname = $_POST['productname'];
			$productdesc = $_POST['productdesc'];
			$price = str_replace('₱','', $_POST['price']);
			$quantity = $_POST['quantity'];

			$product_id = $_POST['product_id'];

$query = "UPDATE product_tb SET productname = '$productname', productdesc ='$productdesc',
		price = '$price', quantity = '$quantity'
		WHERE product_id = '$product_id' ";
$update = mysqli_query($con,$query);

if($update){
	header("Location:admin-product-view.php");
	echo 'Successfully Updated.<br/>';
} else {
	echo 'Failed to update.<br/>';
	//echo "<a href='admin-product-view.php'>Click here</a> to go back";
}
