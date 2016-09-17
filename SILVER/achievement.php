<?php

include("includes/global.inc.php");

$selectTest1="select * from  news where status =1 order by id desc";
$fireTest1 = mysql_query($selectTest1) or die(mysql_error());
while($rowTest11 = mysql_fetch_array($fireTest1))
{
	$dataTest11.='<div class="achievement	">
        <h3>'.$rowTest11['name'].'</h3>
        <img src="news/'.$rowTest11['thumb'].'" alt="Achievement" title="Achievement">  </div>';
}




include("html/achievement.html");

?>