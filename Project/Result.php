<?php require 'App/User.php';
	  session_start();
?>
<?php

	if(isset($_SESSION['search'])) {
		
		$load_user = new User();
		$userid = $_SESSION['search'];
		$final = $load_user->getUser($userid);
	}
?>



<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Results of Your Search</title>
</head>

<body>

<form method ="post" action="">
	<div class="container-fluid" style="border:1px solid;background-color:#3C102E" >
		<p>
		<div class= "">
		<button class="btn " type="button" name="" onclick="location.href='View.php'"><< Back </button><p>
		</div>
	
		<p>
		
		<div class ="container"  style="background-color: 	#787878" >
		<fieldset><div  class ="container"  style="background-color: 	#b4b4b4" ><h1>Personal Information</h1><hr /></div><p>
		<p>
			<div  class="row"><div class="col-md-2">
			<label for="fname" class="text-white" >First Name :*</label>
			</div> <div class="col-md-4"> <input type="text" name="fname" id="fname" value="<?php if(isset($_POST['save'])){echo $_POST["fname"];}else{echo $final["fname"] ;}?>" placeholder="Enter your first name"  class="form-control"><br></div> <div class="col-md-4"><img alt="Your Photo"><p>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="lname" class="text-white" >Last Name :*</label> </div><div class="col-md-4"> <input type="text" name="lname" value="<?php if(isset($_POST['save'])){echo $_POST["lname"];}else{echo $final["lname"] ;}?>" id="lname" placeholder="Enter your last name"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="RegNo" class="text-white" >Reg No :*</label></div><div class="col-md-4"> <input type="text" name="reg_no" value="<?php echo $final["reg_no"]; ?>" id="reg_no" placeholder="Enter your registration no."  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="age" class="text-white" >Age :*</label></div><div class="col-md-4"><input type="text" name="age" value="<?php if(isset($_POST['save'])){echo $_POST["age"];}else{echo $final["age"];} ?>" id="age" placeholder="Enter your age"  class="form-control"><br>
			</div></div>
			<div  class="row"><div class="col-md-2">
			<label for="dob" class="text-white" >Date Of Birth :*</label></div><div class="col-md-4"><input type="text" name="dob" value="<?php if(isset($_POST['save'])){echo $_POST["dob"];}else{echo $final["dob"] ;}?>" id="dob" placeholder="yyyy-mm-dd"  class="form-control">
			</div></div>
		<p>
		</fieldset>
		</div>
		
		<div class ="container"   style="background-color: 	#787878"><p>
		<fieldset><div   class ="container-fluid"  style="background-color: #b4b4b4"><h1 >Contact Details</h1><hr /></div>
		<p>
			<div class="row"><div class="col-md-2">
			<label for="address" class="text-white" >Address :*</label></div><div class="col-md-4">  <textarea name="address" id="address" rows="5" class="form-control"><?php if(isset($_POST['save'])){echo $_POST["address"];}else{echo $final["address"];} ?></textarea><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="tel" class="text-white" >Tell No :*</label></div><div class="col-md-4"> <input type="tel" name="tel_no" value="<?php  if(isset($_POST['save'])){echo $_POST["tel_no"];}else{echo $final["tel_no"] ;}?>" id="tel_no" class="form-control"><br>
			</div></div>
			<div class="row"><div class="col-md-2">
			<label for="email" class="text-white" >Email Address :*</label></div><div class="col-md-4"> <input type="email" name="email" value="<?php if(isset($_POST['save'])){echo $_POST["email"];}else{echo $final["email"] ;}?>" placeholder="username@example.com" class="form-control">
			</div></div>
		<p>
		</fieldset>
		</div>
		<p>
		<div class ="container"   style="background-color: 	#787878"><p>
		<fieldset><div  class ="container-fluid"  style="background-color: #b4b4b4"><h1>Performance</h1><hr /></div>
		<p>
		<div class="row"><div class="col-md-2">
		<label for="achs" class="text-white" >Achievements :*</label></div><div class="col-md-4"> <textarea name="achs" class="form-control"><?php  if(isset($_POST['save'])){echo $_POST["achs"];}else{echo $final["achs"];} ?></textarea><br>
		</div></div>
		<div class="row"><div class="col-md-2">
		<label for="services" class="text-white" >Services :*</label></div><div class="col-md-4" > <textarea name="services" class="form-control"><?php if(isset($_POST['save'])){echo $_POST["services"];}else{echo $final["services"] ;}?></textarea ><br>
		</div></div>
		<div class="row"><div class="col-md-2">	
		<label for="donations" class="text-white" >Donations :*</label></div><div class="col-md-4"> <textarea name="donations" class="form-control"><?php if(isset($_POST['save'])){echo $_POST["donations"];}else{echo $final["donations"] ;}?></textarea ><br>
		</div></div>
		
		</fieldset><p>
		</div>
		<p>
		<p>
		<div class="container">
		<input type="submit" class="btn " name="save" id="save" value="Save Changes"  class =" col-md-2 col-md-offset-2">
		<br><br></div>
	</div>
	
</form>	

<?php 
		if (isset($_POST['save'])){
			
			$db = new DB;
			$sql ="UPDATE members set  fname=? ,lname=?, age=? ,dob=? ,address=? ,tel_no=? , email=? , achs=? ,services=? ,donations=?
					where reg_no={$_SESSION['username']} ";
			
			$state = mysqli_prepare($db->getConnection(), $sql);
            $state->bind_param("ssisssssss",  $_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['dob'], $_POST['address'], $_POST['tel_no'], $_POST['email'], $_POST['achs'], $_POST['services'], $_POST['donations']);
            $state->execute();
            
            $result = mysqli_query($db->getConnection(), $sql);
			
		}
?>
	</body>
</html>	