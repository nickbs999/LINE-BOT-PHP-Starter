<?php
$access_token = 'S/vZrZijwRGtX4zgXqnYOsvDBRaMMvNAt5SmMZGd7IYUBcW9H1bpUP2gZ0Y1CWz99ABUcXWK8xj4fRTm0xKnX66A0MnErwGx+AhlRjlULfmJT/g3AK9YiMQSmGoo0EhvFINgDQ9K+aPWT0neKgqUFQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
