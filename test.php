<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	

<?php 
if(isset($_POST['login'])){
include 'Connectionmember.php';
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$select="SELECT * FROM customerlogin WHERE Username='$username' and Password ='$password'";
$query=mysqli_query($connection,$select);
$row=mysqli_fetch_array($query);
if(mysqli_num_rows($query)==1){echo "<script>alert('You shipping details are entered!');window.location.href = 'Payment Method.php';</script> ";
}
else echo '<script>alert("Select database first")</script>';}
?>
</body>
</html>
