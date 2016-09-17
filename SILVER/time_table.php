<?php

include("includes/global.inc.php");

$selectTest1="select * from  timetable where status =1 order by id desc";
$fireTest1 = mysql_query($selectTest1) or die(mysql_error());
while($rowTest11 = mysql_fetch_array($fireTest1))
{
	$dataTest11.='<li><a href="class-timetable.php?id='.$rowTest11['id'].'"> '.$rowTest11['title'].'</a></li>';
}


include("html/time_table.html");

?>