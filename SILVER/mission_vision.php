<?php

include("includes/global.inc.php");
   
$selectProfile2 ="select * from  pages where pages_id = 3";
$fireProfile2 = mysql_query($selectProfile2) or die(mysql_error());
$rowProfile2  = mysql_fetch_array($fireProfile2);

$selectProfile3 ="select * from  pages where pages_id = 4";
$fireProfile3 = mysql_query($selectProfile3) or die(mysql_error());
$rowProfile3  = mysql_fetch_array($fireProfile3);

include("html/mission_vision.html");

?>