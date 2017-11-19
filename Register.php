<?php

	require 'App/User.php'; 

	if(isset($_POST['register'])) {

		$new_user = new User();
		$new_user->addUser($_POST);
	}
?>

<!DOCTYPE html>
<html>

<head>

	<title>Register New Member</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body>

	<script type="text/javascript">
		
		function check_empty() {
				
			if (document.getElementById("fname").value == "" || document.getElementById("lname").value == "" || document.getElementById("reg_no").value == "" || document.getElementById("age").value == "" || document.getElementById("dob").value == "" || document.getElementById("address").value == "" || document.getElementById("tel_no").value == "") {

				document.getElementById("register").disabled = true;
			}

			else document.getElementById("register").disabled = false;
		}	
		setInterval(check_empty, 0);

	</script>

	<form action="Register.php" method="post">

		<?php
	
			if (isset($_POST['register'])) {
				
				echo "New Entry added successfully";
			}

		?>
		<p>
		<button type="button" name="home" onclick="location.href='Index.php'">Home</button><p>

		<fieldset><h1>Personal Information</h1><p>
			First Name:* <input type="text" name="fname" id="fname" placeholder="Enter your first name"> <img alt="Your Photo"><br>
			Last Name:* <input type="text" name="lname" id="lname" placeholder="Enter your last name"><br>
			Reg. No.:* <input type="text" name="reg_no" id="reg_no" placeholder="Enter your registration no."><br>
			Age:* <input type="text" name="age" id="age" placeholder="Enter your age"><br>
			Date of Birth:* <input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd"><p>
		</fieldset>

		<fieldset><h1>Contact Details</h1>
			Address:* <textarea name="address" id="address"></textarea><br>
			Tel. No.:* <input type="tel" name="tel_no" id="tel_no"><br>
			Email Address: <input type="email" name="email" placeholder="username@example.com"><p>
		</fieldset>

		<fieldset><h1>Performance</h1>
			Achievements: <textarea name="achs"></textarea><br>
			Services: <textarea name="services"></textarea><br>
			Donations: <textarea name="donations"></textarea><p>
		</fieldset>
		<input type="submit" name="register" id="register" value="Register" disabled="disabled">
	</form>

</body>

</html>