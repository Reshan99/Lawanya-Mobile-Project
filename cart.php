<?php

session_start();
require_once("php/CreateDb.php");
require_once("php/component.php");

$db=new CreateDb("product","product");
//$db2=new CreateDb("productdb","accesories");
//$db3=new CreateDb("productdb","headphones");
if(isset($_POST['remove'])){
	if($_GET['action']=='remove'){
		foreach($_SESSION['cart']as $key=>$value){
			if($value['product_id']==$_GET['id']){
				unset($_SESSION['cart'][$key]);
				echo "<script>alert('product has been removed!')</script>";
				echo "<script>window.location='cart.php'</script>";
			}
		}			
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" >
<title>cart</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
</head>

<body class="bg-light">
	 <section id="header">
        <a href="#"><img src="website pics/logo 2.png" class="logo" height="100" alt="" ></a>
		<div class="form">
			<form action="searchphn.php" method="post">
			<input type="text" name="seinput" placeholder="Search for products">
			<button type="submit" name="sebut" class="normal">Search</button></form>
		</div>
        <div>
			
            <ul id="navbar">               
                <li id="lg-bag">  <a href="cart.php" >
			  <h3 class="px-5 cart">
				  <i class="fas fa-shopping-cart"></i>Cart
				 <?php
				  if(isset($_SESSION['cart'])){
					  $count=count($_SESSION['cart']);
					  echo " <span id=\"cart-count\" class=\"text-warning bg-light\">$count</span>";
				  }else{
					   echo " <span id=\"cart-count\" class=\"text-warning bg-light\">0</span>";
				  }
				  
				  
				  ?>
					</h3>
			</a></li>                 
				<a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobile">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar" class="fas fa-outdent"></i>	
	    </div>	
    </section>	
	<section id="header2">
	         <ul id="category"> <li ><a href="#">Shop by category <i class="fas fa-caret-down"></i></a>
		  <ul>
			<li><a href="phone.php">Smart Phones</a></li>
		    <li><a href="accesories.php">Mobile Accesories</a></li>
			<li><a href="headphones.php">Headphones & Earphones</a></li>
			<li><a href="ipads.php">ipads & Tablets</a></li>
			<li><a href="smartwatch.php">Smart Watches</a></li>
			<li><a href="powerbanks.php">Power Banks</a></li>
		  </ul>
		</li></ul>
        <div>
            <ul id="navbar2">
                <li><a  href="Index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="newarrival.php">New Arrivals</a></li>                
				<a href="#" id="close2"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobile2">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar2" class="fas fa-outdent"></i>	
	    </div>	
	
	</section>
	<div class="container-fluid">
	  <div class="row px-5">
		<div class="col-md-7">
		  <div class="shopping-cart">
			  <h4>My cart</h4>
			  <hr>
			  <?php
			 $total=0;
			 $total1=0;
			if(isset($_SESSION['cart'])){
				  $product_id = array_column($_SESSION['cart'],'product_id');
			  $result= $db->getData();
				
			  while($row= mysqli_fetch_assoc($result)){
				  foreach($product_id as $id){
					  if($row['ImgID']==$id){
						  cartElement($row['image_url'],$row['ProductName'],$row['Price'],$row['ImgID']);
						  $total=$total+(int)$row['Price'];
						  $total1=$total+400;
					  }
				  }
			  }
			} 
			  
			  else{
				echo "<h5>cart is empty</h5>";
			}
			  ?>
		  </div>
		</div>
     <div class="btnX col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
		  <div class="pt-4">
			 <h5>Price details</h5> 
			 <hr>
			 <div class="row price-details">
			  <div class="col-md-6">
				 <?php
				  if(isset($_SESSION['cart'])){
					echo "<h5>Price($count items)</h5>";
				  }else{
					  echo "<h5>Price(0 items)</h5>";
				  }		  
				  ?>
				  <h5>Delivery charges</h5>
				  <hr>
				  <h5>Amount Payable</h5>
			  </div>	
			  <div class="col-md-6">
				<h5>Rs. <?php echo $total;?></h5>
				  <h5 class="text-success">Rs.400.00</h5>
				  <hr>
				  <h5>Rs. <?php echo $total1;?></h5>
				 </div>
			 </div>
		  </div>
		 <br>
		  <a href="checkout.php"> <input type="submit" name="submit" class="btn" value="Proceed To Checkout"></a> 
	 </div>
	</div>
	
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>