
<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>

<form action="customer-login-process.php" method="post">
				<table>
					<tr>
						<td> Email</td>
						<td><input type="text" name="cemail"></td>
					<td></td>
					</tr>
				
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="cpassword">
						</td>
					
					<td>
					</td>

				</tr>
					<tr>
							<td>
								Don't have an acount!
								<p align="right"><a href="customer-registration-view.php">Sign up</a></p>
							</td>
							<td>
  							     <input type="submit" name="submit" value="LOGIN"/>
							</td>	
					</tr>	
			</br>

				</table>
					</div>
			</form>
</body>
</html>