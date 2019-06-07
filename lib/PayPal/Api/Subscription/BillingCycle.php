<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class BillingCycle
 *
 * @package PayPal\Api
 *
 * @property PricingScheme pricing_scheme
 * @property Frequency frequency
 * @property string tenure_type
 * @property integer sequence
 * @property integer total_cycles
 */
class BillingCycle extends PayPalModel {
	/**
	 * @return PricingScheme
	 */
	public function getPricingScheme() {
		return $this->pricing_scheme;
	}
	
	/**
	 * @param PricingScheme $pricing_scheme
	 *
	 * @return $this
	 */
	public function setPricingScheme( $pricing_scheme ) {
		$this->pricing_scheme = $pricing_scheme;
		
		return $this;
	}
	
	/**
	 * @return Frequency
	 */
	public function getFrequency() {
		return $this->frequency;
	}
	
	/**
	 * @param Frequency $frequency
	 *
	 * @return $this
	 */
	public function setFrequency( $frequency ) {
		$this->frequency = $frequency;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTenureType() {
		return $this->tenure_type;
	}
	
	/**
	 * @param string $tenure_type
	 *
	 * @return $this
	 */
	public function setTenureType( $tenure_type ) {
		$this->tenure_type = $tenure_type;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getSequence() {
		return $this->sequence;
	}
	
	/**
	 * @param int $sequence
	 *
	 * @return $this
	 */
	public function setSequence( $sequence ) {
		$this->sequence = $sequence;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getTotalCycles() {
		return $this->total_cycles;
	}
	
	/**
	 * @param int $total_cycles
	 *
	 * @return $this
	 */
	public function setTotalCycles( $total_cycles ) {
		$this->total_cycles = $total_cycles;
		
		return $this;
	}
}