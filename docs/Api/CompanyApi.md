# Invoicetronic\CompanyApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyGet()**](CompanyApi.md#companyGet) | **GET** /company | List companies |
| [**companyIdDelete()**](CompanyApi.md#companyIdDelete) | **DELETE** /company/{id} | Delete a company |
| [**companyIdGet()**](CompanyApi.md#companyIdGet) | **GET** /company/{id} | Get a company by id |
| [**companyPost()**](CompanyApi.md#companyPost) | **POST** /company | Add a company |
| [**companyPut()**](CompanyApi.md#companyPut) | **PUT** /company | Update a company |


## `companyGet()`

```php
companyGet($page, $page_size, $sort): \Invoicetronic\Model\Company[]
```

List companies

Companies are the entities that send and receive invoices. As you send invoices, companies are added as needed (company details are extrapolated). **You can only receive invoices for existing companies, so ensure they exist**.

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
$page = 1; // int | Page number. Defaults to 1.
$page_size = 100; // int | Items per page. Defaults to 50. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.

try {
    $result = $apiInstance->companyGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. Defaults to 1. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Defaults to 50. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |

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

## `companyIdDelete()`

```php
companyIdDelete($id): \Invoicetronic\Model\Company
```

Delete a company

Companies are the entities that send and receive invoices. As you send invoices, companies are added as needed (company details are extrapolated). **You can only receive invoices for existing companies, so ensure they exist**.

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
$id = 56; // int | Item id

try {
    $result = $apiInstance->companyIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

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

## `companyIdGet()`

```php
companyIdGet($id): \Invoicetronic\Model\Company
```

Get a company by id

Companies are the entities that send and receive invoices. As you send invoices, companies are added as needed (company details are extrapolated). **You can only receive invoices for existing companies, so ensure they exist**.

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
$id = 56; // int | Item id

try {
    $result = $apiInstance->companyIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

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

## `companyPost()`

```php
companyPost($company): \Invoicetronic\Model\Company
```

Add a company

Companies are the entities that send and receive invoices. As you send invoices, companies are added as needed (company details are extrapolated). **You can only receive invoices for existing companies, so ensure they exist**.

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
    $result = $apiInstance->companyPost($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyPost: ', $e->getMessage(), PHP_EOL;
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

## `companyPut()`

```php
companyPut($company): \Invoicetronic\Model\Company
```

Update a company

Companies are the entities that send and receive invoices. As you send invoices, companies are added as needed (company details are extrapolated). **You can only receive invoices for existing companies, so ensure they exist**.

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
    $result = $apiInstance->companyPut($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyPut: ', $e->getMessage(), PHP_EOL;
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
