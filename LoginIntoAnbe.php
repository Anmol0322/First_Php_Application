<?php

$myemail_id = $_GET['email_id'];
$mypassword = $_GET['password']; 
      
$servername="localhost";
$username="root";
$password="sanmol";
$dbname="anbe";

$conn=mysqli_connect($servername,$username,$password,$dbname);


$sql = "SELECT * FROM user WHERE email_id = '$myemail_id' and password = '$mypassword'";

$result = mysqli_query($conn,$sql);
    
      
      $count = mysqli_num_rows($result);

      if($count == 1) {
         
         header("location:AnbeWelcomePage.php?email_id=$myemail_id&password=$mypassword");
       
      }else {
      		echo "Login Failed";
        
      }

$conn->close();

?>