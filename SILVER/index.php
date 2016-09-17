<?php
//error_reporting(E_PARSE | E_ALL | 0);
error_reporting(E_ALL ^ E_DEPRECATED);
//include("includes/global.inc.php");
  $link = mysql_connect('localhost', 'root', '');
    mysql_select_db('school', $link);
   
$selectBanner = "select * from banner where status = 1";
$fireBanner	=	mysql_query($selectBanner ) or die(mysql_error());
$countBanner = mysql_affected_rows();
$dataBanner="";
$homeCommitteeee="";
$homeCommittee1="";
	while($rowBanner = mysql_fetch_array($fireBanner))
		{
					$dataBanner.= '<div data-src="banner/'.$rowBanner['banner_url'].'" data-thumb="banner/'.$rowBanner['banner_url'].'"></div>';	
					  
		}
			
$selectCenter  = "select * from timetable where status = '1' order by id desc " ;
$fireCenter  = mysql_query($selectCenter) or die(mysql_error());
while($rowCenter  = mysql_fetch_array($fireCenter))
{
	echo $homename .='<li><a href="class-timetable.php?id='.$rowCenter['id'].'">'.$rowCenter['title'].'</a></li> ';
	}


//echo $homename;
//exit;
	
$selectCommittee  = "select * from news where status = '1' order by id desc" ;
$fireCommittee  = mysql_query($selectCommittee) or die(mysql_error());
while($rowCommittee  = mysql_fetch_array($fireCommittee))
{
	$homeCommitteeee .='<div class="slide"> <a href="achievement.php"> <img src="news/'.$rowCommittee['thumb'].'" width="280px" height="250px"></a>
                <h3>'.$rowCommittee['name'].'</h3>
              </div>';
	}

//$homeCommittee;

$selectCommittee1  = "select * from notices where status = '1' order by date DESC " ;
$fireCommittee1  = mysql_query($selectCommittee1) or die(mysql_error());
while($rowCommittee1  = mysql_fetch_array($fireCommittee1))
{
	$homeCommittee1 .=' <li><a href="class-notices.php?id='.$rowCommittee1['id'].'">'.$rowCommittee1['name'].'</a></li>';
	}

//include("html/index.html");

?>