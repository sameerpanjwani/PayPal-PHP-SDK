<?php
namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class ApplicationContext
 *
 * @package PayPal\Api
 *
 * @property string brand_name
 * @property string locale
 * @property string shipping_preference
 * @property string user_action
 * @property string payment_method
 * @property string cancel_url
 * @property string return_url
 */
class ApplicationContext extends PayPalModel {
	/**
	 * @return string
	 */
	public function getBrandName() {
		return $this->brand_name;
	}
	
	/**
	 * @param string $brand_name
	 *
	 * @return $this
	 */
	public function setBrandName( $brand_name ) {
		$this->brand_name = $brand_name;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getLocale() {
		return $this->locale;
	}
	
	/**
	 * @param string $locale
	 *
	 * @return $this
	 */
	public function setLocale( $locale ) {
		$this->locale = $locale;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getShippingPreference() {
		return $this->shipping_preference;
	}
	
	/**
	 * @param string $shipping_preference
	 *
	 * @return $this
	 */
	public function setShippingPreference( $shipping_preference ) {
		$this->shipping_preference = $shipping_preference;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getUserAction() {
		return $this->user_action;
	}
	
	/**
	 * @param string $user_action
	 *
	 * @return $this
	 */
	public function setUserAction( $user_action ) {
		$this->user_action = $user_action;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getPaymentMethod() {
		return $this->payment_method;
	}
	
	/**
	 * @param string $payment_method
	 *
	 * @return $this
	 */
	public function setPaymentMethod( $payment_method ) {
		$this->payment_method = $payment_method;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCancelUrl() {
		return $this->cancel_url;
	}
	
	/**
	 * @param string $cancel_url
	 *
	 * @return $this
	 */
	public function setCancelUrl( $cancel_url ) {
		$this->cancel_url = $cancel_url;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getReturnUrl() {
		return $this->return_url;
	}
	
	/**
	 * @param string $return_url
	 *
	 * @return $this
	 */
	public function setReturnUrl( $return_url ) {
		$this->return_url = $return_url;
		
		return $this;
	}
}