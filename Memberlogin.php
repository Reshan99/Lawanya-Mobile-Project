<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>LAWANYA mobiles</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="./style.css" >
</head>

<body>
<?php


if(isset($_POST['submit'])){
	include 'Connectionmember.php';
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	$salt = "codeflix";
	$password_encrypt = sha1($password.$salt);
	if($username=="admin" && $password=="admin@123"){
		header ("location:adminlogin.html");}else{
	$sql="SELECT * FROM customerlogin WHERE Username='$username' and Password ='$password_encrypt'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1){
		header ("location:Payment Method.php");
		}else{echo"Your Name or Password is invalid";}}
	}
else { header ("location:login.html");}
?>
</body>
</html>
