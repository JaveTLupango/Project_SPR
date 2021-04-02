<?php
session_start();
if(isset($_SESSION['session_email']) =='' ||  (trim($_SESSION['session_password'])=='')){
	header("location: admin-login-view.php");
	exit();
}	
?>