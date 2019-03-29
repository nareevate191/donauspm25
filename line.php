 <?php
  

function send_LINE($msg){
 $access_token = '/7rz6CmWQeM5lnOjRwvE1QjwC5KH6wOfuIyw+dg7y9PhiDXnJkfZ//0jo5lrZIlJwNlNttHixB6gZfv9OXDRyS3F7YQeGQL+kd4gRCZZEmcqYrNm4T5mdTpRyHJbQbGKj3hBJI9ah8U4sdZyzWiRYwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        //'type' => 'text',
        'text' => $msg
        'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U0063976f15af38b97e483ef094f9d894',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
