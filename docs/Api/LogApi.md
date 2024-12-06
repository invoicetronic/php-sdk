# InvoicetronicInvoiceSdk\LogApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceV1LogGet()**](LogApi.md#invoiceV1LogGet) | **GET** /invoice/v1/log | List events |
| [**invoiceV1LogIdGet()**](LogApi.md#invoiceV1LogIdGet) | **GET** /invoice/v1/log/{id} | Get an event by id |


## `invoiceV1LogGet()`

```php
invoiceV1LogGet($page, $page_size): \InvoicetronicInvoiceSdk\Model\Event[]
```

List events

Every API operation is logged and can be retrieved here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page.

try {
    $result = $apiInstance->invoiceV1LogGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->invoiceV1LogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. | [optional] [default to 100] |

### Return type

[**\InvoicetronicInvoiceSdk\Model\Event[]**](../Model/Event.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1LogIdGet()`

```php
invoiceV1LogIdGet($id): \InvoicetronicInvoiceSdk\Model\Event
```

Get an event by id

Every API operation is logged and can be retrieved here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1LogIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->invoiceV1LogIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\Event**](../Model/Event.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
