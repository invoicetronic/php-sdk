<?php
/**
 * DatiTrasporto
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
 * DatiTrasporto Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatiTrasporto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatiTrasporto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dati_anagrafici_vettore' => '\Invoicetronic\Model\DatiAnagraficiVettore',
        'mezzo_trasporto' => 'string',
        'causale_trasporto' => 'string',
        'numero_colli' => 'int',
        'descrizione' => 'string',
        'unita_misura_peso' => 'string',
        'peso_lordo' => 'float',
        'peso_netto' => 'float',
        'data_ora_ritiro' => '\DateTime',
        'data_inizio_trasporto' => '\DateTime',
        'tipo_resa' => 'string',
        'indirizzo_resa' => '\Invoicetronic\Model\IndirizzoResa',
        'data_ora_consegna' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dati_anagrafici_vettore' => null,
        'mezzo_trasporto' => null,
        'causale_trasporto' => null,
        'numero_colli' => 'int32',
        'descrizione' => null,
        'unita_misura_peso' => null,
        'peso_lordo' => 'double',
        'peso_netto' => 'double',
        'data_ora_ritiro' => 'date-time',
        'data_inizio_trasporto' => 'date-time',
        'tipo_resa' => null,
        'indirizzo_resa' => null,
        'data_ora_consegna' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dati_anagrafici_vettore' => false,
        'mezzo_trasporto' => true,
        'causale_trasporto' => true,
        'numero_colli' => true,
        'descrizione' => true,
        'unita_misura_peso' => true,
        'peso_lordo' => true,
        'peso_netto' => true,
        'data_ora_ritiro' => true,
        'data_inizio_trasporto' => true,
        'tipo_resa' => true,
        'indirizzo_resa' => false,
        'data_ora_consegna' => true
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
        'dati_anagrafici_vettore' => 'dati_anagrafici_vettore',
        'mezzo_trasporto' => 'mezzo_trasporto',
        'causale_trasporto' => 'causale_trasporto',
        'numero_colli' => 'numero_colli',
        'descrizione' => 'descrizione',
        'unita_misura_peso' => 'unita_misura_peso',
        'peso_lordo' => 'peso_lordo',
        'peso_netto' => 'peso_netto',
        'data_ora_ritiro' => 'data_ora_ritiro',
        'data_inizio_trasporto' => 'data_inizio_trasporto',
        'tipo_resa' => 'tipo_resa',
        'indirizzo_resa' => 'indirizzo_resa',
        'data_ora_consegna' => 'data_ora_consegna'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dati_anagrafici_vettore' => 'setDatiAnagraficiVettore',
        'mezzo_trasporto' => 'setMezzoTrasporto',
        'causale_trasporto' => 'setCausaleTrasporto',
        'numero_colli' => 'setNumeroColli',
        'descrizione' => 'setDescrizione',
        'unita_misura_peso' => 'setUnitaMisuraPeso',
        'peso_lordo' => 'setPesoLordo',
        'peso_netto' => 'setPesoNetto',
        'data_ora_ritiro' => 'setDataOraRitiro',
        'data_inizio_trasporto' => 'setDataInizioTrasporto',
        'tipo_resa' => 'setTipoResa',
        'indirizzo_resa' => 'setIndirizzoResa',
        'data_ora_consegna' => 'setDataOraConsegna'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dati_anagrafici_vettore' => 'getDatiAnagraficiVettore',
        'mezzo_trasporto' => 'getMezzoTrasporto',
        'causale_trasporto' => 'getCausaleTrasporto',
        'numero_colli' => 'getNumeroColli',
        'descrizione' => 'getDescrizione',
        'unita_misura_peso' => 'getUnitaMisuraPeso',
        'peso_lordo' => 'getPesoLordo',
        'peso_netto' => 'getPesoNetto',
        'data_ora_ritiro' => 'getDataOraRitiro',
        'data_inizio_trasporto' => 'getDataInizioTrasporto',
        'tipo_resa' => 'getTipoResa',
        'indirizzo_resa' => 'getIndirizzoResa',
        'data_ora_consegna' => 'getDataOraConsegna'
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
        $this->setIfExists('dati_anagrafici_vettore', $data ?? [], null);
        $this->setIfExists('mezzo_trasporto', $data ?? [], null);
        $this->setIfExists('causale_trasporto', $data ?? [], null);
        $this->setIfExists('numero_colli', $data ?? [], null);
        $this->setIfExists('descrizione', $data ?? [], null);
        $this->setIfExists('unita_misura_peso', $data ?? [], null);
        $this->setIfExists('peso_lordo', $data ?? [], null);
        $this->setIfExists('peso_netto', $data ?? [], null);
        $this->setIfExists('data_ora_ritiro', $data ?? [], null);
        $this->setIfExists('data_inizio_trasporto', $data ?? [], null);
        $this->setIfExists('tipo_resa', $data ?? [], null);
        $this->setIfExists('indirizzo_resa', $data ?? [], null);
        $this->setIfExists('data_ora_consegna', $data ?? [], null);
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
     * Gets dati_anagrafici_vettore
     *
     * @return \Invoicetronic\Model\DatiAnagraficiVettore|null
     */
    public function getDatiAnagraficiVettore()
    {
        return $this->container['dati_anagrafici_vettore'];
    }

    /**
     * Sets dati_anagrafici_vettore
     *
     * @param \Invoicetronic\Model\DatiAnagraficiVettore|null $dati_anagrafici_vettore dati_anagrafici_vettore
     *
     * @return self
     */
    public function setDatiAnagraficiVettore($dati_anagrafici_vettore)
    {
        if (is_null($dati_anagrafici_vettore)) {
            throw new \InvalidArgumentException('non-nullable dati_anagrafici_vettore cannot be null');
        }
        $this->container['dati_anagrafici_vettore'] = $dati_anagrafici_vettore;

        return $this;
    }

    /**
     * Gets mezzo_trasporto
     *
     * @return string|null
     */
    public function getMezzoTrasporto()
    {
        return $this->container['mezzo_trasporto'];
    }

    /**
     * Sets mezzo_trasporto
     *
     * @param string|null $mezzo_trasporto mezzo_trasporto
     *
     * @return self
     */
    public function setMezzoTrasporto($mezzo_trasporto)
    {
        if (is_null($mezzo_trasporto)) {
            array_push($this->openAPINullablesSetToNull, 'mezzo_trasporto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mezzo_trasporto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mezzo_trasporto'] = $mezzo_trasporto;

        return $this;
    }

    /**
     * Gets causale_trasporto
     *
     * @return string|null
     */
    public function getCausaleTrasporto()
    {
        return $this->container['causale_trasporto'];
    }

    /**
     * Sets causale_trasporto
     *
     * @param string|null $causale_trasporto causale_trasporto
     *
     * @return self
     */
    public function setCausaleTrasporto($causale_trasporto)
    {
        if (is_null($causale_trasporto)) {
            array_push($this->openAPINullablesSetToNull, 'causale_trasporto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('causale_trasporto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['causale_trasporto'] = $causale_trasporto;

        return $this;
    }

    /**
     * Gets numero_colli
     *
     * @return int|null
     */
    public function getNumeroColli()
    {
        return $this->container['numero_colli'];
    }

    /**
     * Sets numero_colli
     *
     * @param int|null $numero_colli numero_colli
     *
     * @return self
     */
    public function setNumeroColli($numero_colli)
    {
        if (is_null($numero_colli)) {
            array_push($this->openAPINullablesSetToNull, 'numero_colli');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_colli', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_colli'] = $numero_colli;

        return $this;
    }

    /**
     * Gets descrizione
     *
     * @return string|null
     */
    public function getDescrizione()
    {
        return $this->container['descrizione'];
    }

    /**
     * Sets descrizione
     *
     * @param string|null $descrizione descrizione
     *
     * @return self
     */
    public function setDescrizione($descrizione)
    {
        if (is_null($descrizione)) {
            array_push($this->openAPINullablesSetToNull, 'descrizione');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('descrizione', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['descrizione'] = $descrizione;

        return $this;
    }

    /**
     * Gets unita_misura_peso
     *
     * @return string|null
     */
    public function getUnitaMisuraPeso()
    {
        return $this->container['unita_misura_peso'];
    }

    /**
     * Sets unita_misura_peso
     *
     * @param string|null $unita_misura_peso unita_misura_peso
     *
     * @return self
     */
    public function setUnitaMisuraPeso($unita_misura_peso)
    {
        if (is_null($unita_misura_peso)) {
            array_push($this->openAPINullablesSetToNull, 'unita_misura_peso');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unita_misura_peso', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unita_misura_peso'] = $unita_misura_peso;

        return $this;
    }

    /**
     * Gets peso_lordo
     *
     * @return float|null
     */
    public function getPesoLordo()
    {
        return $this->container['peso_lordo'];
    }

    /**
     * Sets peso_lordo
     *
     * @param float|null $peso_lordo peso_lordo
     *
     * @return self
     */
    public function setPesoLordo($peso_lordo)
    {
        if (is_null($peso_lordo)) {
            array_push($this->openAPINullablesSetToNull, 'peso_lordo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('peso_lordo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['peso_lordo'] = $peso_lordo;

        return $this;
    }

    /**
     * Gets peso_netto
     *
     * @return float|null
     */
    public function getPesoNetto()
    {
        return $this->container['peso_netto'];
    }

    /**
     * Sets peso_netto
     *
     * @param float|null $peso_netto peso_netto
     *
     * @return self
     */
    public function setPesoNetto($peso_netto)
    {
        if (is_null($peso_netto)) {
            array_push($this->openAPINullablesSetToNull, 'peso_netto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('peso_netto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['peso_netto'] = $peso_netto;

        return $this;
    }

    /**
     * Gets data_ora_ritiro
     *
     * @return \DateTime|null
     */
    public function getDataOraRitiro()
    {
        return $this->container['data_ora_ritiro'];
    }

    /**
     * Sets data_ora_ritiro
     *
     * @param \DateTime|null $data_ora_ritiro data_ora_ritiro
     *
     * @return self
     */
    public function setDataOraRitiro($data_ora_ritiro)
    {
        if (is_null($data_ora_ritiro)) {
            array_push($this->openAPINullablesSetToNull, 'data_ora_ritiro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_ora_ritiro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_ora_ritiro'] = $data_ora_ritiro;

        return $this;
    }

    /**
     * Gets data_inizio_trasporto
     *
     * @return \DateTime|null
     */
    public function getDataInizioTrasporto()
    {
        return $this->container['data_inizio_trasporto'];
    }

    /**
     * Sets data_inizio_trasporto
     *
     * @param \DateTime|null $data_inizio_trasporto data_inizio_trasporto
     *
     * @return self
     */
    public function setDataInizioTrasporto($data_inizio_trasporto)
    {
        if (is_null($data_inizio_trasporto)) {
            array_push($this->openAPINullablesSetToNull, 'data_inizio_trasporto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_inizio_trasporto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_inizio_trasporto'] = $data_inizio_trasporto;

        return $this;
    }

    /**
     * Gets tipo_resa
     *
     * @return string|null
     */
    public function getTipoResa()
    {
        return $this->container['tipo_resa'];
    }

    /**
     * Sets tipo_resa
     *
     * @param string|null $tipo_resa tipo_resa
     *
     * @return self
     */
    public function setTipoResa($tipo_resa)
    {
        if (is_null($tipo_resa)) {
            array_push($this->openAPINullablesSetToNull, 'tipo_resa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tipo_resa', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tipo_resa'] = $tipo_resa;

        return $this;
    }

    /**
     * Gets indirizzo_resa
     *
     * @return \Invoicetronic\Model\IndirizzoResa|null
     */
    public function getIndirizzoResa()
    {
        return $this->container['indirizzo_resa'];
    }

    /**
     * Sets indirizzo_resa
     *
     * @param \Invoicetronic\Model\IndirizzoResa|null $indirizzo_resa indirizzo_resa
     *
     * @return self
     */
    public function setIndirizzoResa($indirizzo_resa)
    {
        if (is_null($indirizzo_resa)) {
            throw new \InvalidArgumentException('non-nullable indirizzo_resa cannot be null');
        }
        $this->container['indirizzo_resa'] = $indirizzo_resa;

        return $this;
    }

    /**
     * Gets data_ora_consegna
     *
     * @return \DateTime|null
     */
    public function getDataOraConsegna()
    {
        return $this->container['data_ora_consegna'];
    }

    /**
     * Sets data_ora_consegna
     *
     * @param \DateTime|null $data_ora_consegna data_ora_consegna
     *
     * @return self
     */
    public function setDataOraConsegna($data_ora_consegna)
    {
        if (is_null($data_ora_consegna)) {
            array_push($this->openAPINullablesSetToNull, 'data_ora_consegna');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_ora_consegna', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_ora_consegna'] = $data_ora_consegna;

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


