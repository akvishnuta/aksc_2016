<!--<!doctype html>-->
<?php
//include dirname(__FILE__)."/fetch.php";

//$i_no_var =  $_POST['i_no'];
$i_no_var = $_POST['i_no_transfer'];
//echo $i_no_var;
$i_no_check = "";
$name1_var =  $_POST['name1'];
$college_var = $_POST['college'];
$mobile_var = $_POST['mobile'];
$email1_var = $_POST['email1'];
$date1_var =  $_POST['date1'];
$time1_var =  $_POST['time1'];
$gender_var =  $_POST['gender'];
$cmd_var =  $_POST['c'];

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
         
          </div>
          
          <div class="row">
        <form class="form-horizontal" name="myForm" method="post" >
          
          <div class="col-sm-2">
          <?php/*
            $i_no_var =  $_POST['i_no'];
            $name1_var =  $_POST['name1'];
            $college_var = $_POST['college'];
            $mobile_var = $_POST['mobile'];
            $email1_var = $_POST['email1'];
            $date1_var =  $_POST['date1'];
            $time1_var =  $_POST['time1'];
            $gender_var =  $_POST['gender'];
            $cmd_var =  $_POST['c'];
          */?>
              <input type="hidden" name = "i_no"  value = "<?php echo $i_no_var; ?>"/>
              
              <input type="hidden" name = "name1"  value = "<?php echo $name1_var; ?>"/>
              <input type="hidden" name = "college"  value = "<?php echo $college_var; ?>"/>
              <input type="hidden" name = "mobile"  value = "<?php echo $mobile_var; ?>"/>
              <input type="hidden" name = "email1" value = "<?php echo $email1_var; ?>"/>
              <input type="hidden" name = "date1" value = "<?php echo $date1_var; ?>"/>
              <input type="hidden" name = "time1"  value = "<?php echo $time1_var; ?>"/>
              <input type="hidden" name = "gender"  value = "<?php echo $gender_var; ?>"/>
              <input type="hidden" name = "c"  value = "<?php echo $cmd_var; ?>"/>
             
          </div>

          
          <div class="col-sm-7 box1" style = "padding-right:30px;">

  

           <div class="form-group">
           <label class="col-sm-12 text-left" for="email" style = "font-size:13px;padding:20px;">
           				Are you a member of any IEEE Society?If yes,list them. Else leave as NIL. : 
			</label>

            <div class="col-sm-12">
              
              <textarea type="text" class="form-control" name = "q1" placeholder="Answer 1 maximum 500 characters"></textarea>  
            </div>
          </div>	

        	<div class="row">
                <span class="col-sm-12 text-center" style = "font-size:16px;padding:20px;"> 
                      <br>Now please fill up your other details as well...</span>
              </div>
			
           <div class="form-group">
           <label class="col-sm-12 text-left" for="email" style = "font-size:13px;padding:20px;">How active are you within your SB?<br> 
														List your initiatives and volunteering within the Student Branch.<br>
														To the ones who put in their blood and sweat to run their student Branch - we were expecting you  :)<br>
														(*Inner Peace*, Now shoot out the Truth !!)
			</label>

            <div class="col-sm-12">
              
              <textarea type="text" class="form-control" name = "q2" placeholder="Answer 2 maximum 500 characters"></textarea>  
            </div>
          </div>	

           <div class="form-group">
           <label class="col-sm-12 text-left" for="email" style = "font-size:13px;padding:20px;">
           We rely on the superpowers of our fellow volunteers to drive us forward.<br>
			How active are you within our Section? List out your volunteering details within Kerala Section ?<br><br>
			(I do solemnly swear to tell the truth, the whole truth, and nothing but the truth)  ;)

			</label>

            <div class="col-sm-12">
              
              <textarea type="text" class="form-control" name = "q3" placeholder="Answer 3 maximum 500 characters"></textarea>  
            </div>
          </div>  

          <div class="form-group">
           <label class="col-sm-12 text-left" for="email" style = "font-size:13px;padding:20px;">
           We look to inspire people with a strong affinity towards technology for AKSC 2016. List your technical abilities and your areas of interest.<br> 
			ഒന്നും കൂടി ഒന്നു ആലോചിച്ചു നോക്കിക്കേ.ഇതൊക്കെ അറിയാല്ലോ അല്ലെ?   ;)
			</label>

            <div class="col-sm-12">
              
              <textarea type="text" class="form-control" name = "q4" placeholder="Answer 4 maximum 500 characters"></textarea>  
            </div>
          </div>  

           <div class="form-group">
           <label class="col-sm-12 text-left" for="email" style = "font-size:13px;padding:20px;">
          What would be your take away from AKSC 2016?<br>
          We know you will not bore us with cliches like “Networking opportunities, Forward my volunteering capabilities…..”

			</label>

            <div class="col-sm-12">
              
              <textarea type="text" class="form-control" name = "q5" placeholder="Answer 5 maximum 500 characters"></textarea>  
            </div>
          </div>  
          <!--div class="form-group">
				    
				      <label class="control-label col-sm-3">Gender* : </label>
				      
                <div class="col-sm-9">
              <input name="gender" type="radio" value="Male" id="pokemonRed"/><label for="pokemonRed">Male</label>
				      <input name="gender" type="radio"  value="Female" id="pokemonBlue"/><label for="pokemonBlue">Female</label>
				      </div>
				    
				  </div-->
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
{ //document.getElementById("message1").style.color = "#fff";
 //document.getElementById("tick").style.visibility = "visible";
 //document.getElementById("wrong").style.visibility = "hidden";
  
  }
else
{ //document.getElementById("message1").style.color = "#fff";
  //document.getElementById("tick").style.visibility = "hidden";
  //document.getElementById("wrong").style.visibility = "visible";
}
 
  document.getElementById("message1").innerHTML = "<?php echo @$cmd; ?>";


function validateForm() {
    var a = document.forms["myForm"]["name1"].value;
    var b = document.forms["myForm"]["college"].value;
    var c = document.forms["myForm"]["email1"].value;
    var d = document.forms["myForm"]["gender"].value;
    var e = document.forms["myForm"]["mobile"].value;


    var x = document.forms["myForm"]["q1"].value;
    var y = document.forms["myForm"]["q2"].value;
    var z = document.forms["myForm"]["q3"].value;
    var g = document.forms["myForm"]["q4"].value;
    var h = document.forms["myForm"]["q5"].value;
    if (x==null || x=="") {
        alert("Question 1 must be filled out!");
        return false;
    }
  else
  if (y==null || y=="") {
        alert("Question 2 must be filled out!");
        return false;
    }
  
  else
    if (z==null || z=="") {
        alert("Question 3 must be filled out!");
        return false;}
   else
  if (g==null || g=="") {
        alert("Question 4 must be filled out!");
        return false;}
  else
  if (h==null || h=="") {
        alert("Question 5 must be filled out!");
        return false;}
  else
     if (a==null || a=="") {
        alert("Name must be filled out!");
        return false;}
  else
     if (b==null || b=="") {
        alert("College must be filled out!");
        return false;}

  else
     if (c==null || c=="") {
        alert("Email must be filled out!");
        return false;}

  else
     if (d==null || d=="") {
        alert("Gender must be selected!");
        return false;}

  else
     if (e==null || e=="") {
        alert("Mobile number must be filled out!");
        return false;}
 /*  else
   {   
   var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        alert("Not a valid e-mail address");
        return false;
   
    }
   
   
    }*/
  
}




window.onload =  function(){
    //document.getElementById("date_label").value = Date();
}

</script>