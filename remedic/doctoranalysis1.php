<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cardiac care Heart disease prdction system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="flaticon-pharmacy"></i><span>CaRdIaC</span>CaRe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
  <div>
		  <img src="images/Beating_Heart_animation.gif"  width="200" height="200">
		  </div>
		  <div class="art-shapes">
<h3 class="art-headline" data-left="2.51%">
    <a href="#">HEART DIS</a>EASE
</h3>
<h3 class="art-slogan" data-left="2.51%">Predction System</h3>
</div>
<div class="art-object0" data-left="100%">
</div>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="patientview.php" class="nav-link">Patient View</a></li>
          <li class="nav-item"><a href="diagnosis.php" class="nav-link">Diagnosis</a></li>
          <li class="nav-item"><a href="prediction.php" class="nav-link">prediction </a></li>
          <li class="nav-item"><a href="doctoranalysis1.php" class="nav-link">Analysis</a></li>
           <li class="nav-item"><a href="addtips.php" class="nav-link">Add Tips</a></li>


                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </div>
	<?php
		  session_start();
		  $usr=$_SESSION['username'];
		  echo "<h3>";
		  echo "<font color=blue>";
		  echo "welcome Dr..".$usr;
		  echo "</font>";
		  echo "</h3>";
		  ?>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">The most valuable thing is your Health</h1>
            <p>We care about your health Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
          </div>
        </div>
      </div>
    </div>

<a href="doctorhome.php"><h3>Back to your home page</h3></a>     
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          
		  
	  
		 <?php
		

$con=mysql_connect("localhost","root","");
mysql_select_db("cardiac_care",$con);


$sql1="select * from tbl_result";
$data=mysql_query($sql1,$con);
echo "<center>";
echo "<h3>Results Are.</h3>";
while($row=mysql_fetch_array($data))
{
$pid=$row['pid'];
$ag=$row['age'];
$gen=$row['gender'];
$ang=$row['angina'];
$sug=$row['sugar'];
$res=$row['restecg'];
$slop=$row['slope'];
$caa=$row['ca'];
$tha=$row['thal'];
$bpp=$row['bp'];
$chole=$row['cholestrol'];
$thal=$row['thalach'];
$old=$row['oldpeak'];
$str=$row['string'];

echo "<table bgcolor=white border=1>";
echo "<tr>";
echo"<th>p_id</th>";
echo "<th>Age</th>";
echo "<th>Gender</th>";
echo "<th>angina</th>";
echo "<th>sugar</th>";
echo "<th>restecg</th>";
echo "<th>slope</th>";
echo "<th>ca</th>";
echo "<th>thal</th>";
echo "<th>bp</th>";
echo "<th>Cholestrol</th>";
echo "<th>Thalach</th>";
echo "<th>oldpeak</th>";
echo "<th>string</th>";
echo"</tr>";
echo"<tr>";
echo"<td>$pid</td>";
echo"<td>$ag</td>";
echo"<td>$gen</td>";
echo"<td>$ang</td>";
echo"<td>$sug</td>";
echo"<td>$res</td>";
echo"<td>$slop</td>";
echo"<td>$caa</td>";
echo"<td>$tha</td>";
echo"<td>$bpp</td>";
echo"<td>$chole</td>";
echo"<td>$thal</td>";
echo"<td>$old</td>";
echo"<td>$str</td>";
echo"</tr>";

echo "</table>";
echo "</center>";
}
?>
<form method='POST' enctype='multipart/form-data'>
<center>
Upload CSV FILE: <input type='file' name='csv_info' />
<input type='submit' name='submit' value='Upload' style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/></td>"
</center>
</form>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("cardiac_care",$con);
if(isset($_POST['submit'])){
if($_FILES['csv_info']['name']){
  $arrFileName = explode('.',$_FILES['csv_info']['name']);
   if($arrFileName[1] == 'csv'){
     $handle = fopen($_FILES['csv_info']['tmp_name'], "r");
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
         $id=$data[0];
         $result = $data[2];
     
         $sql="update tbl_result set prediction='$result' where pid='$id'";
 mysql_query($sql);
                                   }
                        fclose($handle);
}
}
}
?>

<br><h3>click the below link to generate the csv file</h3>
<a href="generatecss.php"><h2>GENERATE FILE</h2></a>	
        </div>
      </div>
    </section>

		

 


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
	<center>
			
			<div id="footer_bot">
				<p>Copyright  2017. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Cardiac_care.com</a>, coded by <a href="http://www.myfreecsstemplates.com" title="Free CSS Templates">Free CSS Templates</a><!-- end --></p>
		        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
			</div>
		</div>
		</center>

  </body>
</html>