<?php
   //include('session.php');
   include('process.php');
?>

<!DOCTYPE html>
<html>
   
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AKSC REGISTRATIONS</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
<body>

<div class="row">
<div class="large-12  columns">
<br/>
</div>
</div>

<form name = "myForm" method="post">
<div class="row">
   <div class="large-3  columns">
     
        <span>
        <label>Sort by : </label>
            <select name = "sort1">
                <option <?php if($sort == 'd'){echo("selected");}?> value="d">Date/Time(Latest) </option>
                <option <?php if($sort == 'de'){echo("selected");}?> value="de">Date/Time(Earliest) </option>
                <option <?php if($sort == "i"){echo("selected");}?> value="i">IEEE No </option>
                <option <?php if($sort == 'n'){echo("selected");}?> value="n">Name </option>
                <option <?php if($sort == 'c'){echo("selected");}?> value="c">College </option>
            </select>
        </span>
    </div>
    <div class="large-1  columns">
        </br>  
        <input class="tiny round button" type="submit" value="Refresh"/>
    </div>

    <div class="large-2  columns">
       <p><a href = "logout.php">Sign Out</a></p>
    </div>

</div>
</form>

<div class="row">
<div class="large-12  columns">
<hr/>
</div>
</div>


<div class="row">
<div class="large-12  columns">
<?php
print createTable(array_result($result));
?>
</div>
</div>



</body>
<footer>

<div class="row">
<div class="large-12  columns">
<hr/>
</div>
</div>

</footer>

</html>
