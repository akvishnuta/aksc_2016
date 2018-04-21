<?php

   $sort = $_POST['sort1'];
   $s = "datetime_l";
    if ($sort == 'i')
        {$s = "ieee_no";}
    if ($sort == 'd')
        {$s = "datetime_l";}
    if ($sort == 'de')
        {$s = "datetime_e";}
    if($sort == 'n')
        {$s = "name";}
    if($sort == 'c')
        {$s = "clg";}
   
        
        db_connect();
        $result = mysql_query("SELECT * FROM register order by {$s}");
         if ($s == 'datetime_l')
                {$result = mysql_query("SELECT * FROM register order by date1 DESC,time1 DESC");}
        if ($s == 'datetime_e')
            {$result = mysql_query("SELECT * FROM register order by date1 ASC,time1 ASC");}


	 /**
	 * Quick mysql result function
	 *
	 * @param $result
	 * @return array
	 */

	function array_result($result)
	{
	    $args = array();	    
	    while ($row = mysql_fetch_assoc($result)) {
	        $args[] = $row;	     
	    }
	    return $args;
	}



	/**
	 * Connect to db
	 * 
	 * @param string $db_host
	 * @param string $db
	 */
	function db_connect($db_host = "localhost", $db = "db_students")
	{
	    $connect = mysql_connect($db_host,"root", "123");
	    if (!$connect) {
	        die(mysql_error());
	    }
	    mysql_select_db($db);
	}

	/**
	 * Create a table from a result set
	 *
	 * @param array $results
	 * @return string
	 */
	function createTable(array $results = array())
	{
		

	    if (empty($results)) {
	        return '<table><tr><td>Empty Result Set</td></tr></table>';
	    }

	    // dynamically create the header information from the keys
	    // of the result array from mysql
	    $table = '<table>';
	    $keys = array_keys(reset($results));
	    $table.='<thead><tr>';
	    $table.='<th>'.'Sl No.'.'</th>';
	    foreach ($keys as $key) {
	        $table.='<th>'.$key.'</th>';
	    }
	    $table.='</tr></thead>';

	    // populate the main table body
	    $table.='<tbody>';
	    $i=1;
	    foreach ($results as $result) {
	        $table.='<tr>';
	        $table.='<td>'.$i.'</td>';
	        $i=$i+1;
	        foreach ($result as $val) {
	        	//$table.='1';
	            $table.='<td>'.$val.'</td>';
	        }
	        $table.='</tr>';
	    }
	    $table.='</tbody></table>';
	    return $table;
	}
?>