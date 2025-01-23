# PHP SDK for the Italian eInvoice API

The Italian eInvoice API is a RESTful API that allows you to send and receive invoices through the
Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed by Invoicetronic to be simple
and easy to use, abstracting away SDI complexity while providing complete control over the
invoice send/receive process. The API also provides advanced features as encryption at rest, invoice validation,
multiple upload formats, webhooks, event logging, client SDKs for commonly used languages, and CLI tools.

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
      "url": "https://github.com/invoicetronic/invoice-php-sdk.git"
    }
  ],
  "require": {
    "invoicetronic/invoice-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Invoicetronic Invoice SDK/vendor/autoload.php');
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
$page = 1; // int | Page number. Defaults to 1.
$page_size = 100; // int | Items per page. Defaults to 50. Cannot be greater than 200.

try {
    $result = $apiInstance->invoiceV1CompanyGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->invoiceV1CompanyGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompanyApi* | [**invoiceV1CompanyGet**](docs/Api/CompanyApi.md#invoicev1companyget) | **GET** /invoice/v1/company | List companies
*CompanyApi* | [**invoiceV1CompanyIdDelete**](docs/Api/CompanyApi.md#invoicev1companyiddelete) | **DELETE** /invoice/v1/company/{id} | Delete a company
*CompanyApi* | [**invoiceV1CompanyIdGet**](docs/Api/CompanyApi.md#invoicev1companyidget) | **GET** /invoice/v1/company/{id} | Get a company by id
*CompanyApi* | [**invoiceV1CompanyPost**](docs/Api/CompanyApi.md#invoicev1companypost) | **POST** /invoice/v1/company | Add a company
*CompanyApi* | [**invoiceV1CompanyPut**](docs/Api/CompanyApi.md#invoicev1companyput) | **PUT** /invoice/v1/company | Update a company
*LogApi* | [**invoiceV1LogGet**](docs/Api/LogApi.md#invoicev1logget) | **GET** /invoice/v1/log | List events
*LogApi* | [**invoiceV1LogIdGet**](docs/Api/LogApi.md#invoicev1logidget) | **GET** /invoice/v1/log/{id} | Get an event by id
*ReceiveApi* | [**invoiceV1ReceiveGet**](docs/Api/ReceiveApi.md#invoicev1receiveget) | **GET** /invoice/v1/receive | List incoming invoices
*ReceiveApi* | [**invoiceV1ReceiveIdDelete**](docs/Api/ReceiveApi.md#invoicev1receiveiddelete) | **DELETE** /invoice/v1/receive/{id} | Delete an incoming invoice by id
*ReceiveApi* | [**invoiceV1ReceiveIdGet**](docs/Api/ReceiveApi.md#invoicev1receiveidget) | **GET** /invoice/v1/receive/{id} | Get an incoming invoice by id
*SendApi* | [**invoiceV1SendFilesPost**](docs/Api/SendApi.md#invoicev1sendfilespost) | **POST** /invoice/v1/send/files | Add an invoice by file
*SendApi* | [**invoiceV1SendGet**](docs/Api/SendApi.md#invoicev1sendget) | **GET** /invoice/v1/send | List invoices
*SendApi* | [**invoiceV1SendIdGet**](docs/Api/SendApi.md#invoicev1sendidget) | **GET** /invoice/v1/send/{id} | Get a invoice by id
*SendApi* | [**invoiceV1SendJsonPost**](docs/Api/SendApi.md#invoicev1sendjsonpost) | **POST** /invoice/v1/send/json | Add an invoice by json
*SendApi* | [**invoiceV1SendPost**](docs/Api/SendApi.md#invoicev1sendpost) | **POST** /invoice/v1/send | Add an invoice
*SendApi* | [**invoiceV1SendValidateFilesPost**](docs/Api/SendApi.md#invoicev1sendvalidatefilespost) | **POST** /invoice/v1/send/validate/files | Validate an invoice by file
*SendApi* | [**invoiceV1SendValidateJsonPost**](docs/Api/SendApi.md#invoicev1sendvalidatejsonpost) | **POST** /invoice/v1/send/validate/json | Validate an invoice by json
*SendApi* | [**invoiceV1SendValidatePost**](docs/Api/SendApi.md#invoicev1sendvalidatepost) | **POST** /invoice/v1/send/validate | Validate an invoice
*SendApi* | [**invoiceV1SendValidateXmlPost**](docs/Api/SendApi.md#invoicev1sendvalidatexmlpost) | **POST** /invoice/v1/send/validate/xml | Validate an invoice by xml
*SendApi* | [**invoiceV1SendXmlPost**](docs/Api/SendApi.md#invoicev1sendxmlpost) | **POST** /invoice/v1/send/xml | Add an invoice by xml
*UpdateApi* | [**invoiceV1UpdateGet**](docs/Api/UpdateApi.md#invoicev1updateget) | **GET** /invoice/v1/update | List updates
*UpdateApi* | [**invoiceV1UpdateIdGet**](docs/Api/UpdateApi.md#invoicev1updateidget) | **GET** /invoice/v1/update/{id} | Get an update by id
*WebhookApi* | [**invoiceV1WebhookGet**](docs/Api/WebhookApi.md#invoicev1webhookget) | **GET** /invoice/v1/webhook | List webhooks
*WebhookApi* | [**invoiceV1WebhookIdDelete**](docs/Api/WebhookApi.md#invoicev1webhookiddelete) | **DELETE** /invoice/v1/webhook/{id} | Delete a webhook by id
*WebhookApi* | [**invoiceV1WebhookIdGet**](docs/Api/WebhookApi.md#invoicev1webhookidget) | **GET** /invoice/v1/webhook/{id} | Get a webhook by id
*WebhookApi* | [**invoiceV1WebhookPost**](docs/Api/WebhookApi.md#invoicev1webhookpost) | **POST** /invoice/v1/webhook | Add a webhook
*WebhookApi* | [**invoiceV1WebhookPut**](docs/Api/WebhookApi.md#invoicev1webhookput) | **PUT** /invoice/v1/webhook | Update a webhook
*WebhookApi* | [**invoiceV1WebhookhistoryGet**](docs/Api/WebhookApi.md#invoicev1webhookhistoryget) | **GET** /invoice/v1/webhookhistory | List webhook history items
*WebhookApi* | [**invoiceV1WebhookhistoryIdGet**](docs/Api/WebhookApi.md#invoicev1webhookhistoryidget) | **GET** /invoice/v1/webhookhistory/{id} | Get a webhook history item by id

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
- [StabileOrganizzazione](docs/Model/StabileOrganizzazione.md)
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

- API version: `1.0.0`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
