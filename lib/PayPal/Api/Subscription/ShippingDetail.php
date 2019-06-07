<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class ShippingDetail
 *
 * @package PayPal\Api\Subscription
 *
 * @property \PayPal\Api\Subscription\Name name
 * @property \PayPal\Api\Subscription\ShippingAddress address
 */
class ShippingDetail extends PayPalModel {
	/**
	 * @return \PayPal\Api\Subscription\Name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\Name $name
	 *
	 * @return $this
	 */
	public function setName( $name ) {
		$this->name = $name;
		
		return $this;
	}
	
	/**
	 * @return \PayPal\Api\Subscription\ShippingAddress
	 */
	public function getAddress() {
		return $this->address;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\ShippingAddress $address
	 *
	 * @return $this
	 */
	public function setAddress( $address ) {
		$this->address = $address;
		
		return $this;
	}
}