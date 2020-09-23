<?php
include('dbconnect.php');
$query = "SELECT * FROM tbl_result";  
$result = mysql_query($query,$con);
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                        
							  while($row = mysql_fetch_array($result))
                          {  
                              echo "['".$row["age"]."', ".$row["pid"]."],";   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'based on age',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));  
                chart.draw(data, options);  
           }  
           </script>  
		  
		    
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  
				 <h3><a href="admingraph.php">Back</a></h3>
                <br />  
                <div id="columnchart_values" style="width: 300px; height: 300px;"></div>  
			
           </div>  



