<?php

// # Create Plan Sample
//
// This sample code demonstrate how you can create a billing plan, as documented here at:
// https://developer.paypal.com/docs/api/#create-a-plan
// API used: /v1/payments/billing-plans

require_once __DIR__ . '/../bootstrap.php';

$productId = '';
if (defined('CREATED_PRODUCT_ID')) {
	$productId = CREATED_PRODUCT_ID;
}

// Create a new instance of Plan object
$plan = new \PayPal\Api\Subscription\Plan();

$pricingScheme = new \PayPal\Api\PricingScheme();
$pricingScheme
	->setFixedPrice(new \PayPal\Api\Subscription\Money(array('currency_code' => 'EUR', 'value' => 10)));

$billingCycle = new \PayPal\Api\BillingCycle();
$billingCycle
	->setPricingScheme($pricingScheme)
	->setFrequency(new \PayPal\Api\Frequency(array('interval_unit' => 'DAY', 'interval_count' => 7)))
	->setTenureType('REGULAR')
	->setSequence(1);

// # Basic Information
// Fill up the basic information that is required for the plan
$plan
	->setProductId($productId)
	->setName('T-Shirt of the Month Club Plan')
    ->setDescription('Template creation.')
    ->addBillingCycle($billingCycle)
	->setPaymentPreferences(new \PayPal\Api\PaymentPreferences())
	->setTaxes(new \PayPal\Api\Taxes(array('percentage' => 19, 'inclusive' => false)));

// For Sample Purposes Only.
$request = clone $plan;

// ### Create Plan
try {
    $output = $plan->create($apiContext);
} catch (Exception $ex) {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printError("Created Plan", "Plan", null, $request, $ex);
    exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
 ResultPrinter::printResult("Created Plan", "Plan", $output->getId(), $request, $output);

return $plan;
