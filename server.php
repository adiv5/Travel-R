<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
// variable declaration
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'accounts') or die("cannot connect to database");

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
  $fname=mysqli_real_escape_string($db, $_POST['fname']);
  $lname=mysqli_real_escape_string($db, $_POST['lname']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$rpassword = mysqli_real_escape_string($db, $_POST['rpassword']);

	// form validation: ensure that the form is correctly filled
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }

	if ($password != $rpassword) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database
		$query = "INSERT INTO users (fname,lname,email,username, password)
				  VALUES('$fname','$lname', '$email','$username', '$password')";
		$result=mysqli_query($db,$query) or die(mysqli_error($db));
// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<br>";
$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: login.php');
}

	}

}

//upto here for register
// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.html');
		}else
    {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

//Contact
$db = mysqli_connect('localhost', 'root', '', 'accounts') or die("cannot connect to database");
 if(!$db){
   echo "Not connected to DB";}

if (isset($_POST['Submit'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$contact = mysqli_real_escape_string($db, $_POST['contact']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$feedback = mysqli_real_escape_string($db, $_POST['feedback']);
	if (empty($name)) {
		array_push($errors, "Name is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");}

	if (empty($contact)) {
		array_push($errors, "Phone No. is required");
	}


	if (empty($feedback)) {
		array_push($errors, "Message  is required");}

    if (count($errors) == 0) {
				$query = "INSERT INTO con (name,contact,email,feedback)
				  VALUES('$name','$contact','$email', '$feedback')";
		$result=mysqli_query($db,$query) or die(mysqli_error($db));


}
}


//train
$db = mysqli_connect('localhost', 'root', '', 'accounts') or die("cannot connect to database");
 if(!$db){
   echo "Not connected to DB".mysqli_connect_error();}

if (isset($_POST['bookt'])){
	echo "Success" ;
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$froms = mysqli_real_escape_string($db, $_POST['froms']);
	$tos = mysqli_real_escape_string($db, $_POST['tos']);
	$adults= mysqli_real_escape_string($db, $_POST['adults']);
	$child=mysqli_real_escape_string($db, $_POST['child']);
	$message=mysqli_real_escape_string($db, $_POST['message']);
	if(empty($name)){	
		array_push($errors, "Name is required");}
	
	if (empty($email)) {
		array_push($errors, "Email is required");}

	if (empty($message)) {
		array_push($errors, "Message  is required");}

    if (count($errors) == 0) {
				$query = "INSERT INTO rail (name,email,froms,tos,adults,child,message)
				  VALUES('$name','$email','$froms','$tos','$adults','$child','$message')";
		$result=mysqli_query($db,$query) or die(mysqli_error($db));


}
}

//bus
$db = mysqli_connect('localhost', 'root', '', 'accounts') or die("cannot connect to database");
 if(!$db){
   echo "Not connected to DB".mysqli_connect_error();}

if (isset($_POST['bookb'])){
	echo "Success" ;
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$froms = mysqli_real_escape_string($db, $_POST['froms']);
	$tos = mysqli_real_escape_string($db, $_POST['tos']);
	$adults= mysqli_real_escape_string($db, $_POST['adults']);
	$child=mysqli_real_escape_string($db, $_POST['child']);
	$message=mysqli_real_escape_string($db, $_POST['message']);

	if(empty($name)){	
		array_push($errors, "Name is required");}
	
	if (empty($email)) {
		array_push($errors, "Email is required");}

	if (empty($message)) {
		array_push($errors, "Message  is required");}
		print_r($errors);

    if (count($errors) == 0) {
				$query = "INSERT INTO bus (name,email,froms,tos,adults,child,message)
				  VALUES('$name','$email','$froms','$tos','$adults','$child','$message')";
				  
		$result=mysqli_query($db,$query) or die(mysqli_error($db));
        if($result){
        	echo "submitted";
        }

}
}
//Destroy Session
if (isset($_POST['logout'])){
session_destroy();
}
?>
