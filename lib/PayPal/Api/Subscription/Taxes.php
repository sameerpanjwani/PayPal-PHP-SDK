<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class Taxes
 *
 * @package PayPal\Api
 *
 * @property string percentage
 * @property boolean inclusive
 */
class Taxes extends PayPalModel {
	/**
	 * @return string
	 */
	public function getPercentage() {
		return $this->percentage;
	}
	
	/**
	 * @param string $percentage
	 *
	 * @return $this
	 */
	public function setPercentage( $percentage ) {
		$this->percentage = $percentage;
		
		return $this;
	}
	
	/**
	 * @return bool
	 */
	public function isInclusive() {
		return $this->inclusive;
	}
	
	/**
	 * @param bool $inclusive
	 *
	 * @return $this
	 */
	public function setInclusive( $inclusive ) {
		$this->inclusive = $inclusive;
		
		return $this;
	}

}