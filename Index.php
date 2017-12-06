<?php require 'App/User.php'; ?>

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
#transparent {
    opacity: 0.7;

}


@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>	
</head>

<body style="background-image: url('back11.jpg')">

	<script type="text/javascript">
		function check_empty() {				
			if (document.getElementById("username").value == "") {
				document.getElementById("login").disabled = true;
			}
			else document.getElementById("login").disabled = false;
		}	
		setInterval(check_empty, 0);
	</script>
	
	<div class="container">
	<div class="container-fluid">
	
		<div class="row"  row-align="center">

			<div class="col-md-1"></div>
	
			<div class="col" align="center" ><br>
				<img src="logo.png" id="transparent" class="img-rounded" alt="loga" width="100%"> 

			</div>

			<div class="col-md-1"></div>

		</div>
	</div><p>

		<form action="" method="post" class="container-fluid">
			<div class="col ;container-fluid">	
				<fieldset >
					<div class="row">
						<div class="col-md-1 "></div>
						<div class="col-md-1 ">
					<button class="btn btn-danger" type="button" onclick="location.href='Register.php'" name="register" style="background-color:##DC143C">Register New Member</button><p></p>
				</div>
				<br>
				</fieldset>
				<fieldset >
					<!--<button type="button" name="signin">Log in to an existing Account</button><br>-->
					<div class="form-group">
						<div class="row">
							 <div class="col-md-2 "></div><div class="col-md-2">
							 <label for="usr" class="text-white" >User Name :</label></div><div class="col">
							<input type="text" name="username" id="username" placeholder="Username" class="form-control"></div>
							<div class="col">
							<select class="btn" style="background-color:#00FF00" >
								<option value="member" selected="selected"  >Member</option>
								<option value="officer">Officer</option>
								<option value="admin">Administrator</option>
							</select>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-2"></div><div class="col-md-2">
							<label for="pwd" class="text-white">Password :</label>
							</div>
							<div class="col-md-4" align="right">
							<input type="password" name="password" placeholder="Password" class="form-control" >
							</div>
						</div>
							<p></p>
							<div class="row">
							<div class="col-md-5"></div>
							<input type="submit" name="login" id="login" value="Log in" disabled="disabled" class="col-md-2 btn btn-primary" style="background-color:" ><br>
							</div>
					</div>
				</fieldset>
			</div>
			</form>
		
				<div class="slideshow-container">

				<div class="mySlides fade">
				  
				  <img src="s1-11.jpg" style="width:100%">
				  
				</div>

				<div class="mySlides fade">
				  
				  <img src="s2-11.jpg" style="width:100%">
				 
				</div>

				<div class="mySlides fade">
				  
				  <img src="s3-11.jpg" style="width:100%">
				  
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
				</div>
				<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				    var i;
				    var slides = document.getElementsByClassName("mySlides");
				    var dots = document.getElementsByClassName("dot");
				    for (i = 0; i < slides.length; i++) {
				       slides[i].style.display = "none";  
				    }
				    slideIndex++;
				    if (slideIndex > slides.length) {slideIndex = 1}    
				    for (i = 0; i < dots.length; i++) {
				        dots[i].className = dots[i].className.replace(" active", "");
				    }
				    slides[slideIndex-1].style.display = "block";  
				    dots[slideIndex-1].className += " active";
				    setTimeout(showSlides, 1500); // Change image every 2 seconds
				}
				</script>

</body>

</html>


<?php

	if(isset($_POST['username'])&&($_POST['username']!="")) {
		
		$load_user = new User();
		$userid = $_POST['username'];
		$final = $load_user->getUser($userid);
		
		$db = new DB ();
		$sql="select *from logins where reg_no='{$_POST['username']}'";
		$result = mysqli_query($db->getConnection(), $sql);
		
		if($result){
			
			$myquery="select *from requests where reg_no='{$_POST['username']}'";
			echo $_POST['username'];
			$res = mysqli_query($db->getConnection(), $myquery);
			
			$myquery1="select access from logins where reg_no='{$_POST['username']}'";
			$disp = mysqli_query($db->getConnection(), $myquery1);
			 $res1 = mysqli_fetch_array($disp, MYSQLI_ASSOC);
			
			if((mysqli_num_rows($res)==0) && (($_POST['select'])=='member') && ($res1['access']=='M')){
				
				session_start();
				$_SESSION['username']= $_POST['username'];
				header('Location:Profile.php');
				}
				elseif((mysqli_num_rows($res)==0)&& (($_POST['select'])=='registrar') && ($res1['access']=='R')){
					
				session_start();
				$_SESSION['username']= $_POST['username'];
				header('Location:View.php');
				}
		}
		
		
	}
?>

