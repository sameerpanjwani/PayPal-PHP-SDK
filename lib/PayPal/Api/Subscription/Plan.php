<?php
namespace PayPal\Api\Subscription;

use PayPal\Api\PatchRequest;
use PayPal\Common\PayPalResourceModel;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

/**
 * Class Plan
 *
 * @package PayPal\Api\Subscription
 *
 * @property string id
 * @property string product_id
 * @property string name
 * @property string status
 * @property string description
 * @property \PayPal\Api\Subscription\BillingCycle[] billing_cycles
 * @property \PayPal\Api\Subscription\PaymentPreferences payment_preferences
 * @property \PayPal\Api\Subscription\Taxes taxes
 * @property boolean quantity_supported
 * @property string create_time
 * @property string update_time
 */
class Plan extends PayPalResourceModel {
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
	public function getProductId() {
		return $this->product_id;
	}
	
	/**
	 * @param string $product_id
	 *
	 * @return $this
	 */
	public function setProductId( $product_id ) {
		$this->product_id = $product_id;
		
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
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * @param string $status
	 *
	 * @return $this
	 */
	public function setStatus( $status ) {
		$this->status = $status;
		
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
	 * @return \PayPal\Api\Subscription\BillingCycle[]
	 */
	public function getBillingCycles() {
		return $this->billing_cycles;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\BillingCycle[] $billing_cycles
	 *
	 * @return $this
	 */
	public function setBillingCycles( $billing_cycles ) {
		$this->billing_cycles = $billing_cycles;
		
		return $this;
	}
	
	/**
	 * Append BillingCycle to the list.
	 *
	 * @param \PayPal\Api\Subscription\BillingCycle $billingCycle
	 * @return $this
	 */
	public function addBillingCycle($billingCycle)
	{
		if (!$this->getBillingCycles()) {
			return $this->setBillingCycles(array($billingCycle));
		} else {
			return $this->setBillingCycles(
				array_merge($this->getBillingCycles(), array($billingCycle))
			);
		}
	}
	
	/**
	 * @return \PayPal\Api\Subscription\PaymentPreferences
	 */
	public function getPaymentPreferences() {
		return $this->payment_preferences;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\PaymentPreferences $payment_preferences
	 *
	 * @return $this
	 */
	public function setPaymentPreferences( $payment_preferences ) {
		$this->payment_preferences = $payment_preferences;
		
		return $this;
	}
	
	/**
	 * @return \PayPal\Api\Subscription\Taxes
	 */
	public function getTaxes() {
		return $this->taxes;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\Taxes $taxes
	 *
	 * @return $this
	 */
	public function setTaxes( $taxes ) {
		$this->taxes = $taxes;
		
		return $this;
	}
	
	/**
	 * @return bool
	 */
	public function isQuantitySupported() {
		return $this->quantity_supported;
	}
	
	/**
	 * @param bool $quantity_supported
	 *
	 * @return $this
	 */
	public function setQuantitySupported( $quantity_supported ) {
		$this->quantity_supported = $quantity_supported;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCreateTime() {
		return $this->create_time;
	}
	
	/**
	 * @param string $create_time
	 *
	 * @return $this
	 */
	public function setCreateTime( $create_time ) {
		$this->create_time = $create_time;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getUpdateTime() {
		return $this->update_time;
	}
	
	/**
	 * @param string $update_time
	 *
	 * @return $this
	 */
	public function setUpdateTime( $update_time ) {
		$this->update_time = $update_time;
		
		return $this;
	}
	
	
	
	
	/**
	 * Creates a plan that defines pricing and billing cycle details for subscriptions.
	 *
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return Plan
	 */
	public function create($apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($this->getProductId(), 'productId');
		ArgumentValidator::validate($this->getName(), 'name');
		ArgumentValidator::validate($this->getBillingCycles(), 'billingCycles');
		ArgumentValidator::validate($this->getPaymentPreferences(), 'paymentPreferences');
		$payLoad = $this->toJSON();
		$json = self::executeCall(
			"/v1/billing/plans/",
			"POST",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		$this->fromJson($json);
		return $this;
	}
	
	/**
	 * Shows details for a subscription, by ID.
	 *
	 * @param string $agreementId
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return Plan
	 */
	public static function get($planId, $apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($planId, 'id');
		$payLoad = "";
		$json = self::executeCall(
			"/v1/billing/plans/$planId",
			"GET",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		$ret = new self();
		$ret->fromJson($json);
		return $ret;
	}
	
	/**
	 * Updates a plan with the CREATED or ACTIVE status. For an INACTIVE plan, you can make only status updates.
	 * You can patch these attributes and objects:
	 * - description
	 * - auto_bill_outstanding
	 * - taxes.percentage
	 * - payment_preferences.payment_failure_threshold
	 *
	 * @param PatchRequest $patchRequest
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 *
	 * @return bool
	 */
	public function update($patchRequest, $apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($this->getId(), 'id');
		ArgumentValidator::validate($patchRequest, 'patchRequest');
		$payLoad = $patchRequest->toJSON();
		self::executeCall(
			"/v1/billing/plans/{$this->getId()}",
			"PATCH",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		return true;
	}
	
	/**
	 * Activates a plan, by ID.
	 *
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return bool
	 */
	public function activate($apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($this->getId(), 'id');
		$payLoad = "";
		self::executeCall(
			"/v1/billing/plans/{$this->getId()}/activate",
			"POST",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		return true;
	}
	
	/**
	 * Deactivates a plan, by ID.
	 *
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return bool
	 */
	public function deActivate($apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($this->getId(), 'id');
		$payLoad = "";
		self::executeCall(
			"/v1/billing/plans/{$this->getId()}/deactivate",
			"POST",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		return true;
	}
	
	/**
	 * Updates pricing for a plan. For example, you can update a regular billing cycle from $5 per month to $7 per month.
	 *
	 * @param PricingScheme $pricingScheme
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return bool
	 */
	public function updatePricing($pricingScheme, $apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($this->getId(), 'id');
		ArgumentValidator::validate($pricingScheme, 'pricingScheme');
		$payLoad = $pricingScheme->toJSON();
		self::executeCall(
			"/v1/billing/plans/{$this->getId()}/update-pricing-schemes",
			"POST",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		return true;
	}
	
	/**
	 * Lists billing plans.
	 *
	 * @param array $params
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return PlanList
	 */
	public static function all($params, $apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($params, 'params');
		$payLoad = "";
		$allowedParams = array(
			'page_size' => 1,
			'page' => 1,
			'total_required' => 1
		);
		$json = self::executeCall(
			"/v1/billing/plans/" . "?" . http_build_query(array_intersect_key($params, $allowedParams)),
			"GET",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		$ret = new PlanList();
		$ret->fromJson($json);
		return $ret;
	}
}