<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="delete from tbl_login where username='$id'";
mysql_query($qr,$con);
$dr="delete from tbl_lreg where username='$id'";
mysql_query($dr,$con);
header("location:adminlview.php");
?>