<?php

function checkProxy ($ip){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://blackbox.ipinfo.app/lookup/$ip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $result = curl_exec($ch);

    if ($result = "y") {
        return false;
    }else{
        return true;
    }
}
function getIp()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
function getBrowser(){
    $browser="Unknown Browser";
    $all=array('/msie/i'=>'Internet Explorer','/firefox/i'=>'Firefox','/safari/i'=>'Safari','/chrome/i'=>'Chrome','/edge/i'=>'Edge','/opera/i'=>'Opera','/netscape/i'=>'Netscape','/maxthon/i'=>'Maxthon','/konqueror/i'=>'Konqueror','/mobile/i'=>'Handheld Browser');
    foreach($all as $regex=>$value){
        if(preg_match($regex,$_SERVER['HTTP_USER_AGENT'])){
            $browser=$value;
        }
    }
    return $browser;
}