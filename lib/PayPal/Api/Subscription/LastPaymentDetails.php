<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class LastPaymentDetails
 *
 * @package PayPal\Api\Subscription
 *
 * @property \PayPal\Api\Subscription\Money amount
 * @property string time
 */
class LastPaymentDetails extends PayPalModel {
	/**
	 * @return \PayPal\Api\Subscription\Money
	 */
	public function getAmount() {
		return $this->amount;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\Money $amount
	 *
	 * @return $this
	 */
	public function setAmount( $amount ) {
		$this->amount = $amount;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTime() {
		return $this->time;
	}
	
	/**
	 * @param string $time
	 *
	 * @return $this
	 */
	public function setTime( $time ) {
		$this->time = $time;
		
		return $this;
	}
}