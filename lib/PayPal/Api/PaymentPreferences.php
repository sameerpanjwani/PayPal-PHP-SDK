<?php
namespace PayPal\Api;

use PayPal\Api\Subscription\Money;
use PayPal\Common\PayPalModel;

/**
 * Class PaymentPreferences
 *
 * @package PayPal\Api
 *
 * @property boolean auto_bill_outstanding
 * @property Money setup_fee
 * @property string setup_fee_failure_action
 * @property integer payment_failure_threshold
 */
class PaymentPreferences extends PayPalModel {
	/**
	 * @return bool
	 */
	public function isAutoBillOutstanding() {
		return $this->auto_bill_outstanding;
	}
	
	/**
	 * @param bool $auto_bill_outstanding
	 *
	 * @return $this
	 */
	public function setAutoBillOutstanding( $auto_bill_outstanding ) {
		$this->auto_bill_outstanding = $auto_bill_outstanding;
		
		return $this;
	}
	
	/**
	 * @return Money
	 */
	public function getSetupFee() {
		return $this->setup_fee;
	}
	
	/**
	 * @param Money $setup_fee
	 *
	 * @return $this
	 */
	public function setSetupFee( $setup_fee ) {
		$this->setup_fee = $setup_fee;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSetupFeeFailureAction() {
		return $this->setup_fee_failure_action;
	}
	
	/**
	 * @param string $setup_fee_failure_action
	 *
	 * @return $this
	 */
	public function setSetupFeeFailureAction( $setup_fee_failure_action ) {
		$this->setup_fee_failure_action = $setup_fee_failure_action;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getPaymentFailureThreshold() {
		return $this->payment_failure_threshold;
	}
	
	/**
	 * @param int $payment_failure_threshold
	 *
	 * @return $this
	 */
	public function setPaymentFailureThreshold( $payment_failure_threshold ) {
		$this->payment_failure_threshold = $payment_failure_threshold;
		
		return $this;
	}
}