<?php require_once("authin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>

<div>
	<?php include('admin-nav-bar-view.php'); ?>
</div>

<?php

include("connect_db.php");

$product_id = $_GET['product_id'];

$query = "SELECT * FROM product_tb
		  WHERE product_id= '$product_id' ";
$result = mysqli_query($con,$query);
$rows = mysqli_fetch_assoc($result);

			$product_id = $rows['product_id'];
			$productname = $rows['productname'];
			$productdesc = $rows['productdesc'];
			$price = $rows['price'];
			$quantity = $rows['quantity'];

	?>
	<div >
	<form action="admin-updateproduct-process.php" method="post">
	<div> </br><br> </div>
	<table>
		<tr>
			 <td><input type="hidden"  name="product_id" value="<?php echo $product_id; ?>"><td>
	</tr>
	<tr>
		<td>Product Name :</td>
		 <td><input  type="text"  name="productname" value="<?php echo $productname; ?>"><td>
	</tr>
	<tr>
		<td>Product Description :</td>
		<td><input  type="text"  name="productdesc" value="<?php echo $productdesc; ?>">
	</tr>
	<tr>
		<td>Product Price :</td>
		<td> ₱ <input  type="text"  name="price"  value="<?php echo $price; ?>"></td>
	</tr>
	<tr>
		<td>Product Name :</td>
		<td><input  type="text"  name="quantity"  value="<?php echo $quantity; ?>"></td>
	</tr>
	</table>
	</br>
	<input  type="submit" name="update" value="Update"/>
	</form>
	</div>

</body>
</html>