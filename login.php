<?php require('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ><img src="images/logo.jpg"  id="logo" alt="TravelR"></img> <a class="navbar-brand" href="index1.html">TravelR</a></a>
    </div>
    </div>
</nav>
</div>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" action="login.php">Login</button>
		</div>
		<p>
			Not yet a member? <button class="btn btn-primary" formaction="register.php">Sign up</button>
		</p>
	</form>

</body>
</html>
