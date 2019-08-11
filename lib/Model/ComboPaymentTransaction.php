<?php
/**
 * ComboPaymentTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.20.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * ComboPaymentTransaction Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComboPaymentTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComboPaymentTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => '\Killbill\Client\Swagger\Model\Account',
'paymentMethod' => '\Killbill\Client\Swagger\Model\PaymentMethod',
'transaction' => '\Killbill\Client\Swagger\Model\PaymentTransaction',
'paymentMethodPluginProperties' => '\Killbill\Client\Swagger\Model\PluginProperty[]',
'transactionPluginProperties' => '\Killbill\Client\Swagger\Model\PluginProperty[]',
'auditLogs' => '\Killbill\Client\Swagger\Model\AuditLog[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => null,
'paymentMethod' => null,
'transaction' => null,
'paymentMethodPluginProperties' => null,
'transactionPluginProperties' => null,
'auditLogs' => null    ];

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
        'account' => 'account',
'paymentMethod' => 'paymentMethod',
'transaction' => 'transaction',
'paymentMethodPluginProperties' => 'paymentMethodPluginProperties',
'transactionPluginProperties' => 'transactionPluginProperties',
'auditLogs' => 'auditLogs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
'paymentMethod' => 'setPaymentMethod',
'transaction' => 'setTransaction',
'paymentMethodPluginProperties' => 'setPaymentMethodPluginProperties',
'transactionPluginProperties' => 'setTransactionPluginProperties',
'auditLogs' => 'setAuditLogs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
'paymentMethod' => 'getPaymentMethod',
'transaction' => 'getTransaction',
'paymentMethodPluginProperties' => 'getPaymentMethodPluginProperties',
'transactionPluginProperties' => 'getTransactionPluginProperties',
'auditLogs' => 'getAuditLogs'    ];

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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['paymentMethodPluginProperties'] = isset($data['paymentMethodPluginProperties']) ? $data['paymentMethodPluginProperties'] : null;
        $this->container['transactionPluginProperties'] = isset($data['transactionPluginProperties']) ? $data['transactionPluginProperties'] : null;
        $this->container['auditLogs'] = isset($data['auditLogs']) ? $data['auditLogs'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets account
     *
     * @return \Killbill\Client\Swagger\Model\Account
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Killbill\Client\Swagger\Model\Account $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Killbill\Client\Swagger\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Killbill\Client\Swagger\Model\PaymentMethod $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return \Killbill\Client\Swagger\Model\PaymentTransaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Killbill\Client\Swagger\Model\PaymentTransaction $transaction transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets paymentMethodPluginProperties
     *
     * @return \Killbill\Client\Swagger\Model\PluginProperty[]
     */
    public function getPaymentMethodPluginProperties()
    {
        return $this->container['paymentMethodPluginProperties'];
    }

    /**
     * Sets paymentMethodPluginProperties
     *
     * @param \Killbill\Client\Swagger\Model\PluginProperty[] $paymentMethodPluginProperties paymentMethodPluginProperties
     *
     * @return $this
     */
    public function setPaymentMethodPluginProperties($paymentMethodPluginProperties)
    {
        $this->container['paymentMethodPluginProperties'] = $paymentMethodPluginProperties;

        return $this;
    }

    /**
     * Gets transactionPluginProperties
     *
     * @return \Killbill\Client\Swagger\Model\PluginProperty[]
     */
    public function getTransactionPluginProperties()
    {
        return $this->container['transactionPluginProperties'];
    }

    /**
     * Sets transactionPluginProperties
     *
     * @param \Killbill\Client\Swagger\Model\PluginProperty[] $transactionPluginProperties transactionPluginProperties
     *
     * @return $this
     */
    public function setTransactionPluginProperties($transactionPluginProperties)
    {
        $this->container['transactionPluginProperties'] = $transactionPluginProperties;

        return $this;
    }

    /**
     * Gets auditLogs
     *
     * @return \Killbill\Client\Swagger\Model\AuditLog[]
     */
    public function getAuditLogs()
    {
        return $this->container['auditLogs'];
    }

    /**
     * Sets auditLogs
     *
     * @param \Killbill\Client\Swagger\Model\AuditLog[] $auditLogs auditLogs
     *
     * @return $this
     */
    public function setAuditLogs($auditLogs)
    {
        $this->container['auditLogs'] = $auditLogs;

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
