<?php

	require_once 'App/User.php';
	session_start(); 
	
	if (isset($_POST['username'])) {

		$load_user = new User();	
		$_SESSION['username']=$_POST['username'];
		$userid = $_SESSION['username'];
		$final = $load_user->getUser($userid);
		
		$sql="select * from logins where reg_no={$_POST['username']}";
		 $db =new DB();
		 $disp = mysqli_query($db->getConnection(), $sql);
		 $result = mysqli_fetch_array($disp, MYSQLI_ASSOC);
		
	}
	if (isset($_SESSION['username'])){
		//echo $_SESSION['username'];
		$load_user = new User();	
		$userid = $_SESSION['username'];
		$final = $load_user->getUser($userid);
		
		 $sql="select * from logins where reg_no={$_SESSION['username']}";
		 $db =new DB();
		 $disp = mysqli_query($db->getConnection(), $sql);
		 echo $disp;
		 if($disp){
			$result = mysqli_fetch_array($disp, MYSQLI_ASSOC);
		 }
	
	}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Your Profile</title>

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
	<form method="post">
		
		<div class="container-fluid" style="background-color:#3D3F40 ;background-size: cover" class="text-white">
		<br><nav class="navbar navbar-inverse"><div class="container" >
		<!--<button class="btn " type="button" name="home" onclick="location.href='Index.php'">Home</button>--><p><br><div class ="col-md-8"></div>
		<button class="btn " type="submit" name="logout" <?php if(isset($_POST['logout'])){ session_destroy(); header('Location:Index.php');} ?>>Log Out</button>
		</div></nav>
		
		<div class="container"  style="background-color: #0B8581 ;border:1px solid " >
		<fieldset><div class="container"style="background-color:	#39E5E0">
			<h1 >Personal Information</h1><p></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Name </label></div><div class="col"><label  class="text-white" >:* 	<?php echo $final["fname"] ?> <?php echo $final["lname"] ?></label></div> 
			<div class="col"><img src="Images/<?php echo $result['images']; ?>" alt="Your Photo"><br> </div></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Reg No </label></div><div class="col"><label  class="text-white" >:* 	<?php echo $final["reg_no"] ?><br></label></div></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Age </label></div><div class="col"><label  class="text-white" >:* 	<?php echo $final["age"] ?><br></label></div></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Date Of Birth </label></div><div class="col"><label  class="text-white" >:* 	<?php echo $final["dob"] ?><p></label></div></div>
		</fieldset>
		</div><p>
		
		<div class="container" style="border:1px solid ;background-color:	#0B8581">
		<fieldset><div  class="container"style="background-color:	#39E5E0">
			<h1>Contact Details</h1><p></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Address </label></div><div class="col"><label  class="text-white" >:* <?php echo $final["address"] ?><br><br></label></div></div>
			<div class="row"><div class="col-md-2">
			<label class="text-white" >Tell No </label></div><div class="col"><label  class="text-white" >:* <?php echo $final["tel_no"] ?><br><br></label></div></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Email Address </label></div><div class="col"><label  class="text-white" >:* <?php echo $final["email"] ?><p><br></label></div></div>
		</fieldset>
		</div><p>
		
		<div class="container" style="border:1px solid ;background-color: 	#0B8581">
		<fieldset><div  class="container"style="background-color:	#39E5E0">
			<h1>Performance</h1><p></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Achievements </label></div><div class="col"><label  class="text-white" >:* <?php echo $final["achs"] ?><br></label></div></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Services </label></div><div class="col"><label  class="text-white" >:* <?php echo $final["services"] ?><br></label></div></div>
			<div class="row"><div class="col-md-2">
			<label  class="text-white" >Donations </label></div><div class="col"><label  class="text-white" >:* <?php echo $final["donations"] ?><p></label></div></div>
		</fieldset>
		</div><br>
		
		<div class="container" align="left">
		<button class="btn btn-primary "  type="button" name="edit" onclick="location.href='Edit.php'">Edit Profile</button>
		<br><br>
		</div>
		
		</div>
		
	</form>

</body>

</html>
