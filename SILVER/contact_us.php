<?php

include("includes/global.inc.php");



function returnUrl($page)
	{
		?>
		<script language="javascript" type="text/javascript">
			document.location.href="<?=$page?>";
		</script>
		<?
	}
	


if($_POST)
	{
		
include_once('class.phpmailer.php');


echo $body='<table width="100%" border="0" cellspacing="2" cellpadding="2">
					   
						<td width="24%" align="right">Full Name - </td>
						<td width="76%" align="left">'.$_REQUEST['name'].'</td>
					  </tr>
					  <tr>
						<td align="right">Email Id - </td>
						<td align="left">'.$_REQUEST['email'].'</td>
					  </tr>
					  <tr>
						<td align="right">Contact No. - </td>
						<td align="left">'.$_REQUEST['mobile'].'</td>
					  </tr>
					  <tr>
						<td align="right">Subject - </td>
						<td align="left">'.$_REQUEST['message'].'</td>
					  </tr>
					  
					</table>';
					
			$subject		="Enquiry From Brownian Website";
			$mail             = new PHPMailer(); // defaults to using php "mail()"
			
			$mail->FromName = $_REQUEST['name'];
			$mail->From 	= $_REQUEST['email'];
			$mail->Sender = $_REQUEST['email'];
			$mail->Subject    = $subject;
			 
			$mail->MsgHTML($body);
			$mail->AddAddress("ashutosh.rai@techbizzz.com", "Silver School,");
			$mail->AddCC("sumit.saxena@techbizzz.com", "techbizzz");
			$mail->AddReplyTo($_REQUEST['email'], $_REQUEST['name']);
			if($mail->Send()) {
			 $message = "Message sent!";
			}
			
             returnUrl("contact_us.php?mail=succ");
     }
	 
if($_REQUEST['mail'] = 'succ')
{
	$msg = '<div style="color:#FF0000; border-bottom:dashed 1px #FF0000; border-top:dashed 1px #FF0000; padding:5px 0px; text-align:center; font-weight:bold;">
        Thank you for your enquiring. We will get back to you soon!</div><br />';
	}


include("html/contact_us.html");
?>