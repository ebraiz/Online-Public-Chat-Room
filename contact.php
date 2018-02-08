<div class="container">
<div class="form-group">
<h4><b>Feel Free To Send Us a Sweet Feedback :)</b></h4>
</div>

<form data-toggle="validator" class="form-horizontal" method="POST" action="chatroom.php">

<div class="form-group">
	<div class="col-sm-6">
	<h4><b>Your Email:</b></h4>
		<input type="email" class="form-control input-sm" name="from" maxlength="40" data-minlength="5" data-error="Invalid Email" placeholder="xyz@gmail.com" required>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
	<div class="col-sm-6">
	<h4><b>Subject:</b></h4>
		<input type="text" class="form-control input-sm" name="subject" maxlength="30" data-minlength="5" data-error="Invalid Subject" placeholder="Nice" required>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
	<div class="col-sm-6">
	<h4><b>Message:</b></h4>
		<textarea class="form-control input-sm" rows="5" name="message" maxlength="1000" data-minlength="5" data-error="Incomplete Message" required></textarea>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group" style="padding-left:15px;">
<button type="submit" name="send" class="btn btn-danger btn-sm" style="width:48%;"><subtitle>Click To Send</subtitle></button>
</div>

</form>
</div>

<?php
if(isset($_POST['send'])){

$from = $_POST['from'];	
$subject = $_POST['subject'];
$message = $_POST['message'];

mail('cricchamber@gmail.com',$subject,$message,"From:".$from);

echo "<script>swal('Congratulations! Your Feedback has been send Successfully!')</script>";	
}
?>