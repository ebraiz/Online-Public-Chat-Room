<?php
			
date_default_timezone_set("Asia/Karachi");

				
include('includes/db.php');
session_start();

if(isset($_POST['submit'])){
$name = $db->real_escape_string($_SESSION['name']);
$message = trim($db->real_escape_string($_POST['msg']));

if(empty($message) || isset($_SESSION['previous']) && $_SESSION['previous'] == $message){
die();
}
$query = "INSERT INTO chat(name,message, time) VALUES ('$name','$message','" . date("Y-m-d H:i:s") . "')";
$run = $db->query($query);
$_SESSION['previous'] = $message;

if($run){
echo "<audio autoplay><source src='includes/chat.mp3' type='audio/mpeg'></audio>";
exit();
}
	}
?>