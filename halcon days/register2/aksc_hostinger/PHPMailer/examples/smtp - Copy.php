<?php



/*$name1_var =  $_POST['name1'];
$email_var =  $_POST['email'];
$cnt_var = $_POST['cnt'];
$sugg_var = $_POST['sugg'];*/


// define variables and set to empty values
$nameErr = $emailErr = $cntErr = $suggErr = "";
$name1_var = $email_var = $sugg_var = $cnt_var = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name1"])) {
    $nameErr = "Name is required";
  } else {
    $name1_var = test_input($_POST["name1"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email_var = test_input($_POST["email"]);
  } 

 
  if (empty($_POST["sugg"])) {
    $comment = "";
  } else {
    $sugg_var = test_input($_POST["sugg"]);
  }

  if (empty($_POST["cnt"])) {
    $cntErr = "Gender is required";
  } else {
    $cnt = test_input($_POST["cnt"]);
  }

  /*$email_var =  $_POST['email'];
  $cnt_var = $_POST['cnt'];*/


}

if (($nameErr == "")||($comment != "" ))
{

	if(($email_var !="")||($cnt_var !=""))
	{



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

require '../PHPMailerAutoload.php';

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
$mail->Username = "goodlookkitchen@yahoo.com";
//Password to use for SMTP authentication
$mail->Password = "remyvarghese";
//Set who the message is to be sent from
$mail->setFrom('goodlookkitchen@yahoo.com', 'Goodlook Website');
//Set an alternative reply-to address
$mail->addReplyTo('goodlookkitchen@yahoo.com', 'Goodlook Website');
//Set who the message is to be sent to
$mail->addAddress('goodlookkitchen@gmail.com', 'Goodlook');
//Set the subject line
$mail->Subject = 'Enquiry from : '.$name1_var;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->Body = "Name : $name1_var \r\n\r\n<br>E-mail : $email_var:\r\n\r\n<br>Phone : $cnt_var\r\n\r\n<br>Queries :\r\n $sugg_var";
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo"<html>
          <h3>Oopz, Its looks like we got a Mail Error.<br> Please contact us by Phone : +91-944 770 4163</h3>
          <br><p>Goodlook Modular Designs. <br>All rights reserverd</p><html>";
} else {
	echo"<html>
          <h2>Your Message has been sent successfully.<br>We will get back to you soon.</h2><html>";
    //echo "Message sent!";
}
?>

<META HTTP-EQUIV="refresh" 
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
	document.getElementById("message").innerHTML = "<?php echo @$cmd; ?>";
</script>












	}else
	{echo "Either Phone number or E-mail address must be filled.";}
}
{echo "Enter a valid name or comment.";}

