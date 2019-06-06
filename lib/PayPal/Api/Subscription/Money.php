<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class Money
 *
 * @package PayPal\Api\Subscription
 *
 * @property string currency_code
 * @property string value
 */
class Money extends PayPalModel {
	/**
	 * @return string
	 */
	public function getCurrencyCode() {
		return $this->currency_code;
	}
	
	/**
	 * @param string $currency_code
	 *
	 * @return $this
	 */
	public function setCurrencyCode( $currency_code ) {
		$this->currency_code = $currency_code;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setValue( $value ) {
		$this->value = $value;
		
		return $this;
	}
}