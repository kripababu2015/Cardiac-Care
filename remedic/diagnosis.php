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
          <li class="nav-item"><a href="prediction.php" class="nav-link"> prediction</a></li>
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
		  echo "welcome Dr.".$usr;
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


            <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <form action="" method="post">
        <br>
        <h2 align="center"><font color="#3333FF" style="border-bottom-color:#09F"  ><b><i><u>Enter the Tests</u></i></b></font></h2>  <br><br>     
        
         <table>
         
          <tr>
          <td>Patient_id</td>
          <td><select name="pid">

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("cardiac_care",$con);
$sql="select p_id from tbl_appointment";
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
          <td>Doctor_name</td>
          <td><input type="text" name=dname></td>
          </tr>
           <tr>
          <td>Age</td>
          <td><input type="text" name=age></td>
          </tr>
           <tr>
          <td>Gender</td>
          <td><input type="radio" name=gender value="male">Male
          <input type="radio" name=gender value="female">Female</td>
          </tr>
          <tr>
          <td>Angena</td>
          <td><input type="checkbox" name="c1" value="c1"></td>
          <td>Sugar</td>
          <td><input type="checkbox" name="c2" value="c2"></td>
          </tr>
          <tr>
          <td>Rest ECG</td>
          <td><input type="checkbox" name="c3" value="c3"></td>
          <td>Slope</td>
          <td><input type="checkbox" name="c4" value="c4"></td>
          </tr>
          <tr>
          <td>CA</td>
          <td><input type="checkbox" name="c5" value="c5"></td>
          <td>Thal</td>
          <td><input type="checkbox" name="c6" value="c6"></td>
          </tr>
          <tr>
          <td>Blood Pressure</td>
          <td><input type="checkbox" name="c7" value="c7"></td>
          <td>Cholestrol</td>
          <td><input type="checkbox" name="c8" value="c8"></td>
          </tr>
          <tr>
          <td>Thalach</td>
          <td><input type="checkbox" name="c9" value="c9"></td>
          <td>Old Peak</td>
          <td><input type="checkbox" name="c10" value="c10"></td>
       
          </tr>
         <tr> 
          <td><input type="submit" name="btnsubmit" value="For Test" style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/></td>
          </tr>
                   
         </table>
         </form>
         <?php
$ang=0;
$sug=0;
$ecg=0;
$slop=0;
$ca=0;
$thal=0;
$bp=0;
$chol=0;
$thala=0;
$old=0;
if(isset($_POST["c1"]))
{
$ang=1;
}
else
{
$ang=0;
}
if(isset($_POST["c2"]))
{
$sug=1;
}
else
{
$sug=0;
}
if(isset($_POST["c3"]))
{
$ecg=1;
}
else
{
$ecg=0;
}
if(isset($_POST["c4"]))
{
$slop=1;
}
else
{
$slop=0;
}
if(isset($_POST["c5"]))
{
$ca=1;
}
else
{
$ca=0;
}
if(isset($_POST["c6"]))
{
$thal=1;
}
else
{
$thal=0;
}
if(isset($_POST["c7"]))
{
$bp=1;
}
else
{
$bp=0;
}
if(isset($_POST["c8"]))
{
$chol=1;
}
else
{
$chol=0;
}
if(isset($_POST["c9"]))
{
$thala=1;
}
else
{
$thala=0;
}
if(isset($_POST["c10"]))
{
$old=1;
}
else
{
$old=0;
}
if(isset($_POST["btnsubmit"]))
{




$con=mysql_connect("localhost","root","");
mysql_select_db("cardiac_care",$con);

$sql="insert into tbl_dtest
values('$_POST[pid]','$_POST[dname]','$_POST[age]','$_POST[gender]','$ang','$sug','$ecg','$slop','$ca','$thal','$bp','$chol','$thala','$old')";
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
<center>
			
			<div id="footer_bot">
				<p>Copyright  2017. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Cardiac_care.com</a>, coded by <a href="http://www.myfreecsstemplates.com" title="Free CSS Templates">Free CSS Templates</a><!-- end --></p>
		        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
		</div>
</center>
  </body>
</html>