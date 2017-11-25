<?php

	require_once 'App/User.php';

	if (isset($_POST['username'])) {

		$load_user = new User();		
		$userid = $_POST['username'];
		$final = $load_user->getUser($userid);
	}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Your Profile</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body>
	<form>
		<div class="container">
		<button type="button" name="home" onclick="location.href='Index.php'">Home</button><p>
		<div class="container-fluid"  style="background-color: 	#AFEEEE ;border:1px solid " >
		<fieldset>
			<h1>Personal Information</h1>
			<div class="row"><div class="col-md-2">
			Name</div><div class="col">: <?php echo $final["fname"] ?> <?php echo $final["lname"] ?></div> <div class="col"><img src="myphoto.jpg" alt="Your Photo"><br> </div></div>
			<div class="row"><div class="col-md-2">
			Reg. No.</div><div class="col">: <?php echo $final["reg_no"] ?><br></div></div>
			<div class="row"><div class="col-md-2">
			Age</div><div class="col">: <?php echo $final["age"] ?><br></div></div>
			<div class="row"><div class="col-md-2">
			Date of Birth</div><div class="col">: <?php echo $final["dob"] ?><p></div></div>
		</fieldset>
		</div><p>
		<div class="container-fluid" style="border:1px solid ;background-color:	#98FB98">
		<fieldset>
			<h1>Contact Details</h1>
			<div class="row"><div class="col-md-2">
			Address</div><div class="col">: <?php echo $final["address"] ?><br><br></div></div>
			<div class="row"><div class="col-md-2">
			Tel. No.</div><div class="col">: <?php echo $final["tel_no"] ?><br><br></div></div>
			<div class="row"><div class="col-md-2">
			Email Address</div><div class="col">: <?php echo $final["email"] ?><p><br></div></div>
		</fieldset>
		</div><p>
		<div class="container-fluid" style="border:1px solid ;background-color: 	#F08080">
		<fieldset>
			<h1>Performance</h1>
			<div class="row"><div class="col-md-2">
			Achievements</div><div class="col">: <?php echo $final["achs"] ?><br></div></div>
			<div class="row"><div class="col-md-2">
			Services</div><div class="col">: <?php echo $final["services"] ?><br></div></div>
			<div class="row"><div class="col-md-2">
			Donations</div><div class="col">: <?php echo $final["donations"] ?><p></div></div>
		</fieldset>
		</div>
		<button type="button" name="edit" onclick="location.href='Register.php'">Edit Profile</button>
		</div>
	</form>

</body>

</html>
