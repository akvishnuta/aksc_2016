<?php

//function sendyahoomail($email_var,$name_var,$p_id)
function sendyahoomail()
{

/*$name1_var =  $_POST['name1'];
$email_var =  $_POST['email'];
$cnt_var = $_POST['cnt'];
$sugg_var = $_POST['sugg'];*/

/*
echo ($name1_var);
echo ($email_var);
echo ($cnt_var);
echo ($sugg_var);*/
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->SMTPSecure = "ssl"; 
//Set the hostname of the mail server
$mail->Host = "smtp.mail.yahoo.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "ieeeimpulse@yahoo.com";
//Password to use for SMTP authentication
$mail->Password = "Tasif123";
//Set who the message is to be sent from
$mail->setFrom('ieeeimpulse@yahoo.com', 'AKSC 2016');
//Set an alternative reply-to address
$mail->addReplyTo('ieeeimpulse@yahoo.com', 'AKSC 2016');
//Set who the message is to be sent to
//$mail->addAddress('akvishnuta@gmail.com', 'Impulse 2.0');

//echo $email_var;
//echo 'hello';
//$mail->addAddress($email_var, 'Impulse 2.0');
$mail->addAddress('akvishnuta@gmail.com', 'AKSC 2016');
//Set the subject line
$mail->Subject = 'AKSC 2016 Registration ';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('PHPMailer/examples/contents.html'), dirname(__FILE__));
$name_var = "AKHIL";
$mail->Body = "Hi, <strong></strong> 
                <br> <br>
                AKSC 2016 has a new registration.
                <br> <br> 
                Name : <strong>$name_var</strong>
                <br> <br>
                <br> <br> 
                College : <strong>$name_var</strong>
                <br> <br> 
                <br> <br> 
                NAME : <strong>$name_var</strong>
                <br> <br> 
                <br> <br> 
                NAME : <strong>$name_var</strong>
                <br> <br> 
                <br> <br> 
                NAME : <strong>$name_var</strong>
                <br> <br> 
                <br> <br> 
                NAME : <strong>$name_var</strong>
                <br> <br>  
                <br> <br> 
                NAME : <strong>$name_var</strong>
                <br> <br> 
                <i>Note : This is a system generated mail.</i>
                <br><br>";
//Replace the plain text body with one created manually
$mail->AltBody = 'AKSC 2106 Registration successfull.';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo"";
} else {
	echo"";
    //echo "Message sent!";
}
}
?>

<!--META HTTP-EQUIV="refresh" 
      CONTENT="4;URL=http://www.goodlookkitchen.com">

<html>
<head>
	<title></title>
</head>
<body>
  <h1> <div id = "message"> </h1>
  
</body>
</html>

<script>
	document.getElementById("message").innerHTML = "<?php //echo @$cmd; ?>";
</script-->
