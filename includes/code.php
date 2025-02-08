<?php
include('dbcon.php');


 if(isset($_POST['register_btn']))
 {
  $name = $_POST['name'];
  $email = $_POST['email'];

  //Email Exists or not 
  $check_email_query = "SELECT email FROM users WHERE email ='$email' LIMIT 1";
  $check_email_query_run = mysqli_query($con,$check_email_query);

  if(mysqli_num_rows($check_email_query_run) > 0)
  {
    $_SESSION['status'] = "Email Id already Exists";
    "Location: adminLogin.php";
  }else
  {
    $query = "INSERT INTO users (name,email,password,verify_token) values ('$name','$email','$password','$verify_token')";

    
  }



 }

?>