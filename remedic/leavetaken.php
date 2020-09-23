<html> 
<head> 
</head> 
<body> 
<center>  
<h3>EMPLOYEE LEAVE DETAILS</h3>  
<form action="" method=POST>  
<table> 
<tr><td>EMPID</td><td><input type="text" name=eid></td></tr> 
<tr><td>casual</td><td><input type="radio" name=rd 
value="cl"></td><td>Medical</td><td><input type="radio" name=rd value="ml"></td> </tr> 
<tr><td>No.of leaves</td><td><input type="text" name="nls"></td></tr> 
<tr><td></td><td><input type="submit" value="OK" name="btnsubmit"></td></tr> 
</center> 
</table> 
</form> 
</body> 
</html>  
<?php 
 if (isset($_POST["btnsubmit"])) 
 { 
  $con=mysql_connect("localhost","root",""); 
  mysql_select_db("mcaweb",$con); 
  if($_POST['rd']=="cl") 
  { 
  $sql="select casualtaken from leaveinfo where Empid=$_POST[eid]"; 
  $res=mysql_query($sql,$con); 
  while($row=mysql_fetch_array($res)) 
  { 
   $av=$row['casualtaken']; 
   if($av < 15) 
    { 
     $res=15-$av;  
     if($res>=$_POST['nls']) 
     { 
      echo "<h4>leave ia alloweded</h4> "; 
      $sql1="update leaveinfo set 
casualtaken=casualtaken+$_POST[nls] where Empid=$_POST[eid]"; 
      mysql_query($sql1,$con); 
     } 
     else 
     { 
      echo "specified leave can not be given only ".$res." 
leaves can be allowed"; 
      $sql1="update leaveinfo set 
casualtaken=casualtaken+$res where Empid=$_POST[eid]"; 
      mysql_query($sql1,$con); 
     } 
    } 
    else 
     echo  "Not eligible for leaves"; 
   }  
  }  
  if($_POST['rd']=="ml")  
  { 
     $con=mysql_connect("localhost","root",""); 
     mysql_select_db("cnapas",$con); 
     $sql="select medicaltaken from leaveinfo where 
Empid=$_POST[eid]"; 
     $res=mysql_query($sql,$con); 
     while($row=mysql_fetch_array($res)) 
     { 
      $av=$row['medicaltaken']; 
      if($av <20) 
      { 
       $res=20-$av; 
       if($res>=$_POST['nls']) 
       { 
        echo "Leave is alloweded "; 
        $sql1="update leaveinfo set 
medicaltaken=medicaltaken+$_POST[nls] where Empid=$_POST[eid]"; 
        mysql_query($sql1,$con); 
       } 
       else 
       { 
 echo "specified leave can not be given only ".$res." leaves can be allowed"; 
$sql1="update leaveinfo set medicaltaken=medicaltaken+$res where Empid=$_POST[eid]"; 
  mysql_query($sql1,$con); 
       } 
      } 
      else 
       echo "Not eligible for leaves"; 
     } 
   }   
