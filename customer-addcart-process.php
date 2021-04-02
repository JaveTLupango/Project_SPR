<?php

 include("connect_db.php");

 			$itemno = $_POST['itemno'];
			$cproduct_id = $_POST['product_id'];
			$cproductname = $_POST['productname'];
			$cproductdesc = $_POST['productdesc'];
			$cprice = $_POST['price'];
			$email = $_POST['email'];

	
			$insert="INSERT INTO cart_tb (cproduct_id,cproductname,cproductdesc,cprice,itemno,email)
					VALUES('$cproduct_id','$cproductname','$cproductdesc','$cprice','$itemno','$email')";
			$result_insert= mysqli_query($con,$insert); 

	if($result_insert==true)
		{
			include('customer-cart-list-view.php');
		
		}
	else
		{
			echo "failed to insert";
		}
	


		
?>