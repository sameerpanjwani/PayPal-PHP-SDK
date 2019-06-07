<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class PlanList
 *
 * @package PayPal\Api\Subscription
 *
 * @property \PayPal\Api\Subscription\PlanCollectionElement[] plans
 * @property integer total_items
 * @property integer total_pages
 */
class PlanList extends PayPalModel {
	/**
	 * @return \PayPal\Api\Subscription\PlanCollectionElement[]
	 */
	public function getPlans() {
		return $this->plans;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\PlanCollectionElement[] $plans
	 *
	 * @return $this
	 */
	public function setPlans( $plans ) {
		$this->plans = $plans;
		
		return $this;
	}
	
	/**
	 * Append Plans to the list.
	 *
	 * @param Plan $plan
	 * @return $this
	 */
	public function addPlan($plan)
	{
		if (!$this->getPlans()) {
			return $this->setPlans(array($plan));
		} else {
			return $this->setPlans(
				array_merge($this->getPlans(), array($plan))
			);
		}
	}
	
	/**
	 * Remove Plans from the list.
	 *
	 * @param Plan $plan
	 * @return $this
	 */
	public function removePlan($plan)
	{
		return $this->setPlans(
			array_diff($this->getPlans(), array($plan))
		);
	}
	
	/**
	 * @return int
	 */
	public function getTotalItems() {
		return $this->total_items;
	}
	
	/**
	 * @param int $total_items
	 *
	 * @return $this
	 */
	public function setTotalItems( $total_items ) {
		$this->total_items = $total_items;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getTotalPages() {
		return $this->total_pages;
	}
	
	/**
	 * @param int $total_pages
	 *
	 * @return $this
	 */
	public function setTotalPages( $total_pages ) {
		$this->total_pages = $total_pages;
		
		return $this;
	}
}