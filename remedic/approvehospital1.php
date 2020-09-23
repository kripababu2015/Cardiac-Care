<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="update tbl_login set status='1' where username='$id'";
mysql_query($qr,$con);
header("location:admindview.php");
?>
