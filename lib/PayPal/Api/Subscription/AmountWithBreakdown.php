<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class AmountWithBreakdown
 *
 * @package PayPal\Api\Subscription
 *
 * @property Money gross_amount
 * @property Money fee_amount
 * @property Money shipping_amount
 * @property Money tax_amount
 * @property Money net_amount
 */
class AmountWithBreakdown extends PayPalModel {
	/**
	 * @return Money
	 */
	public function getGrossAmount() {
		return $this->gross_amount;
	}
	
	/**
	 * @param Money $gross_amount
	 *
	 * @return $this
	 */
	public function setGrossAmount( $gross_amount ) {
		$this->gross_amount = $gross_amount;
		
		return $this;
	}
	
	/**
	 * @return Money
	 */
	public function getFeeAmount() {
		return $this->fee_amount;
	}
	
	/**
	 * @param Money $fee_amount
	 *
	 * @return $this
	 */
	public function setFeeAmount( $fee_amount ) {
		$this->fee_amount = $fee_amount;
		
		return $this;
	}
	
	/**
	 * @return Money
	 */
	public function getShippingAmount() {
		return $this->shipping_amount;
	}
	
	/**
	 * @param Money $shipping_amount
	 *
	 * @return $this
	 */
	public function setShippingAmount( $shipping_amount ) {
		$this->shipping_amount = $shipping_amount;
		
		return $this;
	}
	
	/**
	 * @return Money
	 */
	public function getTaxAmount() {
		return $this->tax_amount;
	}
	
	/**
	 * @param Money $tax_amount
	 *
	 * @return $this
	 */
	public function setTaxAmount( $tax_amount ) {
		$this->tax_amount = $tax_amount;
		
		return $this;
	}
	
	/**
	 * @return Money
	 */
	public function getNetAmount() {
		return $this->net_amount;
	}
	
	/**
	 * @param Money $net_amount
	 *
	 * @return $this
	 */
	public function setNetAmount( $net_amount ) {
		$this->net_amount = $net_amount;
		
		return $this;
	}
}