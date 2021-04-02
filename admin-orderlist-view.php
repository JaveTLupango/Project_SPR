<?php require_once("authin.php"); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<?php //include('logo-title.php');?>
	<title>webtitle-pagetitle</title>
</head>
<body>
<div>
	<?php //include('admin-nav-bar-view.php'); ?>
</div>

	<div>
		<div>
			<h2>Product list</h2>
		</div>
			<?php
			// include('connect_db.php');
			// $query = "SELECT * FROM order_tb";
			// $result = mysqli_query($con,$query);		
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
		
	// while ($rows = mysqli_fetch_assoc($result)) 
	// 	{
			
	// 		$order_no = $rows['order_no'];
	// 		$product_id = $rows['product_no'];
	// 		$productname = $rows['productname'];
	// 		$productdesc = $rows['productdesc'];
	// 		$price = $rows['price'];
	// 		$itemno = $rows['itemno'];
	// 		$email=$rows['email'];
	// 		$firstname=$rows['firstname'];
	// 		$lastname=$rows['lastname'];
	// 		$address=$rows['address'];
?>

	<tr>
	
	<th><strong><?php //echo ($order_no); ?></strong></th>
	<th><strong><?php //echo ($product_id); ?></strong></th>
	<th><strong><?php //echo ($productname); ?></strong></th>
	<th><strong><?php //echo ($productdesc); ?></strong></th>
	<th ><strong><?php ///echo ($itemno); ?></strong></th>
	<th><strong><?php //echo '₱'.$price.'.00'; ?></strong></th>
	<th><strong><?php //echo '₱'.$price*$itemno.'.00'; ?></strong></th>
<th>
	<a style='margin-left:20px;' href='admin-delete-orderlist-process.php?order_no=<?php //echo $order_no;?>'><button>Customer Recieved Orsder</button></a></th>
	</tr>
</table>

</div>
</div>
</body>
</html>			 -->




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/navbar/">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.4/examples/navbar/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com/docs/3.4/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

     <?php include 'admin-nav-bar-view.php'; ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
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
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/3.4/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.4/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/docs/3.4/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>