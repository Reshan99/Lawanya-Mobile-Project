<?php
$server="localhost";
$username="root";
$password="";
$dbname="product";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])&& isset ($_FILES['image'])){
	echo"<pre>";
	print_r($_FILES['image']);
	echo"</pre>";
	$img_name=$_FILES['image']['name'];
	$img_size=$_FILES['image']['size'];
	$tmp_name=$_FILES['image']['tmp_name'];
	$error=$_FILES['image']['error'];
	if ($error == 0){
		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		$img_ex_lc = strtolower($img_ex);
		
		$allowed_exs = array("jpg","jpeg","png","gif","tiff");
		if(in_array($img_ex_lc, $allowed_exs)){
			$new_img_name = uniqid("IMG-" , true).'.'.$img_ex_lc;
			$img_upload_path = 'picture/'.$new_img_name;
			move_uploaded_file($tmp_name,$img_upload_path);
			$name = $_POST['name'];
$brand=$_POST['brand'];
$category=$_POST['category'];
$quantity=$_POST['qty'];
$price=$_POST['price'];

$query = "INSERT INTO product"."(ProductName,image_url,Brand,Category,Quantity,Price)"."values('$name','$new_img_name','$brand','$category','$quantity','$price')";
$result= mysqli_query($conn,$query);
  if(!$result) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
			header ("location:adminAcc.php");
			}	
			}else{$em="You can't upload files of this type";
	header ("Location: insert product.php?error=$em");}
		
		}else {$em="unknown error occured";
	header ("Location: insert product.php?error=$em");}
	

}

 ?>