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