<?php 

session_start();
if(isset($_SESSION['user']))
	session_destroy();


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1>You have successfully logged out.</h1>
 		<br>
 		<a href="index.html"><button>Login again</button></a>
 	</center>
 </body>
 </html>