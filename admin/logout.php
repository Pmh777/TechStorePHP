<?php
session_start();
unset($_SESSION["emp_login"]);
header("location:login.php");
?>