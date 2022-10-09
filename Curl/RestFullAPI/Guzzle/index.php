<?php 

require __DIR__.'/../../../vendor/autoload.php';


//Guzzle work 
// $client = new GuzzleHttp\Client;

// $resposne = $client->request("GET",'https://api.github.com/users/repos',[
  
//     'headers'=>[
//         "Authorization: Bearer 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",
//         'User-Agent'=>'DevMahbubHussain'

//     ]
 
// ]);

// echo $resposne->getStatusCode()."</br>";
// echo $resposne->getHeaderLine('content-type')[0];
// echo $resposne->getHeaderLine('content-type')[0];
// echo $resposne->getHeaderLine('Content-Type')."</br>";
// echo $resposne->getBody();


//SDK API Calling 


$api_key = 'sk_test_51LYq8BDbBcdKDHfsqlbxL73NG5ZvfLyR4Fqrv8JHegafLcZjRKtMBG3GTm7DEMlEGl65YarfOG6HyTuOpjMCUmAs00yuMTWqvO';
$data = [
  
    'name'=>'Mahbubb',
    'email'=>'mahbubhussaincse@gmail.com'

];

$stripe = new \Stripe\StripeClient($api_key);



$product = $stripe->products->create([
    'name' => 'Starter Subscription',
    'description' => '$12/Month subscription',
  ]);
  echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

  $price = $stripe->prices->create([
    'unit_amount' => 1200,
    'currency' => 'usd',
    'recurring' => ['interval' => 'month'],
    'product' => $product['id'],
  ]);
  echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

//$customer = $stripe->customers->create($data);
//echo $customer;