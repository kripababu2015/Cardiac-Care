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
            <li class="nav-item"><a href="usercomplaint.php" class="nav-link">Complaint Result</a></li>
            
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
<?php
		  session_start();
		  $usr=$_SESSION['username'];
		  echo "<h2>";
		  echo "<font color=blue>";
		  echo "welcome........".$usr;
		  echo "</font>";
		  echo "</h2>";
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

    <h1><font color="#0099FF">Welcome to patients home page </font></h1>
	<h3><marquee><font color="#0066FF" style="border-bottom:groove">YES WE CARE</marquee></h3>
    <section class="ftco-section bg-light">
	
	<style> 
							#content{
							width: 100%;
							background: #68e70e4d;
							/
							-webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
							animation: mymove 5s infinite;
						}
						
	                        form{
	                             margin: 0;
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
         <form>
		 <table border="1">
						<h1><center><b><i><u>Introduction</u></i></b></center></h1><br>
<p><font color="#000000">Heart disease describes a range of conditions that affect your heart. Diseases under the heart disease umbrella include blood vessel diseases, such as coronary artery disease, heart rhythm problems (arrhythmias) and heart defects you’re born with (congenital heart defects), among others.
The term “heart disease” is often used interchangeably with the term “cardiovascular disease”. Cardiovascular disease generally refers to conditions that involve narrowed or blocked blood vessels that can lead to a heart attack, chest pain (angina) or stroke. Other heart conditions, such as those that affect your heart’s muscle, valves or rhythm, also are considered forms of heart disease.
Heart disease is one of the biggest causes of morbidity and mortality among the population of the world. Prediction of cardiovascular disease is regarded as one of the most important subjects in the section of clinical data analysis. The amount of data in the healthcare industry is huge. Data mining turns the large collection of raw healthcare data into information that can help to make informed decisions and predictions.</p>
<p>About 610,000 people die of heart disease in the United States every year–that’s 1 in every 4 deaths.1
Heart disease is the leading cause of death for both men and women. More than half of the deaths due to heart disease in 2009 were in men.1
Coronary Heart Disease(CHD) is the most common type of heart disease, killing over 370,000 people annually.
Every year about 735,000 Americans have a heart attack. Of these, 525,000 are a first heart attack and 210,000 happen in people who have already had a heart attack.
This makes heart disease a major concern to be dealt with. But it is difficult to identify heart disease because of several contributory risk factors such as diabetes, high blood pressure, high cholesterol, abnormal pulse rate, and many other factors. Due to such constraints, scientists have turned towards modern approaches like Data Mining and Machine Learning for predicting the disease.</p>
Age: displays the age of the individual.<br>
Sex: displays the gender of the individual using the following format :<br>
1 = male
0 = female
Chest-pain type: displays the type of chest-pain experienced by the individual using the following format :<br>
1 = typical angina
2 = atypical angina
3 = non — anginal pain
4 = asymptotic
Resting Blood Pressure: displays the resting blood pressure value of an individual in mmHg (unit)<br>
Serum Cholestrol: displays the serum cholesterol in mg/dl (unit)<br>
Fasting Blood Sugar: compares the fasting blood sugar value of an individual with 120mg/dl<br>
If fasting blood sugar > 120mg/dl then : 1 (true)<br>
else : 0 (false)<br>
Resting ECG : displays resting electrocardiographic results<br>
0 = normal
1 = having ST-T wave abnormality
2 = left ventricular hyperthrophy
Max heart rate achieved : displays the max heart rate achieved by an individual.<br>
Exercise induced angina :<br>
1 = yes
0 = no
ST depression induced by exercise relative to rest: displays the value which is an integer or float.<br>
Peak exercise ST segment :<br>
1 = upsloping
2 = flat
3 = downsloping
Number of major vessels (0–3) colored by flourosopy : displays the value as integer or float.<br>
Thal : displays the thalassemia :<br>
3 = normal
6 = fixed defect
7 = reversible defect
Diagnosis of heart disease : Displays whether the individual is suffering from heart disease or not :<br>
0 = absence
1, 2, 3, 4 = present</font>
</table>
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
<center>
			
			<div id="footer_bot">
				<p>Copyright  2017. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Cardiac_care.com</a>, coded by <a href="http://www.myfreecsstemplates.com" title="Free CSS Templates">Free CSS Templates</a><!-- end --></p>
		        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
			</div>
		</div>
		</center>
  </body>
</html>