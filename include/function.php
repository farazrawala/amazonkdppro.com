<?php 
//get Client IP Address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function get_region($ip){
    
    
    $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
   
    $region_detail = [
        'country'   => $ipdat->geoplugin_countryName,
        'city'      => $ipdat->geoplugin_city,
        'state'     => $ipdat->geoplugin_regionName,
        'timezone'  => $ipdat->geoplugin_timezone,    
        'code'      => $ipdat->geoplugin_countryCode     
    ]; 
    
    return $region_detail;
}

$get_client_ip  =   get_client_ip();
    
$regionDetail   =   get_region($get_client_ip);
    
$country        =   $regionDetail['country'];
$city           =   $regionDetail['city'];
$state          =   $regionDetail['state'];
$countryCode    =   $regionDetail['code'];
$address        =   $city.', '.$country;


if($country == 'Australia' || $country == 'New Zealand'){
   $currencySymbol = "A$";
}else{
   $currencySymbol = "$"; 
}

//echo "country: " . $country;

?>