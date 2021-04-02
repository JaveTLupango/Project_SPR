<?php require_once("authin-customer.php"); ?>
<html>
	<head>
<?php include('logo-title.php');?>
		</head>
			<title>title</title>
				<body>

<div>
	<?php include('customer-cart-list-view.php'); ?>
</div>

<div>	

<?php

include("connect_db.php");

$product_id = $_GET['product_id'];

$query = "SELECT * FROM product_tb
		  WHERE product_id= '$product_id' ";
$result = mysqli_query($con,$query);
$rows = mysqli_fetch_assoc($result);

			$image = $rows['image'];
			$product_id = $rows['product_id'];
			$productname = $rows['productname'];
			$productdesc = $rows['productdesc'];
			$price = $rows['price'];
			$quantity = $rows['quantity'];
		

if(empty($rows)){ 
?>
User does not exist.<br /><br/>
	<a href='customer-cart-list-view.php'>Click here</a> to go back
<?php  } 

else { ?>
<div>
	<div>
			<table>
	<tr>
		<th>
		<img  src="<?php echo $image;?>" style="margin-top:20px;height:400px;width:400px;"/>
		</th>
	
		<th>
		<table>
	<tr>
		<th><strong><?php echo ($productname); ?></strong></th>
	</tr>
	<tr>
		<th><strong><?php echo ($productdesc); ?></strong></th>
	</tr>
	<tr>
		<th><strong><?php echo '₱'.$price.'.00'; ?></strong></th>
	</tr>
	<tr>
		<th><strong><?php echo ($quantity); ?></strong></th>
	</tr>
	<tr>
	<th><a style='margin-left:20px;' href='customer-cart-list-view.php'><button >Back to Product List</button></a></th>
	</tr>
		</table>
	</th>
	</tr>
</table>
</div>	
	<?php } ?>
</div>
	</body>
</html>
