<?php

$username=$_POST['username'];
$password=$_POST['password'];

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
mysql_select_db("cardiac_care", $con);
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
      echo "<script>location.href='indexcopy.php?msg=Invalid Username or Password'</script>";
    else if($flag==1 && $type=="admin")
  echo "<script>location.href='adminpage.php'</script>";
  else if($flag==1 && $type=="doctor")
  echo "<script>location.href='doctorhome.php'</script>";
  else if($flag==1 && $type=="user")
 	header('location:patienthome.php');
 else if($flag==1 && $type=="lab")
 	header('location:labhome.php');
	else if($flag==1 && $type=="hospital")
 	header('location:hospitalhome.php');
  else
   echo "<script>location.href='indexcopy.php?msg=Invalid Username or Password'</script>";

mysql_close($con);
?>