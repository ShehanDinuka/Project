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
</head>

<body>
	<form>

		<button type="button" name="home" onclick="location.href='Index.php'">Home</button><p>
		<fieldset>
			<h1>Personal Information</h1>
			Name: <?php echo $final["fname"] ?> <?php echo $final["lname"] ?> <img src="myphoto.jpg" alt="Your Photo"><br> 
			Reg. No.: <?php echo $final["reg_no"] ?><br>
			Age: <?php echo $final["age"] ?><br>
			Date of Birth: <?php echo $final["dob"] ?><p>
		</fieldset>

		<fieldset>
			<h1>Contact Details</h1>
			Address: <?php echo $final["address"] ?><br>
			Tel. No.: <?php echo $final["tel_no"] ?><br>
			Email Address: <?php echo $final["email"] ?><p>
		</fieldset>

		<fieldset>
			<h1>Performance</h1>
			Achievements: <?php echo $final["achs"] ?><br>
			Services: <?php echo $final["services"] ?><br>
			Donations: <?php echo $final["donations"] ?><p>
		</fieldset>
		<button type="button" name="edit" onclick="location.href='Register.php'">Edit Profile</button>
	</form>

</body>

</html>
