<?php 
session_start();
unset($_SESSION['sess_email']);
session_destroy();
header("location:login.php");
?>
