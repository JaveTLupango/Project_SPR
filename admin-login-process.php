
<?php
  
if(isset($_POST['email']))
{
	include("connect_db.php");
		session_start();
		$email=$_POST['email'];
	    $password=$_POST['password'];  	
		$query="SELECT admin_id,email, password FROM admin_tb
		WHERE email= '$email'
		 AND password= '".$password."'
		";
		
	$result= mysqli_query($con, $query);
	if($result)
	{
		if(mysqli_num_rows($result)==1){
				$row=mysqli_fetch_assoc($result);			
					session_regenerate_id();
					$_SESSION['session_comid']=$row['admin_id'];
					$_SESSION['session_email']=$email;
					$_SESSION['session_password']=$email;
				//session_write_close();		
				header('Location: admin-home-view.php');	
				//exit();
				//echo "success";
			}else
			{
				header('Location: admin-registration-view.php');
				echo " Email is invalid.";
			}
	}
}
        
		
		
?>	

	

	
