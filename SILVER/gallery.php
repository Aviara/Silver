<?php 
session_start();
include("includes/global.inc.php");


$selectQuality1 = "SELECT * FROM directoryimagefoldernamelist where id != '32'";
$fireQuality1 = mysql_query($selectQuality1) or die(mysql_error());
while($rowQuality1	 = mysql_fetch_array($fireQuality1))
{
	
	$Quality1 .="<option value=photogallery.php?cid=".$rowQuality1['directoryName'].">".$rowQuality1['directoryName']."</option>";
	//$Cost .='<li><a href="cost.php?ktype='.$rowQuality['id'].'"><span>'.$rowQuality['kaizentype'].'</span></a></li>';
		
	}
	
If($_REQUEST['cid'] == '')
{
	
   $selectphotogallery = "SELECT * FROM plantphotos_gallery_details GROUP BY directoryName order by id desc";

$firephotogallery = mysql_query($selectphotogallery) or die(mysql_error());
while($rowphotogallery	 = mysql_fetch_array($firephotogallery))
{
		$photogallery .='<div class="gallery-sec">
        <h3>'.$rowphotogallery['directoryName'].'</h3>
        <img src="gallery/'.$rowphotogallery['imageName'].'" alt="Photogallery" title="Photogallery"> <a href="gallery.php?cid='.$rowphotogallery['directoryName'].'" class="btn-one-half">View More Photo</a> </div>';
		
}	
}

If($_REQUEST['cid'] != '' )
{
	
   $selectphotogallery = "SELECT * FROM plantphotos_gallery_details where directoryName = '".$_REQUEST['cid']."'";

$firephotogallery = mysql_query($selectphotogallery) or die(mysql_error());
while($rowphotogallery	 = mysql_fetch_array($firephotogallery))
{
		$photogallery .='
		 <li style="padding-bottom:0px !important;"><a href="gallery/'.$rowphotogallery['imageName'].'" rel="prettyPhoto[gallery1]"><img src="gallery/'.$rowphotogallery['imageName'].'"  alt="'.$rowphotogallery['imageName'].'" title="'.$rowphotogallery['imageName'].'" style="height:140px; width:200px;  margin-bottom:0px !important;"/></a></li>';
}
}

include("html/gallery.html");
?>