<?php
$access_token = '/7rz6CmWQeM5lnOjRwvE1QjwC5KH6wOfuIyw+dg7y9PhiDXnJkfZ//0jo5lrZIlJwNlNttHixB6gZfv9OXDRyS3F7YQeGQL+kd4gRCZZEmcqYrNm4T5mdTpRyHJbQbGKj3hBJI9ah8U4sdZyzWiRYwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
