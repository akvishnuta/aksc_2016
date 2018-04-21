var y = "<?php echo @$cmd; ?>"
if (y == "Verified")
{ document.getElementById("message1").style.color = "#fff";}
else
{ document.getElementById("message1").style.color = "#fff";}
 
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
  //document.getElementById("demo123").innerHTML = Date();
    //document.getElementById("demo").value = Date();
}