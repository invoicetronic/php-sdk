<?php
/**
 * FatturaElettronicaBody
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
 * FatturaElettronicaBody Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FatturaElettronicaBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FatturaElettronicaBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dati_generali' => '\Invoicetronic\Model\DatiGenerali',
        'dati_beni_servizi' => '\Invoicetronic\Model\DatiBeniServizi',
        'dati_veicoli' => '\Invoicetronic\Model\DatiVeicoli',
        'dati_pagamento' => '\Invoicetronic\Model\DatiPagamento[]',
        'allegati' => '\Invoicetronic\Model\Allegati[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dati_generali' => null,
        'dati_beni_servizi' => null,
        'dati_veicoli' => null,
        'dati_pagamento' => null,
        'allegati' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dati_generali' => false,
        'dati_beni_servizi' => false,
        'dati_veicoli' => false,
        'dati_pagamento' => true,
        'allegati' => true
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
        'dati_generali' => 'dati_generali',
        'dati_beni_servizi' => 'dati_beni_servizi',
        'dati_veicoli' => 'dati_veicoli',
        'dati_pagamento' => 'dati_pagamento',
        'allegati' => 'allegati'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dati_generali' => 'setDatiGenerali',
        'dati_beni_servizi' => 'setDatiBeniServizi',
        'dati_veicoli' => 'setDatiVeicoli',
        'dati_pagamento' => 'setDatiPagamento',
        'allegati' => 'setAllegati'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dati_generali' => 'getDatiGenerali',
        'dati_beni_servizi' => 'getDatiBeniServizi',
        'dati_veicoli' => 'getDatiVeicoli',
        'dati_pagamento' => 'getDatiPagamento',
        'allegati' => 'getAllegati'
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
        $this->setIfExists('dati_generali', $data ?? [], null);
        $this->setIfExists('dati_beni_servizi', $data ?? [], null);
        $this->setIfExists('dati_veicoli', $data ?? [], null);
        $this->setIfExists('dati_pagamento', $data ?? [], null);
        $this->setIfExists('allegati', $data ?? [], null);
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
     * Gets dati_generali
     *
     * @return \Invoicetronic\Model\DatiGenerali|null
     */
    public function getDatiGenerali()
    {
        return $this->container['dati_generali'];
    }

    /**
     * Sets dati_generali
     *
     * @param \Invoicetronic\Model\DatiGenerali|null $dati_generali dati_generali
     *
     * @return self
     */
    public function setDatiGenerali($dati_generali)
    {
        if (is_null($dati_generali)) {
            throw new \InvalidArgumentException('non-nullable dati_generali cannot be null');
        }
        $this->container['dati_generali'] = $dati_generali;

        return $this;
    }

    /**
     * Gets dati_beni_servizi
     *
     * @return \Invoicetronic\Model\DatiBeniServizi|null
     */
    public function getDatiBeniServizi()
    {
        return $this->container['dati_beni_servizi'];
    }

    /**
     * Sets dati_beni_servizi
     *
     * @param \Invoicetronic\Model\DatiBeniServizi|null $dati_beni_servizi dati_beni_servizi
     *
     * @return self
     */
    public function setDatiBeniServizi($dati_beni_servizi)
    {
        if (is_null($dati_beni_servizi)) {
            throw new \InvalidArgumentException('non-nullable dati_beni_servizi cannot be null');
        }
        $this->container['dati_beni_servizi'] = $dati_beni_servizi;

        return $this;
    }

    /**
     * Gets dati_veicoli
     *
     * @return \Invoicetronic\Model\DatiVeicoli|null
     */
    public function getDatiVeicoli()
    {
        return $this->container['dati_veicoli'];
    }

    /**
     * Sets dati_veicoli
     *
     * @param \Invoicetronic\Model\DatiVeicoli|null $dati_veicoli dati_veicoli
     *
     * @return self
     */
    public function setDatiVeicoli($dati_veicoli)
    {
        if (is_null($dati_veicoli)) {
            throw new \InvalidArgumentException('non-nullable dati_veicoli cannot be null');
        }
        $this->container['dati_veicoli'] = $dati_veicoli;

        return $this;
    }

    /**
     * Gets dati_pagamento
     *
     * @return \Invoicetronic\Model\DatiPagamento[]|null
     */
    public function getDatiPagamento()
    {
        return $this->container['dati_pagamento'];
    }

    /**
     * Sets dati_pagamento
     *
     * @param \Invoicetronic\Model\DatiPagamento[]|null $dati_pagamento dati_pagamento
     *
     * @return self
     */
    public function setDatiPagamento($dati_pagamento)
    {
        if (is_null($dati_pagamento)) {
            array_push($this->openAPINullablesSetToNull, 'dati_pagamento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_pagamento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_pagamento'] = $dati_pagamento;

        return $this;
    }

    /**
     * Gets allegati
     *
     * @return \Invoicetronic\Model\Allegati[]|null
     */
    public function getAllegati()
    {
        return $this->container['allegati'];
    }

    /**
     * Sets allegati
     *
     * @param \Invoicetronic\Model\Allegati[]|null $allegati allegati
     *
     * @return self
     */
    public function setAllegati($allegati)
    {
        if (is_null($allegati)) {
            array_push($this->openAPINullablesSetToNull, 'allegati');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allegati', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allegati'] = $allegati;

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


