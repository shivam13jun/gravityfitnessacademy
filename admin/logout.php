<?php
session_start();
unset($_SESSION['admin_login']);
unset($_SESSION['admin_user']);
header("location:login.php");


?>