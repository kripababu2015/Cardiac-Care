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
          <li class="nav-item active"><a href="userappoinment.php" class="nav-link">Appoinment</a></li>
          <li class="nav-item"><a href="userresult.php" class="nav-link">Test Result</a></li>
          <li class="nav-item"><a href="usertips.php" class="nav-link">Tips</a></li>
          <li class="nav-item"><a href="userprediction.php" class="nav-link">Predicted Result</a></li>
            <li class="nav-item"><a href="userfedback.php" class="nav-link">Feedback</a></li>
            
            
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </div>
	<?php
		  session_start();
		  $usr=$_SESSION['username'];
		  echo "<h3>";
		  echo "<font color=blue>";
		  echo "welcome.".$usr;
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

    <a href="patienthome.php"><h2>BACK TO YOUR HOME PAGE</h2></a>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <html>
<head>
<title>
</title>
</head>
<body>
<style> 
							#content{
							width: 100%;
							background: #68e70e4d;
							/
							-webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
							animation: mymove 5s infinite;
						}
						
	                        form{
	                             margin: 1cm;
		                         padding: 1cm 0;
		                         border:5px solid white;
		                         left:auto;


		                      }




							/* Chrome, Safari, Opera */
				@-webkit-keyframes mymove {
				from {background-color: #68e70e4d;}
				to {background-color: #ffcccc;}
				}

				/* Standard syntax */
				@keyframes mymove {
				from {background-color: #68e70e4d;}
				to {background-color: #ffcccc;}
				}
			</style>
					
				
			<div id="wrap">
				<div id="content_white">
					<div id="content">
					
					
								
					<div class="col1 pad_left1">
		</div>
<form action="userfedback.php" method="POST">
<table>
<tr><td>Patient_id<span style="color:red">*</span></td>
<td><input type="text" name="pid" maxlength="20" required></td>
</tr>
<tr><td>Date<span style="color:red">*</span></td>
<td><input type="date" name="dat" maxlength="20" required></td>
</tr>
<tr><td>time<span style="color:red">*</span></td>
<td><input type="time" name="tim" maxlength="20" required></td>
</tr>
<tr><td>Feedback<span style="color:red">*</span></td>
<td><input type="tex" name="fed" maxlength="200" required></td>
</tr>
<tr><td></td>
<td><input type="submit" name="btnsubmit" value="submit" OnClick="alert('Thank you for your feedback')" style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/></td>
</tr>
</table>

<?php
if(isset($_POST["btnsubmit"]))
{
$con=mysql_connect("localhost","root","");
mysql_select_db("cardiac_care",$con);

$sql="insert into tbl_feedback values('$_POST[pid]','$_POST[dat]','$_POST[tim]','$_POST[fed]')";
mysql_query($sql,$con);

}
?>
</form>

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
