# InvoicetronicInvoiceSdk\UpdateApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceV1UpdateGet()**](UpdateApi.md#invoiceV1UpdateGet) | **GET** /invoice/v1/update | List updates |
| [**invoiceV1UpdateIdGet()**](UpdateApi.md#invoiceV1UpdateIdGet) | **GET** /invoice/v1/update/{id} | Get an update by id |


## `invoiceV1UpdateGet()`

```php
invoiceV1UpdateGet($company_id, $identifier, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size): \InvoicetronicInvoiceSdk\Model\Update[]
```

List updates

Updates are notifications that are sent by the SDI about the status of sent invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id.
$identifier = 'identifier_example'; // string | SDI identifier.
$unread = True; // bool | Only unread items.
$send_id = 56; // int | Send item's id.
$state = 'state_example'; // string | SDI state
$last_update_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$last_update_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 format (2024-11-29T12:34:56Z)
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page.

try {
    $result = $apiInstance->invoiceV1UpdateGet($company_id, $identifier, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->invoiceV1UpdateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id. | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
| **unread** | **bool**| Only unread items. | [optional] |
| **send_id** | **int**| Send item&#39;s id. | [optional] |
| **state** | **string**| SDI state | [optional] |
| **last_update_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **last_update_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_to** | **\DateTime**| UTC ISO 8601 format (2024-11-29T12:34:56Z) | [optional] |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. | [optional] [default to 100] |

### Return type

[**\InvoicetronicInvoiceSdk\Model\Update[]**](../Model/Update.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1UpdateIdGet()`

```php
invoiceV1UpdateIdGet($id): \InvoicetronicInvoiceSdk\Model\Update
```

Get an update by id

Updates are notifications that are sent by the SDI about the status of sent invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1UpdateIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->invoiceV1UpdateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\Update**](../Model/Update.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
