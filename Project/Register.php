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
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	-->
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
		
		
		<div class="container-fluid" style="border:1px solid;background-color:#3C102E" >
		<p>
		<div class= "nav nav-tabs">
		<button class="btn " type="button" name="home" onclick="location.href='Index.php'">Home</button><p>
		</div>
	
		<p>
		
		<div class ="container"  style="background-color: 	#787878" >
		<fieldset><div  class ="container"  style="background-color: 	#b4b4b4" ><h1>Personal Information</h1><hr /></div><p>
		<p>
			<div  class="row"><div class="col-md-2">
			<label for="fname" class="text-white" >First Name :*</label>
			</div> <div class="col-md-4"> <input type="text" name="fname" id="fname" placeholder="Enter your first name"  class="form-control"><br></div> <div class="col-md-4"><img alt="Your Photo"><p>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="lname" class="text-white" >Last Name :*</label> </div><div class="col-md-4"> <input type="text" name="lname" id="lname" placeholder="Enter your last name"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="RegNo" class="text-white" >Reg No :*</label></div><div class="col-md-4"> <input type="text" name="reg_no" id="reg_no" placeholder="Enter your registration no."  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="age" class="text-white" >Age :*</label></div><div class="col-md-4"><input type="text" name="age" id="age" placeholder="Enter your age"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="dob" class="text-white" >Date Of Birth :*</label></div><div class="col-md-4"><input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd"  class="form-control">
			</div></div>
		<p>
		</fieldset>
		</div>
		
		<div class ="container"   style="background-color: 	#787878"><p>
		<fieldset><div   class ="container-fluid"  style="background-color: #b4b4b4"><h1 >Contact Details</h1><hr /></div>
		<p>
			<div class="row"><div class="col-md-2">
			<label for="address" class="text-white" >Address :*</label></div><div class="col-md-4">  <textarea name="address" id="address" rows="5" class="form-control"></textarea><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="tel" class="text-white" >Tell No :*</label></div><div class="col-md-4"> <input type="tel" name="tel_no" id="tel_no" class="form-control"><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="email" class="text-white" >Email Address :*</label></div><div class="col-md-4"> <input type="email" name="email" placeholder="username@example.com" class="form-control">
			</div></div>
		<p>
		</fieldset>
		</div>
		<p>
		<div class ="container"   style="background-color: 	#787878"><p>
		<fieldset><div  class ="container-fluid"  style="background-color: #b4b4b4"><h1>Performance</h1><hr /></div>
		<p>
		<div class="row"><div class="col-md-2">
		<label for="achs" class="text-white" >Achievements :*</label></div><div class="col-md-4"> <textarea name="achs" class="form-control"></textarea><br>
		</div></div>
		<div class="row"><div class="col-md-2">
		<label for="services" class="text-white" >Services :*</label></div><div class="col-md-4" > <textarea name="services" class="form-control"></textarea ><br>
		</div></div>
		<div class="row"><div class="col-md-2">	
		<label for="donations" class="text-white" >Donations :*</label></div><div class="col-md-4"> <textarea name="donations" class="form-control"></textarea ><br>
		</div></div>
		
		</fieldset><p>
		</div>
		<p>
		<p>
		<div class="container">
		<input type="submit" class="btn " name="register" id="register" value="Register" disabled="disabled" class =" col-md-2 col-md-offset-2">
		<br><br></div>
		</div>
	</form>

</body>

</html>