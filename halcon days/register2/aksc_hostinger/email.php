<?php 
//require('creds.php');
require 'PHPMailer/examples/smtp.php';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//$Part_id=$_POST["Part_id"];
	$name=$_POST["name"];
	//$email=$_POST["email"];
	//sendyahoomail($email,$name,$Part_id);
	sendyahoomail();
}
?>