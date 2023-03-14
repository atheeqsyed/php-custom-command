<?php
echo 'Welcome to curl demo';

$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://ideapro.com/example-json.php");

curl_setopt($ch, CURLOPT_URL, 'http://localhost:8023/json.php?key=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$server_response = curl_exec($ch);


curl_close($ch);
echo '<br>'.$server_response;

/*$server_response = json_decode($server_response);
echo "<pre>"; print_r($server_response); echo "</pre>"*/;
?>
