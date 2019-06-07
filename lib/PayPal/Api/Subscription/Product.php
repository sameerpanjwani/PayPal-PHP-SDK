<?php
namespace PayPal\Api\Subscription;

use PayPal\Api\PatchRequest;
use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

/**
 * Class Product
 *
 * @package PayPal\Api\Subscription
 *
 * @property string id
 * @property string name
 * @property string description
 * @property string type
 * @property string category
 * @property string image_url
 * @property string home_url
 */
class Product extends PayPalResourceModel {
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
	public function getType() {
		return $this->type;
	}
	
	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType( $type ) {
		$this->type = $type;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * @param string $category
	 *
	 * @return $this
	 */
	public function setCategory( $category ) {
		$this->category = $category;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getImageUrl() {
		return $this->image_url;
	}
	
	/**
	 * @param string $image_url
	 *
	 * @return $this
	 */
	public function setImageUrl( $image_url ) {
		$this->image_url = $image_url;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getHomeUrl() {
		return $this->home_url;
	}
	
	/**
	 * @param string $home_url
	 *
	 * @return $this
	 */
	public function setHomeUrl( $home_url ) {
		$this->home_url = $home_url;
		
		return $this;
	}
	
	/**
	 * Create a new product
	 *
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return Product
	 */
	public function create($apiContext = null, $restCall = null)
	{
		$payLoad = $this->toJSON();
		$json = self::executeCall(
			"/v1/catalogs/products/",
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
	 * Shows details for a product, by ID.
	 *
	 * @param string $productId
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return Product
	 */
	public static function get($productId, $apiContext = null, $restCall = null)
	{
		ArgumentValidator::validate($productId, 'id');
		$payLoad = "";
		$json = self::executeCall(
			"/v1/catalogs/products/$productId",
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
	 * Update product
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
			"/v1/catalogs/products/{$this->getId()}",
			"PATCH",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		return true;
	}
	
	/**
	 * Lists products according to optional query string parameters specified.
	 *
	 * @param array $params
	 * @param ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
	 * @param PayPalRestCall $restCall is the Rest Call Service that is used to make rest calls
	 * @return ProductList
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
			"/v1/catalogs/products/" . "?" . http_build_query(array_intersect_key($params, $allowedParams)),
			"GET",
			$payLoad,
			null,
			$apiContext,
			$restCall
		);
		$ret = new ProductList();
		$ret->fromJson($json);
		return $ret;
	}
}