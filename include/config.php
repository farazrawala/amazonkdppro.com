
<?php
function getCountryFromIP($ip) {
    $token = '9f6de635cc6a12';
    $url = "https://ipinfo.io/{$ip}/json?token={$token}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);

    $response = curl_exec($ch);
    curl_close($ch);

    if (!$response) {
        return null;
    }

    $data = json_decode($response, true);

    return $data['country'] ?? null;
}

$user_ip = $_SERVER['REMOTE_ADDR'];
$country_code = getCountryFromIP($user_ip);

// Debug (optional)
// echo $user_ip . ' - ' . $country_code;

// if ($country_code === 'PK') {
//     header('HTTP/1.1 403 Forbidden');
//     exit('Access denied.');
// }
?>
<?php
include('function.php');
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

} else {
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

}

//  $actual_link = "http://localhost/brands/prestigebookpublishers.com_895962/";


$actual_link = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . '/';


$url_components = parse_url($url);

define('ADMIN_EMAIL', 'info@amazonkdppro.com');
// define('ADMIN_APP_PASSWORD', 'sgdvebfyagarjuuw');
define('PHONE', '(512) 298-6570 ');
define('PHONE_HREF', 'tel:5122986570');
define('PHONE_TWO', '(512) 298-6570 ');
define('PHONE_TWO_HREF', 'tel:5122986570');
define('EMAIL', 'info@amazonkdpro.com');
define('EMAIL_HREF', 'mailto:info@amazonkdppro.com');
define('CONTACT_EMAIL', 'info@amazonkdpro.com');
define('CONTACT_EMAIL_HREF', 'mailto:info@amazonkdppro.com');
define('ADDRESS', '5900 Balcones Dr, Austin, TX 78731, USA');
define('ADDRESS_Two', '5900 Balcones Dr, Austin, TX 78731, USA');
// define('ADDRESS_HREF', 'https://goo.gl/maps/u8eoXL99pw7bfwhN7');
define('WEBSITE_NAME', 'Amazon KDP Pro');
define('WEBSITE_URL', 'www.amazonkdppro.com');
define('WEBSITE_LOGO', 'https://www.amazonkdppro.com/images/logo.png');


// define('WEBSITE_NAME_PLURAL', "Designs Cube's"); 

// $servername = "localhost";
// $username = "amazonki_amazonkindle_payments";
// $password = ')tW6_MuaQl+3';
// $database = "amazonki_amazonpublishings_payments";

//   // Create DB connection
//   $conn = new mysqli($servername, $username, $password, $database);

//   // Check connection
//   if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//   }

///------ Get Client IP & Address --------
//$get_client_ip = get_client_ip();

//$regionDetail = get_region($get_client_ip);



$country = '';
$city = '';
$state = '';
$address = $city . ', ' . $country;
/// ------ End Code ----------------------------
?>