<?php
/**
 * DatiAnagraficiCedentePrestatore
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
 * DatiAnagraficiCedentePrestatore Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatiAnagraficiCedentePrestatore implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatiAnagraficiCedentePrestatore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_fiscale_iva' => '\Invoicetronic\Model\IdFiscaleIVA',
        'codice_fiscale' => 'string',
        'anagrafica' => '\Invoicetronic\Model\Anagrafica',
        'albo_professionale' => 'string',
        'provincia_albo' => 'string',
        'numero_iscrizione_albo' => 'string',
        'data_iscrizione_albo' => '\DateTime',
        'regime_fiscale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_fiscale_iva' => null,
        'codice_fiscale' => null,
        'anagrafica' => null,
        'albo_professionale' => null,
        'provincia_albo' => null,
        'numero_iscrizione_albo' => null,
        'data_iscrizione_albo' => 'date-time',
        'regime_fiscale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_fiscale_iva' => false,
        'codice_fiscale' => true,
        'anagrafica' => false,
        'albo_professionale' => true,
        'provincia_albo' => true,
        'numero_iscrizione_albo' => true,
        'data_iscrizione_albo' => true,
        'regime_fiscale' => true
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
        'id_fiscale_iva' => 'id_fiscale_iva',
        'codice_fiscale' => 'codice_fiscale',
        'anagrafica' => 'anagrafica',
        'albo_professionale' => 'albo_professionale',
        'provincia_albo' => 'provincia_albo',
        'numero_iscrizione_albo' => 'numero_iscrizione_albo',
        'data_iscrizione_albo' => 'data_iscrizione_albo',
        'regime_fiscale' => 'regime_fiscale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_fiscale_iva' => 'setIdFiscaleIva',
        'codice_fiscale' => 'setCodiceFiscale',
        'anagrafica' => 'setAnagrafica',
        'albo_professionale' => 'setAlboProfessionale',
        'provincia_albo' => 'setProvinciaAlbo',
        'numero_iscrizione_albo' => 'setNumeroIscrizioneAlbo',
        'data_iscrizione_albo' => 'setDataIscrizioneAlbo',
        'regime_fiscale' => 'setRegimeFiscale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_fiscale_iva' => 'getIdFiscaleIva',
        'codice_fiscale' => 'getCodiceFiscale',
        'anagrafica' => 'getAnagrafica',
        'albo_professionale' => 'getAlboProfessionale',
        'provincia_albo' => 'getProvinciaAlbo',
        'numero_iscrizione_albo' => 'getNumeroIscrizioneAlbo',
        'data_iscrizione_albo' => 'getDataIscrizioneAlbo',
        'regime_fiscale' => 'getRegimeFiscale'
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
        $this->setIfExists('id_fiscale_iva', $data ?? [], null);
        $this->setIfExists('codice_fiscale', $data ?? [], null);
        $this->setIfExists('anagrafica', $data ?? [], null);
        $this->setIfExists('albo_professionale', $data ?? [], null);
        $this->setIfExists('provincia_albo', $data ?? [], null);
        $this->setIfExists('numero_iscrizione_albo', $data ?? [], null);
        $this->setIfExists('data_iscrizione_albo', $data ?? [], null);
        $this->setIfExists('regime_fiscale', $data ?? [], null);
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
     * Gets id_fiscale_iva
     *
     * @return \Invoicetronic\Model\IdFiscaleIVA|null
     */
    public function getIdFiscaleIva()
    {
        return $this->container['id_fiscale_iva'];
    }

    /**
     * Sets id_fiscale_iva
     *
     * @param \Invoicetronic\Model\IdFiscaleIVA|null $id_fiscale_iva id_fiscale_iva
     *
     * @return self
     */
    public function setIdFiscaleIva($id_fiscale_iva)
    {
        if (is_null($id_fiscale_iva)) {
            throw new \InvalidArgumentException('non-nullable id_fiscale_iva cannot be null');
        }
        $this->container['id_fiscale_iva'] = $id_fiscale_iva;

        return $this;
    }

    /**
     * Gets codice_fiscale
     *
     * @return string|null
     */
    public function getCodiceFiscale()
    {
        return $this->container['codice_fiscale'];
    }

    /**
     * Sets codice_fiscale
     *
     * @param string|null $codice_fiscale codice_fiscale
     *
     * @return self
     */
    public function setCodiceFiscale($codice_fiscale)
    {
        if (is_null($codice_fiscale)) {
            array_push($this->openAPINullablesSetToNull, 'codice_fiscale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codice_fiscale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['codice_fiscale'] = $codice_fiscale;

        return $this;
    }

    /**
     * Gets anagrafica
     *
     * @return \Invoicetronic\Model\Anagrafica|null
     */
    public function getAnagrafica()
    {
        return $this->container['anagrafica'];
    }

    /**
     * Sets anagrafica
     *
     * @param \Invoicetronic\Model\Anagrafica|null $anagrafica anagrafica
     *
     * @return self
     */
    public function setAnagrafica($anagrafica)
    {
        if (is_null($anagrafica)) {
            throw new \InvalidArgumentException('non-nullable anagrafica cannot be null');
        }
        $this->container['anagrafica'] = $anagrafica;

        return $this;
    }

    /**
     * Gets albo_professionale
     *
     * @return string|null
     */
    public function getAlboProfessionale()
    {
        return $this->container['albo_professionale'];
    }

    /**
     * Sets albo_professionale
     *
     * @param string|null $albo_professionale albo_professionale
     *
     * @return self
     */
    public function setAlboProfessionale($albo_professionale)
    {
        if (is_null($albo_professionale)) {
            array_push($this->openAPINullablesSetToNull, 'albo_professionale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('albo_professionale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['albo_professionale'] = $albo_professionale;

        return $this;
    }

    /**
     * Gets provincia_albo
     *
     * @return string|null
     */
    public function getProvinciaAlbo()
    {
        return $this->container['provincia_albo'];
    }

    /**
     * Sets provincia_albo
     *
     * @param string|null $provincia_albo provincia_albo
     *
     * @return self
     */
    public function setProvinciaAlbo($provincia_albo)
    {
        if (is_null($provincia_albo)) {
            array_push($this->openAPINullablesSetToNull, 'provincia_albo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provincia_albo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provincia_albo'] = $provincia_albo;

        return $this;
    }

    /**
     * Gets numero_iscrizione_albo
     *
     * @return string|null
     */
    public function getNumeroIscrizioneAlbo()
    {
        return $this->container['numero_iscrizione_albo'];
    }

    /**
     * Sets numero_iscrizione_albo
     *
     * @param string|null $numero_iscrizione_albo numero_iscrizione_albo
     *
     * @return self
     */
    public function setNumeroIscrizioneAlbo($numero_iscrizione_albo)
    {
        if (is_null($numero_iscrizione_albo)) {
            array_push($this->openAPINullablesSetToNull, 'numero_iscrizione_albo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_iscrizione_albo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_iscrizione_albo'] = $numero_iscrizione_albo;

        return $this;
    }

    /**
     * Gets data_iscrizione_albo
     *
     * @return \DateTime|null
     */
    public function getDataIscrizioneAlbo()
    {
        return $this->container['data_iscrizione_albo'];
    }

    /**
     * Sets data_iscrizione_albo
     *
     * @param \DateTime|null $data_iscrizione_albo data_iscrizione_albo
     *
     * @return self
     */
    public function setDataIscrizioneAlbo($data_iscrizione_albo)
    {
        if (is_null($data_iscrizione_albo)) {
            array_push($this->openAPINullablesSetToNull, 'data_iscrizione_albo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_iscrizione_albo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_iscrizione_albo'] = $data_iscrizione_albo;

        return $this;
    }

    /**
     * Gets regime_fiscale
     *
     * @return string|null
     */
    public function getRegimeFiscale()
    {
        return $this->container['regime_fiscale'];
    }

    /**
     * Sets regime_fiscale
     *
     * @param string|null $regime_fiscale regime_fiscale
     *
     * @return self
     */
    public function setRegimeFiscale($regime_fiscale)
    {
        if (is_null($regime_fiscale)) {
            array_push($this->openAPINullablesSetToNull, 'regime_fiscale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('regime_fiscale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['regime_fiscale'] = $regime_fiscale;

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


