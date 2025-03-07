# Invoicetronic\LogApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logGet()**](LogApi.md#logGet) | **GET** /log | List events |
| [**logIdGet()**](LogApi.md#logIdGet) | **GET** /log/{id} | Get an event by id |


## `logGet()`

```php
logGet($company_id, $endpoint, $method, $api_verion, $status_code, $date_created_from, $date_created_to, $page, $page_size, $sort, $query, $success, $date_time_from, $date_time_to): \Invoicetronic\Model\Event[]
```

List events

Every API operation is logged and can be retrieved here. Log records are preserved for 15 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id
$endpoint = 'endpoint_example'; // string
$method = 'method_example'; // string
$api_verion = 56; // int | Api version
$status_code = 56; // int | Response status code
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$page = 1; // int | Page number. Defaults to 1.
$page_size = 100; // int | Items per page. Defaults to 50. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.
$query = 'query_example'; // string
$success = True; // bool
$date_time_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Date and time of the event
$date_time_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Date and time of the event

try {
    $result = $apiInstance->logGet($company_id, $endpoint, $method, $api_verion, $status_code, $date_created_from, $date_created_to, $page, $page_size, $sort, $query, $success, $date_time_from, $date_time_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->logGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id | [optional] |
| **endpoint** | **string**|  | [optional] |
| **method** | **string**|  | [optional] |
| **api_verion** | **int**| Api version | [optional] |
| **status_code** | **int**| Response status code | [optional] |
| **date_created_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_created_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **page** | **int**| Page number. Defaults to 1. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Defaults to 50. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |
| **query** | **string**|  | [optional] |
| **success** | **bool**|  | [optional] |
| **date_time_from** | **\DateTime**| Date and time of the event | [optional] |
| **date_time_to** | **\DateTime**| Date and time of the event | [optional] |

### Return type

[**\Invoicetronic\Model\Event[]**](../Model/Event.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logIdGet()`

```php
logIdGet($id): \Invoicetronic\Model\Event
```

Get an event by id

Every API operation is logged and can be retrieved here. Log records are preserved for 15 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->logIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->logIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\Event**](../Model/Event.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
