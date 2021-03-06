<?php
/**
 * RmaDataRmaInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise Edition 2.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * RmaDataRmaInterface Class Doc Comment
 *
 * @category Class
 * @description Interface RmaInterface
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RmaDataRmaInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'rma-data-rma-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'increment_id' => 'string',
        'entity_id' => 'int',
        'order_id' => 'int',
        'order_increment_id' => 'string',
        'store_id' => 'int',
        'customer_id' => 'int',
        'date_requested' => 'string',
        'customer_custom_email' => 'string',
        'items' => '\Swagger\Client\Model\RmaDataItemInterface[]',
        'status' => 'string',
        'comments' => '\Swagger\Client\Model\RmaDataCommentInterface[]',
        'tracks' => '\Swagger\Client\Model\RmaDataTrackInterface[]',
        'extension_attributes' => '\Swagger\Client\Model\RmaDataRmaExtensionInterface',
        'custom_attributes' => '\Swagger\Client\Model\FrameworkAttributeInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'increment_id' => null,
        'entity_id' => null,
        'order_id' => null,
        'order_increment_id' => null,
        'store_id' => null,
        'customer_id' => null,
        'date_requested' => null,
        'customer_custom_email' => null,
        'items' => null,
        'status' => null,
        'comments' => null,
        'tracks' => null,
        'extension_attributes' => null,
        'custom_attributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'increment_id' => 'incrementId',
        'entity_id' => 'entityId',
        'order_id' => 'orderId',
        'order_increment_id' => 'orderIncrementId',
        'store_id' => 'storeId',
        'customer_id' => 'customerId',
        'date_requested' => 'dateRequested',
        'customer_custom_email' => 'customerCustomEmail',
        'items' => 'items',
        'status' => 'status',
        'comments' => 'comments',
        'tracks' => 'tracks',
        'extension_attributes' => 'extensionAttributes',
        'custom_attributes' => 'customAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'increment_id' => 'setIncrementId',
        'entity_id' => 'setEntityId',
        'order_id' => 'setOrderId',
        'order_increment_id' => 'setOrderIncrementId',
        'store_id' => 'setStoreId',
        'customer_id' => 'setCustomerId',
        'date_requested' => 'setDateRequested',
        'customer_custom_email' => 'setCustomerCustomEmail',
        'items' => 'setItems',
        'status' => 'setStatus',
        'comments' => 'setComments',
        'tracks' => 'setTracks',
        'extension_attributes' => 'setExtensionAttributes',
        'custom_attributes' => 'setCustomAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'increment_id' => 'getIncrementId',
        'entity_id' => 'getEntityId',
        'order_id' => 'getOrderId',
        'order_increment_id' => 'getOrderIncrementId',
        'store_id' => 'getStoreId',
        'customer_id' => 'getCustomerId',
        'date_requested' => 'getDateRequested',
        'customer_custom_email' => 'getCustomerCustomEmail',
        'items' => 'getItems',
        'status' => 'getStatus',
        'comments' => 'getComments',
        'tracks' => 'getTracks',
        'extension_attributes' => 'getExtensionAttributes',
        'custom_attributes' => 'getCustomAttributes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['increment_id'] = isset($data['increment_id']) ? $data['increment_id'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_increment_id'] = isset($data['order_increment_id']) ? $data['order_increment_id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['date_requested'] = isset($data['date_requested']) ? $data['date_requested'] : null;
        $this->container['customer_custom_email'] = isset($data['customer_custom_email']) ? $data['customer_custom_email'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['tracks'] = isset($data['tracks']) ? $data['tracks'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['increment_id'] === null) {
            $invalidProperties[] = "'increment_id' can't be null";
        }
        if ($this->container['entity_id'] === null) {
            $invalidProperties[] = "'entity_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_increment_id'] === null) {
            $invalidProperties[] = "'order_increment_id' can't be null";
        }
        if ($this->container['store_id'] === null) {
            $invalidProperties[] = "'store_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['date_requested'] === null) {
            $invalidProperties[] = "'date_requested' can't be null";
        }
        if ($this->container['customer_custom_email'] === null) {
            $invalidProperties[] = "'customer_custom_email' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
        }
        if ($this->container['tracks'] === null) {
            $invalidProperties[] = "'tracks' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['increment_id'] === null) {
            return false;
        }
        if ($this->container['entity_id'] === null) {
            return false;
        }
        if ($this->container['order_id'] === null) {
            return false;
        }
        if ($this->container['order_increment_id'] === null) {
            return false;
        }
        if ($this->container['store_id'] === null) {
            return false;
        }
        if ($this->container['customer_id'] === null) {
            return false;
        }
        if ($this->container['date_requested'] === null) {
            return false;
        }
        if ($this->container['customer_custom_email'] === null) {
            return false;
        }
        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['comments'] === null) {
            return false;
        }
        if ($this->container['tracks'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets increment_id
     *
     * @return string
     */
    public function getIncrementId()
    {
        return $this->container['increment_id'];
    }

    /**
     * Sets increment_id
     *
     * @param string $increment_id Entity_id
     *
     * @return $this
     */
    public function setIncrementId($increment_id)
    {
        $this->container['increment_id'] = $increment_id;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param int $entity_id Entity_id
     *
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id Order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_increment_id
     *
     * @return string
     */
    public function getOrderIncrementId()
    {
        return $this->container['order_increment_id'];
    }

    /**
     * Sets order_increment_id
     *
     * @param string $order_increment_id Order_increment_id
     *
     * @return $this
     */
    public function setOrderIncrementId($order_increment_id)
    {
        $this->container['order_increment_id'] = $order_increment_id;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param int $store_id Store_id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id Customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets date_requested
     *
     * @return string
     */
    public function getDateRequested()
    {
        return $this->container['date_requested'];
    }

    /**
     * Sets date_requested
     *
     * @param string $date_requested Date_requested
     *
     * @return $this
     */
    public function setDateRequested($date_requested)
    {
        $this->container['date_requested'] = $date_requested;

        return $this;
    }

    /**
     * Gets customer_custom_email
     *
     * @return string
     */
    public function getCustomerCustomEmail()
    {
        return $this->container['customer_custom_email'];
    }

    /**
     * Sets customer_custom_email
     *
     * @param string $customer_custom_email Customer_custom_email
     *
     * @return $this
     */
    public function setCustomerCustomEmail($customer_custom_email)
    {
        $this->container['customer_custom_email'] = $customer_custom_email;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\RmaDataItemInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\RmaDataItemInterface[] $items Items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \Swagger\Client\Model\RmaDataCommentInterface[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \Swagger\Client\Model\RmaDataCommentInterface[] $comments Comments list
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets tracks
     *
     * @return \Swagger\Client\Model\RmaDataTrackInterface[]
     */
    public function getTracks()
    {
        return $this->container['tracks'];
    }

    /**
     * Sets tracks
     *
     * @param \Swagger\Client\Model\RmaDataTrackInterface[] $tracks Tracks list
     *
     * @return $this
     */
    public function setTracks($tracks)
    {
        $this->container['tracks'] = $tracks;

        return $this;
    }

    /**
     * Gets extension_attributes
     *
     * @return \Swagger\Client\Model\RmaDataRmaExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     *
     * @param \Swagger\Client\Model\RmaDataRmaExtensionInterface $extension_attributes extension_attributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \Swagger\Client\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \Swagger\Client\Model\FrameworkAttributeInterface[] $custom_attributes Custom attributes values.
     *
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


