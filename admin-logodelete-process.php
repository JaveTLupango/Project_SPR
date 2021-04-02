
<?php

include("connect_db.php");



	

			$logo_id = $_GET['logo_id'];

$query = "DELETE FROM logo_tb WHERE logo_id = '$logo_id' ";
$delete = mysqli_query($con,$query);

if($delete){
	header("Location:admin-logodelete-view.php");
	echo 'Successfully deleted.<br/>';
} else {
	echo 'Failed to deleted.<br/>';
	//echo "<a href='admin-product-view.php'>Click here</a> to go back";
}

			
?>