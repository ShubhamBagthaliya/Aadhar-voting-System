<?php

include_once('connect.php');
session_start();

if(!isset($_SESSION['aadhaar']))
{
  header('location:../../register.php?msg=please_register');
}

//$name=$_POST['name'];
$aadhaar=$_SESSION['aadhaar'];
$name=$_SESSION['name'];
$phn=$_SESSION['phn'];
$email=$_SESSION['email'];
$dob=$_SESSION['dob'];
$pass = $_SESSION['pass'];
$gender=$_SESSION['gender'];
$options = array(
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    'cost' => 12,
  );
  $password_hash = password_hash($pass, PASSWORD_BCRYPT, $options);
$query2 =  "INSERT INTO data (a_id,name,phn_no,mail_id,dob,pass,gender)
                VALUES ('$aadhaar','$name','$phn','$email','$dob','$password_hash','$gender')";


if (!mysqli_query($conn,$query2))
{
    echo("Error description: " . mysqli_error($conn));
}
else{
  unset($_SESSION['aadhaar']);
  unset($_SESSION['name']);
  unset($_SESSION['phn']);
  unset($_SESSION['email']);
  unset($_SESSION['dob']);
  unset($_SESSION['pass']);
  // destroy the session
  session_destroy();
  header('location:../../index.php');
}

?>
