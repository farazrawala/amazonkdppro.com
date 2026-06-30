<?


$ch = curl_init("https://tgcrm.net/api/form_submission?2018475000&brand_key=".$_GET['brand_key']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_REQUEST);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

echo $response;
exit;
?>