<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class BillingInfo
 *
 * @package PayPal\Api\Subscription
 *
 * @property LastPaymentDetails outstanding_balance
 * @property CycleExecution[] cycle_executions
 * @property Money last_payment
 * @property string next_billing_time
 * @property string final_payment_time
 * @property integer failed_payments_count
 */
class BillingInfo extends PayPalModel {
	/**
	 * @return LastPaymentDetails
	 */
	public function getOutstandingBalance() {
		return $this->outstanding_balance;
	}
	
	/**
	 * @param LastPaymentDetails $outstanding_balance
	 *
	 * @return $this
	 */
	public function setOutstandingBalance( $outstanding_balance ) {
		$this->outstanding_balance = $outstanding_balance;
		
		return $this;
	}
	
	/**
	 * @return CycleExecution[]
	 */
	public function getCycleExecutions() {
		return $this->cycle_executions;
	}
	
	/**
	 * @param CycleExecution[] $cycle_executions
	 *
	 * @return $this
	 */
	public function setCycleExecutions( $cycle_executions ) {
		$this->cycle_executions = $cycle_executions;
		
		return $this;
	}
	
	/**
	 * Append CycleExecution to the list.
	 *
	 * @param CycleExecution $cycleExecution
	 *
	 * @return $this
	 */
	public function addCycleExecution( $cycleExecution ) {
		if (!$this->getCycleExecutions()) {
			return $this->setCycleExecutions(array($cycleExecution));
		} else {
			return $this->setCycleExecutions(
				array_merge($this->getCycleExecutions(), array($cycleExecution))
			);
		}
	}
	
	/**
	 * @return Money
	 */
	public function getLastPayment() {
		return $this->last_payment;
	}
	
	/**
	 * @param Money $last_payment
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