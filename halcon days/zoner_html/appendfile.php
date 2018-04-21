<?php
$clg= "";
$place ="";
$lat = "";
$long = "";

$my_file = 'file.js';

$fh = fopen($my_file, 'r+') or die("can't open file");

$stat = fstat($fh);
ftruncate($fh, $stat['size']-2);
fclose($fh); 

$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = "\n"."['".$clg."', '".$place."', '0', ".$lat.",".$long.", '', '', 'assets/img/property-types/apartment.png'],
			];";
fwrite($handle, $data);
echo "<h2>College added Successfully</h2>";

/*$my_file = 'file.js';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$clg = "FISAT";
$data = "var locations = [
    ['".$clg."', 'Mokkannoor, Angamaly', '36', 10.2314542, 76.4088477, 'property-detail.html', 'assets/img/properties/property-01.jpg', 'assets/img/property-types/apartment.png'],
    ['3398 Lodgeville Road', 'Golden Valley, MN 55427', '$28,000', 10.178164,76.430458, 'property-detail.html', 'assets/img/properties/property-02.jpg', 'assets/img/property-types/apartment.png'],

];";
//$data = 'var locations = [';

echo "file created";

fwrite($handle, $data);
*/


?>