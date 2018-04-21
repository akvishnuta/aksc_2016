<?php
include dirname(__FILE__)."/fetch_map.php";
$my_file = 'file.js';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data2 = "";




$data1 = "var locations = [";

$clg = "FISAT";
$place = "Mokkannoor, Angamaly, Angamaly";
$lat = "10.2314542";
$longi = "76.4088477";
$data2 = $data2."['".$clg."', '".$place."', '', '".$lat."', '".$longi."', 'property-detail.html', 'assets/img/properties/property-01.jpg', 'assets/img/property-types/apartment.png'],";
   // "['3398 Lodgeville Road', 'Golden Valley, MN 55427', '$28,000', 10.178164,76.430458, 'property-detail.html', 'assets/img/properties/property-02.jpg', 'assets/img/property-types/apartment.png'],";
$clg = "SCMS";
$place = "Mokkannoor, Angamaly, Angamaly";
$lat = "10.45";
$longi = "76.40";
$data2 = $data2."['".$clg."', '".$place."', '', '".$lat."', '".$longi."', 'property-detail.html', 'assets/img/properties/property-01.jpg', 'assets/img/property-types/apartment.png'],";

$data3 = "];";
//$data = 'var locations = [';
$data = $data1.$data2.$data3;
//$data = "";
echo "file created";

fwrite($handle, $data);



?>