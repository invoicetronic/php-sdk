# PHP SDK for the Invoicetronic API

The [Invoicetronic API][2] is a RESTful service that allows you to send and receive invoices through the Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed to be simple and easy to use, abstracting away SDI complexity while providing complete control over the invoice send/receive process. It provides advanced features as encryption at rest, multi-language pre-flight invoice validation, multiple upload formats, webhooks, event logging, client SDKs, and CLI tools.

For more information, see  [Invoicetronic website][2]

[1]: https://www.fatturapa.gov.it/it/sistemainterscambio/cose-il-sdi/
[2]: https://invoicetronic.com/

For more information, please visit [https://invoicetronic.com](https://invoicetronic.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/invoicetronic/php-sdk.git"
    }
  ],
  "require": {
    "invoicetronic/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/PHP SDK for the Invoicetronic API/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.

try {
    $result = $apiInstance->companyGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompanyApi* | [**companyGet**](docs/Api/CompanyApi.md#companyget) | **GET** /company | List companies
*CompanyApi* | [**companyIdDelete**](docs/Api/CompanyApi.md#companyiddelete) | **DELETE** /company/{id} | Delete a company
*CompanyApi* | [**companyIdGet**](docs/Api/CompanyApi.md#companyidget) | **GET** /company/{id} | Get a company by id
*CompanyApi* | [**companyPost**](docs/Api/CompanyApi.md#companypost) | **POST** /company | Add a company
*CompanyApi* | [**companyPut**](docs/Api/CompanyApi.md#companyput) | **PUT** /company | Update a company
*LogApi* | [**logGet**](docs/Api/LogApi.md#logget) | **GET** /log | List events
*LogApi* | [**logIdGet**](docs/Api/LogApi.md#logidget) | **GET** /log/{id} | Get an event by id
*ReceiveApi* | [**receiveGet**](docs/Api/ReceiveApi.md#receiveget) | **GET** /receive | List incoming invoices
*ReceiveApi* | [**receiveIdDelete**](docs/Api/ReceiveApi.md#receiveiddelete) | **DELETE** /receive/{id} | Delete an incoming invoice by id
*ReceiveApi* | [**receiveIdGet**](docs/Api/ReceiveApi.md#receiveidget) | **GET** /receive/{id} | Get an incoming invoice by id
*SendApi* | [**sendFilePost**](docs/Api/SendApi.md#sendfilepost) | **POST** /send/file | Add an invoice by file
*SendApi* | [**sendGet**](docs/Api/SendApi.md#sendget) | **GET** /send | List invoices
*SendApi* | [**sendIdGet**](docs/Api/SendApi.md#sendidget) | **GET** /send/{id} | Get a invoice by id
*SendApi* | [**sendJsonPost**](docs/Api/SendApi.md#sendjsonpost) | **POST** /send/json | Add an invoice by json
*SendApi* | [**sendPost**](docs/Api/SendApi.md#sendpost) | **POST** /send | Add an invoice
*SendApi* | [**sendValidateFilePost**](docs/Api/SendApi.md#sendvalidatefilepost) | **POST** /send/validate/file | Validate an invoice file
*SendApi* | [**sendValidateJsonPost**](docs/Api/SendApi.md#sendvalidatejsonpost) | **POST** /send/validate/json | Validate an invoice by json
*SendApi* | [**sendValidatePost**](docs/Api/SendApi.md#sendvalidatepost) | **POST** /send/validate | Validate an invoice
*SendApi* | [**sendValidateXmlPost**](docs/Api/SendApi.md#sendvalidatexmlpost) | **POST** /send/validate/xml | Validate an invoice by xml
*SendApi* | [**sendXmlPost**](docs/Api/SendApi.md#sendxmlpost) | **POST** /send/xml | Add an invoice by xml
*StatusApi* | [**statusGet**](docs/Api/StatusApi.md#statusget) | **GET** /status | Account status
*UpdateApi* | [**updateGet**](docs/Api/UpdateApi.md#updateget) | **GET** /update | List updates
*UpdateApi* | [**updateIdGet**](docs/Api/UpdateApi.md#updateidget) | **GET** /update/{id} | Get an update by id
*WebhookApi* | [**webhookGet**](docs/Api/WebhookApi.md#webhookget) | **GET** /webhook | List webhooks
*WebhookApi* | [**webhookIdDelete**](docs/Api/WebhookApi.md#webhookiddelete) | **DELETE** /webhook/{id} | Delete a webhook by id
*WebhookApi* | [**webhookIdGet**](docs/Api/WebhookApi.md#webhookidget) | **GET** /webhook/{id} | Get a webhook by id
*WebhookApi* | [**webhookPost**](docs/Api/WebhookApi.md#webhookpost) | **POST** /webhook | Add a webhook
*WebhookApi* | [**webhookPut**](docs/Api/WebhookApi.md#webhookput) | **PUT** /webhook | Update a webhook
*WebhookApi* | [**webhookhistoryGet**](docs/Api/WebhookApi.md#webhookhistoryget) | **GET** /webhookhistory | List webhook history items
*WebhookApi* | [**webhookhistoryIdGet**](docs/Api/WebhookApi.md#webhookhistoryidget) | **GET** /webhookhistory/{id} | Get a webhook history item by id

## Models

- [Allegati](docs/Model/Allegati.md)
- [AltriDatiGestionali](docs/Model/AltriDatiGestionali.md)
- [Anagrafica](docs/Model/Anagrafica.md)
- [CedentePrestatore](docs/Model/CedentePrestatore.md)
- [CessionarioCommittente](docs/Model/CessionarioCommittente.md)
- [CodiceArticolo](docs/Model/CodiceArticolo.md)
- [Company](docs/Model/Company.md)
- [Contatti](docs/Model/Contatti.md)
- [ContattiTrasmittente](docs/Model/ContattiTrasmittente.md)
- [DatiAnagrafici](docs/Model/DatiAnagrafici.md)
- [DatiAnagraficiCedentePrestatore](docs/Model/DatiAnagraficiCedentePrestatore.md)
- [DatiAnagraficiCessionarioCommittente](docs/Model/DatiAnagraficiCessionarioCommittente.md)
- [DatiAnagraficiVettore](docs/Model/DatiAnagraficiVettore.md)
- [DatiBeniServizi](docs/Model/DatiBeniServizi.md)
- [DatiBollo](docs/Model/DatiBollo.md)
- [DatiCassaPrevidenziale](docs/Model/DatiCassaPrevidenziale.md)
- [DatiContratto](docs/Model/DatiContratto.md)
- [DatiConvenzione](docs/Model/DatiConvenzione.md)
- [DatiDDT](docs/Model/DatiDDT.md)
- [DatiFattureCollegate](docs/Model/DatiFattureCollegate.md)
- [DatiGenerali](docs/Model/DatiGenerali.md)
- [DatiGeneraliDocumento](docs/Model/DatiGeneraliDocumento.md)
- [DatiOrdineAcquisto](docs/Model/DatiOrdineAcquisto.md)
- [DatiPagamento](docs/Model/DatiPagamento.md)
- [DatiRicezione](docs/Model/DatiRicezione.md)
- [DatiRiepilogo](docs/Model/DatiRiepilogo.md)
- [DatiRitenuta](docs/Model/DatiRitenuta.md)
- [DatiSAL](docs/Model/DatiSAL.md)
- [DatiTrasmissione](docs/Model/DatiTrasmissione.md)
- [DatiTrasporto](docs/Model/DatiTrasporto.md)
- [DatiVeicoli](docs/Model/DatiVeicoli.md)
- [DettaglioLinee](docs/Model/DettaglioLinee.md)
- [DettaglioPagamento](docs/Model/DettaglioPagamento.md)
- [DocumentData](docs/Model/DocumentData.md)
- [Error](docs/Model/Error.md)
- [Event](docs/Model/Event.md)
- [FatturaElettronicaBody](docs/Model/FatturaElettronicaBody.md)
- [FatturaElettronicaHeader](docs/Model/FatturaElettronicaHeader.md)
- [FatturaOrdinaria](docs/Model/FatturaOrdinaria.md)
- [FatturaPrincipale](docs/Model/FatturaPrincipale.md)
- [IdFiscaleIVA](docs/Model/IdFiscaleIVA.md)
- [IdTrasmittente](docs/Model/IdTrasmittente.md)
- [IndirizzoResa](docs/Model/IndirizzoResa.md)
- [IscrizioneREA](docs/Model/IscrizioneREA.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProblemHttpResult](docs/Model/ProblemHttpResult.md)
- [RappresentanteFiscale](docs/Model/RappresentanteFiscale.md)
- [RappresentanteFiscaleCessionarioCommittente](docs/Model/RappresentanteFiscaleCessionarioCommittente.md)
- [Receive](docs/Model/Receive.md)
- [ScontoMaggiorazione](docs/Model/ScontoMaggiorazione.md)
- [SedeCedentePrestatore](docs/Model/SedeCedentePrestatore.md)
- [SedeCessionarioCommittente](docs/Model/SedeCessionarioCommittente.md)
- [Send](docs/Model/Send.md)
- [SendReduced](docs/Model/SendReduced.md)
- [StabileOrganizzazione](docs/Model/StabileOrganizzazione.md)
- [Status](docs/Model/Status.md)
- [TerzoIntermediarioOSoggettoEmittente](docs/Model/TerzoIntermediarioOSoggettoEmittente.md)
- [Update](docs/Model/Update.md)
- [WebHook](docs/Model/WebHook.md)
- [WebHookHistory](docs/Model/WebHookHistory.md)

## Authorization

Authentication schemes defined for the API:
### Basic

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@invoicetronic.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
