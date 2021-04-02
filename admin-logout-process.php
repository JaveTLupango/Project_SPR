
<?php
 
  session_start();
  unset($_SESSION['session_email']);
  header('Location:admin-login-view.php');
 
 ?>