<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class Subscriber
 *
 * @package PayPal\Api
 *
 * @property \PayPal\Api\Subscription\Name name
 * @property string email_address
 * @property \PayPal\Api\Subscription\ShippingAddress shipping_address
 */
class Subscriber extends PayPalModel {
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
	 * @return string
	 */
	public function getEmailAddress() {
		return $this->email_address;
	}
	
	/**
	 * @param string $email_address
	 *
	 * @return $this
	 */
	public function setEmailAddress( $email_address ) {
		$this->email_address = $email_address;
		
		return $this;
	}
	
	/**
	 * @return \PayPal\Api\Subscription\ShippingAddress
	 */
	public function getShippingAddress() {
		return $this->shipping_address;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\ShippingAddress $shipping_address
	 *
	 * @return $this
	 */
	public function setShippingAddress( $shipping_address ) {
		$this->shipping_address = $shipping_address;
		
		return $this;
	}
	
	
	
}