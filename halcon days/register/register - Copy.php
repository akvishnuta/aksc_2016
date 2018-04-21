<!--<!doctype html>-->
<?php
include dirname(__FILE__)."/fetch.php";
?>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form | Welcome</title>
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
  </head>
  <body>
    <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2><strong>ALL KERALA STUDENT CONGRESS 2016</strong></h2>
      </div>
    </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="col-sm-12 ">
      	
	        <h4><b>Registration Form </b></h4>
	      
      </div>
    </div>

    
      
       
        <hr />
                
        
        <div class="row">
         <div class="col-sm-12">
            <strong><div id = "message1"></div></strong>
            <br>
          </div>
          </div>
          
          <div class="row">
        <form class="form-horizontal" name="myForm" method="post" >
          
          <div class="col-sm-5">
          <div class="form-group box1">
            <label class="control-label col-sm-3" for="email">IEEE No.<span class = "star">*</span> : </label>
            <div class="col-sm-8" style = "padding-right:5px;">
              
              <input type="text" class="form-control" name = "i_no" placeholder="IEEE No." value = "<?php echo @$i_no; ?>" />
              
            </div>
            <div class="col-sm-1" style = "padding-left:0px;">
            <img style = "padding-left:12px;padding-right:15px;" class="animated rotateIn" style = "visibility:hidden;" src = "img/tick_green.png" id  = "tick"/>
            <img style = "margin-top:-25px;padding-left:12px;padding-right:15px;" class="animated shake" style = "visibility:hidden;" src = "img/wrong.png" id  = "wrong"/>
            </div>
            <div class="col-sm-9"> 

            </div>
            <div class="col-sm-1"> 
            <br> 
            <input class="btn btn-primary" type="submit" value="Fetch"/>
           </div>
          </div>
          </div>

          <div class="col-sm-2"></div>
          <div class="col-sm-5 box1" style = "padding-right:30px;">
           <div class="form-group">
           <label class="control-label col-sm-3" for="email">Name<span class = "star">*</span> : </label>
            <div class="col-sm-9">
              
              <input type="text" class="form-control" name = "name1" placeholder="Full Name" value = "<?php echo @$Name_Var; ?>"/>
            </div>
          </div>

           <div class="form-group">
            
              <label class="control-label col-sm-3">College* : </label>
              <div class="col-sm-9">
              <input type="text" class="form-control" name = "college" placeholder="College" value = "<?php echo @$Clg_Var; ?>"/>
            </div>
          </div>


            <input type="hidden" name = "date1" placeholder="Date" value = "<?php echo @$current_date; ?>"/>
            <input type="hidden" name = "time1" placeholder="Time" value = "<?php echo @$current_time; ?>"/>

				  <div class="form-group">
				      <label class="control-label col-sm-3">Phone No. : </label>
				      <div class="col-sm-9">
              <input class="form-control" name = "mobile" type="text" placeholder="Phone No." />
				    </div>
            </div>
				   
				      
              <div class="form-group">
				        <label class="control-label col-sm-3">E-mail* : </label>
				        <div class="col-sm-9">
				          <input class="form-control" name = "email1" type="text" placeholder="E-mail" />
				        </div>
				        
              </div>
				    
           
          
      
				  
          <div class="form-group">
				    
				      <label class="control-label col-sm-3">Gender* : </label>
				      
                <div class="col-sm-9">
              <input name="gender" type="radio" value="Male" id="pokemonRed"/><label for="pokemonRed">Male</label>
				      <input name="gender" type="radio"  value="Female" id="pokemonBlue"/><label for="pokemonBlue">Female</label>
				      </div>
				    
				  </div>
          <div class="col-sm-10"></div>
				 <div class="col-sm-2">
				<input onclick="return validateForm()"  class="btn btn-primary" formaction="insert.php" type="submit" value="Submit"/>
        </div>
        </div>
        </form>
        </div>
        
           
    <hr/>
  
    <div class = "row"><div class = "col-sm-5">© Copyright 2016. All rights reserved.</div>
    </div>
    </div>
    

    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootsrap.min.js"></script>

    <!--script>
      $(document).foundation();
    </script-->
  </body>
</html>

<script>
var y = "<?php echo @$cmd; ?>"
if (y == "Verified")
{ document.getElementById("message1").style.color = "#fff";
 document.getElementById("tick").style.visibility = "visible";
 document.getElementById("wrong").style.visibility = "hidden";
  
  }
else
{ document.getElementById("message1").style.color = "#fff";
  document.getElementById("tick").style.visibility = "hidden";
  document.getElementById("wrong").style.visibility = "visible";
}
 
  document.getElementById("message1").innerHTML = "<?php echo @$cmd; ?>";


function validateForm() {
    var x = document.forms["myForm"]["name1"].value;
    var y = document.forms["myForm"]["college"].value;
    var z = document.forms["myForm"]["email1"].value;
    var g = document.forms["myForm"]["gender"].value;
    if (x==null || x=="") {
        alert("Name must be filled out!");
        return false;
    }
  else
  if (y==null || y=="") {
        alert("College must be filled out!");
        return false;
    }
  
  else
    if (g==null || g=="") {
        alert("Please select gender!");
        return false;}
   else
  if (z==null || z=="") {
        alert("E-mail cannot be null!");
        return false;}
   else
   {   
   var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        alert("Not a valid e-mail address");
        return false;
   
    }
   
   
    }
  
}


window.onload =  function(){
    //document.getElementById("date_label").value = Date();
}

</script>