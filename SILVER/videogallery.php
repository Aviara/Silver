<?php

include("includes/global.inc.php");

$selectTest1="select * from  video where status =1 order by id desc";
$fireTest1 = mysql_query($selectTest1) or die(mysql_error());
while($rowTest11 = mysql_fetch_array($fireTest1))
{
	$dataTest11.='<div class="video-box">
        <div class="embed-container">'.$rowTest11['ifram'].'</div></div>';
}


include("html/videogallery.html");

?>