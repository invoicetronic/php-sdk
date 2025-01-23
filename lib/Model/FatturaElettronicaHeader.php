<?php
/**
 * FatturaElettronicaHeader
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Italian eInvoice API
 *
 * The Italian eInvoice API is a RESTful API that allows you to send and receive invoices through the Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed by Invoicetronic to be simple and easy to use, abstracting away SDI complexity while providing complete control over the invoice send/receive process. The API also provides advanced features as encryption at rest, invoice validation, multiple upload formats, webhooks, event logging, client SDKs for commonly used languages, and CLI tools.  For more information, see  [Invoicetronic website][2]  [1]: https://www.fatturapa.gov.it/it/sistemainterscambio/cose-il-sdi/ [2]: https://invoicetronic.com/
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@invoicetronic.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
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
 * FatturaElettronicaHeader Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FatturaElettronicaHeader implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FatturaElettronicaHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dati_trasmissione' => '\Invoicetronic\Model\DatiTrasmissione',
        'cedente_prestatore' => '\Invoicetronic\Model\CedentePrestatore',
        'rappresentante_fiscale' => '\Invoicetronic\Model\RappresentanteFiscale',
        'cessionario_committente' => '\Invoicetronic\Model\CessionarioCommittente',
        'terzo_intermediario_o_soggetto_emittente' => '\Invoicetronic\Model\TerzoIntermediarioOSoggettoEmittente',
        'soggetto_emittente' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dati_trasmissione' => null,
        'cedente_prestatore' => null,
        'rappresentante_fiscale' => null,
        'cessionario_committente' => null,
        'terzo_intermediario_o_soggetto_emittente' => null,
        'soggetto_emittente' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dati_trasmissione' => false,
        'cedente_prestatore' => false,
        'rappresentante_fiscale' => false,
        'cessionario_committente' => false,
        'terzo_intermediario_o_soggetto_emittente' => false,
        'soggetto_emittente' => true
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
        'dati_trasmissione' => 'dati_trasmissione',
        'cedente_prestatore' => 'cedente_prestatore',
        'rappresentante_fiscale' => 'RappresentanteFiscale',
        'cessionario_committente' => 'cessionario_committente',
        'terzo_intermediario_o_soggetto_emittente' => 'terzo_intermediario_o_soggetto_emittente',
        'soggetto_emittente' => 'soggetto_emittente'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dati_trasmissione' => 'setDatiTrasmissione',
        'cedente_prestatore' => 'setCedentePrestatore',
        'rappresentante_fiscale' => 'setRappresentanteFiscale',
        'cessionario_committente' => 'setCessionarioCommittente',
        'terzo_intermediario_o_soggetto_emittente' => 'setTerzoIntermediarioOSoggettoEmittente',
        'soggetto_emittente' => 'setSoggettoEmittente'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dati_trasmissione' => 'getDatiTrasmissione',
        'cedente_prestatore' => 'getCedentePrestatore',
        'rappresentante_fiscale' => 'getRappresentanteFiscale',
        'cessionario_committente' => 'getCessionarioCommittente',
        'terzo_intermediario_o_soggetto_emittente' => 'getTerzoIntermediarioOSoggettoEmittente',
        'soggetto_emittente' => 'getSoggettoEmittente'
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
        $this->setIfExists('dati_trasmissione', $data ?? [], null);
        $this->setIfExists('cedente_prestatore', $data ?? [], null);
        $this->setIfExists('rappresentante_fiscale', $data ?? [], null);
        $this->setIfExists('cessionario_committente', $data ?? [], null);
        $this->setIfExists('terzo_intermediario_o_soggetto_emittente', $data ?? [], null);
        $this->setIfExists('soggetto_emittente', $data ?? [], null);
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
     * Gets dati_trasmissione
     *
     * @return \Invoicetronic\Model\DatiTrasmissione|null
     */
    public function getDatiTrasmissione()
    {
        return $this->container['dati_trasmissione'];
    }

    /**
     * Sets dati_trasmissione
     *
     * @param \Invoicetronic\Model\DatiTrasmissione|null $dati_trasmissione dati_trasmissione
     *
     * @return self
     */
    public function setDatiTrasmissione($dati_trasmissione)
    {
        if (is_null($dati_trasmissione)) {
            throw new \InvalidArgumentException('non-nullable dati_trasmissione cannot be null');
        }
        $this->container['dati_trasmissione'] = $dati_trasmissione;

        return $this;
    }

    /**
     * Gets cedente_prestatore
     *
     * @return \Invoicetronic\Model\CedentePrestatore|null
     */
    public function getCedentePrestatore()
    {
        return $this->container['cedente_prestatore'];
    }

    /**
     * Sets cedente_prestatore
     *
     * @param \Invoicetronic\Model\CedentePrestatore|null $cedente_prestatore cedente_prestatore
     *
     * @return self
     */
    public function setCedentePrestatore($cedente_prestatore)
    {
        if (is_null($cedente_prestatore)) {
            throw new \InvalidArgumentException('non-nullable cedente_prestatore cannot be null');
        }
        $this->container['cedente_prestatore'] = $cedente_prestatore;

        return $this;
    }

    /**
     * Gets rappresentante_fiscale
     *
     * @return \Invoicetronic\Model\RappresentanteFiscale|null
     */
    public function getRappresentanteFiscale()
    {
        return $this->container['rappresentante_fiscale'];
    }

    /**
     * Sets rappresentante_fiscale
     *
     * @param \Invoicetronic\Model\RappresentanteFiscale|null $rappresentante_fiscale rappresentante_fiscale
     *
     * @return self
     */
    public function setRappresentanteFiscale($rappresentante_fiscale)
    {
        if (is_null($rappresentante_fiscale)) {
            throw new \InvalidArgumentException('non-nullable rappresentante_fiscale cannot be null');
        }
        $this->container['rappresentante_fiscale'] = $rappresentante_fiscale;

        return $this;
    }

    /**
     * Gets cessionario_committente
     *
     * @return \Invoicetronic\Model\CessionarioCommittente|null
     */
    public function getCessionarioCommittente()
    {
        return $this->container['cessionario_committente'];
    }

    /**
     * Sets cessionario_committente
     *
     * @param \Invoicetronic\Model\CessionarioCommittente|null $cessionario_committente cessionario_committente
     *
     * @return self
     */
    public function setCessionarioCommittente($cessionario_committente)
    {
        if (is_null($cessionario_committente)) {
            throw new \InvalidArgumentException('non-nullable cessionario_committente cannot be null');
        }
        $this->container['cessionario_committente'] = $cessionario_committente;

        return $this;
    }

    /**
     * Gets terzo_intermediario_o_soggetto_emittente
     *
     * @return \Invoicetronic\Model\TerzoIntermediarioOSoggettoEmittente|null
     */
    public function getTerzoIntermediarioOSoggettoEmittente()
    {
        return $this->container['terzo_intermediario_o_soggetto_emittente'];
    }

    /**
     * Sets terzo_intermediario_o_soggetto_emittente
     *
     * @param \Invoicetronic\Model\TerzoIntermediarioOSoggettoEmittente|null $terzo_intermediario_o_soggetto_emittente terzo_intermediario_o_soggetto_emittente
     *
     * @return self
     */
    public function setTerzoIntermediarioOSoggettoEmittente($terzo_intermediario_o_soggetto_emittente)
    {
        if (is_null($terzo_intermediario_o_soggetto_emittente)) {
            throw new \InvalidArgumentException('non-nullable terzo_intermediario_o_soggetto_emittente cannot be null');
        }
        $this->container['terzo_intermediario_o_soggetto_emittente'] = $terzo_intermediario_o_soggetto_emittente;

        return $this;
    }

    /**
     * Gets soggetto_emittente
     *
     * @return string|null
     */
    public function getSoggettoEmittente()
    {
        return $this->container['soggetto_emittente'];
    }

    /**
     * Sets soggetto_emittente
     *
     * @param string|null $soggetto_emittente soggetto_emittente
     *
     * @return self
     */
    public function setSoggettoEmittente($soggetto_emittente)
    {
        if (is_null($soggetto_emittente)) {
            array_push($this->openAPINullablesSetToNull, 'soggetto_emittente');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('soggetto_emittente', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['soggetto_emittente'] = $soggetto_emittente;

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


