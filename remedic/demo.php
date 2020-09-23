<html>
<body>
<?php
include('dbconnect.php');

//Code to insert into both registration and Login table
if(isset($_POST['btnsubmit']))
{
$sql="insert into tbl_doctor values
('$_POST[id1]','$_POST[d_name]','$_POST[h_id]','$_POST[dept]','$_POST[specialization]','$_POST[year_of_exp]','$_POST[l_no]','$_POST[email]',
'$_POST[phone]','$_POST[username]','$_POST[password]','$_POST[c_password]')";
echo $sql;
$sql1="insert into tbl_login values('$_POST[username]','$_POST[password]','doctor','0')";
mysql_query($sql,$con);
mysql_query($sql1,$con);

}

?>

<?php

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql="select max(d_id) as mid from tbl_doctor";
$data=mysql_query($sql);
$id=0;
while($row=mysql_fetch_array($data))
{
 $id=$row['mid'];
}

$id=$id+1;
echo $id;
?>
<form action="doctorhome.php" method=post  enctype="multipart/form-data">
<pre>
Id      <input name="id" disabled=disabled value="<?php echo

$id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only

characters">
                   <input type=hidden name="id1" value="<?php echo $id ; ?>" >
Name               <input name="d_name" required=required maxlength=18>
Hospital ID        <input name="h_id">
Department         <input name="dept">
Specialization     <input name="specialization">
Year of Experience <input name="year_of_exp">
liscence no        <input name="l_no">
Email              <input type="email" name="email">
Phone              <input name="phone" pattern="[0-9]{10,12}">
username           <input name="username">
Password           <input name="password" type="password" >
confirm Password   <input name="c_password" type="password" >
<input type="submit" name="btnsubmit" value="Save">
</pre>
</form>
</body></html>

