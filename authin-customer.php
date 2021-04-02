<?php
session_start();
if(!isset($_SESSION['session_email']) ||  (trim($_SESSION['session_password'])=='')){
	header("location: customer-login-view.php");
	exit();
	}
	
?>