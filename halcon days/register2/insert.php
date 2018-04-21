

<?php 
//include "../".dirname(__FILE__)."fetch_map.php";
//include "PHPMailer/examples/smtp.php";
/*define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "123");
define('DB_DATABASE', "db_students");
define('DB_DRIVER', "mysql");*/


/*define('DB_SERVER', "aksc16.com");
define('DB_USER', "ieeekera_aksc");
define('DB_PASSWORD', "Career@007");
define('DB_DATABASE', "db_students");
define('DB_DRIVER', "mysql");*/

define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "123");
define('DB_DATABASE', "db_students");
define('DB_DRIVER', "mysql");

$host = "localhost";
$user  = "root";
$password =  "123";
$database = "db_students";

/*$host = "aksc16.com";
$user  = "ieeekera_aksc";
$password =  "Career@007";
$database = "db_students";*/

/*$country = 'Canada';
$capital = 'Ottawa';
$language = 'English & French';*/

$i_no_var =  $_POST['i_no_transfer'];

$name1_var =  $_POST['name1'];
$college_var = $_POST['college1'];
$food_var = $_POST['food'];

$date1_var =  $_POST['date1'];
$time1_var =  $_POST['time1'];

$pay_id_var =  $_POST['pay_id'];
$session_var =  $_POST['session1'];

$stay_12_var = "yes";
$stay_13_var = "yes";
$stay_14_var = "yes";
$stay[1] = "no";
$stay[2] = "no";
$stay[3] = "no";
$stay = $_POST['stay'];

//echo "STAY = ".$stay[1]."<br><br>";
//echo "STAY = ".$stay[2]."<br><br>";


   /*   $emailch = curl_init();
            curl_setopt($emailch,CURLOPT_URL,  "http://akhilkumar.esy.es/email.php");
            curl_setopt($emailch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($emailch, CURLOPT_POST, 1);
            //curl_setopt($emailch, CURLOPT_POSTFIELDS, "Part_id=$participant_id&email=$email&name=$name");
            curl_setopt($emailch, CURLOPT_POSTFIELDS, "name=$name1_var");
        $emailbuffer= curl_exec($emailch);
        curl_close($emailch);

*/

if($stay[1] != "")
{
   $stay[1] = "yes";
//echo "STAY = ".$stay[1]."<br><br>";
}
else
{
  $stay[1] = "no";
  //echo "STAY = ".$stay[1]."<br><br>";
}
if($stay[2] != "")
{
   $stay[2] = "yes";
//echo "STAY = ".$stay[2]."<br><br>";
}
else
{
  $stay[2] = "no";
  //echo "STAY = ".$stay[2]."<br><br>";
}

if($stay[3] != "")
{
   $stay[2] = "yes";
//echo "STAY = ".$stay[3]."<br><br>";
}
else
{
  $stay[3] = "no";
  //echo "STAY = ".$stay[3]."<br><br>";
}



try {


  $dbh  = new mysqli($host, $user, $password,  $database);
  

  $event = $dbh->query("select * from register_s where ieee_no = ".intval($i_no_var));
   if ($i_no_var != "") { 
  if ($event->num_rows>0) {
    $cmd = "Redundant Submission not allowed";
    $i_no_check = "";
    }else

    { 

    $db = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO register_s(date1, time1,ieee_no, name,  clg, food,stay_12,stay_13,stay_14,  pay_id,session) 
    	                   VALUES (:date1, :time1, :i_no, :name1, :college, :food, :stay_12, :stay_13, :stay_14, :pay_id,:session)");

    $stmt->bindParam(':i_no', $i_no_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':name1', $name1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':college', $college_var, PDO::PARAM_STR, 250);
    $stmt->bindParam(':food', $food_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':stay_12', $stay[1], PDO::PARAM_STR, 10);
     $stmt->bindParam(':stay_13', $stay[2], PDO::PARAM_STR, 10);
      $stmt->bindParam(':stay_14', $stay[3], PDO::PARAM_STR, 10);

    $stmt->bindParam(':date1', $date1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':time1', $time1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':pay_id', $pay_id_var, PDO::PARAM_STR, 100);
     $stmt->bindParam(':session', $session_var, PDO::PARAM_STR, 100);
   

    if($stmt->execute()) {
       //create_map();
        //include "/fetch_map.php";
      //create_map();
      $cmd =  "Successfully registered";  
      //sendyahoomail();
    }else
    {$cmd =  "Error in executing command.";}

    $db = null;
  }
}
else
{
  $cmd =  "Page Refresh error.";
}
} catch(PDOException $e) {
    trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
}

?>

<!--META HTTP-EQUIV="refresh" 
      CONTENT="1;URL=http://aksc2016.com"-->

<html>
<head>

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <!--script src="js/vendor/modernizr.js"></script-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic,700,700italic,300' rel='stylesheet' type='text/css'>

    <style>
    body{
      background-image:url("img/section.jpg"); 
      font-family: 'Open Sans', sans-serif;
      color: #fff;

    }


    .box1
    {
      background: linear-gradient(rgba(0,0,1,0.3),rgba(0,0,1,0.3));
      padding: 20px;
      border-radius: 8px;
    }

    </style>
	<title>Successfully Registered</title>
</head>
<body>
<div class = "container">
<div class="row">
  <div class="col-md-6">
  <h1> <div id = "message"></div> </h1>
  <br>
  </div>

</div>

<div class="row">
  <div class="col-md-6">
   <h2> 
   <a style = "text-decoration:none;color:#fff" href = "http://aksc16.com/register2/">
   <button class = "btn btn-primary">Fill in another response</button></a> 
   </h2>
  <br>
  </div>

</div>
</div>
  
 
</body>
</html>

<script>
	document.getElementById("message").innerHTML = "<?php echo @$cmd; ?>";
</script>

