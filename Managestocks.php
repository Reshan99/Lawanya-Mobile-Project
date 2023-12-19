<?php 

include "ConnectionProduct.php";
if(isset($_GET['ProductName'])){
	$ProductName=$_GET['ProductName'];
	$delete=mysqli_query($connection,"DELETE FROM `product` WHERE `ProductName`='$ProductName'");}
$select="select * from product";
$query=mysqli_query($conn,$select);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylee.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="./style.css" >
</head>

<body>

<section id="header">
        <a href="#"><img src="website pics/logo 2.png" class="logo" height="100" alt="" ></a>
        <div>		
            <h4>Administrator's Dashboard</h4>
        </div>
		<div>
			
            <ul id="navbar">               
                <li id="lg-bag1"><a href=""><i class="fas fa-cart-arrow-down"></i></a></li>                 
				<a href="#" id="close1"><i class="fa fa-times"></i></a>
            </ul>
        </div>
			
		<div id="mobile">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar" class="fas fa-outdent"></i>	
	    </div>	
    </section>	
	<section id="header3">
	         
        <div>
           <ul id="navbar3"> 
				<li><a href="adminAcc.php">Create account</a></li>
				<li><a href="ManageUsers1.php">Manage users</a></li>
				<li><a class="active" href="insert product.php">Manage stocks</a></li>
				<li><a href="Manageorders.php">Manage orders</a></li>
                <li><a href="Index.html">Logout</a></li>                
				<a href="#" id="close3"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		
		<div id="mobile3">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar3" class="fas fa-outdent"></i>	
			
	    </div>	
		
	
	</section>

<p>	<button class="btn4">Insert Products</button>
  <a href="insert product.php">
	<button class="btn3" >Manage Products</button>
	<a href="Managestocks.php">
&nbsp;</p>
<p>
</p>
<div class="table_section">
    <table>
                <thead>
                    <tr>
                       
                        <th>Product Name</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
						<th>Action</th>
                    </tr>
                </thead>
               
                          <?php
			   $num=mysqli_num_rows($query);
			   if($num>0){
				   while ($result=mysqli_fetch_assoc($query)){echo "
				   <tr>
					  <td>".$result['ProductName']."</td>
					  <td>".$result['Brand']."</td>
					  <td>".$result['Category']."</td>
					  <td>".$result['Quantity']."</td>
					  <td>".$result['Price']."</td>
					  <td>
					  
					  <a href='Managestocks.php?ProductName=".$result['ProductName']."' class='btn'>Delete</a>
					  </td>
       				 </tr>
				   
				   
				   
				   
				   ";}}
			   ?>
			  
                        
                        
                   
            </table>
        </div>
       
   
</body>

</html>
