# Invoicetronic\WebhookApi

All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhookGet()**](WebhookApi.md#webhookGet) | **GET** /webhook | List webhooks |
| [**webhookIdDelete()**](WebhookApi.md#webhookIdDelete) | **DELETE** /webhook/{id} | Delete a webhook by id |
| [**webhookIdGet()**](WebhookApi.md#webhookIdGet) | **GET** /webhook/{id} | Get a webhook by id |
| [**webhookPost()**](WebhookApi.md#webhookPost) | **POST** /webhook | Add a webhook |
| [**webhookPut()**](WebhookApi.md#webhookPut) | **PUT** /webhook | Update a webhook |
| [**webhookhistoryGet()**](WebhookApi.md#webhookhistoryGet) | **GET** /webhookhistory | List webhook history items |
| [**webhookhistoryIdGet()**](WebhookApi.md#webhookhistoryIdGet) | **GET** /webhookhistory/{id} | Get a webhook history item by id |


## `webhookGet()`

```php
webhookGet($company_id, $page, $page_size, $sort, $description, $enabled, $events, $url): \Invoicetronic\Model\WebHook[]
```

List webhooks

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id
$page = 1; // int | Page number. Defaults to 1.
$page_size = 100; // int | Items per page. Defaults to 50. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.
$description = 'description_example'; // string
$enabled = True; // bool
$events = 'events_example'; // string
$url = 'url_example'; // string

try {
    $result = $apiInstance->webhookGet($company_id, $page, $page_size, $sort, $description, $enabled, $events, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id | [optional] |
| **page** | **int**| Page number. Defaults to 1. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Defaults to 50. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |
| **description** | **string**|  | [optional] |
| **enabled** | **bool**|  | [optional] |
| **events** | **string**|  | [optional] |
| **url** | **string**|  | [optional] |

### Return type

[**\Invoicetronic\Model\WebHook[]**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookIdDelete()`

```php
webhookIdDelete($id): \Invoicetronic\Model\WebHook
```

Delete a webhook by id

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->webhookIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookIdGet()`

```php
webhookIdGet($id): \Invoicetronic\Model\WebHook
```

Get a webhook by id

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->webhookIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookPost()`

```php
webhookPost($web_hook): \Invoicetronic\Model\WebHook
```

Add a webhook

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \Invoicetronic\Model\WebHook(); // \Invoicetronic\Model\WebHook

try {
    $result = $apiInstance->webhookPost($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_hook** | [**\Invoicetronic\Model\WebHook**](../Model/WebHook.md)|  | |

### Return type

[**\Invoicetronic\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookPut()`

```php
webhookPut($web_hook): \Invoicetronic\Model\WebHook
```

Update a webhook

Webhooks are used to notify external services about write events that occur in the API. You can subscribe to specific events and receive a notification when they occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \Invoicetronic\Model\WebHook(); // \Invoicetronic\Model\WebHook

try {
    $result = $apiInstance->webhookPut($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_hook** | [**\Invoicetronic\Model\WebHook**](../Model/WebHook.md)|  | |

### Return type

[**\Invoicetronic\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookhistoryGet()`

```php
webhookhistoryGet($page, $page_size, $sort, $webhook_id): \Invoicetronic\Model\WebHookHistory[]
```

List webhook history items

Webhook history items are stored in the database and can be accessed via the API. They are preserved for 15 in both the live and sandbox environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number. Defaults to 1.
$page_size = 100; // int | Items per page. Defaults to 50. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.
$webhook_id = 56; // int | WebHook id

try {
    $result = $apiInstance->webhookhistoryGet($page, $page_size, $sort, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookhistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. Defaults to 1. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Defaults to 50. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |
| **webhook_id** | **int**| WebHook id | [optional] |

### Return type

[**\Invoicetronic\Model\WebHookHistory[]**](../Model/WebHookHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookhistoryIdGet()`

```php
webhookhistoryIdGet($id): \Invoicetronic\Model\WebHookHistory
```

Get a webhook history item by id

Webhook history items are stored in the database and can be accessed via the API. They are preserved for 15 in both the live and sandbox environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->webhookhistoryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookhistoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\WebHookHistory**](../Model/WebHookHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
