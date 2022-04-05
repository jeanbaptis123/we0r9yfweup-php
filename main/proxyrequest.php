<?php

function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}

// an arbitrary message to users
$message = ''; 

// google analytics user id 
// you need to generate [RFC4122 unique id v4] on your side for each visitor separately
// typically the generated id should be stored in your website's cookie and passed
// to the proxy server each time the user accesses the proxy server
// to properly track the user with google analytics
if(isset($_COOKIE['webproxy_ga'])){
    $analyticsUid = $_COOKIE['webproxy_ga'];
}
else{
    $analyticsUid = gen_uuid(); 
    setcookie("webproxy_ga", $analyticsUid, time()+31536000);
}


// current valid unix timestamp
$urlTimestamp = time();

// user's input form the proxy form
$urlOrSearchQuery = $_POST['url'] ?? null;

// will be provided. DON'T SHARE IT TO ANYONE
$secretKey = 'B9MjVbZNWDSXqJDd80nc6zNwAYZ1C3_Y-SUpb6CA5n8fIUXwdJ';

$proxyServerOrigin = 'https://hosteagle.club';

$json = sprintf(
    '{"urlTimestamp": %s, "message": "%s", "analyticsUid": "%s"}',
    $urlTimestamp, 
    $message,
    $analyticsUid
);

$secureProxyOptionsString = openssl_encrypt(
    $json,
    'AES128',
    $secretKey,
    0,
    "123456789012345\0"
);

$serverUrl = $proxyServerOrigin . '/__cpi.php' .
    '?s=' . urlencode(base64_encode($secureProxyOptionsString)) .
    '&r=' . urlencode(base64_encode($urlOrSearchQuery)) .
    '&__cpo=1';

header('Location: ' . $serverUrl, true, 301);

exit;
