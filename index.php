<!DOCTYPE html>

<?php
session_start();
?>

<?php include('includes/db.php'); ?>
<?php include('includes/header.php'); ?>

<html lang="en">

	<head>
	
		<title>Let's Get Togather!</title>
   
	</head>

<body class='regisbody'>

<div style='text-align:center;'>
<button type="submit" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#loginform">Already have an Account</button>

  <div class="modal fade" id="loginform" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:url('images/formbackground.jpg')">
        </div>
        <div class="modal-body" style="background:url('images/formbackground.jpg')">
			<form class="form-inline" role="form" method="post" action="index.php">
   
				<div class="row">
					<div class="col-sm-4" style="padding-left:15px;padding-right:0px;">
						<label>&nbsp;Username:</label>
						<input type="text" class="input-lg" name="username" style="width:80%">
					</div>
	  
					<div class="col-sm-4" style="padding-left:0px;padding-right:0px;">
						<label>Password:</label>
						<input type="password" class="input-lg" name="pass" style="width:80%">
					</div>
	 
					<div class="col-sm-4" style="padding-left:0px;padding-top:25px;padding-right:0px;">
						<button type="submit" name="login" class="btn btn-danger btn-lg">Log In</button>
					</div>
				</div>
			</form>

        </div>
        <div class="modal-footer" style="background:url('images/formbackground.jpg')">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include('includes/db.php');
if(isset($_POST['login'])){
	$username = $_SESSION['username'] = $_POST['username'];
	$password = $_POST['pass'];
	
	$query = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
	
	$run = $db->query($query);
	$result = $run->fetch_assoc();
	
	if($run->num_rows == 1){
		$_SESSION['name'] = $result['fname'];
		$_SESSION['id'] = $result['r_id'];
		echo "<script>window.open('chatroom.php','_self')</script>";
		
	}else{
		echo "<script>alert('Invalid Username or Password.')</script>";
	}
}

?>

	<div id='head_section'>
	<p>Let's Get Togather!</p>
	<h3 style='text-align:center;font-family:Freestyle Script;'>A Free Online Chat Room | Created By An Edwardian</h3>
	</div>
	
		<div id='regis_form'>
			
			<form class='form-horizontal' action='index.php' method='post' data-toggle='validator' enctype='multipart/form-data'>
			
				<div class="form-group">
			
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" name="f_name" placeholder="First Name" maxlength='15' data-error="Invalid Name or Empty" required>
						<div class="help-block with-errors"></div>
				    </div>
					
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" name="l_name" placeholder="Last Name" maxlength='15' data-error="Invalid Name or Empty" required>
						<div class="help-block with-errors"></div>
				    </div>
				</div>
					
				<div class="form-group">
			
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" name="username" placeholder="username" maxlength='25' pattern="[a-z0-9]{1,25}" data-error="Should be in Small Letters" required>
						<div class="help-block with-errors"></div>
				    </div>
			
					<div class="col-xs-6">
						<input type="password" class="form-control input-sm" name="pass" placeholder="Your Password" maxlength='25' data-error="Invalid Password" required>
						<div class="help-block with-errors"></div>
				    </div>
				</div>
				
				<div class="form-group">
      
					<div class="col-xs-6"> 
    
						<select class="form-control" name="gender">
							<option checked>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
					</div>
			
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" name="age" placeholder="Your Age" maxlength='2' pattern="[0-9]{2,2}" data-error="Invalid Age" required>
						<div class="help-block with-errors"></div>
				    </div>
				</div>

				<div class="form-group">
			
					<div class="col-xs-12">
						<input type="text" class="form-control input-sm" name="institute" placeholder="Your Institute" maxlength='25' data-error="Invalid Institute" required>
						<div class="help-block with-errors"></div>
				    </div>
				</div>				
    
				<div class="form-group">
			
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" name="city" placeholder="Your City" maxlength='25' pattern="[A-z]{1,15}" data-error="Invalid City (No Space Allowed)" required>
						<div class="help-block with-errors"></div>
				    </div>
			
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" name="country" placeholder="Your Country" maxlength='25' data-error="Invalid City (No Space Allowed)" required>
						<div class="help-block with-errors"></div>
				    </div>
				</div>
				
				<div class="form-group">
			
					<div class="col-xs-12">
						<input type="file" class="form-control input-sm" name="image">
	
				    </div>
				</div>
    
	                <button type="submit" name='submit' class="btn btn-danger btn-block">Register</button>
				
				</form>
				
				<?php
				if(isset($_POST['submit'])){
					
					$f_name     = $_POST['f_name'];
					$l_name     = $_POST['l_name'];
					$username   = $_POST['username'];
					$password   = $_POST['pass'];
					$gender     = $_POST['gender'];
					$age        = $_POST['age'];
					$institute  = $_POST['institute'];
					$city       = $_POST['city'];
					$country    = $_POST['country'];
					$img_name 	= $_FILES['image']['name'];
					$tmp 		= $_FILES['image']['tmp_name'];
					$org_path   = "images/" . $img_name;
					move_uploaded_file($tmp,$org_path);
					
				$query = "INSERT INTO registration(fname,lname,username,password,gender,age,institute,city,country,image) 
					VALUES ('$f_name','$l_name','$username','$password','$gender','$age','$institute','$city','$country','$org_path')";
					$run = $db->query($query);
				
						if($run){
							echo "<script>swal('Congratulations! You Have Registered Successfully.');</script>";
							echo "<audio autoplay><source src='includes/registrationvoice.mp3' type='audio/mpeg'></audio>";
							exit();
						}
				exit();
				}
				
				?>
	
		</div>
	
</body>
	
</html>