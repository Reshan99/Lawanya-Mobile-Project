<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
 
	
if(isset($_POST['Submit'])) {  

include ("Connectionadmin.php");
	$username=$_POST['user'];
   $Cpw=$_POST['pw'];
     
    	$sql = "INSERT INTO adminlogin ". "(Username,Password) ". "VALUES('$username','$Cpw')" ;
	
	$results = mysqli_query($con, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($con));
            }
			else
			{
			header ("location:adminAcc.php");
			}	
     } 
   
else {//if(isset($_POST['submit'])) 
header ("location:adminAcc.php");


  } 
?>
</body>
</html>