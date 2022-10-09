<?php 

$ch = curl_init();


curl_setopt_array($ch,[

CURLOPT_URL => 'https://api.github.com/gists/d636dafb9d5124f3d9704014d7e6594e',
 CURLOPT_RETURNTRANSFER=>true,
 CURLOPT_USERAGENT=>'DevMahbubHussain'

]);

$response = curl_exec($ch);
curl_close($ch);

$tempData = html_entity_decode($response);

$data = json_decode($tempData, true);

print_r($data);

// var_dump($data);

// foreach($data as $gist){

//    echo $gist['id']."</br>".$gist['url']."</br>";

// }

