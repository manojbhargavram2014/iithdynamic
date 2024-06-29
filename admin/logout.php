<?php
session_start();
unset($_SESSION['IITH_ADMIN_LOGIN']);
unset($_SESSION['IITH_ADMIN_USERNAME']);
header('location:login.php');
die();
?>