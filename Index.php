<!DOCTYPE html>
<html>

<head>
	<title>Welcome to Organization</title>
</head>

<body>

	<script type="text/javascript">
		
		function check_empty() {
				
			if (document.getElementById("username").value == "") {

				document.getElementById("login").disabled = true;
			}

			else document.getElementById("login").disabled = false;
		}	
		setInterval(check_empty, 0);

	</script>

	<h1>Welcome to Organization</h1><p>
	<img src="myorg.jpg" alt="Logo"><p>
	<form action="Profile.php" method="post">
		<fieldset>
			<button type="button" onclick="location.href='Register.php'" name="register">Register New Member</button><br>
		</fieldset>
		<fieldset>
			<button type="button" name="signin">Log in to an existing Account</button><br>
			<input type="text" name="username" id="username" placeholder="Username">
			<select>
				<option value="member" selected="selected">Member</option>
				<option value="officer">Officer</option>
				<option value="admin">Administrator</option>
			</select><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="submit" name="login" id="login" value="Log in" disabled="disabled"><br>
		</fieldset>
	</form>
	<img src="sponsors.jpg" alt="Sponsors"><p>

</body>

</html>