<?php

namespace PayPal\Api\Subscription;

use PayPal\Api\PatchRequest;
use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

/**
 * Class Agreement
 *
 * A resource representing a subscription.
 *
 * @package PayPal\Api
 *
 * @property string id
 * @property string plan_id
 * @property string quantity
 * @property \PayPal\Api\Subscription\ShippingAmount shipping_amount
 * @property \PayPal\Api\Subscription\Subscriber subscriber
 * @property bool auto_renewal
 * @property \PayPal\Api\Subscription\ApplicationContext application_context
 * @property string status
 * @property string status_change_note
 * @property string status_update_time
 * @property string start_time
 * @property \PayPal\Api\Subscription\BillingInfo billing_info
 * @property string create_time
 * @property string update_time
 */
class Subscription extends PayPalResourceModel
{
    /**
     * The PayPal-generated ID for the subscription.
     *
     * @param string $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * The PayPal-generated ID for the subscription.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
	
	/**
	 * The ID of the plan.
	 *
	 * @param string $id
	 *
	 * @return $this
	 */
	public function setPlanId($plan_id)
	{
		$this->plan_id = $plan_id;
		return $this;
	}
	
	/**
	 * The ID of the plan.
	 *
	 * @return string
	 */
	public function getPlanId()
	{
		return $this->plan_id;
	}
	
	/**
	 * Date and time when the subscription started. Date and Time Format as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
	 *
	 * @param string $start_time
	 *
	 * @return $this
	 */
	public function setStartTime($start_time)
	{
		$this->start_time = $start_time;
		return $this;
	}
	
	/**
	 * Date and time when the subscription started. Date and Time Format as defined in [ISO8601](http://tools.ietf.org/html/rfc3339#section-5.6).
	 *
	 * @return string
	 */
	public function getStartTime()
	{
		return $this->start_time;
	}
	
	/**
	 * The quantity of the product in the subscription.
	 *
	 * @param string $quantity
	 *
	 * @return $this
	 */
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		return $this;
	}
	
	/**
	 * The quantity of the product in the subscription.
	 *
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	
	/**
	 * The shipping charges.
	 *
	 * @param \PayPal\Api\Subscription\ShippingAmount $quantity
	 *
	 * @return $this
	 */
	public function setShippingAmount($shipping_amount)
	{
		$this->shipping_amount = $shipping_amount;
		return $this;
	}
	
	/**
	 * The quantity of the product in the subscription.
	 *
	 * @return \PayPal\Api\Subscription\ShippingAmount
	 */
	public function getShippingAmount()
	{
		return $this->shipping_amount;
	}
	
	/**
	 * @return \PayPal\Api\Subscription\Subscriber
	 */
	public function getSubscriber() {
		return $this->subscriber;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\Subscriber $subscriber
	 *
	 * @return $this
	 */
	public function setSubscriber( $subscriber ) {
		$this->subscriber = $subscriber;
		
		return $this;
	}
	
	/**
	 * @return bool
	 */
	public function getAutoRenewal() {
		return $this->auto_renewal;
	}
	
	/**
	 * @param bool $auto_renewal
	 *
	 * @return $this
	 */
	public function setAutoRenewal( $auto_renewal ) {
		$this->auto_renewal = $auto_renewal;
		
		return $this;
	}
	
	/**
	 * @return \PayPal\Api\Subscription\ApplicationContext
	 */
	public function getApplicationContext() {
		return $this->application_context;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\ApplicationContext $application_context
	 *
	 * @return $this
	 */
	public function setApplicationContext( $application_context ) {
		$this->application_context = $application_context;
		
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
	public function getStatusChangeNote() {
		return $this->status_change_note;
	}
	
	/**
	 * @param string $status_change_note
	 *
	 * @return $this
	 */
	public function setStatusChangeNote( $status_change_note ) {
		$this->status_change_note = $status_change_note;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getStatusUpdateTime() {
		return $this->status_update_time;
	}
	
	/**
	 * @param string $status_update_time
	 *
	 * @return $this
	 */
	public function setStatusUpdateTime( $status_update_time ) {
		$this->status_update_time = $status_update_time;
		
		return $this;
	}
	
	/**
	 * @return \PayPal\Api\Subscription\BillingInfo
	 */
	public function getBillingInfo() {
		return $this->billing_info;
	}
	
	/**
	 * @param \PayPal\Api\Subscription\BillingInfo $billing_info
	 *
	 * @return $this
	 */
	public function setBillingInfo( $billing_info ) {
		$this->billing_info = $billing_info;
		
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
	 * Get Approval Link
	 *
	 * @return null|string
	 */
	public function getApproveLink()
	{
		return $this->getLink(PayPalConstants::APPROVE);
	}
	
	
	
	
	
	
	
    /**
     * Create a new subscription
     *
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return Subscription
     */
    public function create($apiContext = null, $restCall = null)
    {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/",
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
     * @return Subscription
     */
    public static function get($subscriptionId, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($subscriptionId, 'id');
        $payLoad = "";
        $json = self::executeCall(
            "/v1/billing/subscriptions/$subscriptionId",
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
     * Update details of a billing agreement, such as the description, shipping address, and start date, by passing the ID of the agreement to the request URI.
     *
     * @param PatchRequest $patchRequest
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return bool
     */
    public function update($patchRequest, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($this->getId(), "Id");
        ArgumentValidator::validate($patchRequest, 'patchRequest');
        $payLoad = $patchRequest->toJSON();
        self::executeCall(
            "/v1/billing/subscriptions/{$this->getId()}",
            "PATCH",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        return true;
    }

    /**
     * Suspend a particular billing agreement by passing the ID of the agreement to the request URI.
     *
     * @param AgreementStateDescriptor $agreementStateDescriptor
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return bool
     */
    public function suspend($agreementStateDescriptor, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($this->getId(), "Id");
        ArgumentValidator::validate($agreementStateDescriptor, 'agreementStateDescriptor');
        $payLoad = $agreementStateDescriptor->toJSON();
        self::executeCall(
            "/v1/billing/subscriptions/{$this->getId()}/suspend",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        return true;
    }

    /**
     * Activates the subscription.
     *
     * @param Reason $reason
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return bool
     */
    public function activate($reason, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($this->getId(), "Id");
        ArgumentValidator::validate($reason, 'reason');
        $payLoad = $reason->toJSON();
        self::executeCall(
            "/v1/billing/subscriptions/{$this->getId()}/activate",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        return true;
    }

    /**
     * Cancel a subscription
     *
     * @param Reason $reason
     * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
     * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
     * @return bool
     */
    public function cancel($reason, $apiContext = null, $restCall = null)
    {
        ArgumentValidator::validate($this->getId(), "Id");
        ArgumentValidator::validate($reason, 'reason');
        $payLoad = $reason->toJSON();
        self::executeCall(
            "/v1/billing/subscriptions/{$this->getId()}/cancel",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        return true;
    }
}
