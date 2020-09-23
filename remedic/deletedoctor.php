<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="delete from tbl_login where username='$id'";
mysql_query($qr,$con);
$dr="delete from tbl_doctor where username='$id'";
mysql_query($dr,$con);
header("location:admindview.php");
?>