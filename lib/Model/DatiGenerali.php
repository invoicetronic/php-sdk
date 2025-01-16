<?php
/**
 * DatiGenerali
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
 * Generator version: 7.10.0
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
 * DatiGenerali Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatiGenerali implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatiGenerali';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dati_generali_documento' => '\Invoicetronic\Model\DatiGeneraliDocumento',
        'dati_ordine_acquisto' => '\Invoicetronic\Model\DatiOrdineAcquisto[]',
        'dati_contratto' => '\Invoicetronic\Model\DatiContratto[]',
        'dati_convenzione' => '\Invoicetronic\Model\DatiConvenzione[]',
        'dati_ricezione' => '\Invoicetronic\Model\DatiRicezione[]',
        'dati_fatture_collegate' => '\Invoicetronic\Model\DatiFattureCollegate[]',
        'dati_sal' => '\Invoicetronic\Model\DatiSAL[]',
        'dati_ddt' => '\Invoicetronic\Model\DatiDDT[]',
        'dati_trasporto' => '\Invoicetronic\Model\DatiTrasporto',
        'fattura_principale' => '\Invoicetronic\Model\FatturaPrincipale'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dati_generali_documento' => null,
        'dati_ordine_acquisto' => null,
        'dati_contratto' => null,
        'dati_convenzione' => null,
        'dati_ricezione' => null,
        'dati_fatture_collegate' => null,
        'dati_sal' => null,
        'dati_ddt' => null,
        'dati_trasporto' => null,
        'fattura_principale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dati_generali_documento' => false,
        'dati_ordine_acquisto' => true,
        'dati_contratto' => true,
        'dati_convenzione' => true,
        'dati_ricezione' => true,
        'dati_fatture_collegate' => true,
        'dati_sal' => true,
        'dati_ddt' => true,
        'dati_trasporto' => false,
        'fattura_principale' => false
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
        'dati_generali_documento' => 'dati_generali_documento',
        'dati_ordine_acquisto' => 'dati_ordine_acquisto',
        'dati_contratto' => 'dati_contratto',
        'dati_convenzione' => 'dati_convenzione',
        'dati_ricezione' => 'dati_ricezione',
        'dati_fatture_collegate' => 'dati_fatture_collegate',
        'dati_sal' => 'dati_sal',
        'dati_ddt' => 'dati_ddt',
        'dati_trasporto' => 'dati_trasporto',
        'fattura_principale' => 'fattura_principale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dati_generali_documento' => 'setDatiGeneraliDocumento',
        'dati_ordine_acquisto' => 'setDatiOrdineAcquisto',
        'dati_contratto' => 'setDatiContratto',
        'dati_convenzione' => 'setDatiConvenzione',
        'dati_ricezione' => 'setDatiRicezione',
        'dati_fatture_collegate' => 'setDatiFattureCollegate',
        'dati_sal' => 'setDatiSal',
        'dati_ddt' => 'setDatiDdt',
        'dati_trasporto' => 'setDatiTrasporto',
        'fattura_principale' => 'setFatturaPrincipale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dati_generali_documento' => 'getDatiGeneraliDocumento',
        'dati_ordine_acquisto' => 'getDatiOrdineAcquisto',
        'dati_contratto' => 'getDatiContratto',
        'dati_convenzione' => 'getDatiConvenzione',
        'dati_ricezione' => 'getDatiRicezione',
        'dati_fatture_collegate' => 'getDatiFattureCollegate',
        'dati_sal' => 'getDatiSal',
        'dati_ddt' => 'getDatiDdt',
        'dati_trasporto' => 'getDatiTrasporto',
        'fattura_principale' => 'getFatturaPrincipale'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('dati_generali_documento', $data ?? [], null);
        $this->setIfExists('dati_ordine_acquisto', $data ?? [], null);
        $this->setIfExists('dati_contratto', $data ?? [], null);
        $this->setIfExists('dati_convenzione', $data ?? [], null);
        $this->setIfExists('dati_ricezione', $data ?? [], null);
        $this->setIfExists('dati_fatture_collegate', $data ?? [], null);
        $this->setIfExists('dati_sal', $data ?? [], null);
        $this->setIfExists('dati_ddt', $data ?? [], null);
        $this->setIfExists('dati_trasporto', $data ?? [], null);
        $this->setIfExists('fattura_principale', $data ?? [], null);
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
     * Gets dati_generali_documento
     *
     * @return \Invoicetronic\Model\DatiGeneraliDocumento|null
     */
    public function getDatiGeneraliDocumento()
    {
        return $this->container['dati_generali_documento'];
    }

    /**
     * Sets dati_generali_documento
     *
     * @param \Invoicetronic\Model\DatiGeneraliDocumento|null $dati_generali_documento dati_generali_documento
     *
     * @return self
     */
    public function setDatiGeneraliDocumento($dati_generali_documento)
    {
        if (is_null($dati_generali_documento)) {
            throw new \InvalidArgumentException('non-nullable dati_generali_documento cannot be null');
        }
        $this->container['dati_generali_documento'] = $dati_generali_documento;

        return $this;
    }

    /**
     * Gets dati_ordine_acquisto
     *
     * @return \Invoicetronic\Model\DatiOrdineAcquisto[]|null
     */
    public function getDatiOrdineAcquisto()
    {
        return $this->container['dati_ordine_acquisto'];
    }

    /**
     * Sets dati_ordine_acquisto
     *
     * @param \Invoicetronic\Model\DatiOrdineAcquisto[]|null $dati_ordine_acquisto dati_ordine_acquisto
     *
     * @return self
     */
    public function setDatiOrdineAcquisto($dati_ordine_acquisto)
    {
        if (is_null($dati_ordine_acquisto)) {
            array_push($this->openAPINullablesSetToNull, 'dati_ordine_acquisto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_ordine_acquisto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_ordine_acquisto'] = $dati_ordine_acquisto;

        return $this;
    }

    /**
     * Gets dati_contratto
     *
     * @return \Invoicetronic\Model\DatiContratto[]|null
     */
    public function getDatiContratto()
    {
        return $this->container['dati_contratto'];
    }

    /**
     * Sets dati_contratto
     *
     * @param \Invoicetronic\Model\DatiContratto[]|null $dati_contratto dati_contratto
     *
     * @return self
     */
    public function setDatiContratto($dati_contratto)
    {
        if (is_null($dati_contratto)) {
            array_push($this->openAPINullablesSetToNull, 'dati_contratto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_contratto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_contratto'] = $dati_contratto;

        return $this;
    }

    /**
     * Gets dati_convenzione
     *
     * @return \Invoicetronic\Model\DatiConvenzione[]|null
     */
    public function getDatiConvenzione()
    {
        return $this->container['dati_convenzione'];
    }

    /**
     * Sets dati_convenzione
     *
     * @param \Invoicetronic\Model\DatiConvenzione[]|null $dati_convenzione dati_convenzione
     *
     * @return self
     */
    public function setDatiConvenzione($dati_convenzione)
    {
        if (is_null($dati_convenzione)) {
            array_push($this->openAPINullablesSetToNull, 'dati_convenzione');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_convenzione', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_convenzione'] = $dati_convenzione;

        return $this;
    }

    /**
     * Gets dati_ricezione
     *
     * @return \Invoicetronic\Model\DatiRicezione[]|null
     */
    public function getDatiRicezione()
    {
        return $this->container['dati_ricezione'];
    }

    /**
     * Sets dati_ricezione
     *
     * @param \Invoicetronic\Model\DatiRicezione[]|null $dati_ricezione dati_ricezione
     *
     * @return self
     */
    public function setDatiRicezione($dati_ricezione)
    {
        if (is_null($dati_ricezione)) {
            array_push($this->openAPINullablesSetToNull, 'dati_ricezione');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_ricezione', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_ricezione'] = $dati_ricezione;

        return $this;
    }

    /**
     * Gets dati_fatture_collegate
     *
     * @return \Invoicetronic\Model\DatiFattureCollegate[]|null
     */
    public function getDatiFattureCollegate()
    {
        return $this->container['dati_fatture_collegate'];
    }

    /**
     * Sets dati_fatture_collegate
     *
     * @param \Invoicetronic\Model\DatiFattureCollegate[]|null $dati_fatture_collegate dati_fatture_collegate
     *
     * @return self
     */
    public function setDatiFattureCollegate($dati_fatture_collegate)
    {
        if (is_null($dati_fatture_collegate)) {
            array_push($this->openAPINullablesSetToNull, 'dati_fatture_collegate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_fatture_collegate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_fatture_collegate'] = $dati_fatture_collegate;

        return $this;
    }

    /**
     * Gets dati_sal
     *
     * @return \Invoicetronic\Model\DatiSAL[]|null
     */
    public function getDatiSal()
    {
        return $this->container['dati_sal'];
    }

    /**
     * Sets dati_sal
     *
     * @param \Invoicetronic\Model\DatiSAL[]|null $dati_sal dati_sal
     *
     * @return self
     */
    public function setDatiSal($dati_sal)
    {
        if (is_null($dati_sal)) {
            array_push($this->openAPINullablesSetToNull, 'dati_sal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_sal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_sal'] = $dati_sal;

        return $this;
    }

    /**
     * Gets dati_ddt
     *
     * @return \Invoicetronic\Model\DatiDDT[]|null
     */
    public function getDatiDdt()
    {
        return $this->container['dati_ddt'];
    }

    /**
     * Sets dati_ddt
     *
     * @param \Invoicetronic\Model\DatiDDT[]|null $dati_ddt dati_ddt
     *
     * @return self
     */
    public function setDatiDdt($dati_ddt)
    {
        if (is_null($dati_ddt)) {
            array_push($this->openAPINullablesSetToNull, 'dati_ddt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dati_ddt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dati_ddt'] = $dati_ddt;

        return $this;
    }

    /**
     * Gets dati_trasporto
     *
     * @return \Invoicetronic\Model\DatiTrasporto|null
     */
    public function getDatiTrasporto()
    {
        return $this->container['dati_trasporto'];
    }

    /**
     * Sets dati_trasporto
     *
     * @param \Invoicetronic\Model\DatiTrasporto|null $dati_trasporto dati_trasporto
     *
     * @return self
     */
    public function setDatiTrasporto($dati_trasporto)
    {
        if (is_null($dati_trasporto)) {
            throw new \InvalidArgumentException('non-nullable dati_trasporto cannot be null');
        }
        $this->container['dati_trasporto'] = $dati_trasporto;

        return $this;
    }

    /**
     * Gets fattura_principale
     *
     * @return \Invoicetronic\Model\FatturaPrincipale|null
     */
    public function getFatturaPrincipale()
    {
        return $this->container['fattura_principale'];
    }

    /**
     * Sets fattura_principale
     *
     * @param \Invoicetronic\Model\FatturaPrincipale|null $fattura_principale fattura_principale
     *
     * @return self
     */
    public function setFatturaPrincipale($fattura_principale)
    {
        if (is_null($fattura_principale)) {
            throw new \InvalidArgumentException('non-nullable fattura_principale cannot be null');
        }
        $this->container['fattura_principale'] = $fattura_principale;

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


