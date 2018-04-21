<?php
require_once('class.phpmailer.php');
include 'class.smtp.php';

//$mailid=array("varunpnair92@gmail.com","deepakpilli1988@gmail.com");

//$id=$_POST['emailid'];

$sub="events";
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);
$body="";


$body.="test";


echo $body;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.gmail.com"; // sets the SMTP server
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
//$mail->Port       = 25;
$mail->Username   = "logicsoftanil@gmail.com"; // SMTP account username
$mail->Password   = "thuravu6";        // SMTP account password
$mail->SMTPSecure = 'ssl';
$mail->SetFrom('goodlookkitchen@gmail.com', 'Events-reminder');

$mail->AddReplyTo("goodlookkitchen@gmail.com","Events-reminder");

$mail->Subject    = $sub;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);


//send to all




//$address = "varunpnair92@gmail.com";
$mail->AddAddress("akvishnuta@gmail.com", "Events-reminder");

//$mail->AddAttachment("examples/images/att.jpg");      // attachment
//$mail->AddAttachment("examples/images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

	






?>
    













