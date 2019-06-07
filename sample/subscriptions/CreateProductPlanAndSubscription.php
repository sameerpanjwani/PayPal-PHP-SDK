<?php
require __DIR__ . '/../bootstrap.php';

/** @var \PayPal\Api\Subscription\Product $createdProduct */
$createdProduct = require 'CreateProduct.php';
define('CREATED_PRODUCT_ID', $createdProduct->getId());

/** @var \PayPal\Api\Subscription\Plan $createdPlan */
$createdPlan = require 'CreatePlan.php';
define('CREATED_PLAN_ID', $createdPlan->getId());

/** @var \PayPal\Api\Subscription\Subscription $subscription
 */
$subscription = require 'CreateSubscription.php';
