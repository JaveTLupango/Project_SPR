
<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>

<div>
					
					<div>
		<nav>
			<div >
				<?php include('customer-registration-navbar-view.php');?>
							
			</div>

		</nav>

</div>		
				
<div>
	  			</div>

			<div>
					
				<p>Register Here</p>		 				
					<form method="post" action="customer-registration-process.php">
						<table>
							<tr>
							<td>Firstname:</td>
							<td><input type="text" name="cfirstname"></td>
							<td></td>
							</tr>
							<tr>
							<td>Middlename:</td>
							<td><input type="text" name="cmiddlename"></td>
							<td></td>
							</tr>
							<tr>
							<td>Lastname:</td>
							<td><input type="text" name="clastname"></td>
							<td></td>
							</tr>
							<tr>
							<td>Gender:</td>
							<td><input type="text" name="cgender"></td>
							<td></td>
							</tr>
							<tr>
							<td>Address:</td>
							<td><input type="text" name="caddress"></td>
							<td></td>
							</tr>
							<tr>
							<td>BirthDate:</td>
							<td>
								Month: <input type="text" name="cbirthmonth">
								Day: <input type="text" name="cbirthday">
								Year: <input type="text" name="cbirthyear">
							</td>
							<td></td>
							</tr>
							<tr>
							<td>Mobile Number:</td>
							<td><input type="text" name="cmobilenumber"></td>
							<td></td>
							</tr>
							<tr>
							<td>Email:</td><td><input type="email" name="cemail"></td>
							<td></td>
							</tr>
							<tr>
								<td>Password: </td>
								<td><input type="password" name="cpassword"></td>
								<td></td>
							</tr>
						<tr><td>
					</table>
					<br> <center><input type="submit" value="Submit"name="submit">
						<button ><a href="customer-login-view.php">Go to Login</a></button></center>

				</form>
			</div>
			
		

</div>

</body>
</html>

