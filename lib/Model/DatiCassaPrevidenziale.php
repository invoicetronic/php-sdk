<?php
/**
 * DatiCassaPrevidenziale
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
 * DatiCassaPrevidenziale Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatiCassaPrevidenziale implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatiCassaPrevidenziale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tipo_cassa' => 'string',
        'al_cassa' => 'float',
        'importo_contributo_cassa' => 'float',
        'imponibile_cassa' => 'float',
        'aliquota_iva' => 'float',
        'ritenuta' => 'string',
        'natura' => 'string',
        'riferimento_amministrazione' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tipo_cassa' => null,
        'al_cassa' => 'double',
        'importo_contributo_cassa' => 'double',
        'imponibile_cassa' => 'double',
        'aliquota_iva' => 'double',
        'ritenuta' => null,
        'natura' => null,
        'riferimento_amministrazione' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tipo_cassa' => true,
        'al_cassa' => false,
        'importo_contributo_cassa' => false,
        'imponibile_cassa' => false,
        'aliquota_iva' => false,
        'ritenuta' => true,
        'natura' => true,
        'riferimento_amministrazione' => true
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
        'tipo_cassa' => 'tipo_cassa',
        'al_cassa' => 'al_cassa',
        'importo_contributo_cassa' => 'importo_contributo_cassa',
        'imponibile_cassa' => 'imponibile_cassa',
        'aliquota_iva' => 'aliquota_iva',
        'ritenuta' => 'ritenuta',
        'natura' => 'natura',
        'riferimento_amministrazione' => 'riferimento_amministrazione'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tipo_cassa' => 'setTipoCassa',
        'al_cassa' => 'setAlCassa',
        'importo_contributo_cassa' => 'setImportoContributoCassa',
        'imponibile_cassa' => 'setImponibileCassa',
        'aliquota_iva' => 'setAliquotaIva',
        'ritenuta' => 'setRitenuta',
        'natura' => 'setNatura',
        'riferimento_amministrazione' => 'setRiferimentoAmministrazione'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tipo_cassa' => 'getTipoCassa',
        'al_cassa' => 'getAlCassa',
        'importo_contributo_cassa' => 'getImportoContributoCassa',
        'imponibile_cassa' => 'getImponibileCassa',
        'aliquota_iva' => 'getAliquotaIva',
        'ritenuta' => 'getRitenuta',
        'natura' => 'getNatura',
        'riferimento_amministrazione' => 'getRiferimentoAmministrazione'
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
        $this->setIfExists('tipo_cassa', $data ?? [], null);
        $this->setIfExists('al_cassa', $data ?? [], null);
        $this->setIfExists('importo_contributo_cassa', $data ?? [], null);
        $this->setIfExists('imponibile_cassa', $data ?? [], null);
        $this->setIfExists('aliquota_iva', $data ?? [], null);
        $this->setIfExists('ritenuta', $data ?? [], null);
        $this->setIfExists('natura', $data ?? [], null);
        $this->setIfExists('riferimento_amministrazione', $data ?? [], null);
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
     * Gets tipo_cassa
     *
     * @return string|null
     */
    public function getTipoCassa()
    {
        return $this->container['tipo_cassa'];
    }

    /**
     * Sets tipo_cassa
     *
     * @param string|null $tipo_cassa tipo_cassa
     *
     * @return self
     */
    public function setTipoCassa($tipo_cassa)
    {
        if (is_null($tipo_cassa)) {
            array_push($this->openAPINullablesSetToNull, 'tipo_cassa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tipo_cassa', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tipo_cassa'] = $tipo_cassa;

        return $this;
    }

    /**
     * Gets al_cassa
     *
     * @return float|null
     */
    public function getAlCassa()
    {
        return $this->container['al_cassa'];
    }

    /**
     * Sets al_cassa
     *
     * @param float|null $al_cassa al_cassa
     *
     * @return self
     */
    public function setAlCassa($al_cassa)
    {
        if (is_null($al_cassa)) {
            throw new \InvalidArgumentException('non-nullable al_cassa cannot be null');
        }
        $this->container['al_cassa'] = $al_cassa;

        return $this;
    }

    /**
     * Gets importo_contributo_cassa
     *
     * @return float|null
     */
    public function getImportoContributoCassa()
    {
        return $this->container['importo_contributo_cassa'];
    }

    /**
     * Sets importo_contributo_cassa
     *
     * @param float|null $importo_contributo_cassa importo_contributo_cassa
     *
     * @return self
     */
    public function setImportoContributoCassa($importo_contributo_cassa)
    {
        if (is_null($importo_contributo_cassa)) {
            throw new \InvalidArgumentException('non-nullable importo_contributo_cassa cannot be null');
        }
        $this->container['importo_contributo_cassa'] = $importo_contributo_cassa;

        return $this;
    }

    /**
     * Gets imponibile_cassa
     *
     * @return float|null
     */
    public function getImponibileCassa()
    {
        return $this->container['imponibile_cassa'];
    }

    /**
     * Sets imponibile_cassa
     *
     * @param float|null $imponibile_cassa imponibile_cassa
     *
     * @return self
     */
    public function setImponibileCassa($imponibile_cassa)
    {
        if (is_null($imponibile_cassa)) {
            throw new \InvalidArgumentException('non-nullable imponibile_cassa cannot be null');
        }
        $this->container['imponibile_cassa'] = $imponibile_cassa;

        return $this;
    }

    /**
     * Gets aliquota_iva
     *
     * @return float|null
     */
    public function getAliquotaIva()
    {
        return $this->container['aliquota_iva'];
    }

    /**
     * Sets aliquota_iva
     *
     * @param float|null $aliquota_iva aliquota_iva
     *
     * @return self
     */
    public function setAliquotaIva($aliquota_iva)
    {
        if (is_null($aliquota_iva)) {
            throw new \InvalidArgumentException('non-nullable aliquota_iva cannot be null');
        }
        $this->container['aliquota_iva'] = $aliquota_iva;

        return $this;
    }

    /**
     * Gets ritenuta
     *
     * @return string|null
     */
    public function getRitenuta()
    {
        return $this->container['ritenuta'];
    }

    /**
     * Sets ritenuta
     *
     * @param string|null $ritenuta ritenuta
     *
     * @return self
     */
    public function setRitenuta($ritenuta)
    {
        if (is_null($ritenuta)) {
            array_push($this->openAPINullablesSetToNull, 'ritenuta');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ritenuta', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ritenuta'] = $ritenuta;

        return $this;
    }

    /**
     * Gets natura
     *
     * @return string|null
     */
    public function getNatura()
    {
        return $this->container['natura'];
    }

    /**
     * Sets natura
     *
     * @param string|null $natura natura
     *
     * @return self
     */
    public function setNatura($natura)
    {
        if (is_null($natura)) {
            array_push($this->openAPINullablesSetToNull, 'natura');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('natura', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['natura'] = $natura;

        return $this;
    }

    /**
     * Gets riferimento_amministrazione
     *
     * @return string|null
     */
    public function getRiferimentoAmministrazione()
    {
        return $this->container['riferimento_amministrazione'];
    }

    /**
     * Sets riferimento_amministrazione
     *
     * @param string|null $riferimento_amministrazione riferimento_amministrazione
     *
     * @return self
     */
    public function setRiferimentoAmministrazione($riferimento_amministrazione)
    {
        if (is_null($riferimento_amministrazione)) {
            array_push($this->openAPINullablesSetToNull, 'riferimento_amministrazione');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('riferimento_amministrazione', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['riferimento_amministrazione'] = $riferimento_amministrazione;

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


