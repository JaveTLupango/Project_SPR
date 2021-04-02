<?php require_once("authin-customer.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>
<?php include('customer-nav-bar-view.php');?>

<?php
			include('connect_db.php');
			
			$email_owner=$_SESSION['session_email'];

$query = "SELECT * FROM product_tb WHERE cmail='$email_owner'";
			$result = mysqli_query($con,$query);

			$query = "SELECT * FROM product_tb";
			$result = mysqli_query($con,$query);

			
			?>
		

<div align="center">
<table width="80%">
<tr>
	<td>Image</td>
	<td>ProductNo</td>
	<td>ProductName</td>
	<td>Product Description</td>
	<td>Price</td>


</tr>

<?php
		
	while ($rows = mysqli_fetch_assoc($result)) 
		{
			

			$image = $rows['image'];
			$product_id = $rows['product_id'];
			$productname = $rows['productname'];
			$productdesc = $rows['productdesc'];
			$price = $rows['price'];
			$quantity = $rows['quantity'];
			
?>

	<tr>
	<th><strong><img  src="<?php echo $image;?>" style="margin-top:20px;height:100px;width:100px;"/></strong></th>
	
	<th><strong><?php echo ($product_id); ?></strong></th>
	<th><strong><?php echo ($productname); ?></strong></th>
	<th><strong><?php echo ($productdesc); ?></strong></th>
	<th><strong><?php echo '₱'.$price.'.00'; ?></strong></th>
	</tr>
</tr>
<th colspan="6" align="right">
		<a style='margin-left:20px;' href='view-product.php?product_id=<?php echo $product_id;?>'><button class='btn btn-info'>View Product</button></a>
	<a style='margin-left:20px;' href='customer-addcart-view.php?product_id=<?php echo $product_id;?>'><button class='btn btn-info'>Add to cart</button></a></th>
	</tr>
	<?php } ?>
</table>

</div>
</body>
</html>