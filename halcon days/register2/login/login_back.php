<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
     $myusername = mysqli_real_escape_string($db,$_POST['username']);
     $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
     $e_password = md5($mypassword);
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$e_password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: display.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
