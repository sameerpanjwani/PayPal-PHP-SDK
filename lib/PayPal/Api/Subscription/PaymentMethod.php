<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class PaymentMethod
 *
 * @package PayPal\Api
 *
 * @property string payer_selected
 * @property string payee_preferred
 */
class PaymentMethod extends PayPalModel {
	/**
	 * @return string
	 */
	public function getPayerSelected() {
		return $this->payer_selected;
	}
	
	/**
	 * @param string $payer_selected
	 *
	 * @return $this
	 */
	public function setPayerSelected( $payer_selected ) {
		$this->payer_selected = $payer_selected;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getPayeePreferred() {
		return $this->payee_preferred;
	}
	
	/**
	 * @param string $payee_preferred
	 *
	 * @return $this
	 */
	public function setPayeePreferred( $payee_preferred ) {
		$this->payee_preferred = $payee_preferred;
		
		return $this;
	}
}