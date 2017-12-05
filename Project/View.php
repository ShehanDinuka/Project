<?php session_start();
	require 'App/User.php';
?>

<!DOCTYPE html>

<html>
<head>
	<title>Admin Profile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<div class="container-fluid" style="background-color: 	#3C102E">
	
	<form method="post" action="">
	<nav class="navbar navbar-inverse navbar-fixed-top"><div class="container-fluid">
	<div class ="col-md-11"></div><div class ="col-md-1">
		<button class="btn " type="submit" name="logout" <?php if(isset($_POST['logout'])){ session_destroy(); header('Location:Index.php');} ?>>Log Out</button>
	</div></div></nav>
		<div class="container-fluid" style="background-color: 	#3C102E"">
			
			 <h4 align="center" class="text-white"><br><br>You have logged as an Administrator</h4>
			<br><br>
			<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" align="right">
			<input type="text" name="search" placeholder="Search Members Using ID" class="form-control"><br>
			</div>
			<div class="col">
			<input class="btn btn-default" type="submit" name="" id="search" value="Search"  class="col-md-2 btn "><br>
			</div>
			</div>
			
			
		</div>	
			
	</form>
		
		
		<?php

		if(isset($_POST['search'])&&($_POST['search']!="")){
			
			$load_user = new User();
			$userid = $_POST['search'];
			$final = $load_user->getUser($userid);
			
			if($final){
				$_SESSION['search']= $_POST['search'];
				header('Location:Result.php');
				}
		
		}
		
		
	
		echo '<div class ="container-fluid"  style="background-color: 	#3C102E" >
		
		 <h4 align="center" class="text-white"><br><br><br><br></h4>
		
		</div>';
	
?>

<form  method="post">
	
<?php
	$db = new DB();

	$query="SELECT COUNT(*) FROM requests where accepted=0";
	if($query_run=mysqli_query($db->getConnection(),$query)){
		$count =1;
		while($query_execute=mysqli_fetch_assoc($query_run)){
		if($query_execute['COUNT(*)']==0){
			echo "<br><br><div class='container text-black' style='background-color: #b4b4b4'><div class='row' ><div class='col-md-5'></div><div class='col-md-4'>"."<label class='btn' style='background-color: #b4b4b4'><h5 align='center'>No New Requests</h5></label>"."</div></div></div><br><br><br><br><br>";
			$count=0;
		}
	}
		if($count){
		$query="SELECT * FROM requests where accepted=0";
		$query_run=mysqli_query($db->getConnection(),$query);
		
		$table ='<div class="container"><table class="table table-bordered table-info "><thead><tr><th>Name</th><th>Username</th><th>Accept</th></tr></thead><tbody>';
		
		while($results=mysqli_fetch_assoc($query_run)){
			
		$table .= "<tr class='table-active'><td><label class='lable'>{$results['reg_no']}</label></td><td><label class='label'>{$results['fname']}"."  "."{$results['lname']}</label></td><td>
		<label class='label'><input type='radio' name='{$results['reg_no']}'  value='accept'>	Accept		 "."<input type='radio' name='{$results['reg_no']}'  value='reject'>	Reject 		"."<input type='radio' name='{$results['reg_no']}'  value='keep' checked>	Keep </label>"
		
		."</td></tr>";
	
		}
		$table .= "</tbody></table></div><br><br>";
		$table.='<div class="row"><div class="col-md-9"></div><div class="col-md-3"><input type="submit" class="btn btn-align-right " name="save" id="save" value="Save changers"  class =" col-md-2 col-md-offset-2"></div></div>';
		echo $table;
		}
	}

?>				
			
</form>
		<br><br><br>
</div>		
	
	<?php
		if(isset($_POST['save'])){
			$db = new DB();
			$query="SELECT * FROM requests where accepted=0";
			$query_run=mysqli_query($db->getConnection(),$query);
			while($results=mysqli_fetch_assoc($query_run)){
				if (isset($_POST[$results['reg_no']]) && $_POST[$results['reg_no']]=="accept"){ echo "Accept";}
				elseif (isset($_POST[$results['reg_no']]) && $_POST[$results['reg_no']]=="reject"){ echo "Reject";}
				elseif (isset($_POST[$results['reg_no']]) && $_POST[$results['reg_no']]=="keep"){ echo "Keep";}
				
			}
			
			
			
		}







?>
	
	
	</body>
</html>



