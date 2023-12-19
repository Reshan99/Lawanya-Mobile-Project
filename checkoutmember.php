<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	

<?php 
if(isset($_POST['submit'])){
include 'Connectionmember.php';
include ("connection2.php");
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$select=mysqli_query($connection,"SELECT * FROM `customerlogin` WHERE `Username`='$Username' and Password ='$password'");
$query=mysqli_query($connection,$select);
$row=mysqli_fetch_array($query);
if(mysqli_num_rows($query)==1){
echo "Hi Reshan";}
else {"Fatal Error";}}
?>
</body>
</html>
