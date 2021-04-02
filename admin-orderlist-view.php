<?php require_once("authin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title>webtitle-pagetitle</title>
</head>
<body>
<div>
	<?php include('admin-nav-bar-view.php'); ?>
</div>

	<div>
		<div>
			<h2>Product list</h2>
		</div>
			<?php
			include('connect_db.php');

			$query = "SELECT * FROM order_tb";

			$result = mysqli_query($con,$query);		
			?>

<div align="center">
<table width="80%">
<tr>
	<td>Cart No.</td>
	<td>ProductNo</td>
	<td>ProductName</td>
	<td>Product Description</td>
	<td>Quantity</td>
	<td>Price</td>
	<td>total ammount</td>


</tr>

<?php
		
	while ($rows = mysqli_fetch_assoc($result)) 
		{
			
			$order_no = $rows['order_no'];
			$product_id = $rows['product_no'];
			$productname = $rows['productname'];
			$productdesc = $rows['productdesc'];
			$price = $rows['price'];
			$itemno = $rows['itemno'];
			$email=$rows['email'];
			$firstname=$rows['firstname'];
			$lastname=$rows['lastname'];
			$address=$rows['address'];
?>

	<tr>
	
	<th><strong><?php echo ($order_no); ?></strong></th>
	<th><strong><?php echo ($product_id); ?></strong></th>
	<th><strong><?php echo ($productname); ?></strong></th>
	<th><strong><?php echo ($productdesc); ?></strong></th>
	<th ><strong><?php echo ($itemno); ?></strong></th>
	<th><strong><?php echo '₱'.$price.'.00'; ?></strong></th>
	<th><strong><?php echo '₱'.$price*$itemno.'.00'; ?></strong></th>
<th>
	<a style='margin-left:20px;' href='admin-delete-orderlist-process.php?order_no=<?php echo $order_no;?>'><button>Customer Recieved Orsder</button></a></th>
	</tr>
	<?php } ?>
</table>

</div>
</div>
</body>
</html>			