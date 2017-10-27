<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
	<link rel="stylesheet" type="text/css" href="register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
    <div class="input-group">
			<label>First Name</label>
			<input type="text" name='fname' >
		</div>

		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name='lname' >
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="rpassword">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" action="server.php">Register</button>
		</div>
		<p>
			Already a member? <button class="btn btn-primary" formaction="login.php">Sign in</button>
		</p>
	</form>
</body>
</html>
