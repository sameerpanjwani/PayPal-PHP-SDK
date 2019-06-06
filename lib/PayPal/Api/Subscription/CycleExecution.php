<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class CycleExecution
 *
 * @package PayPal\Api\Subscription
 *
 * @property string tenure_type
 * @property integer sequence
 * @property integer cycles_completed
 * @property integer cycles_remaining
 * @property integer current_pricing_scheme_version
 */
class CycleExecution extends PayPalModel {
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
	public function getCyclesCompleted() {
		return $this->cycles_completed;
	}
	
	/**
	 * @param int $cycles_completed
	 *
	 * @return $this
	 */
	public function setCyclesCompleted( $cycles_completed ) {
		$this->cycles_completed = $cycles_completed;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getCyclesRemaining() {
		return $this->cycles_remaining;
	}
	
	/**
	 * @param int $cycles_remaining
	 *
	 * @return $this
	 */
	public function setCyclesRemaining( $cycles_remaining ) {
		$this->cycles_remaining = $cycles_remaining;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getCurrentPricingSchemeVersion() {
		return $this->current_pricing_scheme_version;
	}
	
	/**
	 * @param int $current_pricing_scheme_version
	 *
	 * @return $this
	 */
	public function setCurrentPricingSchemeVersion( $current_pricing_scheme_version ) {
		$this->current_pricing_scheme_version = $current_pricing_scheme_version;
		
		return $this;
	}

}