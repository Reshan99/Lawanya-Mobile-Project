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
	$sql="SELECT * FROM customerlogin WHERE Username='$username' and Password ='$password_encrypt'";
	$result=mysqli_query($con,$sql);
	$row1=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1){
				   foreach($result as $row1)
                   include ("connection2.php");
                   include ("ConnectionProduct.php");
                   include ("checkout.php");
                   include ("cart.php");
                    $fnam= $row1['FirstName'];
                    $lnam=$row1['LastName'];
                    $city=$row1['City'];    
                    $contac=$row1['ContactNumber'];
                    $strNo=$row1['StreetNo'];
                    $street=$row1['Street'];
                    $distri=$row1['District'];
                    $email=$row1['Email'];
                    $sql = "INSERT INTO orders ". "(ProductName,Quantity,FName,LName,City,Contact,StreetNo,StrName,District,Email) ". "VALUES('$productname','$qty','$fnam','$lnam','$city','$contac','$strNo','$street','$distri','$email')";
                    $results = mysqli_query($connec, $sql);
                    $sql2 = "SELECT * FROM product WHERE ProductName='$productname'";
					$result3=mysqli_query($conn,$sql2);
	                $row2=mysqli_fetch_array($result3);
	                if(mysqli_num_rows($result3)==1){
				    foreach($result3 as $row2)
					$fullqty = $row2['Quantity'];
                    $totquantity = (int)$fullqty - ((int)$qty);
                    $sql1= "UPDATE `product` ". "SET Quantity = '$totquantity' ". "WHERE ProductName = '$productname'";
                    $results1 = mysqli_query($conn, $sql1);
                    if($results1) {
                        echo "Updated Successfully!!";
                     }
                     else if(!$results1){
                         die('Could not enter data:' . mysqli_error($conn));
                     }
                     else
                     {
                     echo "\n";
                     }	
					}
					else echo "Multiple records found!!!";        
                         
                
                
		header ("location:Payment Method.php");
		}else{echo"Your Name or Password is invalid";}
	}
else { header ("location:checkout.php");}
?>
</body>
</html>
