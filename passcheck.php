<?php
session_start();


include_once('connect.php');

$check="SELECT * FROM data WHERE a_id = '$_POST[aadhaar]'";
$rs = mysqli_query($conn,$check);

$data = mysqli_fetch_array($rs,MYSQLI_ASSOC);

$_SESSION['phn'] = $data['phn_no'];
$_SESSION['email'] = $data['mail_id'];
$_SESSION['name'] = $data['name'];
$_SESSION['aadhaar']= $_POST['aadhaar'];
if(!isset($_SESSION['aadhaar']))
{
  header('location:../../login.php?msg=please_login');
}
$hash = $data['pass'];
$pass = $_POST['pass'];
echo $hash;
if (password_verify($pass, $hash)) {
	echo "pass match";
    header('location:logotp/process.php');
  } else {
      echo "<script>alert('password is invalid');</script>";
	 }
?>
