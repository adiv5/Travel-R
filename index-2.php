<?php require('server.php');
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Services</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

      #maps{
        float:left;
        width: 100%;
      }
      #map {
        height: 400px;
        width:100%;

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: relative;
        margin-top: 22px;
        width: 600px;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 50px;
      }
      .center{
      	padding-left: 40px;

      }
      #title{
      	font-family: Lobster,Roboto,sans-serif;
      	font-size: 150%;
      }
    </style>
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
									<li class="current"><a href="index-2.php">Bus</a></li>
									<li ><a href="index-3.php">Trains</a></li>
									<li ><a href="index-4.php">Contacts</a></li>
								</ul>
								<ul class="sf-menu navbar-nav navbar-right">
									<li ><a href="index1.html" action="server.php" name="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li></a></li>

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
						<h3>Train Routes and Booking</h3>
						 <div id="maps">
    <div id="floating-panel">
    <b>Start: </b>
    <select id="start">
       <option value="Andheri railway station(w),Mumbai">Andheri Railway Station(W)</option>
                  <option value="Shoppers stop,Andheri(w),Mumbai">Shoppers Stop</option>
                  <option value="mano-bina apartments,Andheri(w),Mumbai">Mano-Bina</option>
                  <option value="New India Headquarters,Andheri(w),Mumbai">New India HQ</option>
                  <option value="Juhu Shopping Centre,Andheri(w),Mumbai">Juhu Shopping centre</option>
                  <option value="JVPD Bus Station,Andheri(w),Mumbai">JVPD</option>
                  <option value="Juhu Prabhat,JVPD,Andheri(w),Mumbai">Juhu Prabhat</option>
                  <option value="Abhishek Apartments,JVPD,Andheri(w),Mumbai">Abhishek Apartments</option>
                  <option value="RGIT,Andheri(w),Mumbai">RGIT</option>
                  <option value="Bharat Nagar,Andheri(w),Mumbai">Bharat Nagar</option>
                  <option value="Natasha Tower,Andheri(w),Mumbai">Natasha Tower</option>
                  <option value="Nana-Nani Park,Andheri(w),Mumbai">Nana-Nani park</option>
                  <option value="Seven Bungalows Garden,Andheri(w),Mumbai">7 Bungalows</option>
                  <option value="Picnic Cottage,Versova,Andheri(w),Mumbai">Picnic Cottage</option>
                  <OPTION value="Macchalimar,Versova,Andheri(w),Mumbai">Macchalimar</OPTION>
                  <option value="Ganga Bhuvan,Versova,Andheri(w),Mumbai">Ganga Bhuvan</option>
                  <option value="Vesave yari-Road bus Station,Versova,Andheri(w),Mumbai">Vesave Bus Depot</option>
     </select>             
    <b>End: </b>
    <select id="end">
       <option value="Andheri railway station(w),Mumbai">Andheri Railway Station(w)</option>
                  <option value="Andheri railway station(w),Mumbai">Andheri Station</option>
                  <option value="Shoppers stop,Andheri(w),Mumbai">Shoppers Stop</option>
                  <option value="mano-bina apartments,Andheri(w),Mumbai">Mano-Bina</option>
                  <option value="New India Headquarters,Andheri(w),Mumbai">New India HQ</option>
                  <option value="Juhu Shopping Centre,Andheri(w),Mumbai">Juhu Shopping centre</option>
                  <option value="JVPD Bus Station,Andheri(w),Mumbai">JVPD</option>
                  <option value="Juhu Prabhat,JVPD,Andheri(w),Mumbai">Juhu Prabhat</option>
                  <option value="Abhishek Apartments,JVPD,Andheri(w),Mumbai">Abhishek Apartments</option>
                  <option value="RGIT,Andheri(w),Mumbai">RGIT</option>
                  <option value="Bharat Nagar,Andheri(w),Mumbai">Bharat Nagar</option>
                  <option value="Natasha Tower,Andheri(w),Mumbai">Natasha Tower</option>
                  <option value="Nana-Nani Park,Andheri(w),Mumbai">Nana-Nani park</option>
                  <option value="Seven Bungalows Garden,Andheri(w),Mumbai">7 Bungalows</option>
                  <option value="Picnic Cottage,Versova,Andheri(w),Mumbai">Picnic Cottage</option>
                  <OPTION value="Macchalimar,Versova,Andheri(w),Mumbai">Macchalimar</OPTION>
                  <option value="Ganga Bhuvan,Versova,Andheri(w),Mumbai">Ganga Bhuvan</option>
                  <option value="Vesave yari-Road bus Station,Versova,Andheri(w),Mumbai">Vesave Bus Depot</option>
    </select>
    </select>
    </div>

    <div id="map"></div>
    
  </div>
</div>
							<script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 19.121288, lng: 72.82372}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'TRANSIT',
          transitOptions: {

    modes: ['BUS'],
    routingPreference: 'FEWER_TRANSFERS'
  }

        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIboaBP4xvIR8DYaPZXqMUzzpdvdWNsL0&callback=initMap">
    </script>

					</div>


					<div class="clear"></div>
				</div>
<form  id="bus" method="post" autocomplete="off" action="server.php">
					<?php include('errors.php'); ?>
<div id="form" class="center ">
	<div id="title">BOOKING FORM:</div><br>
			<div class="fl1">
								<div class="center">
									NAME:<br>
									<input name="name" type="text" data-constraints="">
								</div>
								<div class="center">
									EMAIL:<br>
									<input name="email" type="text" data-constraints=" ">
								</div>
							</div>
							<div class="center">
								<div class="tmInput" name="froms" data-constraints="">
									FROM:<br>
								    <select name="froms" form="bus">
									<option>ANDHERI RAILWAY STATION(W)</option>
									<option>SHOPPERS STOP</option>
									<option>MANO-BINA APARTMENTS</option>
									<option>NEW INDIA QUARTERS</option>
									<option>JUHU SHOPPING CENTRE</option>
									<option>JVPD BUS STATION</option>
									<option>JUHU PRABAT</option>
									<option>ABHISHEK APARTMENTS</option>
									<option>RAJIV GANDHI INSTITUTE OF TECHNOLOGY</option>
									<option>BHARAT NAGAR</option>
									<option>NATASHA TOWER</option>
									<option>NANA-NANI PARK</option>
									<OPTION>SEVEN BUNGALOWS GARDEN</OPTION>
									<option>PICNIC COTTAGE</option>
									<option>MACHHALIMAR</option>
									<option>GANGABHUWAN</option>
									<option>VERSOVA-YARI ROAD</option>
								</select>
								</div>
							</div>
								<div class="center">
									<div class="tmInput" name="tos" data-constraints="">
									TO:<br>
									<select  name="tos" form="bus">
									<option>ANDHERI RAILWAY STATION(W)</option>
									<option>SHOPPERS STOP</option>
									<option>MANO-BINA APARTMENTS</option>
									<option>NEW INDIA QUARTERS</option>
									<option>JUHU SHOPPING CENTRE</option>
									<option>JVPD BUS STATION</option>
									<option>JUHU PRABAT</option>
									<option>ABHISHEK APARTMENTS</option>
									<option>RAJIV GANDHI INSTITUTE OF TECHNOLOGY</option>
									<option>BHARAT NAGAR</option>
									<option>NATASHA TOWER</option>
									<option>NANA-NANI PARK</option>
									<OPTION>SEVEN BUNGALOWS GARDEN</OPTION>
									<option>PICNIC COTTAGE</option>
									<option>MACHHALIMAR</option>
									<option>GANGABHUWAN</option>
									<option>VERSOVA-YARI ROAD</option>
	       							</select>
								</div>
							</div>
							<div class="clear"></div>
							<div class="center">
								ADULT:<br>
								<select name="adults" form="bus" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<div class="clear height1"></div>
							</div>
							<div class="center">
								CHILDREN:<br>
								<select name="child" form="bus" data-constraints="">
									<option>0</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="center">
								<textarea name="message" form="bus" class="center" placeHolder="Message" data-constraints=''></textarea>
							</div>

						<div class="center"><button class="btn btn-default"   form="bus" name="bookb" action="server.php" >Book Tickets</button>
						</div>
</div>
</form>

			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">

					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
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
