<?php

$username=$_POST['username'];
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];

$count1=0; $count2=0;
$count1=substr_count($username, "'");
$count2=substr_count($password, "'");
$err=0;
if ($count1>0 || $count2>0)
    $err=1;

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("dbconnect", $con);
$result = mysql_query("SELECT * from tbl_login where username='".$username."' and password='".$password."' and status='1'");
$flag=0;
while($row = mysql_fetch_array($result))
  {

  $flag=1;
  $type=$row['type'];

    session_start();
    $_SESSION['user'] = $type; // store session data
    $_SESSION['username'] = $username;



  }



  if($err>0)
  {
       echo "<script>alert('Invalid Username or Password')</script>";
	  echo "<script>location.href='changpass.php'</script>";
	  //"<script>alert('Thanks for Registration'); </script>"
  }
    else 
	{
		$qr="update tbl_login set password='".$newpassword."' where username='".$username."'";
	 echo "<script>alert('Invalid Username or Password')</script>";
	echo "<script>location.href='changpass.php'</script>";
	}
	if (!mysql_query($qr,$con))
  {
  die('Error: ' . mysql_error());

  }

echo "<center>Congrats...Your password is successfully changed!!!! </center>";
mysql_close($con);
?>

