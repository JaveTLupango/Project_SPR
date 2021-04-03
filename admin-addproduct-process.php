<?php

include("connect_db.php");
if(isset($_POST['submit']))
{
		
		$productname		= $_POST['productname'];
		$productdesc		= $_POST['productdesc'];
		$price 				= str_replace('₱','', $_POST['price']); //str_replace("world","Peter","Hello world!");
		$quantity 			= $_POST['quantity'];
		$file= $_FILES['image']['name'];

	

$query="INSERT INTO product_tb (productname,productdesc,price,quantity,image) VALUES('$productname','$productdesc','$price','$quantity','$file')";
$result= mysqli_query($con,$query);
		
	if ($result) {
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
		echo "Image Product Uploaded!";
		header('location:admin-addproduct-view.php');
		
	}
	else
	{
		echo "Image Product Not Uploaded!";
	}
}
?>