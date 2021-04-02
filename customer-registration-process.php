<?php

 include("connect_db.php");

		$cfirstname 	= $_POST['cfirstname'];
		$cmiddlename	= $_POST['cmiddlename'];
		$clastname 		= $_POST['clastname'];
		$cgender 		= $_POST['cgender'];
		$caddress 		= $_POST['caddress'];
		$cbirthmonth 	= $_POST['cbirthmonth'];
		$cbirthday 		= $_POST['cbirthday'];
		$cbirthyear 	= $_POST['cbirthyear'];
		$cmobilenumber	= $_POST['cmobilenumber'];
		$cemail 		= $_POST['cemail'];
		$cpassword 		= $_POST['cpassword'];
	
	$query="SELECT * FROM customer_tb
				WHERE cemail= '$cemail'";
		$result= mysqli_query($con,$query);
		$row=mysqli_fetch_row($result);

	if(!empty($row) && count($row)>0)
		{
			echo"cEmail and cPassword is already exist.</br>";
			
			echo "<a href='customer-registration-view.php'>Click here </a>to go back";
		}	
	else
		{
			$insert="INSERT INTO customer_tb (cfirstname,cmiddlename,clastname,cgender,caddress,cbirthmonth,cbirthday,cbirthyear,cmobilenumber,cemail,cpassword)
			VALUES('$cfirstname','$cmiddlename','$clastname','$cgender','$caddress','$cbirthmonth','$cbirthday','$cbirthyear','$cmobilenumber','$cemail','$cpassword')";
			$result_insert= mysqli_query($con,$insert);
	if($result_insert==true)
		{
			header('Location:customer-login-view.php');
			echo " Successfully inserted";
		}
	else
		{
			echo "failed to insert";
		}
		}
	

?>