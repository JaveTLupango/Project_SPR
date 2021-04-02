<?php

 include("connect_db.php");

		$firstname 		= $_POST['firstname'];
		$middlename		= $_POST['middlename'];
		$lastname 		= $_POST['lastname'];
		$gender 		= $_POST['gender'];
		$address 		= $_POST['address'];
		$birthmonth 	= $_POST['birthmonth'];
		$birthday 		= $_POST['birthday'];
		$birthyear 		= $_POST['birthyear'];
		$mobilenumber	= $_POST['mobilenumber'];
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
	
	$query="SELECT * FROM admin_tb
				WHERE email= '$email'";
		$result= mysqli_query($con,$query);
		$row=mysqli_fetch_row($result);

	if(!empty($row) && count($row)>0)
		{
			echo"Email and Password is already exist.</br>";
			
			echo "<a href='admin-registration-view.php'>Click here </a>to go back";
		}	
	else
		{
			$insert="INSERT INTO admin_tb (firstname,middlename,lastname,gender,address,birthmonth,birthday,birthyear,mobilenumber,email,password)
			VALUES('$firstname','$middlename','$lastname','$gender','$address','$birthmonth','$birthday','$birthyear','$mobilenumber','$email','$password')";
			$result_insert= mysqli_query($con,$insert);
	if($result_insert==true)
		{
			header('Location:admin-login-view.php');
			echo " Successfully inserted";
		}
	else
		{
			echo "failed to insert";
		}
		}
	

?>