<!DOCTYPE html>

<?php
session_start();
if(!$_SESSION['username']){
header('location:index.php');
}
 include('includes/db.php');
 include('header.php');
 ?>

<html lang="en">

	<head>
	
		<title>Let's Get Togather!</title>
  
	<script>
	
	function UpdateChat(){
		// Don't refresh page
		if (event) event.preventDefault();
		
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){

			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}
		req.open('POST','chat.php',true);
		req.send();
	}
	setInterval(function(){
			UpdateChat();
		},
		1000);
	
	function SendToChat(){
		console.log("In SendToChat() function");
		// Don't refresh page
		if (event) event.preventDefault();
		
		var msg = encodeURIComponent(document.getElementById('message').value);
		var data = "msg=" + msg + "&submit=1";
		
		
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				UpdateChat();
				document.getElementById('playmusic1').innerHTML = req.responseText;
                                document.getElementById('message').value = null;
			}
		}
		req.open('POST','updatechat.php',true);
		req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		req.send(data);
	}
	
	
function SendToMusic(){
		
		// Don't refresh page
		event.preventDefault();
		
		var music_option = document.getElementById('music');
		var music_name = music_option.options[music_option.selectedIndex].value;
		
		var music = encodeURIComponent(music_name);
		var data = "music=" + music + "&audio=1";
		
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
			
				document.getElementById('playmusic').innerHTML = req.responseText;
			}
		}
		req.open('POST','music.php',true);
		req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		req.send(data);
	}
	
	function send()
{document.theform.submit()}

	</script>
  
	</head>

<body onload='UpdateChat();' class='chatbody'>
	<div id='container'>
		<div class="row" style='margin-left:0;margin-right:0;'>
			<div class="col-sm-12"><?php include('navbar.php'); ?></div>
		</div>
	 
	<div class="row" style='margin-top:60px;margin-left:0;margin-right:0;'>
	
			<div class="col-sm-4">
				<div id='info_section'>
			<?php
					$name = $_SESSION['username'];  
					$query = "SELECT * FROM registration WHERE username='$name'";		
					$run = $db->query($query);
					
					$result = $run->fetch_array();
					
						$proid = $result['r_id'];
						$fname = $result['fname'];
						$lname = $result['lname'];
						$gender = $result['gender'];
						$age = $result['age'];
						$institute = $result['institute'];		
						$city = $result['city'];
						$country = $result['country'];
						$time = $result['time'];
						$org_path = $result['image'];
			?>
			
					<div class="table-responsive">          
						<table class="table">
							<tbody>
								<tr><td style='color:green;font-size:15px;font-weight:bold;text-align:center;' colspan='2'><?php echo @$_GET['upd']; ?></td></tr>
								<tr><td style='font-size:25px;font-weight:bold;'>My Profile</td><td style='float:right;'><?php echo "<a href='editprofile.php' ><b>Edit Profile</b></a>"; ?></td></tr>
								<tr><td><img src='<?php echo $org_path; ?>' width='125px' height='125px'></td></tr>
								<tr><td style='font-size:15;'><b>Name:</b></td><td style='font-style:italic;font-weight:bold;'><?php echo $fname; ?>&nbsp;<?php echo $lname; ?></td></tr>
								<tr><td style='font-size:15;'><b>Gender:</b></td><td style='font-style:italic;font-weight:bold;'><?php echo $gender; ?></td></tr>
								<tr><td style='font-size:15;'><b>Age:</b></td><td style='font-style:italic;font-weight:bold;'><?php echo $age; ?></td></tr>    
								<tr><td style='font-size:15;'><b>Student of:</b></td><td style='font-style:italic;font-weight:bold;'><?php echo $institute; ?></td></tr>        
								<tr><td style='font-size:15;'><b>From:</b></td><td style='font-style:italic;font-weight:bold;'><?php echo $city; ?>,&nbsp;<?php echo $country; ?>.</td></tr>	
								<tr><td style='font-size:15;'><b>Joining Date:</b></td><td style='font-style:italic;font-weight:bold;'><?php echo $time; ?></td></tr> 
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div id='chat_section'>
					<div id='chat_box'>
						<div id='chat'></div> 
					</div>
					<br>
					<form data-toggle="validator" onsubmit='SendToChat();'>
			
						<div>
								<input type="text" class="form-control input-lg" id="message" name="msg" placeholder="Write and Press Enter" style='height:80px;font-size:25px;width:100%;' maxlength='150' onUnfocus="send()" data-error="Should not be Empty" required>
								<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label style='font-size:15px;color:green;'>Also Use: [ ':)'=&#9786; | ':('=&#9785; | '<3'=&#9829; | '(Y)'=&#128077; | '(N)'=&#128078; ]</label>
						</div>
					</form>
				</div>	
			</div> 
			
			<div class="col-sm-4">
				<div id='music_section'>
					<form onsubmit='SendToMusic();'>
						<div class='row'>
							<div class="col-xs-7">
								<select class="form-control" id="music" name="music">
									<option checked>Tum Hi Ho</option>
									<option>Kaise Mujhe Tum</option>
									<option>Kal Ho Naa Ho</option>
									<option>Where The Heart Belongs</option>
									<option>Jadu Teri Nazar</option>
									<option>Dil To Pagal Hai</option>
									<option>Jash-ne-Baharaan</option>
									<option>Chura Liya Hai</option>
								</select>
							</div>
							
							<div class="col-xs-5">
								<button type="submit" name='audio' class="btn btn-success">Play Music</button>
							</div>
						</div>
					</form>
			
					<div id='playmusic'></div>
					<div id='playmusic1'></div>
				</div>
			</div>
	

		</div>
	</div>
</body>
	
</html>