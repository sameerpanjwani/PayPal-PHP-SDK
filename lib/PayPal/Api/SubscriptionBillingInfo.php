<?php
namespace PayPal\Api;

use PayPal\Api\Subscription\CycleExecution;
use PayPal\Api\Subscription\LastPaymentDetails;
use PayPal\Api\Subscription\Money;
use PayPal\Common\PayPalModel;

/**
 * Class SubscriptionBillingInfo
 *
 * @package PayPal\Api
 *
 * @property Money outstanding_balance
 * @property CycleExecution cycle_executions
 * @property LastPaymentDetails last_payment
 * @property string next_billing_time
 * @property string final_payment_time
 * @property integer failed_payments_count
 */
class SubscriptionBillingInfo extends PayPalModel {
	/**
	 * @return Money
	 */
	public function getOutstandingBalance() {
		return $this->outstanding_balance;
	}
	
	/**
	 * @param Money $outstanding_balance
	 *
	 * @return $this
	 */
	public function setOutstandingBalance( $outstanding_balance ) {
		$this->outstanding_balance = $outstanding_balance;
		
		return $this;
	}
	
	/**
	 * @return CycleExecution
	 */
	public function getCycleExecutions() {
		return $this->cycle_executions;
	}
	
	/**
	 * @param CycleExecution $cycle_executions
	 *
	 * @return $this
	 */
	public function setCycleExecutions( $cycle_executions ) {
		$this->cycle_executions = $cycle_executions;
		
		return $this;
	}
	
	/**
	 * @return LastPaymentDetails
	 */
	public function getLastPayment() {
		return $this->last_payment;
	}
	
	/**
	 * @param LastPaymentDetails $last_payment
	 *
	 * @return $this
	 */
	public function setLastPayment( $last_payment ) {
		$this->last_payment = $last_payment;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getNextBillingTime() {
		return $this->next_billing_time;
	}
	
	/**
	 * @param string $next_billing_time
	 *
	 * @return $this
	 */
	public function setNextBillingTime( $next_billing_time ) {
		$this->next_billing_time = $next_billing_time;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getFinalPaymentTime() {
		return $this->final_payment_time;
	}
	
	/**
	 * @param string $final_payment_time
	 *
	 * @return $this
	 */
	public function setFinalPaymentTime( $final_payment_time ) {
		$this->final_payment_time = $final_payment_time;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getFailedPaymentsCount() {
		return $this->failed_payments_count;
	}
	
	/**
	 * @param int $failed_payments_count
	 *
	 * @return $this
	 */
	public function setFailedPaymentsCount( $failed_payments_count ) {
		$this->failed_payments_count = $failed_payments_count;
		
		return $this;
	}
}