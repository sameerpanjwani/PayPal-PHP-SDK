<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class Name
 *
 * @package PayPal\Api\Subscription
 *
 * @property string prefix
 * @property string given_name
 * @property string surname
 * @property string middle_name
 * @property string suffix
 * @property string alternate_full_name
 * @property string full_name
 */
class Name extends PayPalModel {
	/**
	 * @return string
	 */
	public function getPrefix() {
		return $this->prefix;
	}
	
	/**
	 * @param string $prefix
	 *
	 * @return $this
	 */
	public function setPrefix( $prefix ) {
		$this->prefix = $prefix;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getGivenName() {
		return $this->given_name;
	}
	
	/**
	 * @param string $given_name
	 *
	 * @return $this
	 */
	public function setGivenName( $given_name ) {
		$this->given_name = $given_name;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSurname() {
		return $this->surname;
	}
	
	/**
	 * @param string $surname
	 *
	 * @return $this
	 */
	public function setSurname( $surname ) {
		$this->surname = $surname;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getMiddleName() {
		return $this->middle_name;
	}
	
	/**
	 * @param string $middle_name
	 *
	 * @return $this
	 */
	public function setMiddleName( $middle_name ) {
		$this->middle_name = $middle_name;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSuffix() {
		return $this->suffix;
	}
	
	/**
	 * @param string $suffix
	 *
	 * @return $this
	 */
	public function setSuffix( $suffix ) {
		$this->suffix = $suffix;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAlternateFullName() {
		return $this->alternate_full_name;
	}
	
	/**
	 * @param string $alternate_full_name
	 *
	 * @return $this
	 */
	public function setAlternateFullName( $alternate_full_name ) {
		$this->alternate_full_name = $alternate_full_name;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getFullName() {
		return $this->full_name;
	}
	
	/**
	 * @param string $full_name
	 *
	 * @return $this
	 */
	public function setFullName( $full_name ) {
		$this->full_name = $full_name;
		
		return $this;
	}
}