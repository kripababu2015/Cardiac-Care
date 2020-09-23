
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cardiac care Heart disease prdction system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body
{
margin: 0;
padding: 0;
font-family: san-serif;
background: #34495e;
}
.box
{
width: 300px;
padding: 40px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
background: #003366;
text-align: center;
}
.box h1{
color: white;
text-align: uppercase;
font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
border: 0;
background: none;
display: block;
margin: 20px auto;
text-algin: center;
border: 2px solid #3498db;
padding: 14px 10px;
width: 200px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
width: 280px;
border-color: #2ecc71;
}
.box input[type = "submit"]{
border: 0;
background: none;
display: block;
margin: 20px auto;
text-algin: center;
border: 2px solid #2ecc71;
padding: 14px 40px;
width: 200px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
cursor: pointer;
}
.box input[type = "submit"]:hover{
background: #2ecc71;
}
</style>
    
<body>
<center>
<form class="box" action="check.php" method=post autocomplete="off">
<h1>PLEASE LOGIN HERE</h1>
<input type="text" name="username" placeholder="username"><?php if(isset($_GET['msg'])) echo "<font color=red>$_GET[msg]</font>"; ?>
<input type="password" name="password" placeholder="password">
<input type="submit" name="btnsubmit" value="LOGIN">
</form>
</center>

</body>
</html>