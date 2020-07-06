<?php
include_once('connect.php');
session_start();
if(!isset($_SESSION['aadhaar']))
{
  header('location:../../login.php?msg=please_login');
}
$aadhaar=$_SESSION["aadhaar"];

$query2 =  "INSERT INTO v_count(a_id,c_no) VALUES ('$aadhaar','1')";
$query1 = "UPDATE quote SET vo_count=vo_count+1 WHERE n_id=1";

if (!mysqli_query($conn,$query2))
{
    echo("Error description: " . mysqli_error($conn));
}
else if(!mysqli_query($conn,$query1))
{
	echo ("Error Description: " . mysqli_error($conn));
}
else{

    header('location:../../thank.php');
}
?>
