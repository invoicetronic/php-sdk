# PHP SDK for the Invoicetronic API

The [Invoicetronic API][2] is a RESTful service that allows you to send and receive invoices through the Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed to be simple and easy to use, abstracting away SDI complexity while providing complete control over the invoice send/receive process. It provides advanced features as encryption at rest, multi-language pre-flight invoice validation, multiple upload formats, webhooks, event logging, client SDKs, and CLI tools.

For more information, see  [Invoicetronic website][2]

[1]: https://www.fatturapa.gov.it/it/sistemainterscambio/cose-il-sdi/
[2]: https://invoicetronic.com/

For more information, please visit [https://invoicetronic.com/en/contact/](https://invoicetronic.com/en/contact/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following command:

```bash
$ composer require invoicetronic/php-sdk
```

Then run `composer install`

### Manual Installation

There are three options:

- Download the latest release of the PHP SDK [Phar Archive](https://github.com/invoicetronic/php-sdk/releases) and simply include it in your project.
```php
require_once('./invoicetronic-sdk.phar');
```
- Download our SDK using [PHP-download](https://php-download.com/package/invoicetronic/php-sdk) and simply include it in your project.
- Create your own custom autoloader and download all the dependencies (transitive included) as explained [here](https://ehikioya.com/how-to-install-php-packages-without-composer/).
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
*CompanyApi* | [**companyVatGet**](docs/Api/CompanyApi.md#companyvatget) | **GET** /company/{vat} | Get a company by vat number
*ExportApi* | [**exportGet**](docs/Api/ExportApi.md#exportget) | **GET** /export | Export invoices as a ZIP archive
*LogApi* | [**logGet**](docs/Api/LogApi.md#logget) | **GET** /log | List events
*LogApi* | [**logIdGet**](docs/Api/LogApi.md#logidget) | **GET** /log/{id} | Get an event by id
*ReceiveApi* | [**receiveGet**](docs/Api/ReceiveApi.md#receiveget) | **GET** /receive | List incoming invoices
*ReceiveApi* | [**receiveIdDelete**](docs/Api/ReceiveApi.md#receiveiddelete) | **DELETE** /receive/{id} | Delete an incoming invoice by id
*ReceiveApi* | [**receiveIdGet**](docs/Api/ReceiveApi.md#receiveidget) | **GET** /receive/{id} | Get an incoming invoice by id
*ReceiveApi* | [**receiveIdPayloadGet**](docs/Api/ReceiveApi.md#receiveidpayloadget) | **GET** /receive/{id}/payload | Get a receive invoice payload by id
*SendApi* | [**sendFilePost**](docs/Api/SendApi.md#sendfilepost) | **POST** /send/file | Add an invoice by file
*SendApi* | [**sendGet**](docs/Api/SendApi.md#sendget) | **GET** /send | List invoices
*SendApi* | [**sendIdGet**](docs/Api/SendApi.md#sendidget) | **GET** /send/{id} | Get a invoice by id
*SendApi* | [**sendIdPayloadGet**](docs/Api/SendApi.md#sendidpayloadget) | **GET** /send/{id}/payload | Get a send invoice payload by id
*SendApi* | [**sendIdentifierGet**](docs/Api/SendApi.md#sendidentifierget) | **GET** /send/{identifier} | Get a invoice by identifier
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

- [Company](docs/Model/Company.md)
- [DocumentData](docs/Model/DocumentData.md)
- [Error](docs/Model/Error.md)
- [Event](docs/Model/Event.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProblemHttpResult](docs/Model/ProblemHttpResult.md)
- [Receive](docs/Model/Receive.md)
- [Send](docs/Model/Send.md)
- [SendReduced](docs/Model/SendReduced.md)
- [Status](docs/Model/Status.md)
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

info@invoicetronic.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1`
    - Generator version: `7.20.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
