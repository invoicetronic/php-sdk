<?php
/**
 * StabileOrganizzazione
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Invoicetronic API
 *
 * The [Invoicetronic API][2] is a RESTful service that allows you to send and receive invoices through the Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed to be simple and easy to use, abstracting away SDI complexity while providing complete control over the invoice send/receive process. It provides advanced features as encryption at rest, multi-language pre-flight invoice validation, multiple upload formats, webhooks, event logging, client SDKs, and CLI tools.  For more information, see  [Invoicetronic website][2]  [1]: https://www.fatturapa.gov.it/it/sistemainterscambio/cose-il-sdi/ [2]: https://invoicetronic.com/
 *
 * The version of the OpenAPI document: 1
 * Contact: info@invoicetronic.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Invoicetronic\Model;

use \ArrayAccess;
use \Invoicetronic\ObjectSerializer;

/**
 * StabileOrganizzazione Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StabileOrganizzazione implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StabileOrganizzazione';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'indirizzo' => 'string',
        'numero_civico' => 'string',
        'cap' => 'string',
        'comune' => 'string',
        'provincia' => 'string',
        'nazione' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'indirizzo' => null,
        'numero_civico' => null,
        'cap' => null,
        'comune' => null,
        'provincia' => null,
        'nazione' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'indirizzo' => true,
        'numero_civico' => true,
        'cap' => true,
        'comune' => true,
        'provincia' => true,
        'nazione' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'indirizzo' => 'indirizzo',
        'numero_civico' => 'numero_civico',
        'cap' => 'cap',
        'comune' => 'comune',
        'provincia' => 'provincia',
        'nazione' => 'nazione'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'indirizzo' => 'setIndirizzo',
        'numero_civico' => 'setNumeroCivico',
        'cap' => 'setCap',
        'comune' => 'setComune',
        'provincia' => 'setProvincia',
        'nazione' => 'setNazione'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'indirizzo' => 'getIndirizzo',
        'numero_civico' => 'getNumeroCivico',
        'cap' => 'getCap',
        'comune' => 'getComune',
        'provincia' => 'getProvincia',
        'nazione' => 'getNazione'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('indirizzo', $data ?? [], null);
        $this->setIfExists('numero_civico', $data ?? [], null);
        $this->setIfExists('cap', $data ?? [], null);
        $this->setIfExists('comune', $data ?? [], null);
        $this->setIfExists('provincia', $data ?? [], null);
        $this->setIfExists('nazione', $data ?? [], 'IT');
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets indirizzo
     *
     * @return string|null
     */
    public function getIndirizzo()
    {
        return $this->container['indirizzo'];
    }

    /**
     * Sets indirizzo
     *
     * @param string|null $indirizzo indirizzo
     *
     * @return self
     */
    public function setIndirizzo($indirizzo)
    {
        if (is_null($indirizzo)) {
            array_push($this->openAPINullablesSetToNull, 'indirizzo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('indirizzo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['indirizzo'] = $indirizzo;

        return $this;
    }

    /**
     * Gets numero_civico
     *
     * @return string|null
     */
    public function getNumeroCivico()
    {
        return $this->container['numero_civico'];
    }

    /**
     * Sets numero_civico
     *
     * @param string|null $numero_civico numero_civico
     *
     * @return self
     */
    public function setNumeroCivico($numero_civico)
    {
        if (is_null($numero_civico)) {
            array_push($this->openAPINullablesSetToNull, 'numero_civico');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_civico', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_civico'] = $numero_civico;

        return $this;
    }

    /**
     * Gets cap
     *
     * @return string|null
     */
    public function getCap()
    {
        return $this->container['cap'];
    }

    /**
     * Sets cap
     *
     * @param string|null $cap cap
     *
     * @return self
     */
    public function setCap($cap)
    {
        if (is_null($cap)) {
            array_push($this->openAPINullablesSetToNull, 'cap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cap'] = $cap;

        return $this;
    }

    /**
     * Gets comune
     *
     * @return string|null
     */
    public function getComune()
    {
        return $this->container['comune'];
    }

    /**
     * Sets comune
     *
     * @param string|null $comune comune
     *
     * @return self
     */
    public function setComune($comune)
    {
        if (is_null($comune)) {
            array_push($this->openAPINullablesSetToNull, 'comune');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comune', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comune'] = $comune;

        return $this;
    }

    /**
     * Gets provincia
     *
     * @return string|null
     */
    public function getProvincia()
    {
        return $this->container['provincia'];
    }

    /**
     * Sets provincia
     *
     * @param string|null $provincia provincia
     *
     * @return self
     */
    public function setProvincia($provincia)
    {
        if (is_null($provincia)) {
            array_push($this->openAPINullablesSetToNull, 'provincia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provincia', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provincia'] = $provincia;

        return $this;
    }

    /**
     * Gets nazione
     *
     * @return string|null
     */
    public function getNazione()
    {
        return $this->container['nazione'];
    }

    /**
     * Sets nazione
     *
     * @param string|null $nazione nazione
     *
     * @return self
     */
    public function setNazione($nazione)
    {
        if (is_null($nazione)) {
            array_push($this->openAPINullablesSetToNull, 'nazione');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nazione', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nazione'] = $nazione;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


