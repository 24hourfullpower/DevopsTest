<?php

function getdata() {
        
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT customer_name, customer_age FROM customer';
   mysql_select_db('aon_db');
   $output = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($output, MYSQL_ASSOC)) {
      echo "Customer Name :{$row['customer_name']}  <br> ".
         "Customer Age : {$row['customer_age']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully";
   
   mysql_close($conn);
}
?>
