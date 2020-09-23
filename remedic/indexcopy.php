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
      <a class="navbar-brand" href="#"><i class="flaticon-pharmacy"></i><span>CaRdIaC</span>CaRe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
	  <div>
		  <img src="images/download.jpg"  width="200" height="200">
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
          <li class="nav-item active"><a href="indexcopy.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="heartinformation.php" class="nav-link">Heart Information</a></li>
          <li class="nav-item"><a href="doctor.php" class="nav-link">Doctors</a></li>

          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
         <!-- <li class="nav-item cta"><a href="contact.php" class="nav-link" data-toggle="modal" data-target="#modalAppointment"><span>Make an Appointment</span></a></li>-->
        </ul>
      </div>
    </div>
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

    <section class="ftco-services">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			
              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-cardiogram"></span> Cardiology</a>
<h2><font color="red" size="+4" style="background-color: #0099FF">Register Here</font></h2>

              <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false">Doctor</a>

              <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false">Patient</a>

              <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false">Laboratory</a>

            </div>
          </div>              
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                <span class="icon mb-3 d-block flaticon-cardiogram"></span>
                <h2 class="mb-4">Cardiology Department</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
				<img src="images/0066.gif">
              </div>
		  
             <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                
                <h2 class="mb-4"><font color="#0066CC"><b><i>Doctor Registration Form</i></b></h2>
<?php
include('dbconnect.php');
//Code to insert into both registration and Login table
if(isset($_POST['btnsubmit1']))
{
$sql="insert into tbl_doctor values('$_POST[id1]','$_POST[d_name]','$_POST[h_id]','$_POST[dept]','$_POST[specialization]','$_POST[year_of_exp]','$_POST[l_no]','$_POST[email]','$_POST[phone]','$_POST[username]','$_POST[password]')";
mysql_query($sql,$con);

$sql1="insert into tbl_login values('$_POST[username]','$_POST[password]','doctor','0')";

mysql_query($sql1,$con);

//echo $sql;

$target_dir = "uploads/";
$target_file=$target_dir .$_POST['id1'].'.jpg';
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],

$target_file) or die('Error'.mysql_error());


}

?>

<?php

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql="select max(d_id) as mid from tbl_doctor";
$data1=mysql_query($sql);
$id=0;
while($row=mysql_fetch_array($data1))
{
 $id=$row['mid'];
}

$id=$id+1;
//echo $id;
?>
<form action="indexcopy.php" method=post autocomplete="off" enctype="multipart/form-data">
Doctor_Id      <?php echo

$id ; ?>    <input type=hidden name=id1  value="<?php echo

$id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only characters">
         <table><tr><td>Doctor Name<span style="color:red">*</span></td>    
		 <td><input name="d_name" class="form_element" pattern="[A-Za-z ]{1,32}" maxlength=18 required ></td></tr>
		 
		 <tr><td>Hospital_id<span style="color:red">*</span></td>  
		 <td><input name="h_id" class="form_element" pattern="[0-9]{1,8}" maxlength=10 required ></td></tr>
		 
		 <tr><td>Department<span style="color:red">*</span> </td>       
		 <td><input name="dept" class="form_element" pattern="[A-Za-z ]{1,32}" maxlength=18 required></td></tr>
		 
		<tr><td>Specialization<span style="color:red">*</span></td>    
		<td><input name="specialization" class="form_element" pattern="[A-Za-z ]{1,32}" maxlength=18 required></td></tr>
		
		<tr><td>Year of experience<span style="color:red">*</span></td> 
		<td><input type=text name="year_of_exp" maxlength=2 required></td></tr> 
		                       
		<tr><td>Liscence Number<span style="color:red">*</span></td>   
		<td><input name="l_no" class="form_element" pattern="[0-9]{1,6}" maxlength=18 required></td></tr>
		
		<tr><td>Email id<span style="color:red">*</span></td>         
		<td><input name="email" type="email"></td></tr>
		
		<tr><td>Contact number<span style="color:red">*</span></td>             
		<td><input name="phone" class="form_element" maxlength="12" minlength="12" required><br>
		
		<tr><td>User Name<span style="color:red">*</span></td>        
		<td><input name="username" class="form_element" required ></td></tr>
		
		<tr>
					<td>Password<span style="color:red">*</span></td>
					<td><input type="password" name="password" class="form_element"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
				</tr>
		
		<tr><td>image<span style="color:red">*</span></td>   <td><input type="file" name="fileToUpload" id="fileToUpload" required></td></tr>
&nbsp&nbsp&nbsp

<tr><td></td> 
			<td>
			 
		 <!--<input type="image" src="images/submit.gif" alt="Submit" width="48" height="48" name="btn_save">-->
			
			<input type="Submit" name="btnsubmit1"  value="Add" onClick="alert('Do you want to add')" style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/>
			
				
			  </td>
			  </tr>		  </table>
				
</form>
</font>
</font>
</font>
</div>
             

              <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
              <h2 class="mb-4"><font color="#0066CC"><b><i>Patient Registration Form</i></b></h2>
                


<?php
include('dbconnect.php');
//Code to insert into both registration and Login table
if(isset($_POST['btnsubmit2']))
{
$sql="insert into tbl_usereg values('$_POST[id1]','$_POST[p_name]','$_POST[sex]','$_POST[age]','$_POST[phone1]','$_POST[user]','$_POST[password1]')";
//echo $sql;

mysql_query($sql,$con);
$sql2="insert into tbl_login values('$_POST[user]','$_POST[password1]','user','1')";
mysql_query($sql2,$con);

//$target_dir = "uploads/";
//$target_file=$target_dir .$_POST['id1'].'.jpg';
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],

//$target_file) or die('Error'.mysql_error());


}

?>

<?php

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql1="select max(p_id) as mid from tbl_usereg";
$data2=mysql_query($sql1);
$id=0;
while($row=mysql_fetch_array($data2))
{
 $id=$row['mid'];
}

$id=$id+1;
//echo $id;
?>
<form action="indexcopy.php" method=post autocomplete="off"  enctype="multipart/form-data">

Patient_Id      <?php echo

$id ; ?>      <input type=hidden name=id1  value="<?php echo

$id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only characters">
<table><tr>
	<td>Name<span style="color:red">*</span></td>            
	<td><input type="text" name="p_name"  maxlength=18 pattern="[A-Za-z ]{1,32}" required></td>
</tr>
<tr>
	<td>sex<span style="color:red">*</span></td>             
	<td><input type="text" name="sex" pattern="[A-Za-z ]{1,32}" maxlength=10 required></td>
</tr>
<tr>
	<td>Age<span style="color:red">*</span></td>              
	<td><input type="text" name="age" pattern="[0-9 ]{1,3}" maxlength=3 required></td>
</tr>
<tr>
	<td>mobile number<span style="color:red">*</span></td>
	<td><input type="text" name="phone1" pattern="[0-9]{10,12}" maxlength=12 required></td>
</tr>
<tr>
	<td>Username<span style="color:red">*</span></td>
	<td><input type="text" name="user" maxlength=18 required></td>
</tr>
<tr>
					<td>Password<span style="color:red">*</span></td>
					<td><input type="password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
				</tr>
		
	<tr>
	<td><input type="Submit" name="btnsubmit2"  value="Add" onClick="alert('Do you want to add')" style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/></td>
</tr>		  
</table>
</form>
</font>
</font>
</font>
</div>

              <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
            
                 <h2 class="mb-4"><font color="#0066CC"><b><i>Laboratory Registration Form</i></b></h2>
                <?php
include('dbconnect.php');
//Code to insert into both registration and Login table
if(isset($_POST['btnsubmit3']))
{
$sql="insert into tbl_lreg values('$_POST[id1]','$_POST[location]','$_POST[email1]','$_POST[contact]','$_POST[user]','$_POST[pswd]')";
echo $sql;

mysql_query($sql,$con);
$sql2="insert into tbl_login values('$_POST[user]','$_POST[pswd]','lab','0')";

mysql_query($sql2,$con);
echo $sql2;
//$target_dir = "uploads/";
//$target_file=$target_dir .$_POST['id1'].'.jpg';
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],

//$target_file) or die('Error'.mysql_error());


}

?>
<?php

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql3="select max(l_id) as mid from tbl_lreg";
$data3=mysql_query($sql3);
$id=0;
while($row=mysql_fetch_array($data3))
{
 $id=$row['mid'];
}

$id=$id+1;
//echo $id;
?>
<form action="indexcopy.php" method=post autocomplete="off" enctype="multipart/form-data">
Lab_Id       <?php echo

$id ; ?>      <input type=hidden name=id1  value="<?php echo

$id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only

characters">
<table>
<tr>
	<td>Location<span style="color:red">*</span></td>          
	<td><input name="location" pattern="[A-Za-z ]{1,32}" maxlength=10 required></td>
</tr>
<tr>
	<td>email id<span style="color:red">*</span></td>         
	<td><input name="email1" type="email1" maxlength=20 required></td>
</tr>
<tr>
	<td>Contact_number<span style="color:red">*</span></td>              
	<td><input name="contact" pattern="[0-9]{10,12}" maxlength=12 required></td>
</tr>
<tr>
	<td>Username<span style="color:red">*</span></td>        
	<td><input name="user" maxlength=20 required></td>
</tr>
<tr>
					<td>Password<span style="color:red">*</span></td>
					<td><input type="password" name="pswd" class="form_element"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
				</tr>


		
	<tr>
	<td><input type="Submit" name="btnsubmit3"  value="Add" onClick="alert('Do you want to add')" style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/></td>
</tr>
</table>
</form>
</font>
</font>
</font>
</font>
</div>


              <div class="tab-pane fade py-5" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
              <h2 class="mb-4"><font color="#0066CC"><b><i>Hospital Registration Form</i></b></h2>
                    <?php
include('dbconnect.php');
//Code to insert into both registration and Login table
if(isset($_POST['btnsubmit4']))
{
$sql="insert into tbl_hreg values('$_POST[id1]','$_POST[location]','$_POST[email2]','$_POST[contact2]','$_POST[year_of_establish]','$_POST[uname]','$_POST[pswd2]')";
//echo $sql;

mysql_query($sql,$con);
$sql2="insert into tbl_login values('$_POST[uname]','$_POST[pswd2]','hospital','0')";
mysql_query($sql2,$con);
//$target_dir = "uploads/";
//$target_file=$target_dir .$_POST['id1'].'.jpg';
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],

//$target_file) or die('Error'.mysql_error());


}

?>
<?php

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql3="select max(hid) as mid from tbl_hreg";
$data4=mysql_query($sql3);
$id=0;
while($row=mysql_fetch_array($data4))
{
 $id=$row['mid'];
}

$id=$id+1;
//echo $id;
?>
<form action="indexcopy.php" method=post autocomplete="off" enctype="multipart/form-data">
Hospital_Id       <?php echo

$id ; ?>      <input type=hidden name=id1  value="<?php echo

$id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only

characters">
                 <br>
<table>
<tr>
	<td>Location<span style="color:red">*</span></td>          
	<td><input name="location" pattern="[A-Za-z ]{1,32}" maxlength=10 required></td>
</tr>
<tr>
	<td>email id<span style="color:red">*</span></td>         
	<td><input name="email2" type="email" maxlength=20 required></td>
</tr>
<tr>
	<td>Contact_number<span style="color:red">*</span></td>             
	<td><input name="contact2" pattern="[0-9]{10,12}" required></td>
</tr>
<tr>
	<td>year of establish<span style="color:red">*</span></td> 
	<td><input name="year_of_establish" pattern="[0-9 ]{4,6}" maxlength=6 required></td>
</tr>
<tr>
	<td>Username<span style="color:red">*</span></td>        
	<td> <input name="uname" maxlength=20 required></td>
</tr>
<tr>
					<td>Password<span style="color:red">*</span></td>
					<td><input type="password" name="pswd2" class="form_element"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
				</tr>


		
	<tr>
	<td><input type="Submit" name="btnsubmit4"  value="Add" onClick="alert('Do you want to add')" style="background:#0066CC; border:thick; padding: 8px 20px; color:#FFFFFF" font-family:Algerian; font-size=30px; height:80%;"/></td>
</tr>
</table>
</form>
</font>
</font>
</font>  
</div>

              <div class="tab-pane fade py-5" id="v-pills-spa" role="tabpanel" aria-labelledby="v-pills-spa-tab">
                <span class="icon mb-3 d-block flaticon-ambulance"></span>
                <h2 class="mb-4">Emergency Departments</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
              </div>
            </div>
          </div>
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
  <div id="footer_top">
			
			
			<center>
			
			<div id="footer_bot">
				<p>Copyright  2017. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Cardiac_care.com</a>, coded by <a href="http://www.myfreecsstemplates.com" title="Free CSS Templates">Free CSS Templates</a><!-- end --></p>
		        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
			</div>
		</div>
		</center>

  </body>
</html>