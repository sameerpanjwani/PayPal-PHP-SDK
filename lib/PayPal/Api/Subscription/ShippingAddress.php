<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class ShippingAddress
 *
 * @package PayPal\Api\Subscription
 *
 * @property string address_line_1
 * @property string address_line_2
 * @property string admin_area_1
 * @property string admin_area_2
 * @property string postal_code
 * @property string country_code
 */
class ShippingAddress extends PayPalModel {
	/**
	 * @return string
	 */
	public function getAddressLine1() {
		return $this->address_line_1;
	}
	
	/**
	 * @param string $address_line_1
	 *
	 * @return $this
	 */
	public function setAddressLine1( $address_line_1 ) {
		$this->address_line_1 = $address_line_1;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAddressLine2() {
		return $this->address_line_2;
	}
	
	/**
	 * @param string $address_line_2
	 *
	 * @return $this
	 */
	public function setAddressLine2( $address_line_2 ) {
		$this->address_line_2 = $address_line_2;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAdminArea1() {
		return $this->admin_area_1;
	}
	
	/**
	 * @param string $admin_area_1
	 *
	 * @return $this
	 */
	public function setAdminArea1( $admin_area_1 ) {
		$this->admin_area_1 = $admin_area_1;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAdminArea2() {
		return $this->admin_area_2;
	}
	
	/**
	 * @param string $admin_area_2
	 *
	 * @return $this
	 */
	public function setAdminArea2( $admin_area_2 ) {
		$this->admin_area_2 = $admin_area_2;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getPostalCode() {
		return $this->postal_code;
	}
	
	/**
	 * @param string $postal_code
	 *
	 * @return $this
	 */
	public function setPostalCode( $postal_code ) {
		$this->postal_code = $postal_code;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCountryCode() {
		return $this->country_code;
	}
	
	/**
	 * @param string $country_code
	 *
	 * @return $this
	 */
	public function setCountryCode( $country_code ) {
		$this->country_code = $country_code;
		
		return $this;
	}
}