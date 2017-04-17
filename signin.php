<?php
session_start();
$name = $_POST['u'];
$_SESSION['user']=$name;
header('Location:welcome.php');
?>