<?php

// #Execute Subscription
// This is the second part of CreateProductPlanAndSubscription Sample.
// Use this call to execute an subscription after the buyer approves it
require __DIR__ . '/../bootstrap.php';

// ## Approval Status
// Determine if the user accepted or denied the request
if (isset($_GET['success']) && $_GET['success'] === 'true') {
	$subscriptionId = $_GET['subscription_id'];
	
	// ## Get Subscription
	// Make a get call to retrieve the executed subscription details
	try {
		$subscription = \PayPal\Api\Subscription\Subscription::get($subscriptionId, $apiContext);
	} catch (Exception $ex) {
		// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
		ResultPrinter::printError("Get Subscription", "Subscription", null, null, $ex);
		exit(1);
	}
	
	// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
	ResultPrinter::printResult("Get Subscription", "Subscription", $subscription->getId(), null, $subscription);
} else {
	// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
	ResultPrinter::printResult("User Cancelled the Approval", null);
}
