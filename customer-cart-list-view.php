<?php require_once("authin-customer.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>
<?php include('customer-nav-bar-view.php');?>
<div>	

<?php


include("connect_db.php");


$email_owner=$_SESSION['session_email'];


$query = "SELECT * FROM cart_tb
		  WHERE  email = '$email_owner'";
		$result = mysqli_query($con,$query);

		$qry = "SELECT * FROM customer_tb
		  WHERE  cemail = '$email_owner'";
		$list = mysqli_query($con,$qry);
		$record = mysqli_fetch_assoc($list);


		?>
<table width="80%">
<tr>
	<td>CartNo</td>
	<td>ProductNo</td>
	<td>ProductName</td>
	<td>Product Description</td>
	<td>Price</td>
	<td>Quantity</td>
	<td> <CENTER>Address</CENTER></td>
	<td colspan="3">contact number:</td>

</tr>
		<?php

		while($rows = mysqli_fetch_assoc($result))
		{
			$cart_no = $rows['cart_no'];
			$product_id = $rows['cproduct_id'];
			$productname = $rows['cproductname'];
			$productdesc = $rows['cproductdesc'];
			$price = $rows['cprice'];
			$itemno = $rows['itemno'];

			$firstname=$record['cfirstname'];
			$lastname=$record['clastname'];
			$address=$record['caddress'];


if(empty($rows)){
	?>
	User does not exist.<br /><br/>
	<a href='customer-home-view.php'>Click here</a> to go back
	<?php
} else {

?>


	<tr>	
	<th><strong><?php echo ($cart_no); ?></strong></th>
	<th><strong><?php echo ($product_id); ?></strong></th>
	<th><strong><?php echo ($productname); ?></strong></th>
	<th><strong><?php echo ($productdesc); ?></strong></th>
	<th><strong><?php echo '₱'.$price.'.00'; ?></strong></th>
	<th><strong><?php echo ($itemno); ?></strong></th>

<form method='post' enctype='multipart/form-data' action='customer-order-process.php'>
<?php //ayaw ni hilabti ?>
	<input type='hidden' name='product_id' value='<?php echo $product_id; ?>'/>
	<input type='hidden' name='productname' value='<?php echo $productname; ?>'/>
	<input type='hidden' name='productdesc' value='<?php echo $productdesc; ?>'/>
	<input type='hidden' name='itemno' value='<?php echo $itemno; ?>'/>
	<input type='hidden' name='price' value='<?php echo $price*$itemno; ?>'/>
	<input type='hidden' name='email' value='<?php echo $email_owner; ?>'/>
	<input type='hidden' name='firstname' value='<?php echo $firstname; ?>'/>
	<input type='hidden' name='lastname' value='<?php echo $lastname; ?>'/>
	<th><input type='text' name='address' placeholder='<?php echo $address; ?>'/></th>
	<th><input type='text' name='contactno' placeholder="Please input contact number" /></th>
		<th><input type='submit' value='Order Now' name='submit'>
		</form> </th>
		<th><a style='margin-left:20px;' href='customer-deleteorder-process.php?cart_no=<?php echo $cart_no;?>'><button>Delete to Cart</button></a></th>
		<th><a style='margin-left:20px;' href='customer-deleteorder-process.php?cart_no=<?php echo $cart_no;?>'><button>Order Recieved</button></a></th>
		
		</tr>
<?php }} ?>


</table>





	</div>
</body>
</html>