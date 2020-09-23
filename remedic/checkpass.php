
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
//echo $_SESSION['username'];


  }



  if($err>0)
      echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";
    else if($flag==1 && $type=="admin")
  echo "<script>location.href='adminhome.php'</script>";
  else if($flag==1 && $type=="librarian")
  echo "<script>location.href='librarianhome.php'</script>";
  else if($flag==1 && $type=="student")
  echo "<script>location.href='studenthome.php'</script>";
  else if($flag==1 && $type=="teacher")
 	header('location:teacherhome.php');

  else
   echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";

mysql_close($con);
?>