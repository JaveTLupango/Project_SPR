
<?php
 
  session_start();
  unset($_SESSION['session_email']);
  header('Location:customer-login-view.php');
 
 ?>