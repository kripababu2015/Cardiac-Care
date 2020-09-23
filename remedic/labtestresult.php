<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cardiac care Heart disease prdction systeme</title>
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
          <li class="nav-item active"><a href="labviewpatient.php" class="nav-link">view Patient</a></li>
          <li class="nav-item"><a href="labtestdetail.php" class="nav-link">Test Detail</a></li>
          <li class="nav-item"><a href="labtestresult.php" class="nav-link">Test Result</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
<?php
		  session_start();
		  $usr=$_SESSION['username'];
		  echo "<h3>";
		  echo "<font color=blue>";
		  echo "welcome.".$usr;
		  echo "</font>";
		  echo "</h3>";
		  ?>
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

    <a href="labhome.php"><h2>BACK TO YOUR HOME PAGE</h2></a>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <form action="" method="post">
        <br>
        <h2 align="center"><font color="#3333FF" style="border-bottom-color:#09F"  ><b><i><u>Enter the Testresult</u></i></b></font></h2>  <br><br>     
        
         <table>
         
          <tr>
          <td>Patient_id</td>
          <td><select name="pid">

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("cardiac_care",$con);
$sql="select p_id from tbl_dtest";
$cos=mysql_query($sql,$con);
while($row=mysql_fetch_array($cos))
{
?>
<option> <?php echo $row['p_id'] ?> </option>
<?php
}
?></td>
</select>
</tr>
     


           <tr>
          <td>Age</td>
          <td><input type="text" name="age"></td>
          </tr>
           <tr>
          <td>Gender</td>
          <td><input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female">Female</td>
          </tr>
          <tr>
          <td>Angena</td>
          <td><input type="text" name="c1"></td>
          <td>Sugar</td>
          <td><input type="text" name="c2"></td>
          </tr>
          <tr>
          <td>Rest ECG</td>
          <td><input type="text" name="c3"></td>
          <td>Slope</td>
          <td><input type="text" name="c4"></td>
          </tr>
          <tr>
          <td>CA</td>
          <td><input type="text" name="c5"></td>
          <td>Thal</td>
          <td><input type="text" name="c6"></td>
          </tr>
          <tr>
          <td>Blood Pressure</td>
          <td><input type="text" name="c7"></td>
          <td>Cholestrol</td>
          <td><input type="text" name="c8"></td>
          </tr>
          <tr>
          <td>Thalach</td>
          <td><input type="text" name="c9"></td>
          <td>Old Peak</td>
          <td><input type="text" name="c10"></td>
       
          </tr>
         <tr> 
          <td><input type="submit" name="btnsubmit" value="testresult"></td>
          </tr>
          </table>
         </form>
         <?php
include('dbconnect.php');
if(isset($_POST['btnsubmit']))
{
	
$str="";
if(isset($_POST['age']))
{
$ag=$_POST['age'];
if($ag<25)
	$str=$str."low_chance";
	else
	$str=$str."high_chance";
}
if(isset($_POST['gender']))
{
$gen=$_POST['gender'];
if($gen=="female")
	$str=$str."low_chance";
	else
	$str=$str."high_chance";
}


if(isset($_POST['c1']))
{
$angina=$_POST['c1'];
if($angina<100)
	$str=$str."low_angina";
else if($angina<300)
	$str=$str."normal_angina";
	else
	$str=$str."high_angina";
}

 if(isset($_POST['c2']))
{
$sugar=$_POST['c2'];
if($sugar<100)
	$str=$str."low_sugar";
else if($sugar<300)
	$str=$str."normal_sugar";
	else
	$str=$str."high_sugar";
}
if(isset($_POST['c3']))
{
$restecg=$_POST['c3'];
if($restecg<100)
	$str=$str."low_restecg";
else if($restecg<300)
	$str=$str."normal_restecg";
	else
	$str=$str."high_restecg";
}
if(isset($_POST['c4']))
{
$slope=$_POST['c4'];
if($slope<100)
	$str=$str."low_slope";
else if($slope<300)
	$str=$str."normal_slope";
	else
	$str=$str."high_slope";
}
if(isset($_POST['c5']))
{
$ca=$_POST['c5'];
if($ca<100)
	$str=$str."low_ca";
else if($ca<300)
	$str=$str."normal_ca";
	else
	$str=$str."high_ca";
}
if(isset($_POST['c6']))
{
$thal=$_POST['c6'];
if($thal<100)
	$str=$str."low_thal";
else if($thal<300)
	$str=$str."normal_thal";
	else
	$str=$str."high_thal";
}
if(isset($_POST['c7']))
{
$bp=$_POST['c7'];
if($bp<100)
	$str=$str."low_bp";
else if($bp<300)
	$str=$str."normal_bp";
	else
	$str=$str."high_bp";
}

if(isset($_POST['c8']))
{
$cholestrol=$_POST['c8'];
if($cholestrol<100)
	$str=$str."low_cholestrol";
else if($cholestrol<300)
	$str=$str."normal_cholestrol";
	else
	$str=$str."high_cholestrol";
}

if(isset($_POST['c9']))
{
$thalach=$_POST['c9'];
if($thalach<100)
	$str=$str."low_thalach";
else if($thalach<300)
	$str=$str."normal_thalach";
	else
	$str=$str."high_thalach";
}

if(isset($_POST['c10']))
{
$oldpeak=$_POST['c10'];
if($oldpeak<100)
	$str=$str."low_oldpeak";
else if($oldpeak<300)
	$str=$str."normal_oldpeak";
	else
	$str=$str."high_oldpeak";
}






$sql="insert into tbl_result values('$_POST[pid]','$_POST[age]','$_POST[gender]','$_POST[c1]','$_POST[c2]','$_POST[c3]','$_POST[c4]','$_POST[c5]','$_POST[c6]','$_POST[c7]','$_POST[c8]','$_POST[c9]','$_POST[c10]','$str',' ')";

mysql_query($sql,$con);
}
?>

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
<?php
include("footer.php");
?>
  </body>
</html>