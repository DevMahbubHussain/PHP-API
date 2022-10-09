<?php 
$ch = curl_init(); //— Initialize a cURL session

// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/");
//curl_setopt($ch, CURLOPT_HEADER, 0);

// curl_setopt_array — Set multiple options for a cURL transfer

// Github API 
// --url "https://api.github.com/repos/octocat/Spoon-Knife/issues" \

// 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

$headers = [

    // 'Authorization: Client-ID LyYe8KpOGgV042ZyRQ0Sp5uCgIjnFlLReBJ2WnIxjJ0'

    // 'Authorization: token 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'

    "Authorization: Bearer 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"
];


$payload = json_encode([
  
    'name'=>'Created from APi',
    'description'=>'Create Repo Using Curl Post Request'

]);

curl_setopt_array($ch,[
    CURLOPT_URL => "https://api.github.com/users/DevMahbubHussain/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER=>$headers,
    CURLOPT_USERAGENT=>'DevMahbubHussain',
    CURLOPT_POST=>true,
    CURLOPT_POSTFIELDS=>$payload,
    CURLOPT_HEADER => true
]); 



$response = curl_exec($ch);

//status code 
$status_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close($ch);


//echo $status_code;

// print_r($response);

echo $response;




//Response code 
