<?php

	require_once 'App/User.php';
	session_start(); 
	
	if (isset($_SESSION['username'])) {

		$load_user = new User();		
		$userid = $_SESSION['username'];
		$final = $load_user->getUser($userid);
		
	}

?>


<!DOCTYPE html>
<html>

<head>

	<title>Edit Your Details</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>

<body>


	<form action="" method="post">

		
		
		<div class="container-fluid" style="border:1px solid;background-color:#3C102E" >
		<p>
		<div class= "">
		<button class="btn " type="button" name="" onclick="location.href='Profile.php'"><span class="glyphicon glyphicon-chevron-left"></span> Profile</button><p>
		</div>
	
		<p>
		
		<div class ="container"  style="background-color:#787878">
		<fieldset><div  class ="container-fluid"  style="background-color: #b4b4b4"><h1>Personal Information</h1><hr /></div>
			<p>
			<div  class="row"><div class="col-md-2">
			<label for="fname" class="text-white" >First Name :*</label>
			</div> <div class="col-md-4"> <input type="text" name="fname" id="fname" value="<?php if(isset($_POST['save'])){echo $_POST["fname"];}else{echo $final["fname"] ;}?>" placeholder="Enter your first name"  class="form-control"><br></div> <div class="col-md-4"><img alt="Your Photo"><p>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="lname" class="text-white" >Last Name :*</label> </div><div class="col-md-4"> <input type="text" name="lname" value="<?php if(isset($_POST['save'])){echo $_POST["lname"];}else{echo $final["lname"];} ?>" id="lname" placeholder="Enter your last name"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="RegNo" class="text-white" >Reg No :*</label></div><div class="col-md-4"> <input type="text" name="reg_no" value="<?php echo $final["reg_no"] ?>" id="reg_no" placeholder="Enter your registration no."  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="age" class="text-white" >Age :*</label></div><div class="col-md-4"><input type="text" name="age" id="age" value="<?php if(isset($_POST['save'])){echo $_POST["age"];}else{echo $final["age"] ;}?>" placeholder="Enter your age"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="dob" class="text-white" >Date Of Birth :*</label></div><div class="col-md-4"><input type="text" name="dob" id="dob" value="<?php if(isset($_POST['save'])){echo $_POST["dob"];}else{echo $final["dob"] ;}?>" placeholder="yyyy-mm-dd"  class="form-control">
			</div></div>
		<p>
		</fieldset>
		</div>
		<p>
		
		<div class ="container"   style="background-color: 	#787878"><p>
		<fieldset><div   class ="container-fluid"  style="background-color: #b4b4b4"><h1 >Contact Details</h1><hr /></div>
		<p>
			<div class="row"><div class="col-md-2">
			<label for="address" class="text-white" >Address :*</label></div><div class="col-md-4">  <textarea name="address" id="address" rows ="5" value="" class="form-control"><?php if(isset($_POST['save'])){echo $_POST["address"];}else{echo $final["address"] ;}?></textarea><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="tel" class="text-white" >Tell No :*</label></div><div class="col-md-4"> <input type="tel" name="tel_no" id="tel_no" value="<?php if(isset($_POST['save'])){echo $_POST["tel_no"];}else{echo $final["tel_no"] ;}?>" class="form-control"><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="email" class="text-white" >Email Address :*</label></div><div class="col-md-4"> <input type="email" value="<?php if(isset($_POST['save'])){echo $_POST["email"];}else{echo $final["email"] ;}?>" name="email" placeholder="username@example.com" class="form-control">
			</div></div>
		<p>
		</fieldset>
		</div>
		<p>
		
	
		<div class="container">
		<input type="submit" class="btn " name="save" id="save" value="Save"  class =" col-md-2 col-md-offset-2" >
		<br><br></div>
		</div>
	</form>

</body>

</html>

<?php 
		if (isset($_POST['save'])){
			
			$db = new DB;
			$sql ="UPDATE members set  fname=? ,lname=?, age=? ,dob=? ,address=? ,tel_no=? , email=? 
					where reg_no={$_SESSION['username']} ";
			
			$state = mysqli_prepare($db->getConnection(), $sql);
            $state->bind_param("ssissss",  $_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['dob'], $_POST['address'], $_POST['tel_no'], $_POST['email']);
            $state->execute();
            
            $result = mysqli_query($db->getConnection(), $sql);
			
		}
?>