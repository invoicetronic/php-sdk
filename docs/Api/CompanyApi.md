# Invoicetronic\CompanyApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceV1CompanyGet()**](CompanyApi.md#invoiceV1CompanyGet) | **GET** /invoice/v1/company | List companies |
| [**invoiceV1CompanyIdDelete()**](CompanyApi.md#invoiceV1CompanyIdDelete) | **DELETE** /invoice/v1/company/{id} | Delete a company |
| [**invoiceV1CompanyIdGet()**](CompanyApi.md#invoiceV1CompanyIdGet) | **GET** /invoice/v1/company/{id} | Get a company by id |
| [**invoiceV1CompanyPost()**](CompanyApi.md#invoiceV1CompanyPost) | **POST** /invoice/v1/company | Add a company |
| [**invoiceV1CompanyPut()**](CompanyApi.md#invoiceV1CompanyPut) | **PUT** /invoice/v1/company | Update a company |


## `invoiceV1CompanyGet()`

```php
invoiceV1CompanyGet($page, $page_size): \Invoicetronic\Model\Company[]
```

List companies

Companies are the entities that send and receive invoices. At least one company is required in order to send and receive invoices.

### Example

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
$page_size = 100; // int | Items per page.

try {
    $result = $apiInstance->invoiceV1CompanyGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->invoiceV1CompanyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. | [optional] [default to 100] |

### Return type

[**\Invoicetronic\Model\Company[]**](../Model/Company.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1CompanyIdDelete()`

```php
invoiceV1CompanyIdDelete($id): \Invoicetronic\Model\Company
```

Delete a company

Companies are the entities that send and receive invoices. At least one company is required in order to send and receive invoices.

### Example

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
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1CompanyIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->invoiceV1CompanyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\Invoicetronic\Model\Company**](../Model/Company.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1CompanyIdGet()`

```php
invoiceV1CompanyIdGet($id): \Invoicetronic\Model\Company
```

Get a company by id

Companies are the entities that send and receive invoices. At least one company is required in order to send and receive invoices.

### Example

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
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1CompanyIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->invoiceV1CompanyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\Invoicetronic\Model\Company**](../Model/Company.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1CompanyPost()`

```php
invoiceV1CompanyPost($company): \Invoicetronic\Model\Company
```

Add a company

Companies are the entities that send and receive invoices. At least one company is required in order to send and receive invoices.

### Example

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
$company = new \Invoicetronic\Model\Company(); // \Invoicetronic\Model\Company

try {
    $result = $apiInstance->invoiceV1CompanyPost($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->invoiceV1CompanyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | [**\Invoicetronic\Model\Company**](../Model/Company.md)|  | |

### Return type

[**\Invoicetronic\Model\Company**](../Model/Company.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1CompanyPut()`

```php
invoiceV1CompanyPut($company): \Invoicetronic\Model\Company
```

Update a company

Companies are the entities that send and receive invoices. At least one company is required in order to send and receive invoices.

### Example

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
$company = new \Invoicetronic\Model\Company(); // \Invoicetronic\Model\Company

try {
    $result = $apiInstance->invoiceV1CompanyPut($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->invoiceV1CompanyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | [**\Invoicetronic\Model\Company**](../Model/Company.md)|  | |

### Return type

[**\Invoicetronic\Model\Company**](../Model/Company.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
