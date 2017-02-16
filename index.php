<?php
$access_token = 'YED5raqOz3sYPCZqv3njAKfoDiGoWqpFw1ZUK6UsNUg1Aj3NYjdyOc+HicIrcbvYKZe/itybqX1qGweFfZYupChf1M2MOgBqYHhBFnliDxzow3UoHEulJD1cGOavsAzildgR+gMx/KwNMv9GiWx6pQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
