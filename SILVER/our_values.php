<?php

include("includes/global.inc.php");
   
$selectProfile1 ="select * from  pages where pages_id = 5";
$fireProfile1 = mysql_query($selectProfile1) or die(mysql_error());
$rowProfile1  = mysql_fetch_array($fireProfile1);

include("html/our_values.html");

?>