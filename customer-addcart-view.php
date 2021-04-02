<?php require_once("authin-customer.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div>	

<?php


include("connect_db.php");

$email_owner=$_SESSION['session_email'];
$product_id = $_GET['product_id'];

$query = "SELECT * FROM product_tb WHERE
			product_id= '$product_id'";
		$result = mysqli_query($con,$query);
		$rows = mysqli_fetch_assoc($result);

			$image = $rows['image'];
			$product_id = $rows['product_id'];
			$productname = $rows['productname'];
			$productdesc = $rows['productdesc'];
			$price = $rows['price'];

			$qry = "SELECT * FROM customer_tb
		  WHERE cemail = '$email_owner' ";
		$list = mysqli_query($con,$qry);
		$record = mysqli_fetch_assoc($list);


if(empty($rows&&$record)){
	?>
	User does not exist.<br /><br/>
	<a href='customer-home-view.php'>Click here</a> to go back
	<?php
} else {

?>
<div>
<div>
<div>


<table width="80%">
<tr>
	<td>Image</td>
	<td>ProductNo</td>
	<td>ProductName</td>
	<td>Product Description</td>
	<td>Price</td>
	<td>Quantity</td>


</tr>

	<tr>
	<th><strong><img  src="<?php echo $image;?>" style="margin-top:20px;height:100px;width:100px;"/></strong></th>
	
	<th><strong><?php echo ($product_id); ?></strong></th>
	<th><strong><?php echo ($productname); ?></strong></th>
	<th><strong><?php echo ($productdesc); ?></strong></th>
	<th><strong><?php echo '₱'.$price.'.00'; ?></strong></th>

	<th>
	<form method='post' enctype='multipart/form-data' action='customer-addcart-process.php'>
<?php //ayaw ni hilabti ?>
	<input type='hidden' name='product_id' value='<?php echo $product_id; ?>'/>
	<input type='hidden' name='productname' value='<?php echo $productname; ?>'/>
	<input type='hidden' name='productdesc' value='<?php echo $productdesc; ?>'/>
	<input type='hidden' name='price' value='<?php echo $price; ?>'/>
	<input type='hidden' name='email' value='<?php echo $email_owner; ?>'/>
  
  <?php //kani pwede ni hilabti ?>
  <select name="itemno">
  	<?php 
  	for($i=1;$i<100;$i++)
  		{?>
    <option><?php echo $i;?></option>
    <?php }?>
  </select>


<input type='submit' value='Add to Cart' name='submit'  style='width:250px;'>
		</form> 

</th>
</tr>
</table>
</div>
	


</div>
<?php } ?>
</div>

	</div>
</body>
</html>