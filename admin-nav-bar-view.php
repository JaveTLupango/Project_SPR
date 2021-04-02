<!-- <div>
		<div>
		
			<h2>

		
			<?php echo $webname;?>
	</h2>
</div>
	<div>
				<button ><a href="admin-home-view.php">Home</a></button>
				<button ><a href="admin-addproduct-view.php">Add Product</a></button>
				<button ><a href="admin-product-view.php">Product List</a></button>
				<button ><a href="admin-addlogo-view.php">Create web information</a></button>
				<button ><a href="admin-logodelete-view.php">Delete Web informtation</a></button>
				<button ><a href="admin-orderlist-view.php">Order List</a></button>
				<button ><a href="admin-logout-process.php">Logout</a></button>
			
			<h2>
		</div>


</div> -->
<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);

			$rows = mysqli_fetch_assoc($result);		

			$image = $rows['image'];
			$webname = $rows['webname'];
			?>	


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/navbar/">

    <title>Navbar Template for Bootstrap</title>

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

      <!-- Static navbar -->
      <nav class="navbar navbar-default" style="background-color: #b2b2b2;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<img  src="data:image/jpeg;base64,<?php echo base64_encode($image);?>" style="height:50px;width:50px;"/>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="admin-home-view.php"><?php echo$webname?></a></li>
              <li><a href="admin-home-view.php">Home</a></li>    
              <li><a href="admin-addproduct-view.php">Add Product</a></li>    
              <li><a href="admin-product-view.php">Product List</a></li>    
              <li><a href="admin-addlogo-view.php">Create web information</a></li>    
              <li><a href="admin-logodelete-view.php">Delete Web informtation</a></li>    
              <li><a href="admin-orderlist-view.php">Order List</a></li>    
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin-logout-process.php">Logout</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
			<h1>Homepage</h1>
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
