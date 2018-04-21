<?php
//function create_map()
//{
error_reporting(E_ALL & ~E_NOTICE);
$host = "localhost";
$user  = "root";
$password =  "123";
$database = "db_students";
 
//$class = 1;
//$i_no = $_POST['i_no'];

// Establish server connection and select database
$dbh  = new mysqli($host, $user, $password,  $database);
 

if ($dbh->connect_error) {
    echo 'Unable to connect to database '. $dbh->connect_error;
}else{

			//$conn = new mysqli($GLOBALS['sqlserver'], $GLOBALS['sqluname'], $GLOBALS['sqlpwd'], $GLOBALS['sqldb']) 
	//or die ('Cannot connect to db');
		$event = $dbh->query("select count_five from reg_count_five");
		while ($row = $event ->fetch_assoc()) {

                      $co = $row['count_five'];
                      $val_co = $co%3;
                      echo $val_co;
        }
	
	if ($val_co == 0)
    {
			//$cmd = "OK";
			//$i_no_check = "disabled";
			if ($stmt = $dbh->prepare("SELECT * FROM map_plot")) {
                    
                   
                        if ($stmt->execute()) {
                            $stmt->bind_result($count_clg, $lat,$longi,$place,$clg);
                            /* fetch associative array */
                          
                             $cmd = "Nothing to plot" ;

                                $my_file = 'file.js';
                                $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
                                $data2 = "";




                                $data1 = "var locations = [";

                               /* $clg = "FISAT";
                                $place = "Mokkannoor, Angamaly, Angamaly";
                                $lat = "10.2314542";
                                $longi = "76.4088477";*/
                                
                                   
                               


                            while ($stmt->fetch()) {
                                //echo $Name. ' -- '. $Email. '<br />';
                               
                                $cmd =  "Map plotted";
                                $count_clg_Var = $count_clg;
                                $lat_Var = $lat;
                                $longi_Var = $longi;
                                $place_Var = $place;
                                $clg_Var = $clg;

                                $data2 = $data2."['".$clg_Var."', '".$place_Var."', '', '".$lat_Var."', '".$longi_Var."', 'property-detail.html', 'assets/img/properties/property-01.jpg', 'assets/img/property-types/apartment.png'],";

                                echo $cmd;
                                echo $count_clg_Var;
                                echo $lat_Var;
                                echo $longi_Var;
                                echo $place_Var;
                                echo $clg_Var;
                                
                              /*echo "Name :<input type='text' value='$name'/>"*/
                            }


                                $data3 = "];";
                                //$data = 'var locations = [';
                                $data = $data1.$data2.$data3;
                                //$data = "";
                                echo "file created";

                                fwrite($handle, $data);

                        }else{
                            echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                        }
                    
                }else{
                    echo "Prepare failed: (" . $stmt->errno . ") " . $stmt->error;
                }
	
        }          
						


   
}

date_default_timezone_set('Asia/Calcutta'); // CDT
$current_date = date('Y-m-d');
$current_time = date('H:i:s');


//}//end of function create map
$dbh->close();
?>


