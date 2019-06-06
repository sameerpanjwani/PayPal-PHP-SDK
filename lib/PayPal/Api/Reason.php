<?php
namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class Reason
 *
 * @package PayPal\Api
 *
 * @property string reason
 */
class Reason extends PayPalModel {
	/**
	 * @return string
	 */
	public function getReason() {
		return $this->reason;
	}
	
	/**
	 * @param string $reason
	 *
	 * @return $this
	 */
	public function setReason( $reason ) {
		$this->reason = $reason;
		
		return $this;
	}
}