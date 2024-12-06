# InvoicetronicInvoiceSdk\ReceiveApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceV1ReceiveGet()**](ReceiveApi.md#invoiceV1ReceiveGet) | **GET** /invoice/v1/receive | List incoming invoices |
| [**invoiceV1ReceiveIdDelete()**](ReceiveApi.md#invoiceV1ReceiveIdDelete) | **DELETE** /invoice/v1/receive/{id} | Delete an incoming invoice by id |
| [**invoiceV1ReceiveIdGet()**](ReceiveApi.md#invoiceV1ReceiveIdGet) | **GET** /invoice/v1/receive/{id} | Get an incoming invoice by id |


## `invoiceV1ReceiveGet()`

```php
invoiceV1ReceiveGet($company_id, $identifier, $unread, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $page, $page_size): \InvoicetronicInvoiceSdk\Model\Receive[]
```

List incoming invoices

Receive invoices are the invoices that are received from other companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\ReceiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id.
$identifier = 'identifier_example'; // string | SDI identifier.
$unread = True; // bool | Unread items only.
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
    $result = $apiInstance->invoiceV1ReceiveGet($company_id, $identifier, $unread, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveApi->invoiceV1ReceiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id. | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
| **unread** | **bool**| Unread items only. | [optional] |
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

[**\InvoicetronicInvoiceSdk\Model\Receive[]**](../Model/Receive.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1ReceiveIdDelete()`

```php
invoiceV1ReceiveIdDelete($id): \InvoicetronicInvoiceSdk\Model\Receive
```

Delete an incoming invoice by id

Receive invoices are the invoices that are received from other companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\ReceiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1ReceiveIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveApi->invoiceV1ReceiveIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\Receive**](../Model/Receive.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1ReceiveIdGet()`

```php
invoiceV1ReceiveIdGet($id): \InvoicetronicInvoiceSdk\Model\Receive
```

Get an incoming invoice by id

Receive invoices are the invoices that are received from other companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\ReceiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1ReceiveIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveApi->invoiceV1ReceiveIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\Receive**](../Model/Receive.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
