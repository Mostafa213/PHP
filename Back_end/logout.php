<?php
require_once('../Back_end/user.php');
session_start();
$_SESSION['user']->setRole(3);
unset($_SESSION['user']);
header('Location: ../pages/Login.php');
?>