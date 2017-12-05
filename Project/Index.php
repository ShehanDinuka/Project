<!DOCTYPE html>
<html>

<head>
	<title>Welcome to Organization</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	-->
	<!--<link rel="stylesheet" href="main.css">-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	

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
	
	
	<div class="container-fluid" style="background-image: url('thumb_cloudy-blue-sky.jpg');background-size: cover" opacity=50%>

	
	
	<h1 align="center" class="text-white">Welcome to Organization<p></h1><p><p>
	
	<fieldset><p><div class="row" ><div class="col-md-4 "></div><div class="col-md-4 ">
	<img src="myorg.jpg" alt="Logo" class="img-responsive"></div></div><p>
	</fieldset>
	<form action="Profile.php" method="post" class="container-fluid">
	
	<div class="col ;container-fluid">
		<fieldset >
			<button class="btn btn-default" type="button" onclick="location.href='Register.php'" name="register">Register New Member</button><br>
		</fieldset>
		<fieldset >
			<!--<button type="button" name="signin">Log in to an existing Account</button><br>-->
			 <div class="form-group">
			 <div class="row">
			 <div class="col-md-2 "></div><div class="col-md-2">
			 <label for="usr" class="text-white" >User Name :</label></div><div class="col">
			<input type="text" name="username" id="username" placeholder="Username" class="form-control"></div>
			<div class="col">
			<select class="btn">
				<option value="member" selected="selected">Member</option>
				<option value="officer">Officer</option>
				<option value="admin">Administrator</option>
			</select>
			</div></div><br>
			<div class="row">
			<div class="col-md-2"></div><div class="col-md-2">
			<label for="pwd" class="text-white">Password :</label>
			</div><div class="col-md-4" align="right">
			<input type="password" name="password" placeholder="Password" class="form-control"><br>
			</div></div>
			<div class="row">
			<div class="col-md-2"></div>
			<input type="submit" name="login" id="login" value="Log in" disabled="disabled" class="col-md-2 btn "><br>
			</div>
			</div>
		</fieldset>
	</div>
	</form>
	<div class = "row"><div class="col-md-5"></div>
	<img src="sponsors.jpg" alt="Sponsors" class=" col-md-7"  >
	</div><fieldset><p>
	<p></fieldset>
	</div>

</body>

</html>