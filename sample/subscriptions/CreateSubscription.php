<?php

// # Create Plan Sample
//
// This sample code demonstrate how you can create a billing plan, as documented here at:
// https://developer.paypal.com/docs/api/#create-a-plan
// API used: /v1/payments/billing-plans

require_once __DIR__ . '/../bootstrap.php';

$planId = "";
if (defined('CREATED_PLAN_ID')) {
	$planId = CREATED_PLAN_ID;
}

$subscription = new \PayPal\Api\Subscription();
$subscription
	->setPlanId($planId)
	#->setStartTime(date('c'))
	#->setQuantity(1)
;



// For Sample Purposes Only.
$request = clone $subscription;

// ### Create Plan
try {
    $output = $subscription->create($apiContext);
	
	// ### Get redirect url
	// The API response provides the url that you must redirect
	// the buyer to. Retrieve the url from the $agreement->getApprovalLink()
	// method
	$approveLink = $subscription->getApproveLink();
} catch (Exception $ex) {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printError("Created Subscription", "Subscription", null, $request, $ex);
    exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
 ResultPrinter::printResult("Created Subscription. Please visit the URL to Approve.", "Subscription", "<a href='$approveLink' >$approveLink</a>", $request, $output);

return $subscription;
