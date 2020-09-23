<?php
include("dbconnect.php");
header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=testdata.csv');
       $output = fopen("php://output", "w");
     fputcsv($output, array('pid','string'));
         $query = "select * from tbl_result";
         $result = mysql_query($query, $con);
         while($row = mysql_fetch_array($result))
         {
              fputcsv($output,array($row['pid'],$row['string']));
             // $sql="update tweet set label=1 where tid='$row[tid]'";
              //mysql_query($sql, $con);
         }
      fclose($output);

?>



