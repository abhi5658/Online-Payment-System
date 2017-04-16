<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect("localhost","root","","ops") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("ops",$con) or die("Failed to connect to MySQL: " . mysql_error());


function newuser()
{
	$fullname = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO customers (name,mobile,email,password) VALUES ('$fullname','$mobile','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function signup()
{
	echo "Reached Sign-Up";
if(!empty($_POST['mobile']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM customers WHERE mobile = '$_POST[mobile]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
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
if(isset($_POST['submit']))
{
	signup();
}
?>