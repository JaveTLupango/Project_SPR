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
              <li><a href="admin-home-view.php"><?php echo$webname?></a></li>
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
