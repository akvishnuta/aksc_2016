<?php
error_reporting(E_ALL & ~E_NOTICE);
$host = "aksc16.com";
$user  = "ieeekera_aksc";
$password =  "Career@007";
$database = "db_students";
 
//$class = 1;
$i_no = $_POST['i_no'];

// Establish server connection and select database
$dbh  = new mysqli($host, $user, $password,  $database);
 

if ($dbh->connect_error) {
    echo 'Unable to connect to database '. $dbh->connect_error;
}else{

			//$conn = new mysqli($GLOBALS['sqlserver'], $GLOBALS['sqluname'], $GLOBALS['sqlpwd'], $GLOBALS['sqldb']) 
	//or die ('Cannot connect to db');
		$event = $dbh->query("select * from register where ieee_no = ".intval($i_no));
		
		if ($event->num_rows>0) {
			$cmd = "IEEE No. already registered";
			$i_no_check = "";
		}else
		{
			//$cmd = "OK";
			//$i_no_check = "disabled";
			if ($stmt = $dbh->prepare("SELECT name,clg FROM students WHERE ieee_no= ?")) {
                    $i_no = $dbh->real_escape_string($i_no);
                    if ($stmt->bind_param("i", $i_no)) {
                        if ($stmt->execute()) {
                            $stmt->bind_result($Name, $Clg);
                            /* fetch associative array */
                          
                             $cmd = "Please enter a valid IEEE Number" ;

                            while ($stmt->fetch()) {
                                //echo $Name. ' -- '. $Email. '<br />';
                                $i_no_check = "disabled";
                                $cmd =  "Verified";
                                $Name_Var = $Name;
                                $Clg_Var = $Clg;
                                
                              /*echo "Name :<input type='text' value='$name'/>"*/
                            }

                        }else{
                            echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                        }
                    }else{
                        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
                    }
                }else{
                    echo "Prepare failed: (" . $stmt->errno . ") " . $stmt->error;
                }
		}
                  
						


   
}

date_default_timezone_set('Asia/Calcutta'); // CDT
$current_date = date('Y-m-d');
$current_time = date('H:i:s');



?>


