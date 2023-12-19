<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$con = mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$con){
	die('could not connect:' .mysqli_error($con));}
	
	

$db= mysqli_select_db($con,'adminlogin');
if(!$db){echo 'Select the database first';}


?>
</body>
</html>
