<?php 
session_start();

include_once 'classes/smtp.server.php';

if(!isset( $_SESSION["authenticated_user_id"])){
	die("<h3>Please login</h3>");
	exit;
}


if(isset($_SESSION['smtp'])){
	$smtp =  $_SESSION['smtp'];
}


//process post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  $smtp_username = trim($_POST["username"]);
  $smtp_password = trim($_POST["password"]);
  $smtp_server = trim($_POST["server"]);
  
	$data = array (
			'username' => $smtp_username,
			'password' => $smtp_password,
			'server' => $smtp_server 
	); 
	
	$_SESSION['smtp'] = $data;
	
	echo json_encode($_SESSION['smtp']);
	exit;
}
?>