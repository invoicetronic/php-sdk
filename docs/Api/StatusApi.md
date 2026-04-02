# Invoicetronic\StatusApi



All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**statusGet()**](StatusApi.md#statusGet) | **GET** /status | Account status |


## `statusGet()`

```php
statusGet(): \Invoicetronic\Model\Status
```

Account status

Retrieve the number of operations (invoices + validations) and signatures left on your account.  When `signature_left` is 0, you will receive a `403 Forbidden` response when trying to sign an invoice. Likewise, if `operation_left` is 0, you will receive a `403 Forbidden` response when storing or validating an invoice.  You can also check your account status from the [Dashboard](https://dashboard.invoicetronic.com), where you can purchase additional operations and/or signatures.  **Please note** that these values are not enforced if you are on the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->statusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Invoicetronic\Model\Status**](../Model/Status.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
