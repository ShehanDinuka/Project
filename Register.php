<?php

	require 'App/User.php'; 

	if(isset($_POST['register'])) {

		$new_user = new User();
		$new_user->addUser($_POST);
		$new_user->addRequests($_POST);	
		
		  $db = new DB();
          $sql = "INSERT INTO logins (reg_no, password) values (?,?)";
			$imgFile = $_FILES['image']['name'];
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$target = "Images/".basename($_POST['reg_no']).".".$imgExt;
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
           
		  $state = mysqli_prepare($db->getConnection(), $sql);
          $state->bind_param("ss",$_POST['reg_no'],$_POST['password']);
          $state->execute();
		  $result = mysqli_query($db->getConnection(), $sql);
		  
		  if(in_array($imgExt, $valid_extensions)){
							
			move_uploaded_file($_FILES['image']['tmp_name'],$target);						
						}

	}
?>

<!DOCTYPE html>
<html>

<head>

	<title>Register New Member</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>

	<script type="text/javascript">
		
		function check_empty() {
				
			if (document.getElementById("fname").value == "" || document.getElementById("password").value == "" || document.getElementById("lname").value == "" || document.getElementById("reg_no").value == "" || document.getElementById("age").value == "" || document.getElementById("dob").value == "" || document.getElementById("address").value == "" || document.getElementById("tel_no").value == "") {

				document.getElementById("register").disabled = true;
			}

			else document.getElementById("register").disabled = false;
		}	
		setInterval(check_empty, 0);

	</script>

	<form action="Register.php" method="post" enctype="multipart/form-data">

		<div class="container-fluid" style="border:1px solid;background-image: url('back0.jpg')" >
		<p>
		<div class= "nav nav-tabs">
		<button class="btn"  type="button" name="home" onclick="location.href='Index.php'"><span class="glyphicon glyphicon-home"></span> Home</button><p>

		<div class="col-md-4"></div> <div class="col text-white"><label>
		<?php
	
			if (isset($_POST['register'])) {
				
				echo "New Entry added successfully";
			}

		?></label></div>
		</div>
	
		<p>
		
		<div class ="container"  style="background-color: 	#787878" >
		<fieldset><div  class ="container"  style="background-color: 	#b4b4b4" ><h1>Personal Information</h1><hr /></div><p>
		<p>
			<div  class="row"><div class="col-md-2">

			<label for="fname" class="text-white" >First Name :<font color="red">*</font></label>
			</div> <div class="col-md-4"> <input type="text" name="fname" id="fname" placeholder="Enter your first name"  class="form-control"><br></div> <div class="col-md-2 text-white" ><span><label for="" class="">Upload Your Image :</label></div><div class="col-md-4">
			<input type ="file" class="btn btn-default btn-file" name="image"  id="imgup" placeholder='Choose a file...' alt="Your Photo"></span><p>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="lname" class="text-white" >Last Name :<font color="red">*</font></label> </div><div class="col-md-4"> <input type="text" name="lname" id="lname" placeholder="Enter your last name"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="RegNo" class="text-white" >Reg No :<font color="red">*</font></label></div><div class="col-md-4"> <input type="text" name="reg_no" id="reg_no" placeholder="Enter your registration no."  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="age" class="text-white" >Password :<font color="red">*</font></label></div><div class="col-md-4"><input type="text" name="password" id="password" placeholder="Enter your Password"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="age" class="text-white" >Age :<font color="red">*</font></label></div><div class="col-md-4"><input type="text" name="age" id="age" placeholder="Enter your age"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="dob" class="text-white" >Date Of Birth :<font color="red">*</font></label></div><div class="col-md-4"><input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd"  class="form-control">

			</div></div>
		<p>
		</fieldset>
		</div>
		
		<div class ="container"   style="background-color: 	#787878"><p>
		<fieldset><div   class ="container-fluid"  style="background-color: #b4b4b4"><h1 >Contact Details</h1><hr /></div>
		<p>
			<div class="row"><div class="col-md-2">

			<label for="address" class="text-white" >Address :<font color="red">*</font></label></div><div class="col-md-4">  <textarea name="address" id="address" rows="5" class="form-control"></textarea><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="tel" class="text-white" >Tell No :<font color="red">*</font></label></div><div class="col-md-4"> <input type="tel" name="tel_no" id="tel_no" class="form-control"><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="email" class="text-white" >Email Address :</label></div><div class="col-md-4"> <input type="email" name="email" placeholder="username@example.com" class="form-control">

			</div></div>
		<p>
		</fieldset>
		</div>
		<p>
		<p>
		<p>
		<div class="container">
		<input type="submit" class="btn " name="register" id="register" value="Register" disabled="disabled" class =" col-md-2 col-md-offset-2" style="background-color:#DC143C">

		<br><br></div>
		</div>
	</form>
	
	

</body>

</html>