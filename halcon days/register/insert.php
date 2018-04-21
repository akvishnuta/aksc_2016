

<?php 
//include "../".dirname(__FILE__)."fetch_map.php";
include "fetch_map.php";
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



/*$country = 'Canada';
$capital = 'Ottawa';
$language = 'English & French';*/

$i_no_var =  $_POST['i_no'];

$name1_var =  $_POST['name1'];
$college_var = $_POST['college'];
$mobile_var = $_POST['mobile'];
$email1_var = $_POST['email1'];
$date1_var =  $_POST['date1'];
$time1_var =  $_POST['time1'];
$gender_var =  $_POST['gender'];
$q1_var =  $_POST['q1'];
$q2_var =  $_POST['q2'];
$q3_var =  $_POST['q3'];
$q4_var =  $_POST['q4'];
$q5_var =  $_POST['q5'];




try {
    $db = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO register(ieee_no, name,  clg, mob, email, date1, time1, gender, q1, q2, q3, q4, q5) 
    	                   VALUES (:i_no, :name1, :college, :mobile, :email1, :date1, :time1, :gender, :q1, :q2, :q3, :q4, :q5)");

    $stmt->bindParam(':i_no', $i_no_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':name1', $name1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':college', $college_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':mobile', $mobile_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':email1', $email1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':date1', $date1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':time1', $time1_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':gender', $gender_var, PDO::PARAM_STR, 100);
    $stmt->bindParam(':q1', $q1_var, PDO::PARAM_STR, 250);
    $stmt->bindParam(':q2', $q2_var, PDO::PARAM_STR, 250);
    $stmt->bindParam(':q3', $q3_var, PDO::PARAM_STR, 250);
    $stmt->bindParam(':q4', $q4_var, PDO::PARAM_STR, 250);
    $stmt->bindParam(':q5', $q5_var, PDO::PARAM_STR, 250);

    if($stmt->execute()) {
       //create_map();
        //include "/fetch_map.php";
      create_map();
      $cmd =  "Successfully registered";  
    }else
    {$cmd =  "Error in executing command.";}

    $db = null;
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
   <a style = "text-decoration:none;color:#fff" href = "http://aksc16.com/register/">
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

