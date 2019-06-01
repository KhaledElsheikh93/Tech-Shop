<!DOCTYPE html>
<html>
<head>
	<title>My Online Shop</title>
	<link rel="stylesheet" href="styles/style.css" media="all" >
</head>
<body>
	<!--main container starts here-->
	<div class="main_wrapper">
		<!--Header starts here-->
		<div class="header_wrapper">
			
			<img id="logo" src="images/logo.gif">
			<img id="banner" src="images/ad_banner.gif">
		</div>
		<!--Header ends here-->

		<!--Navigation bar starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/from-data">
					<input type="text" name="user_query" placeholder="search product">
					<input type="submit" name="search" value="Search">
				</form>
			</div>
		</div>
		<!--Navigation bar ends-->

		<!--content starts-->
		<div class="content_wrapper">
			<div id="sidebar">This is sidebar</div>
			<div id="content_area">This is content area</div>	
		</div>
		<!--content ends-->

		<!--footer starts-->
		<div id="footer">This is footer</div>
		<!--footer ends-->


	</div>
	<!--main container ends here-->

</body>
</html>