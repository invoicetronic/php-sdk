# Invoicetronic\SendApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceV1SendFilesPost()**](SendApi.md#invoiceV1SendFilesPost) | **POST** /invoice/v1/send/files | Add an invoice by file |
| [**invoiceV1SendGet()**](SendApi.md#invoiceV1SendGet) | **GET** /invoice/v1/send | List invoices |
| [**invoiceV1SendIdGet()**](SendApi.md#invoiceV1SendIdGet) | **GET** /invoice/v1/send/{id} | Get a invoice by id |
| [**invoiceV1SendJsonPost()**](SendApi.md#invoiceV1SendJsonPost) | **POST** /invoice/v1/send/json | Add an invoice by json |
| [**invoiceV1SendPost()**](SendApi.md#invoiceV1SendPost) | **POST** /invoice/v1/send | Add an invoice |
| [**invoiceV1SendValidateFilesPost()**](SendApi.md#invoiceV1SendValidateFilesPost) | **POST** /invoice/v1/send/validate/files | Validate an invoice by file |
| [**invoiceV1SendValidateJsonPost()**](SendApi.md#invoiceV1SendValidateJsonPost) | **POST** /invoice/v1/send/validate/json | Validate an invoice by json |
| [**invoiceV1SendValidatePost()**](SendApi.md#invoiceV1SendValidatePost) | **POST** /invoice/v1/send/validate | Validate an invoice |
| [**invoiceV1SendValidateXmlPost()**](SendApi.md#invoiceV1SendValidateXmlPost) | **POST** /invoice/v1/send/validate/xml | Validate an invoice by xml |
| [**invoiceV1SendXmlPost()**](SendApi.md#invoiceV1SendXmlPost) | **POST** /invoice/v1/send/xml | Add an invoice by xml |


## `invoiceV1SendFilesPost()`

```php
invoiceV1SendFilesPost($files, $validate): \Invoicetronic\Model\Send
```

Add an invoice by file

Send invoices are the invoices that are sent to the SDI.

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
$validate = false; // bool | Validate the document first, and reject it on failure.

try {
    $result = $apiInstance->invoiceV1SendFilesPost($files, $validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendFilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **files** | **\SplFileObject[]**|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |

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

## `invoiceV1SendGet()`

```php
invoiceV1SendGet($company_id, $identifier, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $page, $page_size): \Invoicetronic\Model\Send[]
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
$company_id = 56; // int | Company id.
$identifier = 'identifier_example'; // string | SDI identifier.
$committente = 'committente_example'; // string | VAT number or fiscal code.
$prestatore = 'prestatore_example'; // string | VAT number or fiscal code.
$file_name = 'file_name_example'; // string | File name.
$last_update_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$last_update_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_number = 'document_number_example'; // string | Document number.
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page.

try {
    $result = $apiInstance->invoiceV1SendGet($company_id, $identifier, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id. | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
| **committente** | **string**| VAT number or fiscal code. | [optional] |
| **prestatore** | **string**| VAT number or fiscal code. | [optional] |
| **file_name** | **string**| File name. | [optional] |
| **last_update_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **last_update_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_date_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_date_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_number** | **string**| Document number. | [optional] |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. | [optional] [default to 100] |

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

## `invoiceV1SendIdGet()`

```php
invoiceV1SendIdGet($id): \Invoicetronic\Model\Send
```

Get a invoice by id

Send invoices are the invoices that are sent to the SDI.

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
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1SendIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

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

## `invoiceV1SendJsonPost()`

```php
invoiceV1SendJsonPost($fattura_ordinaria, $validate): \Invoicetronic\Model\Send
```

Add an invoice by json

Send invoices are the invoices that are sent to the SDI.

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

try {
    $result = $apiInstance->invoiceV1SendJsonPost($fattura_ordinaria, $validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fattura_ordinaria** | [**\Invoicetronic\Model\FatturaOrdinaria**](../Model/FatturaOrdinaria.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |

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

## `invoiceV1SendPost()`

```php
invoiceV1SendPost($send, $validate): \Invoicetronic\Model\Send
```

Add an invoice

Send invoices are the invoices that are sent to the SDI.

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

try {
    $result = $apiInstance->invoiceV1SendPost($send, $validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send** | [**\Invoicetronic\Model\Send**](../Model/Send.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |

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

## `invoiceV1SendValidateFilesPost()`

```php
invoiceV1SendValidateFilesPost($files)
```

Validate an invoice by file

Send invoices are the invoices that are sent to the SDI.

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
    $apiInstance->invoiceV1SendValidateFilesPost($files);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendValidateFilesPost: ', $e->getMessage(), PHP_EOL;
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

## `invoiceV1SendValidateJsonPost()`

```php
invoiceV1SendValidateJsonPost($fattura_ordinaria)
```

Validate an invoice by json

Send invoices are the invoices that are sent to the SDI.

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
    $apiInstance->invoiceV1SendValidateJsonPost($fattura_ordinaria);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendValidateJsonPost: ', $e->getMessage(), PHP_EOL;
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

## `invoiceV1SendValidatePost()`

```php
invoiceV1SendValidatePost($send)
```

Validate an invoice

Send invoices are the invoices that are sent to the SDI.

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
    $apiInstance->invoiceV1SendValidatePost($send);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendValidatePost: ', $e->getMessage(), PHP_EOL;
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

## `invoiceV1SendValidateXmlPost()`

```php
invoiceV1SendValidateXmlPost()
```

Validate an invoice by xml

Send invoices are the invoices that are sent to the SDI.

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

try {
    $apiInstance->invoiceV1SendValidateXmlPost();
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendValidateXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1SendXmlPost()`

```php
invoiceV1SendXmlPost($fattura_ordinaria, $validate): \Invoicetronic\Model\Send
```

Add an invoice by xml

Send invoices are the invoices that are sent to the SDI.

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

try {
    $result = $apiInstance->invoiceV1SendXmlPost($fattura_ordinaria, $validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->invoiceV1SendXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fattura_ordinaria** | [**\Invoicetronic\Model\FatturaOrdinaria**](../Model/FatturaOrdinaria.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |

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
