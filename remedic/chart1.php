
<?php 
//index.php
include('dbconnect.php');
$query = "SELECT * FROM tbl_result";  
$result = mysql_query($query,$con);
$chart_data = '';
while($row = mysql_fetch_array($result))
{
 $chart_data .= "{ age:'".$row["age"]."', pid:".$row["pid"].", angina:".$row["angina"].", ca:".$row["ca"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Age based problems</h2>
   <h3><a href="admingraph.php">Back</a></h3>
  
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'age',
 ykeys:['pid', 'angina', 'ca'],
 labels:['pid', 'angina', 'ca'],
 hideHover:'auto',
 stacked:true
});
</script>


