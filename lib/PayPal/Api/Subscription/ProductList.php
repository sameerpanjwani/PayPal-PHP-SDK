<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class PlanList
 *
 * @package PayPal\Api\Subscription
 *
 * @property \PayPal\Api\Subscription\ProductCollectionElement[] products
 * @property integer total_items
 * @property integer total_pages
 */
class ProductList extends PayPalModel {
	/**
	 * @return \PayPal\Api\Subscription\ProductCollectionElement[]
	 */
	public function getProducts() {
		return $this->products;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\ProductCollectionElement[] $products
	 *
	 * @return $this
	 */
	public function setProducts( $products ) {
		$this->products = $products;
		
		return $this;
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