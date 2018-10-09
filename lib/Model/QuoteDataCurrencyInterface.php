<?php
/**
 * QuoteDataCurrencyInterface
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
 * QuoteDataCurrencyInterface Class Doc Comment
 *
 * @category Class
 * @description Interface CurrencyInterface
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataCurrencyInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-currency-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'global_currency_code' => 'string',
        'base_currency_code' => 'string',
        'store_currency_code' => 'string',
        'quote_currency_code' => 'string',
        'store_to_base_rate' => 'float',
        'store_to_quote_rate' => 'float',
        'base_to_global_rate' => 'float',
        'base_to_quote_rate' => 'float',
        'extension_attributes' => '\Swagger\Client\Model\QuoteDataCurrencyExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'global_currency_code' => null,
        'base_currency_code' => null,
        'store_currency_code' => null,
        'quote_currency_code' => null,
        'store_to_base_rate' => null,
        'store_to_quote_rate' => null,
        'base_to_global_rate' => null,
        'base_to_quote_rate' => null,
        'extension_attributes' => null
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
        'global_currency_code' => 'globalCurrencyCode',
        'base_currency_code' => 'baseCurrencyCode',
        'store_currency_code' => 'storeCurrencyCode',
        'quote_currency_code' => 'quoteCurrencyCode',
        'store_to_base_rate' => 'storeToBaseRate',
        'store_to_quote_rate' => 'storeToQuoteRate',
        'base_to_global_rate' => 'baseToGlobalRate',
        'base_to_quote_rate' => 'baseToQuoteRate',
        'extension_attributes' => 'extensionAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'global_currency_code' => 'setGlobalCurrencyCode',
        'base_currency_code' => 'setBaseCurrencyCode',
        'store_currency_code' => 'setStoreCurrencyCode',
        'quote_currency_code' => 'setQuoteCurrencyCode',
        'store_to_base_rate' => 'setStoreToBaseRate',
        'store_to_quote_rate' => 'setStoreToQuoteRate',
        'base_to_global_rate' => 'setBaseToGlobalRate',
        'base_to_quote_rate' => 'setBaseToQuoteRate',
        'extension_attributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'global_currency_code' => 'getGlobalCurrencyCode',
        'base_currency_code' => 'getBaseCurrencyCode',
        'store_currency_code' => 'getStoreCurrencyCode',
        'quote_currency_code' => 'getQuoteCurrencyCode',
        'store_to_base_rate' => 'getStoreToBaseRate',
        'store_to_quote_rate' => 'getStoreToQuoteRate',
        'base_to_global_rate' => 'getBaseToGlobalRate',
        'base_to_quote_rate' => 'getBaseToQuoteRate',
        'extension_attributes' => 'getExtensionAttributes'
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
        $this->container['global_currency_code'] = isset($data['global_currency_code']) ? $data['global_currency_code'] : null;
        $this->container['base_currency_code'] = isset($data['base_currency_code']) ? $data['base_currency_code'] : null;
        $this->container['store_currency_code'] = isset($data['store_currency_code']) ? $data['store_currency_code'] : null;
        $this->container['quote_currency_code'] = isset($data['quote_currency_code']) ? $data['quote_currency_code'] : null;
        $this->container['store_to_base_rate'] = isset($data['store_to_base_rate']) ? $data['store_to_base_rate'] : null;
        $this->container['store_to_quote_rate'] = isset($data['store_to_quote_rate']) ? $data['store_to_quote_rate'] : null;
        $this->container['base_to_global_rate'] = isset($data['base_to_global_rate']) ? $data['base_to_global_rate'] : null;
        $this->container['base_to_quote_rate'] = isset($data['base_to_quote_rate']) ? $data['base_to_quote_rate'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets global_currency_code
     *
     * @return string
     */
    public function getGlobalCurrencyCode()
    {
        return $this->container['global_currency_code'];
    }

    /**
     * Sets global_currency_code
     *
     * @param string $global_currency_code Global currency code
     *
     * @return $this
     */
    public function setGlobalCurrencyCode($global_currency_code)
    {
        $this->container['global_currency_code'] = $global_currency_code;

        return $this;
    }

    /**
     * Gets base_currency_code
     *
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['base_currency_code'];
    }

    /**
     * Sets base_currency_code
     *
     * @param string $base_currency_code Base currency code
     *
     * @return $this
     */
    public function setBaseCurrencyCode($base_currency_code)
    {
        $this->container['base_currency_code'] = $base_currency_code;

        return $this;
    }

    /**
     * Gets store_currency_code
     *
     * @return string
     */
    public function getStoreCurrencyCode()
    {
        return $this->container['store_currency_code'];
    }

    /**
     * Sets store_currency_code
     *
     * @param string $store_currency_code Store currency code
     *
     * @return $this
     */
    public function setStoreCurrencyCode($store_currency_code)
    {
        $this->container['store_currency_code'] = $store_currency_code;

        return $this;
    }

    /**
     * Gets quote_currency_code
     *
     * @return string
     */
    public function getQuoteCurrencyCode()
    {
        return $this->container['quote_currency_code'];
    }

    /**
     * Sets quote_currency_code
     *
     * @param string $quote_currency_code Quote currency code
     *
     * @return $this
     */
    public function setQuoteCurrencyCode($quote_currency_code)
    {
        $this->container['quote_currency_code'] = $quote_currency_code;

        return $this;
    }

    /**
     * Gets store_to_base_rate
     *
     * @return float
     */
    public function getStoreToBaseRate()
    {
        return $this->container['store_to_base_rate'];
    }

    /**
     * Sets store_to_base_rate
     *
     * @param float $store_to_base_rate Store currency to base currency rate
     *
     * @return $this
     */
    public function setStoreToBaseRate($store_to_base_rate)
    {
        $this->container['store_to_base_rate'] = $store_to_base_rate;

        return $this;
    }

    /**
     * Gets store_to_quote_rate
     *
     * @return float
     */
    public function getStoreToQuoteRate()
    {
        return $this->container['store_to_quote_rate'];
    }

    /**
     * Sets store_to_quote_rate
     *
     * @param float $store_to_quote_rate Store currency to quote currency rate
     *
     * @return $this
     */
    public function setStoreToQuoteRate($store_to_quote_rate)
    {
        $this->container['store_to_quote_rate'] = $store_to_quote_rate;

        return $this;
    }

    /**
     * Gets base_to_global_rate
     *
     * @return float
     */
    public function getBaseToGlobalRate()
    {
        return $this->container['base_to_global_rate'];
    }

    /**
     * Sets base_to_global_rate
     *
     * @param float $base_to_global_rate Base currency to global currency rate
     *
     * @return $this
     */
    public function setBaseToGlobalRate($base_to_global_rate)
    {
        $this->container['base_to_global_rate'] = $base_to_global_rate;

        return $this;
    }

    /**
     * Gets base_to_quote_rate
     *
     * @return float
     */
    public function getBaseToQuoteRate()
    {
        return $this->container['base_to_quote_rate'];
    }

    /**
     * Sets base_to_quote_rate
     *
     * @param float $base_to_quote_rate Base currency to quote currency rate
     *
     * @return $this
     */
    public function setBaseToQuoteRate($base_to_quote_rate)
    {
        $this->container['base_to_quote_rate'] = $base_to_quote_rate;

        return $this;
    }

    /**
     * Gets extension_attributes
     *
     * @return \Swagger\Client\Model\QuoteDataCurrencyExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     *
     * @param \Swagger\Client\Model\QuoteDataCurrencyExtensionInterface $extension_attributes extension_attributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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


