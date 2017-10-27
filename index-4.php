<?php require('server.php');

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Contacts</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>

		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
						<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="navbar navbar-default full-width horizontalNav-notprocessed">
								<ul class="sf-menu navbar-nav">
									<li ><a href="index.html">Home</a></li>
									<li><a href="index-1.html">About</a></li>
									<li><a href="index-2.html">Bus</a></li>
									<li><a href="index-3.html">Trains</a></li>
									<li class="current"><a href="index-4.php">Contacts</a></li>
								</ul>
								<ul class="sf-menu navbar-nav navbar-right">
									<li ><a href="index1.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li></a></li>

								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="images/logo.jpg" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h3>Find Us</h3>
						<div class="map">
							<figure>
								<iframe src="https://www.google.com/maps/embed/v1/place?key= AIzaSyDPyjHliywX8MOMOb909lklCSe19Qc5w1s &q=RGIT,Versova" style="border:0"></iframe>
							</figure>
						</div>
					</div>
					<div class="grid_5">
						<h3>Contact Info</h3>
						<div class="map">
							<div class="text1 color2">At TravelR, we understand the needs of our Customers and provide timely help to those who reach out.</div>
							<p>You can reach us through our Social handles at the bottom of page.Also You could contact us through our <span class="color1">Phone numbers </span> specified below

							<address>
								<dl>
									<dt>TravelR Inc. <br>
										Third Floor,Computer Department<br>
										Rajiv Gandhi Institute of Technology<br>
										Andheri(W),Mumbai-400053
									</dt>
									<dd><span>Telephone:</span><ul><li> +91 9987000997 - Dhruv Solanki</li>
										<li>+91 8390896826 - Aditya Vartak</li>
										<li>+91 9757219649 - Manish Yadav</li></dd>

									<dd>E-mail: <a href="#" class="color1">travelR@gmail.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Contact Form</h3>
						<form id="form" method="post" action="index-4.php" autocomplete="off">
							<?php include('errors.php'); ?>

    
    <div class="name">Name:<input type="text" name="name" placeholder="Enter Your Name"></input></div>
    <div class="name">Contact:<input type="text" name="contact" placeholder="Enter your contact number"></input></div>
    <div class="name">Email-ID:<input type="text" name="email" placeholder="Enter Your Email ID"></input></div>
    <div class="name">Feedback/Suggestions/Complaints:<textarea form="form" name="feedback" placeholder="Feedback here"></textarea></div>
    <button class="btn btn-default"   form="form" name="Submit" action="server.php" >Submit</button>



						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">

					<div class="socials">
						<a href="https://www.twitter.com" class="fa fa-twitter"></a>
						<a href="https://www.facebook.com" class="fa fa-facebook"></a>
						<a href="https://plus.google.com" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Travel<span class="color1">R</span> </div>
						&copy; 2017	| <a href="#">Privacy Policy</a> </div> Website designed by Aditya,Dhruv and Manish
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>
