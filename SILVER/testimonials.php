<?php

include("includes/global.inc.php");
   
$selectProfile1 ="select * from  testimonials where status =1 order by id desc";
$fireProfile1 = mysql_query($selectProfile1) or die(mysql_error());
while($rowProfile1  = mysql_fetch_array($fireProfile1))
{
	$dataTest21.='<div class="content-box">
        <div class="content-td">
          <h3>'.$rowProfile1['name'].'</h3>
          <span>'.$rowProfile1['date'].'</span></div>
        <div class="content-detail">
          <p>'.$rowProfile1['description'].'</p>
        </div>
      </div>';
}

include("html/testimonials.html");

?>