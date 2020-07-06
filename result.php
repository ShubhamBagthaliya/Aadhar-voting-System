<!DOCTYPE html>
<?php
    include_once('src/php/connect.php');
    $check="SELECT vo_count FROM quote WHERE n_id ='1'";
	$ch="SELECT * FROM quote WHERE vo_count IN (SELECT max(vo_count) FROM quote GROUP BY district)";
    $r = mysqli_query($conn,$ch);
	$i=0;
	while($data = mysqli_fetch_array($r))
    {
        $nm[$i]=$data['name'];
  	    $dis[$i]=$data['district'];
  	    $dis[$i]=$data['district'];
         $i++; 
	 }
	 
	 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="src/images/favicon.png" />
    <title>Aadhaar</title>
    <meta name="description" content="" />
    <link rel="image_src" href="src/images/img_head.jpg" />

    <link href="src/css/bootstrap.min.css" rel="stylesheet" />
    <link href='src/css/stylef500.css?v=13' rel='stylesheet' type='text/css' />
    <link href='src/css/responsivee5bf.css?v=12' rel='stylesheet' type='text/css' />
    <link href='src/css/animate.css' rel='stylesheet' type='text/css' />
</head>
<body>
    <section class="section-3">
        <div class="wrapper" style="min-height: 636px;">
            <div class="container">
                <h2>
                  Result
                </h2>

                <div class="text-left">
                In This election total number of people had participated in voting are : 
				  
                <?php
                 session_start();
                 include_once('src/php/connect.php');
                 $check="SELECT COUNT(*) FROM v_count ";
                 $rs = mysqli_query($conn,$check);
                 $data = mysqli_fetch_assoc($rs);
                 $string = implode(';', $data);
                 
				 echo $string;
                echo   '</div>';
                echo '<br><br><br>';
			     for($j=0;$j<$i;$j++)
	             {
		              echo '<div class="block">';
                      echo '<div class="row">';
                      echo '<div class="col-md-3 col-xs-3 text-center">';
                      echo '<div class="icon">';
                      echo "<img src='src/images/nomini/$nm[$j].jpg' class='img-responsive img-circle' alt='' />";
                      echo '</div>';
                      echo '</div>';
		              echo '<h3>';
		              echo $nm[$j];
	                  echo " has win form district ";
		              echo $dis[$j];
                      echo '</div></h3>';	
                      echo '</div><br><br><br>	';
	             }
   		      ?>	   

            </div>
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
