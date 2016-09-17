<?php

include("includes/global.inc.php");
   
$selectProfile1 ="select * from  notices where status =1 order by id desc";
$fireProfile1 = mysql_query($selectProfile1) or die(mysql_error());
while($rowProfile1  = mysql_fetch_array($fireProfile1))
{
	$dataTest21.='<li><a href="class-notices.php?id='.$rowProfile1['id'].'">'.$rowProfile1['name'].' </a></li>';
}

include("html/notices.html");

?>