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
$connec= mysqli_connect($dbhost,$dbuser,$dbpassword);//this opens a connection to mysqli server

	if(!$connec){
	die('could notconnect: '.mysqli_error($connec));
	}
	echo '';
	
$db=mysqli_select_db($connec,'customerlogin');
	if(!$db){
		echo '<script>alert("Select database first")</script>';
		
	} else
		echo "<script>alert('You are successfully registered!');window.location.href = 'register.php';</script> ";//mysqli close($connec);
	
?>
</body>
</html>