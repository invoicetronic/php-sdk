<?php
/**
 * DettaglioPagamento
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
 * The Italian eInvoice API is a RESTful API that allows you to send and receive invoices through the Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed by Invoicetronic to be simple and easy to use, abstracting away SDI complexity while still providing complete control over the invoice send/receive process. The API also provides advanced features and a rich toolchain, such as invoice validation, multiple upload methods, webhooks, event logs, CORS support, client SDKs for commonly used languages, and CLI tools.  For more information, see  [Invoicetronic website][2]  [1]: https://www.fatturapa.gov.it/it/sistemainterscambio/cose-il-sdi/ [2]: https://invoicetronic.com/
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
 * DettaglioPagamento Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DettaglioPagamento implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DettaglioPagamento';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'beneficiario' => 'string',
        'modalita_pagamento' => 'string',
        'data_riferimento_termini_pagamento' => '\DateTime',
        'giorni_termini_pagamento' => 'int',
        'data_scadenza_pagamento' => '\DateTime',
        'importo_pagamento' => 'float',
        'cod_ufficio_postale' => 'string',
        'cognome_quietanzante' => 'string',
        'nome_quietanzante' => 'string',
        'cf_quietanzante' => 'string',
        'titolo_quietanzante' => 'string',
        'istituto_finanziario' => 'string',
        'iban' => 'string',
        'abi' => 'string',
        'cab' => 'string',
        'bic' => 'string',
        'sconto_pagamento_anticipato' => 'float',
        'data_limite_pagamento_anticipato' => '\DateTime',
        'penalita_pagamenti_ritardati' => 'float',
        'data_decorrenza_penale' => '\DateTime',
        'codice_pagamento' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'beneficiario' => null,
        'modalita_pagamento' => null,
        'data_riferimento_termini_pagamento' => 'date-time',
        'giorni_termini_pagamento' => 'int32',
        'data_scadenza_pagamento' => 'date-time',
        'importo_pagamento' => 'double',
        'cod_ufficio_postale' => null,
        'cognome_quietanzante' => null,
        'nome_quietanzante' => null,
        'cf_quietanzante' => null,
        'titolo_quietanzante' => null,
        'istituto_finanziario' => null,
        'iban' => null,
        'abi' => null,
        'cab' => null,
        'bic' => null,
        'sconto_pagamento_anticipato' => 'double',
        'data_limite_pagamento_anticipato' => 'date-time',
        'penalita_pagamenti_ritardati' => 'double',
        'data_decorrenza_penale' => 'date-time',
        'codice_pagamento' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'beneficiario' => true,
        'modalita_pagamento' => true,
        'data_riferimento_termini_pagamento' => true,
        'giorni_termini_pagamento' => true,
        'data_scadenza_pagamento' => true,
        'importo_pagamento' => false,
        'cod_ufficio_postale' => true,
        'cognome_quietanzante' => true,
        'nome_quietanzante' => true,
        'cf_quietanzante' => true,
        'titolo_quietanzante' => true,
        'istituto_finanziario' => true,
        'iban' => true,
        'abi' => true,
        'cab' => true,
        'bic' => true,
        'sconto_pagamento_anticipato' => true,
        'data_limite_pagamento_anticipato' => true,
        'penalita_pagamenti_ritardati' => true,
        'data_decorrenza_penale' => true,
        'codice_pagamento' => true
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
        'beneficiario' => 'beneficiario',
        'modalita_pagamento' => 'modalita_pagamento',
        'data_riferimento_termini_pagamento' => 'data_riferimento_termini_pagamento',
        'giorni_termini_pagamento' => 'giorni_termini_pagamento',
        'data_scadenza_pagamento' => 'data_scadenza_pagamento',
        'importo_pagamento' => 'importo_pagamento',
        'cod_ufficio_postale' => 'cod_ufficio_postale',
        'cognome_quietanzante' => 'cognome_quietanzante',
        'nome_quietanzante' => 'nome_quietanzante',
        'cf_quietanzante' => 'cf_quietanzante',
        'titolo_quietanzante' => 'titolo_quietanzante',
        'istituto_finanziario' => 'istituto_finanziario',
        'iban' => 'iban',
        'abi' => 'abi',
        'cab' => 'cab',
        'bic' => 'bic',
        'sconto_pagamento_anticipato' => 'sconto_pagamento_anticipato',
        'data_limite_pagamento_anticipato' => 'data_limite_pagamento_anticipato',
        'penalita_pagamenti_ritardati' => 'penalita_pagamenti_ritardati',
        'data_decorrenza_penale' => 'data_decorrenza_penale',
        'codice_pagamento' => 'codice_pagamento'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beneficiario' => 'setBeneficiario',
        'modalita_pagamento' => 'setModalitaPagamento',
        'data_riferimento_termini_pagamento' => 'setDataRiferimentoTerminiPagamento',
        'giorni_termini_pagamento' => 'setGiorniTerminiPagamento',
        'data_scadenza_pagamento' => 'setDataScadenzaPagamento',
        'importo_pagamento' => 'setImportoPagamento',
        'cod_ufficio_postale' => 'setCodUfficioPostale',
        'cognome_quietanzante' => 'setCognomeQuietanzante',
        'nome_quietanzante' => 'setNomeQuietanzante',
        'cf_quietanzante' => 'setCfQuietanzante',
        'titolo_quietanzante' => 'setTitoloQuietanzante',
        'istituto_finanziario' => 'setIstitutoFinanziario',
        'iban' => 'setIban',
        'abi' => 'setAbi',
        'cab' => 'setCab',
        'bic' => 'setBic',
        'sconto_pagamento_anticipato' => 'setScontoPagamentoAnticipato',
        'data_limite_pagamento_anticipato' => 'setDataLimitePagamentoAnticipato',
        'penalita_pagamenti_ritardati' => 'setPenalitaPagamentiRitardati',
        'data_decorrenza_penale' => 'setDataDecorrenzaPenale',
        'codice_pagamento' => 'setCodicePagamento'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beneficiario' => 'getBeneficiario',
        'modalita_pagamento' => 'getModalitaPagamento',
        'data_riferimento_termini_pagamento' => 'getDataRiferimentoTerminiPagamento',
        'giorni_termini_pagamento' => 'getGiorniTerminiPagamento',
        'data_scadenza_pagamento' => 'getDataScadenzaPagamento',
        'importo_pagamento' => 'getImportoPagamento',
        'cod_ufficio_postale' => 'getCodUfficioPostale',
        'cognome_quietanzante' => 'getCognomeQuietanzante',
        'nome_quietanzante' => 'getNomeQuietanzante',
        'cf_quietanzante' => 'getCfQuietanzante',
        'titolo_quietanzante' => 'getTitoloQuietanzante',
        'istituto_finanziario' => 'getIstitutoFinanziario',
        'iban' => 'getIban',
        'abi' => 'getAbi',
        'cab' => 'getCab',
        'bic' => 'getBic',
        'sconto_pagamento_anticipato' => 'getScontoPagamentoAnticipato',
        'data_limite_pagamento_anticipato' => 'getDataLimitePagamentoAnticipato',
        'penalita_pagamenti_ritardati' => 'getPenalitaPagamentiRitardati',
        'data_decorrenza_penale' => 'getDataDecorrenzaPenale',
        'codice_pagamento' => 'getCodicePagamento'
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
        $this->setIfExists('beneficiario', $data ?? [], null);
        $this->setIfExists('modalita_pagamento', $data ?? [], null);
        $this->setIfExists('data_riferimento_termini_pagamento', $data ?? [], null);
        $this->setIfExists('giorni_termini_pagamento', $data ?? [], null);
        $this->setIfExists('data_scadenza_pagamento', $data ?? [], null);
        $this->setIfExists('importo_pagamento', $data ?? [], null);
        $this->setIfExists('cod_ufficio_postale', $data ?? [], null);
        $this->setIfExists('cognome_quietanzante', $data ?? [], null);
        $this->setIfExists('nome_quietanzante', $data ?? [], null);
        $this->setIfExists('cf_quietanzante', $data ?? [], null);
        $this->setIfExists('titolo_quietanzante', $data ?? [], null);
        $this->setIfExists('istituto_finanziario', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('abi', $data ?? [], null);
        $this->setIfExists('cab', $data ?? [], null);
        $this->setIfExists('bic', $data ?? [], null);
        $this->setIfExists('sconto_pagamento_anticipato', $data ?? [], null);
        $this->setIfExists('data_limite_pagamento_anticipato', $data ?? [], null);
        $this->setIfExists('penalita_pagamenti_ritardati', $data ?? [], null);
        $this->setIfExists('data_decorrenza_penale', $data ?? [], null);
        $this->setIfExists('codice_pagamento', $data ?? [], null);
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
     * Gets beneficiario
     *
     * @return string|null
     */
    public function getBeneficiario()
    {
        return $this->container['beneficiario'];
    }

    /**
     * Sets beneficiario
     *
     * @param string|null $beneficiario beneficiario
     *
     * @return self
     */
    public function setBeneficiario($beneficiario)
    {
        if (is_null($beneficiario)) {
            array_push($this->openAPINullablesSetToNull, 'beneficiario');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('beneficiario', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['beneficiario'] = $beneficiario;

        return $this;
    }

    /**
     * Gets modalita_pagamento
     *
     * @return string|null
     */
    public function getModalitaPagamento()
    {
        return $this->container['modalita_pagamento'];
    }

    /**
     * Sets modalita_pagamento
     *
     * @param string|null $modalita_pagamento modalita_pagamento
     *
     * @return self
     */
    public function setModalitaPagamento($modalita_pagamento)
    {
        if (is_null($modalita_pagamento)) {
            array_push($this->openAPINullablesSetToNull, 'modalita_pagamento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modalita_pagamento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modalita_pagamento'] = $modalita_pagamento;

        return $this;
    }

    /**
     * Gets data_riferimento_termini_pagamento
     *
     * @return \DateTime|null
     */
    public function getDataRiferimentoTerminiPagamento()
    {
        return $this->container['data_riferimento_termini_pagamento'];
    }

    /**
     * Sets data_riferimento_termini_pagamento
     *
     * @param \DateTime|null $data_riferimento_termini_pagamento data_riferimento_termini_pagamento
     *
     * @return self
     */
    public function setDataRiferimentoTerminiPagamento($data_riferimento_termini_pagamento)
    {
        if (is_null($data_riferimento_termini_pagamento)) {
            array_push($this->openAPINullablesSetToNull, 'data_riferimento_termini_pagamento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_riferimento_termini_pagamento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_riferimento_termini_pagamento'] = $data_riferimento_termini_pagamento;

        return $this;
    }

    /**
     * Gets giorni_termini_pagamento
     *
     * @return int|null
     */
    public function getGiorniTerminiPagamento()
    {
        return $this->container['giorni_termini_pagamento'];
    }

    /**
     * Sets giorni_termini_pagamento
     *
     * @param int|null $giorni_termini_pagamento giorni_termini_pagamento
     *
     * @return self
     */
    public function setGiorniTerminiPagamento($giorni_termini_pagamento)
    {
        if (is_null($giorni_termini_pagamento)) {
            array_push($this->openAPINullablesSetToNull, 'giorni_termini_pagamento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('giorni_termini_pagamento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['giorni_termini_pagamento'] = $giorni_termini_pagamento;

        return $this;
    }

    /**
     * Gets data_scadenza_pagamento
     *
     * @return \DateTime|null
     */
    public function getDataScadenzaPagamento()
    {
        return $this->container['data_scadenza_pagamento'];
    }

    /**
     * Sets data_scadenza_pagamento
     *
     * @param \DateTime|null $data_scadenza_pagamento data_scadenza_pagamento
     *
     * @return self
     */
    public function setDataScadenzaPagamento($data_scadenza_pagamento)
    {
        if (is_null($data_scadenza_pagamento)) {
            array_push($this->openAPINullablesSetToNull, 'data_scadenza_pagamento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_scadenza_pagamento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_scadenza_pagamento'] = $data_scadenza_pagamento;

        return $this;
    }

    /**
     * Gets importo_pagamento
     *
     * @return float|null
     */
    public function getImportoPagamento()
    {
        return $this->container['importo_pagamento'];
    }

    /**
     * Sets importo_pagamento
     *
     * @param float|null $importo_pagamento importo_pagamento
     *
     * @return self
     */
    public function setImportoPagamento($importo_pagamento)
    {
        if (is_null($importo_pagamento)) {
            throw new \InvalidArgumentException('non-nullable importo_pagamento cannot be null');
        }
        $this->container['importo_pagamento'] = $importo_pagamento;

        return $this;
    }

    /**
     * Gets cod_ufficio_postale
     *
     * @return string|null
     */
    public function getCodUfficioPostale()
    {
        return $this->container['cod_ufficio_postale'];
    }

    /**
     * Sets cod_ufficio_postale
     *
     * @param string|null $cod_ufficio_postale cod_ufficio_postale
     *
     * @return self
     */
    public function setCodUfficioPostale($cod_ufficio_postale)
    {
        if (is_null($cod_ufficio_postale)) {
            array_push($this->openAPINullablesSetToNull, 'cod_ufficio_postale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_ufficio_postale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cod_ufficio_postale'] = $cod_ufficio_postale;

        return $this;
    }

    /**
     * Gets cognome_quietanzante
     *
     * @return string|null
     */
    public function getCognomeQuietanzante()
    {
        return $this->container['cognome_quietanzante'];
    }

    /**
     * Sets cognome_quietanzante
     *
     * @param string|null $cognome_quietanzante cognome_quietanzante
     *
     * @return self
     */
    public function setCognomeQuietanzante($cognome_quietanzante)
    {
        if (is_null($cognome_quietanzante)) {
            array_push($this->openAPINullablesSetToNull, 'cognome_quietanzante');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cognome_quietanzante', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cognome_quietanzante'] = $cognome_quietanzante;

        return $this;
    }

    /**
     * Gets nome_quietanzante
     *
     * @return string|null
     */
    public function getNomeQuietanzante()
    {
        return $this->container['nome_quietanzante'];
    }

    /**
     * Sets nome_quietanzante
     *
     * @param string|null $nome_quietanzante nome_quietanzante
     *
     * @return self
     */
    public function setNomeQuietanzante($nome_quietanzante)
    {
        if (is_null($nome_quietanzante)) {
            array_push($this->openAPINullablesSetToNull, 'nome_quietanzante');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nome_quietanzante', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nome_quietanzante'] = $nome_quietanzante;

        return $this;
    }

    /**
     * Gets cf_quietanzante
     *
     * @return string|null
     */
    public function getCfQuietanzante()
    {
        return $this->container['cf_quietanzante'];
    }

    /**
     * Sets cf_quietanzante
     *
     * @param string|null $cf_quietanzante cf_quietanzante
     *
     * @return self
     */
    public function setCfQuietanzante($cf_quietanzante)
    {
        if (is_null($cf_quietanzante)) {
            array_push($this->openAPINullablesSetToNull, 'cf_quietanzante');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cf_quietanzante', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cf_quietanzante'] = $cf_quietanzante;

        return $this;
    }

    /**
     * Gets titolo_quietanzante
     *
     * @return string|null
     */
    public function getTitoloQuietanzante()
    {
        return $this->container['titolo_quietanzante'];
    }

    /**
     * Sets titolo_quietanzante
     *
     * @param string|null $titolo_quietanzante titolo_quietanzante
     *
     * @return self
     */
    public function setTitoloQuietanzante($titolo_quietanzante)
    {
        if (is_null($titolo_quietanzante)) {
            array_push($this->openAPINullablesSetToNull, 'titolo_quietanzante');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('titolo_quietanzante', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['titolo_quietanzante'] = $titolo_quietanzante;

        return $this;
    }

    /**
     * Gets istituto_finanziario
     *
     * @return string|null
     */
    public function getIstitutoFinanziario()
    {
        return $this->container['istituto_finanziario'];
    }

    /**
     * Sets istituto_finanziario
     *
     * @param string|null $istituto_finanziario istituto_finanziario
     *
     * @return self
     */
    public function setIstitutoFinanziario($istituto_finanziario)
    {
        if (is_null($istituto_finanziario)) {
            array_push($this->openAPINullablesSetToNull, 'istituto_finanziario');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('istituto_finanziario', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['istituto_finanziario'] = $istituto_finanziario;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban iban
     *
     * @return self
     */
    public function setIban($iban)
    {
        if (is_null($iban)) {
            array_push($this->openAPINullablesSetToNull, 'iban');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iban', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets abi
     *
     * @return string|null
     */
    public function getAbi()
    {
        return $this->container['abi'];
    }

    /**
     * Sets abi
     *
     * @param string|null $abi abi
     *
     * @return self
     */
    public function setAbi($abi)
    {
        if (is_null($abi)) {
            array_push($this->openAPINullablesSetToNull, 'abi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('abi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['abi'] = $abi;

        return $this;
    }

    /**
     * Gets cab
     *
     * @return string|null
     */
    public function getCab()
    {
        return $this->container['cab'];
    }

    /**
     * Sets cab
     *
     * @param string|null $cab cab
     *
     * @return self
     */
    public function setCab($cab)
    {
        if (is_null($cab)) {
            array_push($this->openAPINullablesSetToNull, 'cab');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cab', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cab'] = $cab;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string|null $bic bic
     *
     * @return self
     */
    public function setBic($bic)
    {
        if (is_null($bic)) {
            array_push($this->openAPINullablesSetToNull, 'bic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets sconto_pagamento_anticipato
     *
     * @return float|null
     */
    public function getScontoPagamentoAnticipato()
    {
        return $this->container['sconto_pagamento_anticipato'];
    }

    /**
     * Sets sconto_pagamento_anticipato
     *
     * @param float|null $sconto_pagamento_anticipato sconto_pagamento_anticipato
     *
     * @return self
     */
    public function setScontoPagamentoAnticipato($sconto_pagamento_anticipato)
    {
        if (is_null($sconto_pagamento_anticipato)) {
            array_push($this->openAPINullablesSetToNull, 'sconto_pagamento_anticipato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sconto_pagamento_anticipato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sconto_pagamento_anticipato'] = $sconto_pagamento_anticipato;

        return $this;
    }

    /**
     * Gets data_limite_pagamento_anticipato
     *
     * @return \DateTime|null
     */
    public function getDataLimitePagamentoAnticipato()
    {
        return $this->container['data_limite_pagamento_anticipato'];
    }

    /**
     * Sets data_limite_pagamento_anticipato
     *
     * @param \DateTime|null $data_limite_pagamento_anticipato data_limite_pagamento_anticipato
     *
     * @return self
     */
    public function setDataLimitePagamentoAnticipato($data_limite_pagamento_anticipato)
    {
        if (is_null($data_limite_pagamento_anticipato)) {
            array_push($this->openAPINullablesSetToNull, 'data_limite_pagamento_anticipato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_limite_pagamento_anticipato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_limite_pagamento_anticipato'] = $data_limite_pagamento_anticipato;

        return $this;
    }

    /**
     * Gets penalita_pagamenti_ritardati
     *
     * @return float|null
     */
    public function getPenalitaPagamentiRitardati()
    {
        return $this->container['penalita_pagamenti_ritardati'];
    }

    /**
     * Sets penalita_pagamenti_ritardati
     *
     * @param float|null $penalita_pagamenti_ritardati penalita_pagamenti_ritardati
     *
     * @return self
     */
    public function setPenalitaPagamentiRitardati($penalita_pagamenti_ritardati)
    {
        if (is_null($penalita_pagamenti_ritardati)) {
            array_push($this->openAPINullablesSetToNull, 'penalita_pagamenti_ritardati');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('penalita_pagamenti_ritardati', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['penalita_pagamenti_ritardati'] = $penalita_pagamenti_ritardati;

        return $this;
    }

    /**
     * Gets data_decorrenza_penale
     *
     * @return \DateTime|null
     */
    public function getDataDecorrenzaPenale()
    {
        return $this->container['data_decorrenza_penale'];
    }

    /**
     * Sets data_decorrenza_penale
     *
     * @param \DateTime|null $data_decorrenza_penale data_decorrenza_penale
     *
     * @return self
     */
    public function setDataDecorrenzaPenale($data_decorrenza_penale)
    {
        if (is_null($data_decorrenza_penale)) {
            array_push($this->openAPINullablesSetToNull, 'data_decorrenza_penale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_decorrenza_penale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_decorrenza_penale'] = $data_decorrenza_penale;

        return $this;
    }

    /**
     * Gets codice_pagamento
     *
     * @return string|null
     */
    public function getCodicePagamento()
    {
        return $this->container['codice_pagamento'];
    }

    /**
     * Sets codice_pagamento
     *
     * @param string|null $codice_pagamento codice_pagamento
     *
     * @return self
     */
    public function setCodicePagamento($codice_pagamento)
    {
        if (is_null($codice_pagamento)) {
            array_push($this->openAPINullablesSetToNull, 'codice_pagamento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codice_pagamento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['codice_pagamento'] = $codice_pagamento;

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


