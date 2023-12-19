<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>Admin account</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="./style.css" >
	
	<script type="text/javascript">
	function validate_form(){
	var valid= true;
		if (document.adminin_form.user.value=="")
			{
				alert("please fill   Username field!");
				document.adminin_form.user.focus();
				valid= false;
			}
		else if(document.adminin_form.pw.value=="")
			{
				alert("please fill password field!");
				document.adminin_form.pw.focus();
				valid= false;
			}
		else if(document.adminin_form.cpw.value=="")
			{
				alert("please fill confirm password field!");
				document.adminin_form.cpw.focus();
				valid= false;
			}
		
		return valid;	
	}
	</script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="./website pics/logo 2.png" class="logo" height="100" alt="" ></a>
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
				<li><a class="active" href="adminAcc.php">Create account</a></li>
				<li><a href="ManageUsers1.php">Manage users</a></li>
				<li><a href="insert product.php">Manage stocks</a></li>
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
	<section id="createadmin" class="section-p1">	
	<div class="container3">
	<div class="contact-box3">
		<div class="left3"></div>
		<div class="right3">
			<form name="adminin_form" method="POST" action="adminregister.php" onSubmit="return validate_form(); ">
			<h4><b>CREATE ADMIN ACCOUNT</b></h4>
			<br><br>
			<label>
			<h5><b> Username</b></h5></label>
		<input type="text" name="user" class="field" placeholder="Enter Username">
			<label>
			<h5><b> Password</b></h5></label>
		<input type="password" name="pw" class="field" placeholder="Enter password">
			<label>
			<h5><b> Confirm Password</b></h5></label>
		<input type="password" name="cpw" class="field" placeholder="Enter Confirm password">
			<button name="Submit" class="normal">Create an account</button>
			</form>
	</div>
	</div>	
	</div>
	</section>
    <script src="script.js"></script>
</body>
</html>
