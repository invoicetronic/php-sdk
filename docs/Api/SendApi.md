# Invoicetronic\SendApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendFilePost()**](SendApi.md#sendFilePost) | **POST** /send/file | Add an invoice by file |
| [**sendGet()**](SendApi.md#sendGet) | **GET** /send | List invoices |
| [**sendIdGet()**](SendApi.md#sendIdGet) | **GET** /send/{id} | Get a invoice by id |
| [**sendJsonPost()**](SendApi.md#sendJsonPost) | **POST** /send/json | Add an invoice by json |
| [**sendPost()**](SendApi.md#sendPost) | **POST** /send | Add an invoice |
| [**sendValidateFilesPost()**](SendApi.md#sendValidateFilesPost) | **POST** /send/validate/files | Validate an invoice by file |
| [**sendValidateJsonPost()**](SendApi.md#sendValidateJsonPost) | **POST** /send/validate/json | Validate an invoice by json |
| [**sendValidatePost()**](SendApi.md#sendValidatePost) | **POST** /send/validate | Validate an invoice |
| [**sendValidateXmlPost()**](SendApi.md#sendValidateXmlPost) | **POST** /send/validate/xml | Validate an invoice by xml |
| [**sendXmlPost()**](SendApi.md#sendXmlPost) | **POST** /send/xml | Add an invoice by xml |


## `sendFilePost()`

```php
sendFilePost($file, $validate, $signature): \Invoicetronic\Model\Send
```

Add an invoice by file

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.

try {
    $result = $apiInstance->sendFilePost($file, $validate, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendGet()`

```php
sendGet($company_id, $identifier, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $page, $page_size, $sort): \Invoicetronic\Model\Send[]
```

List invoices

test **markdown**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id
$identifier = 'identifier_example'; // string | SDI identifier.
$committente = 'committente_example'; // string | Vat number or fiscal code.
$prestatore = 'prestatore_example'; // string | Vat number or fiscal code.
$file_name = 'file_name_example'; // string | File name.
$last_update_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$last_update_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_number = 'document_number_example'; // string | Document number.
$page = 1; // int | Page number. Defaults to 1.
$page_size = 100; // int | Items per page. Defaults to 50. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.

try {
    $result = $apiInstance->sendGet($company_id, $identifier, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
| **committente** | **string**| Vat number or fiscal code. | [optional] |
| **prestatore** | **string**| Vat number or fiscal code. | [optional] |
| **file_name** | **string**| File name. | [optional] |
| **last_update_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **last_update_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_date_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_date_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_number** | **string**| Document number. | [optional] |
| **page** | **int**| Page number. Defaults to 1. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Defaults to 50. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |

### Return type

[**\Invoicetronic\Model\Send[]**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendIdGet()`

```php
sendIdGet($id): \Invoicetronic\Model\Send
```

Get a invoice by id

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->sendIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendJsonPost()`

```php
sendJsonPost($fattura_ordinaria, $validate, $signature): \Invoicetronic\Model\Send
```

Add an invoice by json

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fattura_ordinaria = new \Invoicetronic\Model\FatturaOrdinaria(); // \Invoicetronic\Model\FatturaOrdinaria
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.

try {
    $result = $apiInstance->sendJsonPost($fattura_ordinaria, $validate, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fattura_ordinaria** | [**\Invoicetronic\Model\FatturaOrdinaria**](../Model/FatturaOrdinaria.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPost()`

```php
sendPost($send, $validate, $signature): \Invoicetronic\Model\Send
```

Add an invoice

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send = new \Invoicetronic\Model\Send(); // \Invoicetronic\Model\Send
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.

try {
    $result = $apiInstance->sendPost($send, $validate, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send** | [**\Invoicetronic\Model\Send**](../Model/Send.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidateFilesPost()`

```php
sendValidateFilesPost($files)
```

Validate an invoice by file

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = array('/path/to/file.txt'); // \SplFileObject[]

try {
    $apiInstance->sendValidateFilesPost($files);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidateFilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **files** | **\SplFileObject[]**|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidateJsonPost()`

```php
sendValidateJsonPost($fattura_ordinaria)
```

Validate an invoice by json

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fattura_ordinaria = new \Invoicetronic\Model\FatturaOrdinaria(); // \Invoicetronic\Model\FatturaOrdinaria

try {
    $apiInstance->sendValidateJsonPost($fattura_ordinaria);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidateJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fattura_ordinaria** | [**\Invoicetronic\Model\FatturaOrdinaria**](../Model/FatturaOrdinaria.md)|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidatePost()`

```php
sendValidatePost($send)
```

Validate an invoice

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send = new \Invoicetronic\Model\Send(); // \Invoicetronic\Model\Send

try {
    $apiInstance->sendValidatePost($send);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send** | [**\Invoicetronic\Model\Send**](../Model/Send.md)|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidateXmlPost()`

```php
sendValidateXmlPost($fattura_ordinaria)
```

Validate an invoice by xml

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fattura_ordinaria = new \Invoicetronic\Model\FatturaOrdinaria(); // \Invoicetronic\Model\FatturaOrdinaria

try {
    $apiInstance->sendValidateXmlPost($fattura_ordinaria);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidateXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fattura_ordinaria** | [**\Invoicetronic\Model\FatturaOrdinaria**](../Model/FatturaOrdinaria.md)|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendXmlPost()`

```php
sendXmlPost($fattura_ordinaria, $validate, $signature): \Invoicetronic\Model\Send
```

Add an invoice by xml

Send invoices are the invoices that are sent to the SDI. They are preserved for two years in the live environment and 15 days in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fattura_ordinaria = new \Invoicetronic\Model\FatturaOrdinaria(); // \Invoicetronic\Model\FatturaOrdinaria
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.

try {
    $result = $apiInstance->sendXmlPost($fattura_ordinaria, $validate, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fattura_ordinaria** | [**\Invoicetronic\Model\FatturaOrdinaria**](../Model/FatturaOrdinaria.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
