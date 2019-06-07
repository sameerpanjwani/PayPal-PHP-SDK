<?php
require_once __DIR__ . '/../bootstrap.php';

// # Get List of Plan Sample
//
// This sample code demonstrate how you can get a list of billing plan, as documented here at:
// https://developer.paypal.com/docs/api/#list-plans
// API used: /v1/payments/billing-plans

// Retrieving the Plan object from Create Product Sample to demonstrate the List

use PayPal\Api\Subscription\Product;

try {
	// Get the list of all plans
	// You can modify different params to change the return list.
	// The explanation about each pagination information could be found here
	// at https://developer.paypal.com/docs/api/#list-plans
	$params = array('page_size' => '2');
	$planList = Product::all($params, $apiContext);
} catch (Exception $ex) {
	// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
	ResultPrinter::printError("List of Products", "Product", null, $params, $ex);
	exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
ResultPrinter::printResult("List of Products", "Product", null, $params, $planList);

return $planList;
