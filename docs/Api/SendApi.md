# Invoicetronic\SendApi



All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendFilePost()**](SendApi.md#sendFilePost) | **POST** /send/file | Add an invoice by file |
| [**sendGet()**](SendApi.md#sendGet) | **GET** /send | List invoices |
| [**sendIdGet()**](SendApi.md#sendIdGet) | **GET** /send/{id} | Get a invoice by id |
| [**sendIdPayloadGet()**](SendApi.md#sendIdPayloadGet) | **GET** /send/{id}/payload | Get a send invoice payload by id |
| [**sendIdentifierGet()**](SendApi.md#sendIdentifierGet) | **GET** /send/{identifier} | Get a invoice by identifier |
| [**sendJsonPost()**](SendApi.md#sendJsonPost) | **POST** /send/json | Add an invoice by json |
| [**sendPost()**](SendApi.md#sendPost) | **POST** /send | Add an invoice |
| [**sendValidateFilePost()**](SendApi.md#sendValidateFilePost) | **POST** /send/validate/file | Validate an invoice file |
| [**sendValidateJsonPost()**](SendApi.md#sendValidateJsonPost) | **POST** /send/validate/json | Validate an invoice by json |
| [**sendValidatePost()**](SendApi.md#sendValidatePost) | **POST** /send/validate | Validate an invoice |
| [**sendValidateXmlPost()**](SendApi.md#sendValidateXmlPost) | **POST** /send/validate/xml | Validate an invoice by xml |
| [**sendXmlPost()**](SendApi.md#sendXmlPost) | **POST** /send/xml | Add an invoice by xml |


## `sendFilePost()`

```php
sendFilePost($file, $validate, $signature, $idempotency_key): \Invoicetronic\Model\Send
```

Add an invoice by file

Add a new invoice by uploading a file. Supported formats are XML (FatturaPA) and P7M (signed). The invoice will be signed (if requested), validated (if requested), and queued for delivery to SDI. Status updates from SDI will be available in the `update` endpoint.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).  You can also upload invoices via the [Dashboard](https://dashboard.invoicetronic.com).  ### Idempotency  To protect against duplicate submissions caused by network retries, you can send an optional `Idempotency-Key` header with any unique, client-generated value (up to 255 characters).  - The first request with a given key is processed normally, and its response (status, body and `Location`) is stored for 24 hours. - Any subsequent request that reuses the same key within that window replays the original response instead of sending a second invoice to SDI. - If a request with the same key is still being processed, the retry receives `409 Conflict`. - If the same key is reused with a **different** invoice payload, the request is rejected with `422 Unprocessable Entity`: a given key must always map to the same request.  Keys are scoped per account, so different accounts can use the same key value without interfering. If the idempotency store is temporarily unavailable, the request is processed normally without idempotency protection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice.

try {
    $result = $apiInstance->sendFilePost($file, $validate, $signature, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |
| **idempotency_key** | **string**| Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice. | [optional] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendGet()`

```php
sendGet($company_id, $identifier, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $latest_state, $include_payload, $ids, $page, $page_size, $sort, $q): \Invoicetronic\Model\Send[]
```

List invoices

Retrieve a paginated list of send invoices. Results can be filtered by various criteria such as company, date ranges, document number, current SDI state (`latest_state`), and free-text search (`q`). Use `ids` to fetch specific Send records in a single call (comma-separated, up to 100). Returns invoice metadata; set `include_payload` to true to include the full invoice content.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id
$identifier = 'identifier_example'; // string | SDI identifier.
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
$latest_state = 'latest_state_example'; // string | Filter by the most recent SDI state for the invoice. Matches the `latest_state` field exposed inline on each Send.
$include_payload = True; // bool | Include payload in the response. Defaults to false.
$ids = 'ids_example'; // string | Comma-separated list of Send ids (max 100). Filters the collection to the matching rows; unknown or unauthorized ids are silently skipped.
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page. Cannot be greater than 200.
$sort = 'sort_example'; // string | Sort by field. Prefix with '-' for descending order.
$q = 'q_example'; // string | Full-text search across committente, prestatore, identifier, and file name.

try {
    $result = $apiInstance->sendGet($company_id, $identifier, $committente, $prestatore, $file_name, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $document_date_from, $document_date_to, $document_number, $latest_state, $include_payload, $ids, $page, $page_size, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
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
| **latest_state** | **string**| Filter by the most recent SDI state for the invoice. Matches the &#x60;latest_state&#x60; field exposed inline on each Send. | [optional] |
| **include_payload** | **bool**| Include payload in the response. Defaults to false. | [optional] |
| **ids** | **string**| Comma-separated list of Send ids (max 100). Filters the collection to the matching rows; unknown or unauthorized ids are silently skipped. | [optional] |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] |
| **q** | **string**| Full-text search across committente, prestatore, identifier, and file name. | [optional] |

### Return type

[**\Invoicetronic\Model\Send[]**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendIdGet()`

```php
sendIdGet($id, $include_payload): \Invoicetronic\Model\Send
```

Get a invoice by id

Retrieve a send invoice by its internal id. The `id` is unique and assigned by the system when the invoice is created. Returns invoice metadata; set `include_payload` to true to include the full invoice content.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$include_payload = false; // bool | Include payload in the response. Defaults to false.

try {
    $result = $apiInstance->sendIdGet($id, $include_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |
| **include_payload** | **bool**| Include payload in the response. Defaults to false. | [optional] [default to false] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendIdPayloadGet()`

```php
sendIdPayloadGet($id)
```

Get a send invoice payload by id

Retrieve only the payload of a send invoice, without the full invoice metadata. This is useful when you already have the invoice metadata and only need the XML content.  The response is a `text/plain` string, identical to the `payload` field returned by the standard GET endpoint with `include_payload=true`. Depending on how the invoice was originally submitted, the payload may be Base64-encoded or plain XML.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $apiInstance->sendIdPayloadGet($id);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendIdPayloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendIdentifierGet()`

```php
sendIdentifierGet($identifier, $include_payload): \Invoicetronic\Model\Send
```

Get a invoice by identifier

Retrieve a send invoice by its SDI identifier. The `identifier` is assigned by the SDI and becomes available after the invoice has been accepted. Returns invoice metadata; set `include_payload` to true to include the full invoice content.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string
$include_payload = false; // bool | Include payload in the response. Defaults to false.

try {
    $result = $apiInstance->sendIdentifierGet($identifier, $include_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**|  | |
| **include_payload** | **bool**| Include payload in the response. Defaults to false. | [optional] [default to false] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendJsonPost()`

```php
sendJsonPost($body, $validate, $signature, $idempotency_key): \Invoicetronic\Model\Send
```

Add an invoice by json

Add a new invoice using a FatturaPA JSON representation. Property names mirror the FatturaPA XML schema (PascalCase, e.g. `FatturaElettronicaHeader`). The invoice will be signed (if requested), validated (if requested), and queued for delivery to SDI. Status updates from SDI will be available in the `update` endpoint.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).  You can also upload invoices via the [Dashboard](https://dashboard.invoicetronic.com).  ### Idempotency  To protect against duplicate submissions caused by network retries, you can send an optional `Idempotency-Key` header with any unique, client-generated value (up to 255 characters).  - The first request with a given key is processed normally, and its response (status, body and `Location`) is stored for 24 hours. - Any subsequent request that reuses the same key within that window replays the original response instead of sending a second invoice to SDI. - If a request with the same key is still being processed, the retry receives `409 Conflict`. - If the same key is reused with a **different** invoice payload, the request is rejected with `422 Unprocessable Entity`: a given key must always map to the same request.  Keys are scoped per account, so different accounts can use the same key value without interfering. If the idempotency store is temporarily unavailable, the request is processed normally without idempotency protection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice.

try {
    $result = $apiInstance->sendJsonPost($body, $validate, $signature, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |
| **idempotency_key** | **string**| Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice. | [optional] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPost()`

```php
sendPost($send, $validate, $signature, $idempotency_key): \Invoicetronic\Model\Send
```

Add an invoice

Add a new invoice using a structured Send object. The invoice will be signed (if requested), validated (if requested), and queued for delivery to SDI. Status updates from SDI will be available in the `update` endpoint.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).  You can also upload invoices via the [Dashboard](https://dashboard.invoicetronic.com).  ### Idempotency  To protect against duplicate submissions caused by network retries, you can send an optional `Idempotency-Key` header with any unique, client-generated value (up to 255 characters).  - The first request with a given key is processed normally, and its response (status, body and `Location`) is stored for 24 hours. - Any subsequent request that reuses the same key within that window replays the original response instead of sending a second invoice to SDI. - If a request with the same key is still being processed, the retry receives `409 Conflict`. - If the same key is reused with a **different** invoice payload, the request is rejected with `422 Unprocessable Entity`: a given key must always map to the same request.  Keys are scoped per account, so different accounts can use the same key value without interfering. If the idempotency store is temporarily unavailable, the request is processed normally without idempotency protection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send = new \Invoicetronic\Model\Send(); // \Invoicetronic\Model\Send
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice.

try {
    $result = $apiInstance->sendPost($send, $validate, $signature, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send** | [**\Invoicetronic\Model\Send**](../Model/Send.md)|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |
| **idempotency_key** | **string**| Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice. | [optional] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidateFilePost()`

```php
sendValidateFilePost($file)
```

Validate an invoice file

Validate an invoice file without sending it to SDI. Supported formats are XML (FatturaPA) and P7M (signed). Use this to check for errors before actual submission. Returns validation results with any errors found.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->sendValidateFilePost($file);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidateFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidateJsonPost()`

```php
sendValidateJsonPost($body)
```

Validate an invoice by json

Validate a FatturaPA JSON invoice without sending it to SDI. Property names mirror the FatturaPA XML schema (PascalCase, e.g. `FatturaElettronicaHeader`). Use this to check for errors before actual submission. Returns validation results with any errors found.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->sendValidateJsonPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidateJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidatePost()`

```php
sendValidatePost($send)
```

Validate an invoice

Validate an invoice without sending it to SDI. Use this to check for errors before actual submission. Returns validation results with any errors found.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send = new \Invoicetronic\Model\Send(); // \Invoicetronic\Model\Send

try {
    $apiInstance->sendValidatePost($send);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send** | [**\Invoicetronic\Model\Send**](../Model/Send.md)|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendValidateXmlPost()`

```php
sendValidateXmlPost($body)
```

Validate an invoice by xml

Validate an XML invoice document without sending it to SDI. Use this to check for errors before actual submission. Returns validation results with any errors found.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = <?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica versione="FPR12" xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
  <FatturaElettronicaHeader>
    <DatiTrasmissione>
      <IdTrasmittente>
        <IdPaese>IT</IdPaese>
        <IdCodice>01234567890</IdCodice>
      </IdTrasmittente>
      <ProgressivoInvio>00001</ProgressivoInvio>
      <FormatoTrasmissione>FPR12</FormatoTrasmissione>
      <CodiceDestinatario>0000000</CodiceDestinatario>
    </DatiTrasmissione>
    <CedentePrestatore>
      <DatiAnagrafici>
        <IdFiscaleIVA>
          <IdPaese>IT</IdPaese>
          <IdCodice>01234567890</IdCodice>
        </IdFiscaleIVA>
        <Anagrafica>
          <Denominazione>Prestatore Srl</Denominazione>
        </Anagrafica>
        <RegimeFiscale>RF01</RegimeFiscale>
      </DatiAnagrafici>
      <Sede>
        <Indirizzo>Via Roma 1</Indirizzo>
        <CAP>00100</CAP>
        <Comune>Roma</Comune>
        <Provincia>RM</Provincia>
        <Nazione>IT</Nazione>
      </Sede>
    </CedentePrestatore>
    <CessionarioCommittente>
      <DatiAnagrafici>
        <IdFiscaleIVA>
          <IdPaese>IT</IdPaese>
          <IdCodice>09876543210</IdCodice>
        </IdFiscaleIVA>
        <Anagrafica>
          <Denominazione>Committente Srl</Denominazione>
        </Anagrafica>
      </DatiAnagrafici>
      <Sede>
        <Indirizzo>Via Milano 2</Indirizzo>
        <CAP>20100</CAP>
        <Comune>Milano</Comune>
        <Provincia>MI</Provincia>
        <Nazione>IT</Nazione>
      </Sede>
    </CessionarioCommittente>
  </FatturaElettronicaHeader>
  <FatturaElettronicaBody>
    <DatiGenerali>
      <DatiGeneraliDocumento>
        <TipoDocumento>TD01</TipoDocumento>
        <Divisa>EUR</Divisa>
        <Data>2025-01-01</Data>
        <Numero>1</Numero>
        <ImportoTotaleDocumento>122.00</ImportoTotaleDocumento>
      </DatiGeneraliDocumento>
    </DatiGenerali>
    <DatiBeniServizi>
      <DettaglioLinee>
        <NumeroLinea>1</NumeroLinea>
        <Descrizione>Servizio di consulenza</Descrizione>
        <Quantita>1.00</Quantita>
        <PrezzoUnitario>100.00</PrezzoUnitario>
        <PrezzoTotale>100.00</PrezzoTotale>
        <AliquotaIVA>22.00</AliquotaIVA>
      </DettaglioLinee>
      <DatiRiepilogo>
        <AliquotaIVA>22.00</AliquotaIVA>
        <ImponibileImporto>100.00</ImponibileImporto>
        <Imposta>22.00</Imposta>
        <EsigibilitaIVA>I</EsigibilitaIVA>
      </DatiRiepilogo>
    </DatiBeniServizi>
    <DatiPagamento>
      <CondizioniPagamento>TP02</CondizioniPagamento>
      <DettaglioPagamento>
        <ModalitaPagamento>MP05</ModalitaPagamento>
        <DataScadenzaPagamento>2025-01-31</DataScadenzaPagamento>
        <ImportoPagamento>122.00</ImportoPagamento>
      </DettaglioPagamento>
    </DatiPagamento>
  </FatturaElettronicaBody>
</p:FatturaElettronica>; // object

try {
    $apiInstance->sendValidateXmlPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendValidateXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendXmlPost()`

```php
sendXmlPost($body, $validate, $signature, $idempotency_key): \Invoicetronic\Model\Send
```

Add an invoice by xml

Add a new invoice using a raw XML document in FatturaPA format. The invoice will be signed (if requested), validated (if requested), and queued for delivery to SDI. Status updates from SDI will be available in the `update` endpoint.  **Send** invoices are outbound sales invoices transmitted to customers through Italy's SDI (Sistema di Interscambio). Preserved for two years in the live environment and 15 days in the [Sandbox](https://invoicetronic.com/en/docs/sandbox/).  You can also upload invoices via the [Dashboard](https://dashboard.invoicetronic.com).  ### Idempotency  To protect against duplicate submissions caused by network retries, you can send an optional `Idempotency-Key` header with any unique, client-generated value (up to 255 characters).  - The first request with a given key is processed normally, and its response (status, body and `Location`) is stored for 24 hours. - Any subsequent request that reuses the same key within that window replays the original response instead of sending a second invoice to SDI. - If a request with the same key is still being processed, the retry receives `409 Conflict`. - If the same key is reused with a **different** invoice payload, the request is rejected with `422 Unprocessable Entity`: a given key must always map to the same request.  Keys are scoped per account, so different accounts can use the same key value without interfering. If the idempotency store is temporarily unavailable, the request is processed normally without idempotency protection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = <?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica versione="FPR12" xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
  <FatturaElettronicaHeader>
    <DatiTrasmissione>
      <IdTrasmittente>
        <IdPaese>IT</IdPaese>
        <IdCodice>01234567890</IdCodice>
      </IdTrasmittente>
      <ProgressivoInvio>00001</ProgressivoInvio>
      <FormatoTrasmissione>FPR12</FormatoTrasmissione>
      <CodiceDestinatario>0000000</CodiceDestinatario>
    </DatiTrasmissione>
    <CedentePrestatore>
      <DatiAnagrafici>
        <IdFiscaleIVA>
          <IdPaese>IT</IdPaese>
          <IdCodice>01234567890</IdCodice>
        </IdFiscaleIVA>
        <Anagrafica>
          <Denominazione>Prestatore Srl</Denominazione>
        </Anagrafica>
        <RegimeFiscale>RF01</RegimeFiscale>
      </DatiAnagrafici>
      <Sede>
        <Indirizzo>Via Roma 1</Indirizzo>
        <CAP>00100</CAP>
        <Comune>Roma</Comune>
        <Provincia>RM</Provincia>
        <Nazione>IT</Nazione>
      </Sede>
    </CedentePrestatore>
    <CessionarioCommittente>
      <DatiAnagrafici>
        <IdFiscaleIVA>
          <IdPaese>IT</IdPaese>
          <IdCodice>09876543210</IdCodice>
        </IdFiscaleIVA>
        <Anagrafica>
          <Denominazione>Committente Srl</Denominazione>
        </Anagrafica>
      </DatiAnagrafici>
      <Sede>
        <Indirizzo>Via Milano 2</Indirizzo>
        <CAP>20100</CAP>
        <Comune>Milano</Comune>
        <Provincia>MI</Provincia>
        <Nazione>IT</Nazione>
      </Sede>
    </CessionarioCommittente>
  </FatturaElettronicaHeader>
  <FatturaElettronicaBody>
    <DatiGenerali>
      <DatiGeneraliDocumento>
        <TipoDocumento>TD01</TipoDocumento>
        <Divisa>EUR</Divisa>
        <Data>2025-01-01</Data>
        <Numero>1</Numero>
        <ImportoTotaleDocumento>122.00</ImportoTotaleDocumento>
      </DatiGeneraliDocumento>
    </DatiGenerali>
    <DatiBeniServizi>
      <DettaglioLinee>
        <NumeroLinea>1</NumeroLinea>
        <Descrizione>Servizio di consulenza</Descrizione>
        <Quantita>1.00</Quantita>
        <PrezzoUnitario>100.00</PrezzoUnitario>
        <PrezzoTotale>100.00</PrezzoTotale>
        <AliquotaIVA>22.00</AliquotaIVA>
      </DettaglioLinee>
      <DatiRiepilogo>
        <AliquotaIVA>22.00</AliquotaIVA>
        <ImponibileImporto>100.00</ImponibileImporto>
        <Imposta>22.00</Imposta>
        <EsigibilitaIVA>I</EsigibilitaIVA>
      </DatiRiepilogo>
    </DatiBeniServizi>
    <DatiPagamento>
      <CondizioniPagamento>TP02</CondizioniPagamento>
      <DettaglioPagamento>
        <ModalitaPagamento>MP05</ModalitaPagamento>
        <DataScadenzaPagamento>2025-01-31</DataScadenzaPagamento>
        <ImportoPagamento>122.00</ImportoPagamento>
      </DettaglioPagamento>
    </DatiPagamento>
  </FatturaElettronicaBody>
</p:FatturaElettronica>; // object
$validate = false; // bool | Validate the document first, and reject it on failure.
$signature = 'Auto'; // string | Whether to digitally sign the document.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice.

try {
    $result = $apiInstance->sendXmlPost($body, $validate, $signature, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |
| **validate** | **bool**| Validate the document first, and reject it on failure. | [optional] [default to false] |
| **signature** | **string**| Whether to digitally sign the document. | [optional] [default to &#39;Auto&#39;] |
| **idempotency_key** | **string**| Optional client-generated key that makes the submission idempotent. Retrying the same request with the same key within 24 hours returns the original response instead of creating a duplicate invoice. | [optional] |

### Return type

[**\Invoicetronic\Model\Send**](../Model/Send.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
