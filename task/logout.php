<?php
session_start();
ob_start();
 $_SESSION['username']=null;
$_SESSION['role']=null;
header("location:admin/login.php");

?>