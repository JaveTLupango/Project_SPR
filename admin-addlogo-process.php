<?php

include("connect_db.php");
if(isset($_POST['submit']))
{
		
		$webname		= $_POST['webname'];
		$webdesc		= $_POST['webdesc'];
		$file= $_FILES['image']['name'];

	

$query="INSERT INTO logo_tb (webname,webdesc,image) VALUES('$webname','$webdesc','$file')";
$result= mysqli_query($con,$query);
		
	if ($result) {
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
		echo "Image Product Uploaded!";
		header('location:admin-addlogo-view.php');
		
	}
	else
	{
		echo "Image Product Not Uploaded!";
	}
}
?>