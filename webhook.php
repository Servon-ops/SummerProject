<?php
$token = "6965372309:AAHWsZdl8fdJjv5dbDwWI1EAbH4IoN5yQ58";

$getQuery = array(
"url" => "https://127.0.0.1:8443/index.php",
);
$ch = curl_init("https://api.telegram.org/bot". $token ."/setWebhook?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);

echo $resultQuery;