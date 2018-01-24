<?php
$secret = '7elsc10rm4ejd';
$host = 'http://api.ean.com/';

// build path
$ver = 'v3/';
$method = 'list/';
$path = "ean-services/rs/hotel/{$ver}{$method}";

// query parameters
$apiKey = '5qjdrl3pjpj8f8gj6u7b40ofjk';
$cid = '488640';
$minorRev = '[30]';
$customerUserAgent = 'Mozilla/4.0';
$customerIpAddress = '91.232.36.10';
$locale = 'en_US';
$currencyCode = 'USD';
//$hotelId = '201252';

$timestamp = gmdate('U');
$sig = md5($apiKey . $secret . $timestamp);
echo $sig;
$query = "?apikey={$apiKey}&cid={$cid}&sig={$sig}&minorRev={$minorRev}"
. "&customerUserAgent={$customerUserAgent}&customerIpAddress={$customerIpAddress}"
. "&locale={$locale}¤cyCode={$currencyCode}";

// initiate curl
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $host . $path . $query);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:application/json'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$headers = curl_getinfo($ch);

// close curl
curl_close($ch);

// return XML data
if ($headers['http_code'] != '200') {
echo "An error has occurred.";
return false;
} else {
echo $data;
return($data);
}
?>