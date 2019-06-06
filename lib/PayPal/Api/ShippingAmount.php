<?php
namespace PayPal\Api;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;

/**
 * Class ShippingAmount
 *
 * @package PayPal\Api
 *
 * @property string currency_code
 * @property string value
 */
class ShippingAmount extends PayPalModel {
	
	public function setCurrencyCode( $currency_code ) {
		$this->currency_code = $currency_code;
		return $this;
	}
	
	public function getCurrencyCode() {
		return $this->currency_code;
	}
	
	public function setValue( $value ) {
		$this->value = $value;
		return $this;
	}
	
	public function getValue() {
		return $this->value;
	}
	
}