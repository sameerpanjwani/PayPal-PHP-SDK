<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class ShippingDetail
 *
 * @package PayPal\Api\Subscription
 *
 * @property Name name
 * @property ShippingAddress address
 */
class ShippingDetail extends PayPalModel {
	/**
	 * @return Name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param Name $name
	 *
	 * @return $this
	 */
	public function setName( $name ) {
		$this->name = $name;
		
		return $this;
	}
	
	/**
	 * @return ShippingAddress
	 */
	public function getAddress() {
		return $this->address;
	}
	
	/**
	 * @param ShippingAddress $address
	 *
	 * @return $this
	 */
	public function setAddress( $address ) {
		$this->address = $address;
		
		return $this;
	}
}