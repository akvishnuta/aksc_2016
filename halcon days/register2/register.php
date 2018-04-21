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
      	
	        <h4><b>Second Phase Registration Form (open for all IEEE members) </b></h4>
	         <p>Register only after you have completed the transaction of AKSC Registration Fee through PayUMoney.<br>
           Keep the <strong>Payment ID</strong> with you for completing the registration and for future reference.
          </p>
          <p>
          In case you miss the Online Payment, please click on the link below to complete the Payment :
          <br><br>
            
            <a target="_blank" href = "https://www.payumoney.com/events/#/buyTickets/www.aksc16.com">
                <span class="state active">
                    <input type="image" src="https://file.payumoney.com/images/payby_payumoney/buttons/312.png" width="131" height="37">
                </span>
                <span class="state clicked" style="display:none" >
                   <input type="image" src="https://file.payumoney.com/images/payby_payumoney/buttons/314.png" width="131" height="37">
                </span>
            </a>
          </p>
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

          
             
          <div class="form-group">
          
            <label class="control-label col-sm-3" for="email">IEEE No.* : </label>
            <div class="col-sm-8" style = "padding-right:5px;">
              
              <input <?php echo $i_no_check; ?> type="text" class="form-control" name = "i_no" id = "i_no" placeholder="IEEE No." value = "<?php echo @$i_no; ?>" />
              <input type="hidden" type="text" class="form-control" id = "i_no" name = "i_no_transfer" placeholder="IEEE No." value = "<?php echo @$i_no; ?>" />
                    <div class="col-sm-12 text-right">
                      <strong><div style= "font-size:12px;" id = "message1"></div></strong>
                    
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
           
          </div>


           <div class="form-group">
           <label class="control-label col-sm-3" for="email">Name* : </label>
            <div class="col-sm-9">
              
              <input disabled type="text" class="form-control" placeholder="Full Name" value = "<?php echo @$Name_Var; ?>"/>
              <input type="hidden"  type="text" class="form-control" name = "name1" placeholder="Full Name" value = "<?php echo @$Name_Var; ?>"/>
            </div>
          </div>


          <!--div class="form-group">
           <label class="control-label col-sm-3" for="email">College* : </label>
            <div class="col-sm-9">
              
              <input disabled type="text" class="form-control" placeholder="College" value = "<?php echo @$Clg_Var; ?>"/>
              <input type="hidden"  type="text" class="form-control" name = "college1" placeholder="Full Name" value = "<?php echo @$Clg_Var; ?>"/>
            </div>
          </div-->

          <div class="form-group">
             <label class="control-label col-sm-3" for="college">College<span class = "star">*</span> :    </label>
             <?php  
            $dbh  = new mysqli($host, $user, $password,  $database)
            or die ('Cannot connect to db');
              $colleges = $dbh->query("select clg from map_locations order by clg");
              echo '<div class="col-sm-9">';
              echo "<select name='college1' class = 'form-control' style = 'width:100%;'>";
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

           <div class="form-group">
                <label class="control-label col-sm-3">Payment ID* : </label>
                <div class="col-sm-9">
                  <input class="form-control" name = "pay_id" type="text" placeholder="Payment ID" />
                </div>
                
              </div>

                <div class="form-group">
              <label class="control-label col-sm-3" style ="font-size:13px;">Preferred Session* : </label>
              <div class="col-sm-9">
              

              <select name="session1" class="form-control">
                <option value=""></option>
                <!--option value="IAS">IEEE IAS</option-->
                <option value="EMBS">IEEE EMBS</option>
                
                </select>
  
            </div>
            </div>
           

              <div class="form-group">
                <label class="control-label col-sm-3">Accomodation* : </label>
                <div class="col-sm-9">
                  <div class="col-sm-4">
                   <input type="checkbox" name="stay[1]" value="stay_12"> <label for="stay_12">August 12</label>
                   </div>
                   <div class="col-sm-4">
                    <input type="checkbox" name="stay[2]" value="stay_13"> <label for="stay_13">August 13</label>
                    </div>
                    <div class="col-sm-4">
                    <input type="checkbox" name="stay[3]" value="stay_14"> <label for="stay_14">August 14</label>
                    </div>
                </div>
                
              </div>

           <!--div class="form-group">
            
              <label class="control-label col-sm-3">College* : </label>
              <div class="col-sm-9">
              <input disabled type="text" class="form-control" placeholder="College" value = "<?php //echo @$Clg_Var; ?>"/>
              <input type="hidden" type="text" class="form-control" name = "college" placeholder="College" value = "<?php //echo @$Clg_Var; ?>"/>
            </div>
          </div-->

   


            <input type="hidden" name = "date1" placeholder="Date" value = "<?php echo @$current_date; ?>"/>
            <input type="hidden" name = "time1" placeholder="Time" value = "<?php echo @$current_time; ?>"/>
            <input type="hidden" name = "c" placeholder="cmd" value = "<?php echo $cmd; ?>"/>
              

				  <div class="form-group">
				      <label class="control-label col-sm-3">Food Preference* : </label>
				      <div class="col-sm-9">
              

              <select name="food" class="form-control">
                <option value=""></option>
                <option value="Veg">Veg</option>
                <option value="Non_Veg">Non-Veg</option>
                
                </select>
  
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
  
    <div class = "row"><div class = "col-sm-5">Copyright © AKSC 2016 . All rights reserved.</div>
     <div class="col-md-3"></div>
    <div class="col-md-4">
                
                
                  <p>For transportation enquiries contact :</p>
                  <p> Ajees Kunnath :
                  <br>
                  <i class="fa fa-mobile"></i> +91 9400436426
                  </p>
                
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
    var a = document.forms["myForm"]["pay_id"].value;
    var b = document.forms["myForm"]["name1"].value;
    var c = document.forms["myForm"]["college1"].value;
    var d = document.forms["myForm"]["food"].value;
    var e = document.forms["myForm"]["session1"].value;

    



    
     if (b==null || b=="") {
        alert("Name must be filled out!");
        return false;}

  else
     if (c==null || c=="") {
        alert("College must be filled out!");
        return false;}

  else
     if (a==null || a=="") {
        alert("Payment ID must be filled!");
        return false;}
  else
     if (d==null || d=="") {
        alert("Food Preference must be selected!");
        return false;}
        else
          if (e==null || e=="") {
            alert("Please Select preferred session!");
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