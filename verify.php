<?php
$access_token = 'Si7dwjnHgZSpC/to7Xr+WXQ7vyOV5XHSjUKu/nYfBBouzEKoLKPFTmhx2H4p400bWoQx2nI3XX7R+LoCR3gsW8QOoRsy8BagJSNQOBNebbjy1WEINdVjwgZJ0g4fhY4DRToy6TLzMpJuyq+QSF6QfAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
