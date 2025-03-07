<?php
/**
 * DatiFattureCollegate
 *
 * PHP version 7.4
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
 * Contact: support@invoicetronic.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * DatiFattureCollegate Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatiFattureCollegate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatiFattureCollegate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'riferimento_numero_linea' => 'int[]',
        'id_documento' => 'string',
        'data' => '\DateTime',
        'num_item' => 'string',
        'codice_commessa_convenzione' => 'string',
        'codice_cup' => 'string',
        'codice_cig' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'riferimento_numero_linea' => 'int32',
        'id_documento' => null,
        'data' => 'date-time',
        'num_item' => null,
        'codice_commessa_convenzione' => null,
        'codice_cup' => null,
        'codice_cig' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'riferimento_numero_linea' => true,
        'id_documento' => true,
        'data' => true,
        'num_item' => true,
        'codice_commessa_convenzione' => true,
        'codice_cup' => true,
        'codice_cig' => true
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
        'riferimento_numero_linea' => 'riferimento_numero_linea',
        'id_documento' => 'id_documento',
        'data' => 'data',
        'num_item' => 'num_item',
        'codice_commessa_convenzione' => 'codice_commessa_convenzione',
        'codice_cup' => 'codice_cup',
        'codice_cig' => 'codice_cig'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'riferimento_numero_linea' => 'setRiferimentoNumeroLinea',
        'id_documento' => 'setIdDocumento',
        'data' => 'setData',
        'num_item' => 'setNumItem',
        'codice_commessa_convenzione' => 'setCodiceCommessaConvenzione',
        'codice_cup' => 'setCodiceCup',
        'codice_cig' => 'setCodiceCig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'riferimento_numero_linea' => 'getRiferimentoNumeroLinea',
        'id_documento' => 'getIdDocumento',
        'data' => 'getData',
        'num_item' => 'getNumItem',
        'codice_commessa_convenzione' => 'getCodiceCommessaConvenzione',
        'codice_cup' => 'getCodiceCup',
        'codice_cig' => 'getCodiceCig'
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
        $this->setIfExists('riferimento_numero_linea', $data ?? [], null);
        $this->setIfExists('id_documento', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('num_item', $data ?? [], null);
        $this->setIfExists('codice_commessa_convenzione', $data ?? [], null);
        $this->setIfExists('codice_cup', $data ?? [], null);
        $this->setIfExists('codice_cig', $data ?? [], null);
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
     * Gets riferimento_numero_linea
     *
     * @return int[]|null
     */
    public function getRiferimentoNumeroLinea()
    {
        return $this->container['riferimento_numero_linea'];
    }

    /**
     * Sets riferimento_numero_linea
     *
     * @param int[]|null $riferimento_numero_linea riferimento_numero_linea
     *
     * @return self
     */
    public function setRiferimentoNumeroLinea($riferimento_numero_linea)
    {
        if (is_null($riferimento_numero_linea)) {
            array_push($this->openAPINullablesSetToNull, 'riferimento_numero_linea');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('riferimento_numero_linea', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['riferimento_numero_linea'] = $riferimento_numero_linea;

        return $this;
    }

    /**
     * Gets id_documento
     *
     * @return string|null
     */
    public function getIdDocumento()
    {
        return $this->container['id_documento'];
    }

    /**
     * Sets id_documento
     *
     * @param string|null $id_documento id_documento
     *
     * @return self
     */
    public function setIdDocumento($id_documento)
    {
        if (is_null($id_documento)) {
            array_push($this->openAPINullablesSetToNull, 'id_documento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_documento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_documento'] = $id_documento;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \DateTime|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \DateTime|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            array_push($this->openAPINullablesSetToNull, 'data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets num_item
     *
     * @return string|null
     */
    public function getNumItem()
    {
        return $this->container['num_item'];
    }

    /**
     * Sets num_item
     *
     * @param string|null $num_item num_item
     *
     * @return self
     */
    public function setNumItem($num_item)
    {
        if (is_null($num_item)) {
            array_push($this->openAPINullablesSetToNull, 'num_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_item'] = $num_item;

        return $this;
    }

    /**
     * Gets codice_commessa_convenzione
     *
     * @return string|null
     */
    public function getCodiceCommessaConvenzione()
    {
        return $this->container['codice_commessa_convenzione'];
    }

    /**
     * Sets codice_commessa_convenzione
     *
     * @param string|null $codice_commessa_convenzione codice_commessa_convenzione
     *
     * @return self
     */
    public function setCodiceCommessaConvenzione($codice_commessa_convenzione)
    {
        if (is_null($codice_commessa_convenzione)) {
            array_push($this->openAPINullablesSetToNull, 'codice_commessa_convenzione');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codice_commessa_convenzione', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['codice_commessa_convenzione'] = $codice_commessa_convenzione;

        return $this;
    }

    /**
     * Gets codice_cup
     *
     * @return string|null
     */
    public function getCodiceCup()
    {
        return $this->container['codice_cup'];
    }

    /**
     * Sets codice_cup
     *
     * @param string|null $codice_cup codice_cup
     *
     * @return self
     */
    public function setCodiceCup($codice_cup)
    {
        if (is_null($codice_cup)) {
            array_push($this->openAPINullablesSetToNull, 'codice_cup');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codice_cup', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['codice_cup'] = $codice_cup;

        return $this;
    }

    /**
     * Gets codice_cig
     *
     * @return string|null
     */
    public function getCodiceCig()
    {
        return $this->container['codice_cig'];
    }

    /**
     * Sets codice_cig
     *
     * @param string|null $codice_cig codice_cig
     *
     * @return self
     */
    public function setCodiceCig($codice_cig)
    {
        if (is_null($codice_cig)) {
            array_push($this->openAPINullablesSetToNull, 'codice_cig');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codice_cig', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['codice_cig'] = $codice_cig;

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


