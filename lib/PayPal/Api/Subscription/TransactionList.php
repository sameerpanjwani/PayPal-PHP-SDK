<?php
namespace PayPal\Api\Subscription;

use PayPal\Common\PayPalModel;

/**
 * Class TransactionList
 *
 * @package PayPal\Api\Subscription
 *
 * @property Transaction[] transactions
 * @property integer total_items
 * @property integer total_pages
 */
class TransactionList extends PayPalModel {
	/**
	 * @return Transaction[]
	 */
	public function getTransactions() {
		return $this->transactions;
	}
	
	/**
	 * @param Transaction[] $transactions
	 *
	 * @return $this
	 */
	public function setTransactions( $transactions ) {
		$this->transactions = $transactions;
		
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