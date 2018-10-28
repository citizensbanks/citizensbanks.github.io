<?php
 
 
function getUserIP()
{
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


$ip2 = getUserIP();

$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip2 . ""));
if ($details && $details->geoplugin_countryCode != null) {
     $countrycode = $details->geoplugin_countryCode;

   




}



$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip2 . ""));
if ($details && $details->geoplugin_city != null) {
     $countrycode = $details->geoplugin_city;

  


}




$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip2 . ""));
if ($details && $details->geoplugin_countryName != null) {
    $countryname = $details->geoplugin_countryName;

  

}



$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip2 . ""));
if ($details && $details->geoplugin_city != null) {
    $countrycity = $details->geoplugin_city;

    

}





?>