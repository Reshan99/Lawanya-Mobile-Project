<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$conn= mysqli_connect($dbhost,$dbuser,$dbpassword);//this opens a connection to mysqli server

	if(!$conn){
	die('could notconnect: '.mysqli_error($conn));
	}
	echo '';
	
$db=mysqli_select_db($conn,'product');
	if(!$db){
		echo '<script>alert("Select database first")</script>';
		
	} else
		echo "";
?>
</body>
</html>