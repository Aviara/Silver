<?php

include("includes/global.inc.php");
   
$selectProfile2 ="select * from  courses where id = ".$_REQUEST['id'];
$fireProfile2 = mysql_query($selectProfile2) or die(mysql_error());
$rowProfile2  = mysql_fetch_array($fireProfile2);



include("html/list_of_courses.html");

?>