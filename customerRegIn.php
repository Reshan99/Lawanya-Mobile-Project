<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
 
	
if(isset($_POST['submit'])) {  

include ("Connectionmember.php");

	
   
   $fnam=$_POST['Fname'];
	$lnam=$_POST['Lname'];
	$city=$_POST['city'];
	$contac=$_POST['contact'];
	$strNo=$_POST['stno'];
	$street=$_POST['street'];
	$distri=$_POST['district'];
   $email=$_POST['email'];	
	$username=$_POST['username'];
   $Cpw=$_POST['cpw'];
   $password=$_POST['password'];
   $salt = "codeflix";
   $password_encrypt = sha1($password.$salt);
   $conpass_encrypt = sha1($Cpw.$salt);
   
    
	$sql = "INSERT INTO customerlogin ". "(FirstName,LastName,City,ContactNumber,StreetNo,Street,District,Email,Username,Password,ConfirmPassword) ". "VALUES('$fnam','$lnam','$city','$contac','$strNo','$street','$distri','$email','$username','$password_encrypt', '$conpass_encrypt')";
	
	$results = mysqli_query($con, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($con));
            }
			else{
			
       
		echo "<script>alert('You are successfully registered!');window.location.href = 'register.php';</script> ";
			}}
     
   
else {//if(isset($_POST['submit'])) {  

    echo  " Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>