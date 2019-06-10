<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class Transaction
 *
 * @package PayPal\Api\Subscription
 *
 * @property string id
 * @property string status
 * @property AmountWithBreakdown amount_with_breakdown
 * @property Name payer_name
 * @property string payer_email
 * @property string time
 */
class Transaction extends PayPalModel {
	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param string $id
	 *
	 * @return $this
	 */
	public function setId( $id ) {
		$this->id = $id;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * @param string $status
	 *
	 * @return $this
	 */
	public function setStatus( $status ) {
		$this->status = $status;
		
		return $this;
	}
	
	/**
	 * @return AmountWithBreakdown
	 */
	public function getAmountWithBreakdown() {
		return $this->amount_with_breakdown;
	}
	
	/**
	 * @param AmountWithBreakdown $amount_with_breakdown
	 *
	 * @return $this
	 */
	public function setAmountWithBreakdown( $amount_with_breakdown ) {
		$this->amount_with_breakdown = $amount_with_breakdown;
		
		return $this;
	}
	
	/**
	 * @return Name
	 */
	public function getPayerName() {
		return $this->payer_name;
	}
	
	/**
	 * @param Name $payer_name
	 *
	 * @return $this
	 */
	public function setPayerName( $payer_name ) {
		$this->payer_name = $payer_name;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getPayerEmail() {
		return $this->payer_email;
	}
	
	/**
	 * @param string $payer_email
	 *
	 * @return $this
	 */
	public function setPayerEmail( $payer_email ) {
		$this->payer_email = $payer_email;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTime() {
		return $this->time;
	}
	
	/**
	 * @param string $time
	 *
	 * @return $this
	 */
	public function setTime( $time ) {
		$this->time = $time;
		
		return $this;
	}
}