<?php require_once("authin.php"); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<?php //include('logo-title.php');?>
	<title></title>
</head>
<body>
	<div>
	<?php //include('admin-nav-bar-view.php'); ?>
</div>
</table>
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
			
<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);		
			?>
			<div align="center">
<table width="80%" class="table">
<tr>
	<td>Image</td>
	<td>Website Name</td>
	<td>Website Description</td>
	<td></td>
</tr>
<?php
		
	while ($rows = mysqli_fetch_assoc($result)) 
		{
			$logo_id = $rows['logo_id'];
			$image = $rows['image'];
			$webname = $rows['webname'];
			$webdesc = $rows['webdesc'];
?>

<tr>
	<th><strong><img  src="data:image/jpeg;base64,<?php echo base64_encode($image);?>" style="margin-top:20px;height:100px;width:100px;"/></strong></th>
	
	<th><strong><?php echo ($webname); ?></strong></th>
	<th><strong><?php echo ($webdesc); ?></strong></th>
</tr>
<tr align="right">
	<th colspan="4"><a style='margin-left:20px;' href='admin-logodelete-process.php?logo_id=<?php echo $logo_id;?>'><button>Delete Product</button></a></th>
</tr>
<?php } ?>
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

