# Invoicetronic\HealthApi



All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**healthGet()**](HealthApi.md#healthGet) | **GET** /health | Health check |


## `healthGet()`

```php
healthGet()
```

Health check

Returns the health status of the API and its dependencies. No authentication required. Rate limited to 12 requests per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Invoicetronic\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->healthGet();
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->healthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
