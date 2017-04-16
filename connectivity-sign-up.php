<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'ops');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect("localhost","root","","ops") or die("Failed to connect to mysqli: " . mysqli_error());
// $db=mysqli_select_db("ops",$con) or die("Failed to connect to mysqli: " . mysqli_error());

$fullnam = $_POST['mobile'];
echo $fullnam;

function newuser()
{
	$con=mysqli_connect("localhost","root","","ops") or die( mysqli_error());
	
	$fullname = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	echo "2";
	$new_query = "INSERT INTO customers (name,mobile,email,password) VALUES ('$fullname','$mobile','$email','$password')";
	$data = mysqli_query ($con, $new_query) or die(mysqli_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function signup()
{
if(!empty($_POST['mobile']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	// echo "3";
	$con=mysqli_connect("localhost","root","","ops") or die( mysqli_error());
	$mob = $_POST['mobile'];
	$pass = $_POST['pass'];
	$query = "select * from customers where Mobile like '" . $mob . "'";
	// $query = "SELECT * FROM customers WHERE mobile like '" . $mob . "' AND pass like '" . $pass . "'";
	$result = mysqli_query($con, $query) or die(mysqli_error());

	if(!$row = mysqli_fetch_array($result))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
echo "reached sign";
signup();
/*if(isset($_POST['submit']))
{
	echo "1";
	signup();
}*/
?>