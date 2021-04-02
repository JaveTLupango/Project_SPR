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
<?php
			include('connect_db.php');

			$query = "SELECT * FROM logo_tb";

			$result = mysqli_query($con,$query);		
			?>
			<div align="center">
<table width="80%">
<tr>
	<td>Image</td>
	<td>Website Name</td>
	<td>Website Description</td>
	<td></td>
</tr>
<?php
		
	while ($rows = mysqli_fetch_assoc($result)) 
		{
			$logo_id = $rows['logo_id'];
			$image = $rows['image'];
			$webname = $rows['webname'];
			$webdesc = $rows['webdesc'];
?>

<tr>
	<th><strong><img  src="<?php echo $image;?>" style="margin-top:20px;height:100px;width:100px;"/></strong></th>
	
	<th><strong><?php echo ($webname); ?></strong></th>
	<th><strong><?php echo ($webdesc); ?></strong></th>
</tr>
<tr align="right">
	<th colspan="4"><a style='margin-left:20px;' href='admin-logodelete-process.php?logo_id=<?php echo $logo_id;?>'><button>Delete Product</button></a></th>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>