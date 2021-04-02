<?php require_once("authin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('logo-title.php');?>
	<title></title>
</head>
<body>
	<div>
			<?php include('admin-nav-bar-view.php'); ?>
	</div>
<div>
					
				<h1>Add Company and Image Logo :</h1>		 				
					<form enctype="multipart/form-data" method="post" action="admin-addlogo-process.php">
						<table>
							<tr>
							<td>Website Name:</td>
							<td><input type="text" name="webname" placeholder="Enter Website Name"></td>
							<td></td>
							</tr>
							<tr>
							<td>Website Description:</td>
							<td><input type="text" name="webdesc" placeholder="Enter Website Description"></td>
							<td></td>
							</tr>
							<tr>
								<td>
									Product Image:
								</td>
										<td>
												<input type="file" name="image"/>
										</td>	
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><input type="submit" value="Submit"name="submit"></td>	
							</tr>
					</table>
				
				</form>
			</div>
			
</body>
</html>