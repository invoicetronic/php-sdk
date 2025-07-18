# Invoicetronic\ReceiveApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**receiveGet()**](ReceiveApi.md#receiveGet) | **GET** /receive | List incoming invoices |
| [**receiveIdDelete()**](ReceiveApi.md#receiveIdDelete) | **DELETE** /receive/{id} | Delete an incoming invoice by id |
| [**receiveIdGet()**](ReceiveApi.md#receiveIdGet) | **GET** /receive/{id} | Get an incoming invoice by id |


## `receiveGet()`

```php
receiveGet($company_id, $identifier, $unread, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $include_payload, $page, $page_size, $sort): \Invoicetronic\Model\Receive[]
```

List incoming invoices

Receive invoices are the invoices that are received from other companies. They are preserved for two years in the live environment and 24 hours in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\ReceiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id
$identifier = 'identifier_example'; // string | SDI identifier.
$unread = True; // bool | Unread items only.
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
$include_payload = True; // bool | Include payload in the response. Defaults to false.
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.

try {
    $result = $apiInstance->receiveGet($company_id, $identifier, $unread, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $include_payload, $page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveApi->receiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
| **unread** | **bool**| Unread items only. | [optional] |
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
| **include_payload** | **bool**| Include payload in the response. Defaults to false. | [optional] |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |

### Return type

[**\Invoicetronic\Model\Receive[]**](../Model/Receive.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiveIdDelete()`

```php
receiveIdDelete($id): \Invoicetronic\Model\Receive
```

Delete an incoming invoice by id

Receive invoices are the invoices that are received from other companies. They are preserved for two years in the live environment and 24 hours in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\ReceiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->receiveIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveApi->receiveIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\Receive**](../Model/Receive.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiveIdGet()`

```php
receiveIdGet($id, $include_payload): \Invoicetronic\Model\Receive
```

Get an incoming invoice by id

Receive invoices are the invoices that are received from other companies. They are preserved for two years in the live environment and 24 hours in the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\ReceiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$include_payload = false; // bool | Include payload in the response. Defaults to false.

try {
    $result = $apiInstance->receiveIdGet($id, $include_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveApi->receiveIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |
| **include_payload** | **bool**| Include payload in the response. Defaults to false. | [optional] [default to false] |

### Return type

[**\Invoicetronic\Model\Receive**](../Model/Receive.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
