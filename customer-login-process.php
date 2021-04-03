
<?php
  
		if(isset($_POST['cemail']))
		{
			
			include("connect_db.php");
			session_start();
			$cemail=$_POST['cemail'];
			$cpassword=$_POST['cpassword'];  	
			$query="SELECT customer_id,cemail, cpassword FROM customer_tb
			WHERE cemail= '$cemail'
			AND cpassword= '".$cpassword."' 
			";
			
			$result= mysqli_query($con, $query);
			if($result)
			{
				if(mysqli_num_rows($result)==1){
						$row=mysqli_fetch_assoc($result);
					
							//session_regenerate_id();
							$_SESSION['session_comid']=$row['customer_id'];
							$_SESSION['session_email']=$row['cemail'];
							$_SESSION['session_password']=$row['cpassword'];							
							$_SESSION['session_type']= "customer";
						//session_write_close();		
						header('Location: customer-home-view.php');	
						//exit();
					}else
					{
						header('Location: customer-registration-view.php');
						echo " Email is invalid.";
					}
			}
			else{
				echo 'noresult'. $cemail;
			}
		}
		else
		{
			echo "x";
		}

		
		
?>	

	

	
