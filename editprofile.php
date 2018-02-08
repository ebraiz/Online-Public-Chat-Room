<!-- Selecting Post Data From Database for Editing -->
<?php
session_start();
if(!$_SESSION['username']){
	header('location:index.php');}
?>

<?php
include('includes/db.php');
include('includes/header.php');
$editprofile= $_SESSION['id'];

$query = "SELECT * FROM registration WHERE r_id='$editprofile'";		
			$run = $db->query($query);
			
		while($result = $run->fetch_array()) :
			$proid = $result['r_id'];
			$fname = $result['fname'];
			$lname = $result['lname'];
			$gender = $result['gender'];
			$age = $result['age'];
			$institute = $result['institute'];		
			$city = $result['city'];
			$country = $result['country'];
			$org_path = $result['image'];
		
?>

<!-- Showing Selected Information into Form --> 
<html>
	<body style="background:url('images/formbackground.jpg')">

<form method='post' action=''>
		<br><br>
		<div style='width:40%;margin:0 auto;'>
	<div class="table-responsive">          
		<table class="table">
			<tbody>
				<tr><td align='center' colspan='2'><h2><u><b>Edit Your Profile Here!</b></u></h2></td></tr>
				<tr><td><b>First Name:</b> </td><td><input type='text' name='fName' value='<?php echo $fname; ?>'/></td></tr>
				<tr><td><b>Last Name:</b> </td><td><input type='text' name='lName' value='<?php echo $lname; ?>'/></td></tr>
				<tr><td><b>Gender:</b> </td><td><input type='text' name='Gender' value='<?php echo $gender; ?>'/></td></tr>
				<tr><td><b>Age:</b> </td><td><input type='text'  name='Age' value='<?php echo $age; ?>'/></td></tr>
				<tr><td><b>Institute:</b> </td><td><input type='text'  name='Institute' value='<?php echo $institute; ?>'/></td></tr>
				<tr><td><b>City:</b> </td><td><input type='text'  name='City' value='<?php echo $city; ?>'/></td></tr>
				<tr><td><b>Country:</b> </td><td><input type='text'  name='Country' value='<?php echo $country; ?>'/></td></tr>
				<tr><td><b>Photo:</b> </td><td><input type='text'  name='Image' value='<?php echo $org_path; ?>'/></td></tr>
				<tr><td align='center' colspan='2'><button type="submit" name='update' class="btn btn-danger">Update</button></td></tr>
			
			</tbody>
		</table>
	</div></div>
</form>

	</body>
</html>
<?php endwhile; ?>
<!-- Update Section -->
<?php
include('includes/db.php');
if(isset($_POST['update']))
{
			$Fname = $_POST['fName'];
			$Lname = $_POST['lName'];
			$Gender = $_POST['Gender'];
			$Age = $_POST['Age'];
			$Institute = $_POST['Institute'];		
			$City = $_POST['City'];
			$Country = $_POST['Country'];
			$Org_path = $_POST['Image'];

$query= "UPDATE registration SET fname='$Fname', lname='$Lname', gender='$Gender', age='$Age', institute='$Institute', city='$City', country='$Country', image='$Org_path' WHERE r_id='$editprofile'"; 

$run = $db->query($query);
				
if($run){	
	echo "<script>window.open('chatroom.php?upd=Profile has been Updated!','_self')</script>";
	}

	else{
		echo "<script>alert('Sorry Not Updated Please Try Again!');</script>";
	}
}
?>
