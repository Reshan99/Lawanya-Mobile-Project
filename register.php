<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>LAWANYA mobiles</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="style.css" >
	<script type="text/javascript">
	function validate_form(){
	var valid= true;
		if (document.registration_form.Fname.value=="")
			{
				alert("please fill  first name field!");
				document.registration_form.Fname.focus();
				valid= false;
			}
		else if(document.registration_form.Lname.value=="")
			{
				alert("please fill last name field!");
				document.registration_form.Lname.focus();
				valid= false;
			}
		else if(document.registration_form.city.value=="")
			{
				alert("please fill city field!");
				document.registration_form.city.focus();
				valid= false;
			}
		else if(document.registration_form.contact.value=="")
			{
				alert("please fill contact no field!");
				document.registration_form.contact.focus();
				valid= false;
			}
		else if(document.registration_form.stno.value=="")
			{
				alert("please fill street no field!");
				document.registration_form.stno.focus();
				valid= false;
			}
		else if(document.registration_form.street.value=="")
			{
				alert("please fill street name field!");
				document.registration_form.street.focus();
				valid= false;
			}
		else if(document.registration_form.district.value=="")
			{
				alert("please fill district field!");
				document.registration_form.district.focus();
				valid= false;
			}
		else if(document.registration_form.email.value=="")
			{
				alert("please fill email field!");
				document.registration_form.email.focus();
				valid= false;
			}
		else if(document.registration_form.username.value=="")
			{
				alert("please fill email field!");
				document.registration_form.username.focus();
				valid= false;
			}
		else if(document.registration_form.password.value=="")
			{
				alert("please fill password field!");
				document.registration_form.password.focus();
				valid= false;
			}
		else if(document.registration_form.cpw.value=="")
			{
				alert("please fill confirm password field!");
				document.registration_form.cpw.focus();
				valid= false;
			}
		return valid;	
	}
	</script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="website pics/logo 2.png" class="logo" height="100" alt="" ></a>
		<div class="form">
			<form action="searchphn.php" method="post">
			<input type="text" name="seinput" placeholder="Search for products">
			<button type="submit" name="sebut" class="normal">Search</button></form>
		</div>
        <div>
			
            <ul id="navbar">               
                <li id="lg-bag"><a href=""><i class="fas fa-cart-arrow-down"></i></a></li>                 
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
                <li><a href="Index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a class="active" href="register.php">Register</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="">New Arrivals</a></li>                
				<a href="#" id="close2"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobile2">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar2" class="fas fa-outdent"></i>	
	    </div>	
	
	</section>
	<section id="regform" class="section-p1">
	<div class="container2">
	<div class="contact-box2">
		<div class="left2"></div>
		<div class="right2">
			<form name="registration_form" method="POST" action="customerRegIn.php" onSubmit="return validate_form(); ">
	<h4>Create an account</h4>
	<label>
	<h5><b> First Name</b></h5></label>
	<input type="text" name="Fname" class="style" placeholder="Enter your First Name">
	<br><br>
	<label>
	<h5><b> Last Name</b></h5></label>
	<input type="text" name="Lname" class="style" placeholder="Enter your Last Name">
	<br><br>
	<label>
	<h5><b> City</b></h5></label>
	<input type="text" name="city" class="style" placeholder="Enter your city">
	<br><br>
	<label>
	<h5><b> Contact Number</b></h5></label>
	<input type="text" name="contact" class="style" placeholder="Enter your contact number">
	<br><br>
    <label>
	<h5><b> Street No</b></h5></label>
	<input type="text" name="stno" class="style" placeholder="Enter your street number">
	<br><br>
	<label>
	<h5><b> Street Name</b></h5></label>
	<input type="text" name="street" class="style" placeholder="Enter your street name">
	<br><br>
	<label>
	<h5><b> District</b></h5></label>
	<input type="text" name="district" class="style" placeholder="Enter your district Name">
	<br><br>
	<label>
	<h5><b> E-mail</b></h5></label>
	<input type="text" name="email" class="style" placeholder="Enter your e-mail">
	<br><br>
	<label>
	<h5><b> Username</b></h5></label>
	<input type="text" name="username" class="style" placeholder="Enter your username">
	<br><br>
    <label>
	<h5><b> Password</b></h5></label>
	<input type="password"  name="password" class="style" placeholder="Enter your password">
	<br><br>
	<label>
	<h5><b> Confirm Password</b></h5></label>
	<input type="password"  name="cpw" class="style" placeholder="confirm your password">
	<br><br>
				
	<input type="reset" name="clear" class="btn" value="clear">
	<br><br>
	<input type="submit"  name="submit" class="btn" value="Register">
	
	</form>
	</div>
	</div>	
	</div>
</section>
	<?php include ('.\footer.php');?>
	
    <script src="script.js"></script>
	
	
	
	
</body>
</html>
