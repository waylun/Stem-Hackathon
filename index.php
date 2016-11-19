<?php
 
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'YOUR_PUBLIC_API_KEY';
Simplify::$privateKey = 'YOUR_PRIVATE_API_KEY';
 
$authorization = Simplify_Authorization::createAuthorization(array(
        'amount' => '2500',
        'description' => 'test authorization',
        'card' => array(
           'expMonth' => '11',
           'expYear' => '19',
           'cvc' => '123',
           'number' => '5555555555554444'
        ),
        'reference' => 'KP-76TBONES',
        'currency' => 'USD'
));
 
print_r($authorization);
 
?>