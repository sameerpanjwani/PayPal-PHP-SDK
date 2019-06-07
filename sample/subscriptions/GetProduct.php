<?php
// # Get Product Sample
//
// This sample code demonstrate how you can get a billing plan, as documented here at:
// https://developer.paypal.com/docs/api/#retrieve-a-plan
// API used: /v1/payments/billing-plans

/** @var \PayPal\Api\Subscription\Product $createdProduct */
$createdProduct = require 'CreateProduct.php';
define( 'CREATED_PRODUCT_ID', $createdProduct->getId() );

try {
	$product = \PayPal\Api\Subscription\Product::get( $createdProduct->getId(), $apiContext );
} catch( Exception $ex ) {
	// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
	ResultPrinter::printError( "Retrieved a Product", "Product", $product->getId(), null, $ex );
	exit( 1 );
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
ResultPrinter::printResult( "Retrieved a Product", "Product", $product->getId(), null, $product );

return $product;