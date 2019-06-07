<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class ApplicationContext
 *
 * @package PayPal\Api
 *
 * The application context, which customizes the payer experience during the subscription approval process with PayPal.
 * @see https://developer.paypal.com/docs/api/subscriptions/v1/#definition-application_context
 *
 * @property string brand_name
 * @property string locale
 * @property string shipping_preference
 * @property string user_action
 * @property string payment_method
 * @property string return_url
 * @property string cancel_url
 */
class ApplicationContext extends PayPalModel {
	/**
	 * The label that overrides the business name in the PayPal account on the PayPal site.
	 *
	 * @return string
	 */
	public function getBrandName() {
		return $this->brand_name;
	}
	
	/**
	 * The label that overrides the business name in the PayPal account on the PayPal site.
	 *
	 * @param string $brand_name 1 - 127 chars
	 *
	 * @return $this
	 */
	public function setBrandName( $brand_name ) {
		$this->brand_name = $brand_name;
		
		return $this;
	}
	
	/**
	 * The BCP 47-formatted locale of pages that the PayPal payment experience shows.
	 *
	 * @return string
	 */
	public function getLocale() {
		return $this->locale;
	}
	
	/**
	 * The BCP 47-formatted locale of pages that the PayPal payment experience shows. PayPal supports a five-character code. For example, da-DK, he-IL, id-ID, ja-JP, no-NO, pt-BR, ru-RU, sv-SE, th-TH, zh-CN, zh-HK, or zh-TW.
	 *
	 * @param string $locale
	 *
	 * @return $this
	 */
	public function setLocale( $locale ) {
		$this->locale = $locale;
		
		return $this;
	}
	
	/**
	 * The location from which the shipping address is derived.
	 *
	 * @return string
	 */
	public function getShippingPreference() {
		return $this->shipping_preference;
	}
	
	/**
	 * The location from which the shipping address is derived. The possible values are:
	 * GET_FROM_FILE        : Get the customer-provided shipping address on the PayPal site.
	 * NO_SHIPPING          : Redacts the shipping address from the PayPal site. Recommended for digital goods.
	 * SET_PROVIDED_ADDRESS : Get the merchant-provided address. The customer cannot change this address on the PayPal site. If merchant does not pass an address, customer can choose the address on PayPal pages.
	 *
	 * Default: GET_FROM_FILE.
	 *
	 * @param string $shipping_preference
	 *
	 * @return $this
	 */
	public function setShippingPreference( $shipping_preference ) {
		$this->shipping_preference = $shipping_preference;
		
		return $this;
	}
	
	/**
	 * Configures the label name to Continue or Subscribe Now for subscription consent experience.
	 *
	 * @return string
	 */
	public function getUserAction() {
		return $this->user_action;
	}
	
	/**
	 * Configures the label name to Continue or Subscribe Now for subscription consent experience. The possible values are:
	 * CONTINUE         : After you redirect the customer to the PayPal subscription consent page, a Continue button appears. Use this option when you want to control the activation of the subscription and do not want PayPal to activate the subscription.
	 * SUBSCRIBE_NOW    : After you redirect the customer to the PayPal subscription consent page, a Subscribe Now button appears. Use this option when you want PayPal to activate the subscription.
	 *
	 * Default: SUBSCRIBE_NOW.
	 *
	 * @param string $user_action
	 *
	 * @return $this
	 */
	public function setUserAction( $user_action ) {
		$this->user_action = $user_action;
		
		return $this;
	}
	
	/**
	 * The customer and merchant payment preferences.
	 *
	 * @return string
	 */
	public function getPaymentMethod() {
		return $this->payment_method;
	}
	
	/**
	 * The customer and merchant payment preferences. Currently only PAYPAL payment method is supported.
	 *
	 * @param string $payment_method
	 *
	 * @return $this
	 */
	public function setPaymentMethod( $payment_method ) {
		$this->payment_method = $payment_method;
		
		return $this;
	}
	
	/**
	 * The URL where the customer is redirected after the customer approves the payment.
	 *
	 * @return string
	 */
	public function getReturnUrl() {
		return $this->return_url;
	}
	
	/**
	 * The URL where the customer is redirected after the customer approves the payment.
	 *
	 * @param string $return_url
	 *
	 * @return $this
	 */
	public function setReturnUrl( $return_url ) {
		$this->return_url = $return_url;
		
		return $this;
	}
	
	/**
	 * The URL where the customer is redirected after the customer cancels the payment.
	 *
	 * @return string
	 */
	public function getCancelUrl() {
		return $this->cancel_url;
	}
	
	/**
	 * The URL where the customer is redirected after the customer cancels the payment.
	 *
	 * @param string $cancel_url
	 *
	 * @return $this
	 */
	public function setCancelUrl( $cancel_url ) {
		$this->cancel_url = $cancel_url;
		
		return $this;
	}
}