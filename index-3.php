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
        width: 500px;
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
									<li><a href="index-2.php">Bus</a></li>
									<li class="current"><a href="index-3.php">Trains</a></li>
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
       <option value="churchgate station,Mumbai">CHURCHGATE</option>
                  <option value="Marine Lines station,Mumbai">MARINE LINES</option>
                  <option value="CHARNI ROAD station,Mumbai">CHARNI ROAD</option>
                  <option value="GRANT ROAD station,Mumbai">GRANT ROAD</option>
                  <option value="MUMBAI CENTRAL station,Mumbai">MUMBAI CENTRAL</option>
                  <option value="MAHALAXMI station,Mumbai">MAHALAXMI</option>
                  <option value="LOWER PAREL station,Mumbai">LOWER PAREL</option>
                  <option value="ELPHINSTONE ROAD station,Mumbai">ELPHINSTONE ROAD</option>
                  <option value="DADAR station,Mumbai">DADAR</option>
                  <option value="MATUNGA ROAD station,Mumbai">MATUNGA ROAD</option>
                  <option value="MAHIM JUNCTION station,Mumbai">MAHIM JUNCTION</option>
                  <option value="BANDRA station,Mumbai">BANDRA</option>
                  <option value="KHAR ROAD station,Mumbai">KHAR ROAD</option>
                  <option value="SANTA CRUZ station,Mumbai">SANTA CRUZ</option>
                  <OPTION value="VILE PARLE station,Mumbai">VILE PARLE</OPTION>
                  <option value="ANDHERI station,Mumbai">ANDHERI</option>
                  <option value="JOGESHWARI station,Mumbai">JOGESHWARI</option>
                  <option value="RAM MANDIR station,Mumbai">RAM MANDIR</option>
                  <option value="GOREGAON station,Mumbai">GOREGAON</option>
                  <option value="MALAD station,Mumbai">MALAD</option>
                  <OPTION value="KANDIVALI station,Mumbai">KANDIVALI</OPTION>
                  <option value="BORIVALI station,Mumbai">BORIVALI</option>
                  <OPTION value="DAHISAR station,Mumbai">DAHISAR</OPTION>
                  <option value="MIRA ROAD station,Mumbai">MIRA ROAD</option>
                  <option value="BHAYENDAR station,Mumbai">BHAYENDAR</option>
                  <option value="NAIGAON station,Mumbai">NAIGAON</option>
                  <option value="VASAI ROAD station,Mumbai">VASAI ROAD</option>
                  <option value="NALLA SOPARA station,Mumbai">NALLA SOPARA</option>
                  <OPTION value="VIRAR station,Mumbai">VIRAR</OPTION>    </select>
    <b>End: </b>
    <select id="end">
       <option value="churchgate station,Mumbai">CHURCHGATE</option>
                  <option value="Marine Lines station,Mumbai">MARINE LINES</option>
                  <option value="CHARNI ROAD station,Mumbai">CHARNI ROAD</option>
                  <option value="GRANT ROAD station,Mumbai">GRANT ROAD</option>
                  <option value="MUMBAI CENTRAL station,Mumbai">MUMBAI CENTRAL</option>
                  <option value="MAHALAXMI station,Mumbai">MAHALAXMI</option>
                  <option value="LOWER PAREL station,Mumbai">LOWER PAREL</option>
                  <option value="ELPHINSTONE ROAD station,Mumbai">ELPHINSTONE ROAD</option>
                  <option value="DADAR station,Mumbai">DADAR</option>
                  <option value="MATUNGA ROAD station,Mumbai">MATUNGA ROAD</option>
                  <option value="MAHIM JUNCTION station,Mumbai">MAHIM JUNCTION</option>
                  <option value="BANDRA station,Mumbai">BANDRA</option>
                  <option value="KHAR ROAD station,Mumbai">KHAR ROAD</option>
                  <option value="SANTA CRUZ station,Mumbai">SANTA CRUZ</option>
                  <OPTION value="VILE PARLE station,Mumbai">VILE PARLE</OPTION>
                  <option value="ANDHERI station,Mumbai">ANDHERI</option>
                  <option value="JOGESHWARI station,Mumbai">JOGESHWARI</option>
                  <option value="RAM MANDIR station,Mumbai">RAM MANDIR</option>
                  <option value="GOREGAON station,Mumbai">GOREGAON</option>
                  <option value="MALAD station,Mumbai">MALAD</option>
                  <OPTION value="KANDIVALI station,Mumbai">KANDIVALI</OPTION>
                  <option value="BORIVALI station,Mumbai">BORIVALI</option>
                  <OPTION value="DAHISAR station,Mumbai">DAHISAR</OPTION>
                  <option value="MIRA ROAD station,Mumbai">MIRA ROAD</option>
                  <option value="BHAYENDAR station,Mumbai">BHAYENDAR</option>
                  <option value="NAIGAON station,Mumbai">NAIGAON</option>
                  <option value="VASAI ROAD station,Mumbai">VASAI ROAD</option>
                  <option value="NALLA SOPARA station,Mumbai">NALLA SOPARA</option>
                  <OPTION value="VIRAR station,Mumbai">VIRAR</OPTION>
    </select>
    </select>
    </div>

    <div id="map"></div>
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

    modes: ['TRAIN'],
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

    modes: ['TRAIN'],
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
<form  id="train" method="post" autocomplete="off" action="server.php">
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
								    <select name="froms" form="train">
									<option>CHURCHGATE</option>
									<option>MARINE LINES</option>
									<option>CHARNI ROAD</option>
									<option>GRANT ROAD</option>
									<option>MUMBAI CENTRAL</option>
									<option>MAHALAXMI</option>
									<option>LOWER PAREL</option>
									<option>ELPHINSTONE ROAD</option>
									<option>DADAR</option>
									<option>MATUNGA ROAD</option>
									<option>MAHIM JUNCTION</option>
									<option>BANDRA</option>
									<option>KHAR ROAD</option>
									<option>SANTA CRUZ</option>
									<OPTION>VILE PARLE</OPTION>
									<option>ANDHERI</option>
									<option>JOGESHWARI</option>
									<option>RAM MANDIR</option>
									<option>GOREGAON</option>
									<option>MALAD</option>
									<OPTION>KANDIVALI</OPTION>
									<option>BORIVALI</option>
									<OPTION>DAHISAR</OPTION>
									<option>MIRA ROAD</option>
									<option>BHAYENDAR</option>
									<option>NAIGAON</option>
									<option>VASAI ROAD</option>
									<option>NALLA SOPARA</option>
									<OPTION>VIRAR</OPTION>
								</select>
								</div>
							</div>
								<div class="center">
									<div class="tmInput" name="tos" data-constraints="">
									TO:<br>
									<select  name="tos" form="train">
									<option>CHURCHGATE</option>
									<option>MARINE LINES</option>
									<option>CHARNI ROAD</option>
									<option>GRANT ROAD</option>
									<option>MUMBAI CENTRAL</option>
									<option>MAHALAXMI</option>
									<option>LOWER PAREL</option>
									<option>ELPHISTONE ROAD</option>
									<option>DADAR</option>
									<option>MATUNGA ROAD</option>
									<option>MAHIM JUNCTION</option>
									<option>BANDRA</option>
									<option>KHAR ROAD</option>
									<option>SANTA CRUZ</option>
									<OPTION>VILE PARLE</OPTION>
									<option>ANDHERI</option>
									<option>JOGESHWARI</option>
									<option>RAM MANDIR</option>
									<option>GOREGAON</option>
									<option>MALAD</option>
									<OPTION>KANDIVALI</OPTION>
									<option>BORIVALI</option>
									<OPTION>DAHISAR</OPTION>
									<option>MIRA ROAD</option>
									<option>BHAYENDAR</option>
									<option>NAIGAON</option>
									<option>VASAI ROAD</option>
									<option>NALLA SOPARA</option>
									<OPTION>VIRAR</OPTION>
	       							</select>
								</div>
							</div>
							<div class="clear"></div>
							<div class="center">
								ADULT:<br>
								<select name="adults" form="train" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<div class="clear height1"></div>
							</div>
							<div class="center">
								CHILDREN:<br>
								<select name="child" form="train" data-constraints="">
									<option>0</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="center">
								<textarea name="message" form="train" class="center" placeHolder="Message" data-constraints=''></textarea>
							</div>

						<div class="center"><button class="btn btn-default"   form="train" name="bookt" action="server.php" >Book Tickets</button>
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
