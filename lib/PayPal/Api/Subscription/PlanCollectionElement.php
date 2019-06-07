<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class PlanCollectionElement
 *
 * @package PayPal\Api\Subscription
 *
 * @property string id
 * @property string name
 * @property string description
 * @property string created_time
 */
class PlanCollectionElement extends PayPalModel {
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
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName( $name ) {
		$this->name = $name;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * @param string $description
	 *
	 * @return $this
	 */
	public function setDescription( $description ) {
		$this->description = $description;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCreatedTime() {
		return $this->created_time;
	}
	
	/**
	 * @param string $created_time
	 *
	 * @return $this
	 */
	public function setCreatedTime( $created_time ) {
		$this->created_time = $created_time;
		
		return $this;
	}
}