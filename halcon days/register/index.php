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
      <div class="col-sm-5 ">
      	
	        <h4><b>Registration Form </b></h4>
	        <p>*Use Google Chrome or Mozilla Firefox for best experience!</p>
	      
      </div>
     
    </div>

    
      
       
        <hr />
                
        
        <div class="row">
        <div class="col-sm-2">
              
          </div>
          <div class="col-sm-7 text-center">
              
              <!--p style = "font-size:13px;">You are not one of those people who have never opened their IEEE account,are you?<br>      
              Others may kindly proceed. We have power packed sessions planned just for our dedicated volunteers ;)
              </p-->
          </div>

          </div>
          
          <div class="row">
        <form class="form-horizontal" name="myForm" method="post" >
          
          <div class="col-sm-2">
              
          </div>

          
          <div class="col-sm-7 box1" style = "padding-right:30px;">
              <div class = "row">
                <span class="col-sm-11 text-center col-sm-offset-1" style = "text-align: justify;text-justify: inter-word;font-size:13px;padding:20px;">You are not one of those people who have never opened their IEEE account,are you?<br>      
                  Others may kindly proceed. We have power packed sessions planned just for our dedicated volunteers <span style = "font-size:20px;line-height:20px;">;-)</span>
              </span>
            </div>
          <div class="form-group">
          
            <label class="control-label col-sm-3" for="email">IEEE No.<span class = "star">*</span> : </label>
            <div class="col-sm-8" style = "padding-right:5px;">
              
              <input <?php echo $i_no_check; ?> type="text" class="form-control" name = "i_no" id = "i_no" placeholder="IEEE No." value = "<?php echo @$i_no; ?>" />
              <input type="hidden" type="text" class="form-control" id = "i_no" name = "i_no_transfer" placeholder="IEEE No." value = "<?php echo @$i_no; ?>" />
                    <div class="col-sm-12 text-right">
                      <strong><div id = "message1"></div></strong>
                    
                    </div>
                    
            </div>
            <div class="col-sm-1" style = "padding-left:0px;">
            <img  style = "padding-left:12px;padding-right:15px;visibility:hidden;" class="animated rotateIn"  src = "img/tick_green.png" id  = "tick"/>
            <img  style = "margin-top:-25px;padding-left:12px;padding-right:15px;visibility:hidden;" class="animated shake"  src = "img/wrong.png" id  = "wrong"/>
            </div>
            <div class="col-sm-3"> 

            </div>
            <div class="col-sm-1"> 
            <br> 
            <input class="btn btn-success" type="submit" value="Fetch Details"/>
           </div>
           <span class="col-sm-11 text-center col-sm-offset-1" style = "text-align: justify;text-justify: inter-word;font-size:13px;padding:20px;">Details are auto-populated from the IEEE Database. 
                      <br>Now nobody wants someone else using your membership ID,do you?</span>
          </div>


           <div class="form-group">
           <label class="control-label col-sm-3" for="email">Name<span class = "star">*</span> : </label>
            <div class="col-sm-9">
              
              <input disabled type="text" class="form-control" placeholder="Full Name" value = "<?php echo @$Name_Var; ?>"/>
              <input type="hidden"  type="text" class="form-control" name = "name1" placeholder="Full Name" value = "<?php echo @$Name_Var; ?>"/>
            </div>
          </div>

           <!--div class="form-group">
            
              <label class="control-label col-sm-3">College* : </label>
              <div class="col-sm-9">
              <input disabled type="text" class="form-control" placeholder="College" value = "<?php //echo @$Clg_Var; ?>"/>
              <input type="hidden" type="text" class="form-control" name = "college" placeholder="College" value = "<?php //echo @$Clg_Var; ?>"/>
            </div>
          </div-->

             <div class="form-group">
             <label class="control-label col-sm-3" for="college">College<span class = "star">*</span> :    </label>
             <?php  
            $dbh  = new mysqli($host, $user, $password,  $database)
            or die ('Cannot connect to db');
              $colleges = $dbh->query("select clg from map_locations order by clg");
              echo '<div class="col-sm-9">';
              echo "<select name='college' class = 'form-control' style = 'width:100%;'>";
              echo '<option value=""></option>';
              
              while ($row = $colleges ->fetch_assoc()) {

                      unset($names);
                     // $id = $row['Institution_id'];
                      $names = $row['clg']; 
                       //echo '<div class="col-sm-3">';
                      echo '<option value="'.$names.'"';
                      //if(isset($college_id) && $college_id==$id)
                      //{ echo " selected";}
                      echo " selected";
                      echo '>'.$names.'</option>';
                     // echo "</div>";
                     
            } 
            //  echo '<div class="row">';
             echo '<option selected value=""></option>';
              //echo '<option value="Other">Other</option>';
              
              echo "</select>";
              echo "</div>";
            $dbh->close();   
            ?>
            <span class="error"> <?php echo $collegeErr;?></span>
            </div>


            <input type="hidden" name = "date1" placeholder="Date" value = "<?php echo @$current_date; ?>"/>
            <input type="hidden" name = "time1" placeholder="Time" value = "<?php echo @$current_time; ?>"/>
            <input type="hidden" name = "c" placeholder="cmd" value = "<?php echo $cmd; ?>"/>
              <div class="row">
                <span class="col-sm-11 text-left col-sm-offset-1" style = "font-size:13px;padding:20px;"> 
                      <br>Now please fill up you other details as well.</span>
              </div>
              

				  <div class="form-group">
				      <label class="control-label col-sm-3">Phone No.* : </label>
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
				<input onclick="return validateForm()"  class="btn btn-primary" formaction="registerpage2.php" type="submit" value="Next"/>
        </div>
        </div>
        </form>
        </div>
        
           
    <hr/>
  
    <div class = "row">
    <div class = "col-sm-5"><p>© Copyright 2016. All rights reserved.</p></div>
     <div class="col-sm-4 "></div>
      <div class="col-sm-3 text-left">
        
          <p>Incase of any errors, Contact </p>
          <p>Rahul Ravi : 8281779572</p>
        
      </div>
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
 if (document.getElementById("i_no").value != "")
 {
 
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
}

function validateForm() {
    $.get(<?php $i_no_check = "" ?>);
    var x = document.forms["myForm"]["name1"].value;
    var y = document.forms["myForm"]["college"].value;
    var z = document.forms["myForm"]["email1"].value;
    var g = document.forms["myForm"]["gender"].value;
    var h = document.forms["myForm"]["mobile"].value;
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
    if (h==null || h=="") {
      alert("Please enter Phone Number!");
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