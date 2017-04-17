<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h1>
	Welcome
	<?php
	session_start(); 
	echo $_SESSION['user'];
	?>
	<br>
	Start Payment
	</h1>
	</center>
	<br>
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>