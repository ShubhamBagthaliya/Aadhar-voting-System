<?php
$servername = "localhost";
$username = "shubham";
$password = "123456";
$dbname = "aadhaar";

// Create connection
//$conn = mysqli_connect ($servername, $username, $password, $dbname);
$conn = mysqli_connect ("localhost","root" ,"", "aadhaar");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else {
//   echo "connection success";
// }
?>
