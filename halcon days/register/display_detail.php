<?php
   //include('session.php');
   include('process_detail.php');
?>

<!DOCTYPE html>
<html>
   
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AKSC REGISTRATIONS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
<body>

<div class="row">
<div class="large-12  columns">
<br/>
</div>
</div>

<form name = "myForm" method="post">
<div class="row">
<div class="large-12 medium-12 columns">
<h1>AKSC 2016 REGISTRATIONS </h1>
<p>College Wise List</p>
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
