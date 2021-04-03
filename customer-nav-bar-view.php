
<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);

			$rows = mysqli_fetch_assoc($result);		

			$image = $rows['image'];
			$webname = $rows['webname'];

			require_once("authin-customer.php"); ?>
			<?php
				include('connect_db.php');
				
				$email_owner=$_SESSION['session_email'];
	
	$query = "SELECT * FROM product_tb WHERE cmail='$email_owner'";
				$result = mysqli_query($con,$query);

			?>

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
			<img  src="<?php echo ($image);?>" style="height:50px;width:50px;"/>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="customer-home-view.php"><?php echo$webname?></a></li>
              <li><a href="customer-home-view.php">Home</a></li>    
              <li><a href="customer-cart-list-view.php?email_owner=<?php echo $email_owner;?>">View Cart List</a></li>    
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="customer-logout-process.php">Logout</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>