
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
				<?php include('admin-registration-navbar-view.php');?>
							
			</div>

		</nav>

</div>		
				
<div>
	  			</div>

			<div>
					
				<p>Register Here</p>		 				
					<form method="post" action="admin-registration-process.php">
						<table>
							<tr>
							<td>Firstname:</td>
							<td><input type="text" name="firstname"></td>
							<td></td>
							</tr>
							<tr>
							<td>Middlename:</td>
							<td><input type="text" name="middlename"></td>
							<td></td>
							</tr>
							<tr>
							<td>Lastname:</td>
							<td><input type="text" name="lastname"></td>
							<td></td>
							</tr>
							<tr>
							<td>Gender:</td>
							<td><input type="text" name="gender"></td>
							<td></td>
							</tr>
							<tr>
							<td>Address:</td>
							<td><input type="text" name="address"></td>
							<td></td>
							</tr>
							<tr>
							<td>BirthDate:</td>
							<td>
								Month: <input type="text" name="birthmonth">
								Day: <input type="text" name="birthday">
								Year: <input type="text" name="birthyear">
							</td>
							<td></td>
							</tr>
							<tr>
							<td>Mobile Number:</td>
							<td><input type="text" name="mobilenumber"></td>
							<td></td>
							</tr>
							<tr>
							<td>Email:</td><td><input type="email" name="email"></td>
							<td></td>
							</tr>
							<tr>
								<td>Password: </td>
								<td><input type="password" name="password"></td>
								<td></td>
							</tr>
						<tr><td>
					</table>
					<br> <center><input type="submit" value="Submit"name="submit">
						<button ><a href="admin-login-view.php">Go to Login</a></button></center>

				</form>
			</div>
			
			</center>

</div>

</body>
</html>

