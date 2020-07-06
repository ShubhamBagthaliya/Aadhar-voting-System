<!DOCTYPE html>
<?php
session_start();
$conn = mysqli_connect ("localhost","root" ,"", "aadhaar");
if(!isset($_SESSION['aadhaar']))
{
  header('location:login.php?msg=please_login');
}
$name = $_SESSION['name'];
$adhar=$_SESSION['aadhaar'];
$sql="SELECT name,district FROM data WHERE a_id=$adhar";
$quot=mysqli_query($conn,$sql);
$data1 = mysqli_fetch_array($quot);
$_SESSION['district']=$data1['district'];
$name=$data1['name'];
echo $_SESSION['district'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="src/images/favicon.png" />
    <title>Aadhaar</title>

    <link href="src/css/bootstrap.min.css" rel="stylesheet" />
    <link href='src/css/stylef500.css?v=13' rel='stylesheet' type='text/css' />
    <link href='src/css/responsivee5bf.css?v=12' rel='stylesheet' type='text/css' />
    <link href='src/css/animate.css' rel='stylesheet' type='text/css' />
<style>
ul {
	position: fixed;
	top: 0;
	width: 100%;
	list-style-type: none;
    margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}

li {
	float : left;
}

li a {
	display: block;
	padding: 14px 16px;
	text-align: left;
}
li a:hover {
	background-color: #111;
}
.active{
	baackgground-color: #4CAF50;
}
h3 {
      color: red;
}
</style>
</head>

<body style="padding-top:0px;">
   <section class="section-8">  
	<div><h3>
	<ul>
	   <li><a href ="dashbord.php">Home</a></li>
       <li><a href ="news.php">News</a></li>
	   <li><a href ="result.php">Result</a></li>
	   <li><a href ="contact.php">Contact</a></li>
	 </div></h3>
   	 <br>
      <h1>
     <div>&nbsp;<?php echo $name;?></div>
   </h1>
             <br><br>
			 <h2 aign="left">to give vote click below buton</h2>
             
                
                    <div class="block block-1 banner">
                      <h2>  <a class="btn-round btn-gradient" href="vote.php" style="float: left;">Vote</a></h2>
                                         <br><br><br><br><br>
										 <h4 style="float: left;">To watch view reult of voting click view esult of voting :  </h4><br>
										 <br><h3><a class href="result.php" style="float: center;">view Result of voting</a></h3s>
                       	</div>
                      
             </section>


    <!--END-POP-->
    <script type="text/javascript" src="src/js/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/app.js"></script>
    <script type="text/javascript" src="src/js/wow.min.js"></script>
    <script type="text/javascript" src="src/js/SmoothScroll.js"></script>

</body>


</html>
