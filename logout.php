<?php
session_start();
$_SESSION['userweb']="";
header("Location:login.php");
exit;
?>