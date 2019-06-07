<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class Frequency
 *
 * @package PayPal\Api
 *
 * @property string interval_unit
 * @property integer interval_count
 */
class Frequency extends PayPalModel {
	/**
	 * @return string
	 */
	public function getIntervalUnit() {
		return $this->interval_unit;
	}
	
	/**
	 * @param string $interval_unit
	 *
	 * @return $this
	 */
	public function setIntervalUnit( $interval_unit ) {
		$this->interval_unit = $interval_unit;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getIntervalCount() {
		return $this->interval_count;
	}
	
	/**
	 * @param int $interval_count
	 *
	 * @return $this
	 */
	public function setIntervalCount( $interval_count ) {
		$this->interval_count = $interval_count;
		
		return $this;
	}
	
}