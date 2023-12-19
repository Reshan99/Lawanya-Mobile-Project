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
		if (document.product_form.name.value=="")
			{
				alert("please fill product name field!");
				document.product_form.name.focus();
				valid= false;
			}
		else if(document.product_form.brand.value=="")
			{
				alert("please fill brand field!");
				document.product_form.brand.focus();
				valid= false;
			}
		
		else if(document.product_form.qty.value=="")
			{
				alert("please fill confirm quantity field!");
				document.product_form.qty.focus();
				valid= false;
			}
		else if(document.product_form.price.value=="")
			{
				alert("please fill confirm price field!");
				document.product_form.price.focus();
				valid= false;
			}
		
		return valid;	
	}
	</script>
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
				<li><a  href="adminAcc.php">Create account</a></li>
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
	<br>
		<button class="btn3">Insert Products</button>
	<a href="Managestocks.php">
	<button class="btn4" >Manage Products</button>
    <a href="Managestocks.php">
	</a>
	<section id="insertprod" class="section-p1">
	<div class="container4">
	<div class="contact-box4">
		<div class="right3">
        
        <?php if (isset($_GET['error'])):?>
        <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
			<form name="product_form" method="POST" action="insertproducts.php" enctype="multipart/form-data" onSubmit="return validate_form(); ">
			<h4><b>INSERT PRODUCT</b></h4>
			
			<label>
			<h5><b> Name</b></h5></label>
		<input type="text" name="name" class="field" placeholder="Enter Product Name">
			<label>
			<h5><b> Image</b></h5></label>
		<input type="file" name="image" accept=".png,.gif,.jpg,.jpeg,.tif" class="field4" required/ >
			<label>
			<h5><b> Brand</b></h5></label>
		<input type="text"  name="brand" class="field" placeholder="Enter Brand Name">
				
			<label for="category"><h5><b>Select Category</b></h5></label>	
				<select name="category" id="category" class="dropc">
				<option value="phone">phone</option>
					<option value="accesories">accesories</option>
					<option value="headset">headset</option>
					<option value="ipad">ipad</option>
					<option value="smartwatch">smartwatch</option>
					<option value="powerbank">powerbank</option>
				</select>
						
			<br><br>
			<label>
			<h5><b> Quantity</b></h5></label>
		<input type="text"  name="qty" class="field" placeholder="Enter Quantity">
			<label>
			<h5><b> Price</b></h5></label>
		<input type="text"  name="price" class="field" placeholder="Enter Price">
			<button type="submit" name="submit" class="normal">Insert new Products</button>
			</form>
	</div>
	</div>	
	</div>
	</section>
    <script src="script.js"></script>
</body>
</html>
