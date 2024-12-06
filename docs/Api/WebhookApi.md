# InvoicetronicInvoiceSdk\WebhookApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceV1WebhookGet()**](WebhookApi.md#invoiceV1WebhookGet) | **GET** /invoice/v1/webhook | List webhooks |
| [**invoiceV1WebhookIdDelete()**](WebhookApi.md#invoiceV1WebhookIdDelete) | **DELETE** /invoice/v1/webhook/{id} | Delete a webhook by id |
| [**invoiceV1WebhookIdGet()**](WebhookApi.md#invoiceV1WebhookIdGet) | **GET** /invoice/v1/webhook/{id} | Get a webhook by id |
| [**invoiceV1WebhookPost()**](WebhookApi.md#invoiceV1WebhookPost) | **POST** /invoice/v1/webhook | Add a webhook |
| [**invoiceV1WebhookPut()**](WebhookApi.md#invoiceV1WebhookPut) | **PUT** /invoice/v1/webhook | Update a webhook |
| [**invoiceV1WebhookhistoryGet()**](WebhookApi.md#invoiceV1WebhookhistoryGet) | **GET** /invoice/v1/webhookhistory | List webhook history items |
| [**invoiceV1WebhookhistoryIdGet()**](WebhookApi.md#invoiceV1WebhookhistoryIdGet) | **GET** /invoice/v1/webhookhistory/{id} | Get a webhook history item by id |


## `invoiceV1WebhookGet()`

```php
invoiceV1WebhookGet($page, $page_size): \InvoicetronicInvoiceSdk\Model\WebHook[]
```

List webhooks

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page.

try {
    $result = $apiInstance->invoiceV1WebhookGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. | [optional] [default to 100] |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHook[]**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1WebhookIdDelete()`

```php
invoiceV1WebhookIdDelete($id): \InvoicetronicInvoiceSdk\Model\WebHook
```

Delete a webhook by id

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1WebhookIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1WebhookIdGet()`

```php
invoiceV1WebhookIdGet($id): \InvoicetronicInvoiceSdk\Model\WebHook
```

Get a webhook by id

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1WebhookIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1WebhookPost()`

```php
invoiceV1WebhookPost($web_hook): \InvoicetronicInvoiceSdk\Model\WebHook
```

Add a webhook

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \InvoicetronicInvoiceSdk\Model\WebHook(); // \InvoicetronicInvoiceSdk\Model\WebHook

try {
    $result = $apiInstance->invoiceV1WebhookPost($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_hook** | [**\InvoicetronicInvoiceSdk\Model\WebHook**](../Model/WebHook.md)|  | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1WebhookPut()`

```php
invoiceV1WebhookPut($web_hook): \InvoicetronicInvoiceSdk\Model\WebHook
```

Update a webhook

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \InvoicetronicInvoiceSdk\Model\WebHook(); // \InvoicetronicInvoiceSdk\Model\WebHook

try {
    $result = $apiInstance->invoiceV1WebhookPut($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_hook** | [**\InvoicetronicInvoiceSdk\Model\WebHook**](../Model/WebHook.md)|  | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1WebhookhistoryGet()`

```php
invoiceV1WebhookhistoryGet($page, $page_size): \InvoicetronicInvoiceSdk\Model\WebHookHistory[]
```

List webhook history items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page.

try {
    $result = $apiInstance->invoiceV1WebhookhistoryGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookhistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. | [optional] [default to 100] |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHookHistory[]**](../Model/WebHookHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceV1WebhookhistoryIdGet()`

```php
invoiceV1WebhookhistoryIdGet($id): \InvoicetronicInvoiceSdk\Model\WebHookHistory
```

Get a webhook history item by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = InvoicetronicInvoiceSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new InvoicetronicInvoiceSdk\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id.

try {
    $result = $apiInstance->invoiceV1WebhookhistoryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->invoiceV1WebhookhistoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id. | |

### Return type

[**\InvoicetronicInvoiceSdk\Model\WebHookHistory**](../Model/WebHookHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
