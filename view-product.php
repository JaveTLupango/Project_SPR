<?php require_once("authin.php"); ?>
<!-- <html>
	<head>
<?php //include('logo-title.php');?>
		</head>
			<title>title</title>
				<body>

<div>
	<?php //include('admin-nav-bar-view.php'); ?>
</div>

	</body>
</html> -->




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
	<a href='admin-product-view.php'>Click here</a> to go back
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
		<table  class="table">
	<tr>
		<th><strong> Product Name</strong> : <input type="text" class="form-control col-lg-12" value=" <?php echo ($productname); ?>" disabled></th>
	</tr>
	<tr>
		<th><strong> Product Description</strong> : <input type="text" class="form-control col-lg-12" value=" <?php echo ($productdesc); ?>" disabled></th>
	</tr>
	<tr>
		<th><strong> Product Price</strong> : <input type="text" class="form-control col-lg-12" value=" <?php echo ($price); ?>" disabled></th>
	</tr>
	<tr>
		<th><strong> Product Quantity</strong> : <input type="text" class="form-control col-lg-12" value=" <?php echo ($quantity); ?>" disabled></th>
	</tr>
	<tr>
	<th><a style='margin-left:20px;' href='admin-product-view.php'><button class='btn btn-info'>Back to Product List</button></a></th>
	</tr>
		</table>
	</th>
	</tr>
</table>
</div>	
	<?php } ?>
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