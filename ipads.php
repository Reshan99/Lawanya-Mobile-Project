<?php

//start session
session_start();

//require_once('./php/CreateDb.php');
 require_once('./php/component.php');

//$database=new CreateDb("Productdb","Producttb");

if(isset($_POST['Add'])){
	//print_r($_POST['product_id']);
	if(isset($_SESSION['cart'])){
		
		$item_array_id=array_column($_SESSION['cart'],"product_id");
		//print_r($item_array_id);
		
		if(in_array($_POST['product_id'],$item_array_id)){
			echo "<script>alert('product is already added to the cart!')</script>";
			echo "<script>window.location='ipads.php'</script>";
		}else{
			$count=count($_SESSION['cart']);
			$item_array=array(
			'product_id'=>$_POST['product_id']
			);
			$_SESSION['cart'][$count]=$item_array;
			//print_r($_SESSION['cart']);
		}
	}else{
		$item_array= array(
			'product_id'=>$_POST['product_id']
		);
		//crete new session variable
		$_SESSION['cart'][0]=$item_array;
		print_r($_SESSION['cart']);
	}
}

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>ipads & Tablets</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
    <link rel="stylesheet" href= ".\style.css" >
</head>
<body>
    <section id="headerS">
        <a href="#"><img src="website pics/logo 2.png" class="logo" height="100" alt="" ></a>
		<div class="form">
			<form action="searchphn.php" method="post">
			<input type="text" name="seinput" placeholder="Search for products">
			<button type="submit" name="sebut" class="normal">Search</button></form>
		</div>
        <div>
			
            <ul id="navbarS">               
                <li id="lg-bag">  <a href="cart.php" >
			    <h3 >
			<i class="cart fas fa-shopping-cart"></i>Cart
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
				<a href="#" id="closeS"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobileS">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar" class="fas fa-outdent"></i>	
	    </div>	
    </section>	
	<section id="headerS2">
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
            <ul id="navbarS2">
                <li><a  href="Index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="newarrival.php">New Arrivals</a></li>                
				<a href="#" id="closeS2"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobileS2">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="barS2" class="fas fa-outdent"></i>	
	    </div>	
	
	</section>

	
	<section id="back-header3" class="sale">
		
		<h2>#ipads & Tablets</h2>
		<p>The new from the creative experience</p>
		
	</section>
	<section id="mobilep" class="section-p1">
		
		<div class="container">
		<div class="row text-center py-5">
			

		<?php
			
		require 'connect.php';
    $sql = "SELECT * FROM product WHERE Category='ipad'";
    $result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
		component($row['ProductName'],$row['Price'],$row['image_url'],$row['ImgID'],$row['Brand'],$row['Quantity']);
			}
			
			?>
		</div>
	
	
	</div>
	</section>
    <section id="page-next" class="section-p1">
	  <a href="#">1</a>
		 <a href="#">2</a>
		 <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
	</section>
	
	<?php include ('.\footer.php');?>
	
    <script src="script.js"></script>
</body>
</html>