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
					
				<h1>Add Product :</h1>		 				
					<form enctype="multipart/form-data" method="post" action="admin-addproduct-process.php">
						<table>
							<tr>
							<td>Product Name:</td>
							<td><input type="text" name="productname" placeholder="Enter Product Name"></td>
							<td></td>
							</tr>
							<tr>
							<td>Product Description:</td>
							<td><input type="text" name="productdesc" placeholder="Enter Product Description"></td>
							<td></td>
							</tr>
							<tr>
							<td>Price:</td>
							<td><input type="text" name="price" placeholder="Enter Product Price"></td>
							<td></td>
							</tr>
							<tr>
							<td>Quantity:</td>
							<td><input type="text" name="quantity" placeholder="Enter Product Quantity"></td>
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







