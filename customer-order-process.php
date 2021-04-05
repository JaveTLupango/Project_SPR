<?php

session_start();


 include("connect_db.php");

		$firstname 	= $_POST['firstname'];
		$lastname 		= $_POST['lastname'];
		$product_id		= $_POST['product_id'];
		$productname 		= $_POST['productname'];
		$productdesc		= $_POST['productdesc'];
		$price		= $_POST['price'];
		$itemno 		= $_POST['itemno'];
		$email 		= $_POST['email'];
		$address 		= $_POST['address'];
		$contactno	= $_POST['contactno'];

	
	$query="SELECT * FROM customer_tb
		 WHERE cemail='$email'";
		$result1= mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result1);  //mysqli_fetch_row($result);  //mysqli_fetch_assoc

	if(empty($row) && count($row)==0)
	{
		echo"Error transaction!</br>";
		echo "<a href='customer-cart-list-view.php'>Click here </a>to go back";
	}
	else
		{
			$insert="INSERT INTO order_tb (product_no,productname,productdesc,price,itemno,email,firstname,lastname,address,contactno)
			VALUES('$product_id','$productname','$productdesc','$price','$itemno','$email','$firstname','$lastname','$address','$contactno')";
			$result_insert= mysqli_query($con,$insert);
			if($result_insert==true)
				{	
					echo " Successfully inserted";
					echo "
					<br><a href='customer-home-view.php'>Back to Home</a>";
					
				}
			else
				{
					echo "failed to insert";
				}
		}
	

?>