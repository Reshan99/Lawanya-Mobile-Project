<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>about us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="./style.css" >
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
                <li><a  href="Index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a class="active" href="about.php">About Us</a></li>
                <li><a href="newarrival.php">New Arrivals</a></li>                
				<a href="#" id="close2"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobile2">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar2" class="fas fa-outdent"></i>	
	    </div>	
	
	</section>

	
	<section id="back-header6" class="ab-header">
		
		<h2>#about us</h2>
		<p>The new from the creative experience</p>
		
	</section>
	
	<section id="about-hed" class="section-p1">
	<img src="website pics/ab.jpg" alt="">
		<div>
		<h2>who are we?</h2>
			<p>“Lawanya Mobiles” was established in 2014 in Rathanpura, Sri Lanka. “Lawanya Mobiles” is a business which sells quality products to our customers. We provide wide range of Smartphones, Smart Watches, Tablets and many more.
</p>
	<br><br>
			
			<marquee bgcolor="##7C7474" loop="-1" scrollamount="5" width="100%">BUY FROM THE BEST FOR THE BEST. .</marquee>
		
		</div>
	
	
	</section>
	
	<section id="contact" class="section-p1">
	 <div class="details">
		<span>Get in touch</span>
		 <h2>Visit us or contact us today</h2>
		 <h3>Lawanya Mobiles</h3>
		 <div>
			 <li>
				 <i class="fas fa-map"></i>
				 <p>89/1,Sirimawo Bandaranayake MW,Colombo Rd,Ratnapura</p>
			 </li>
		 <li>
				 <i class="fas fa-envelope"></i>
				 <p>lawanya@gmail.com</p>
			 </li>
			 <li>
				 <i class="fas fa-phone-alt"></i>
				 <p>045-5683327</p>
			 </li>
			 <li>
				 <i class="fas fa-clock"></i>
				 <p>Monday to saturday: 9.00am-16.00pm</p>
			 </li>
		 </div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63398.94400941832!2d80.33512044692782!3d6.716774406851613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3beb435df712f%3A0xc14a5df053ff0561!2sRatnapura!5e0!3m2!1sen!2slk!4v1651391536639!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	
	</section>
	<?php include ('.\footer.php');?>
	
    <script src="script.js"></script>
</body>
</html>
