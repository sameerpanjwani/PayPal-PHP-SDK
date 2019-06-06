<?php

// # Create Plan Sample
//
// This sample code demonstrate how you can create a billing plan, as documented here at:
// https://developer.paypal.com/docs/api/#create-a-plan
// API used: /v1/payments/billing-plans

require_once __DIR__ . '/../bootstrap.php';


$product = new \PayPal\Api\Subscription\Product();
$product
	->setType('SERVICE')
	->setCategory('SOFTWARE')
	->setName('My Cool Service')
	->setDescription('Service-Description');

// For Sample Purposes Only.
$request = clone $product;

// ### Create Plan
try {
    $output = $product->create($apiContext);
} catch (Exception $ex) {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printError("Created Product", "Product", null, $request, $ex);
    exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
 ResultPrinter::printResult("Created Product", "Product", $output->getId(), $request, $output);

return $product;
