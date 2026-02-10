# Invoicetronic\UpdateApi



All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateGet()**](UpdateApi.md#updateGet) | **GET** /update | List updates |
| [**updateIdGet()**](UpdateApi.md#updateIdGet) | **GET** /update/{id} | Get an update by id |


## `updateGet()`

```php
updateGet($company_id, $identifier, $prestatore, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size, $sort): \Invoicetronic\Model\Update[]
```

List updates

Retrieve a paginated list of updates. Results can be filtered by various criteria such as company, send item, SDI state, and date ranges.  **Updates** are status notifications from Italy's SDI (Sistema di Interscambio) about invoices you sent. Multiple updates can exist for the same send item as the invoice progresses through the SDI workflow.  The `state` field is the most important property and can have the following values:  | Value | Name | Description | |-------|------|-------------| | 2 | `Inviato` | Sent to the SDI. | | 5 | `Consegnato` | Delivered to the recipient. | | 6 | `NonConsegnato` | Not delivered to the recipient. Only relevant for public administration entities. | | 7 | `Scartato` | Rejected by the SDI. | | 8 | `AccettatoDalDestinatario` | Accepted by the recipient. Only relevant for public administration entities. | | 9 | `RifiutatoDalDestinatario` | Rejected by the recipient. Only relevant for public administration entities. | | 10 | `ImpossibilitaDiRecapito` | Available on the recipient's tax drawer, but it was not possible to deliver it to the recipient's reception system. | | 11 | `DecorrenzaTermini` | A public administration entity has not responded for more than 15 days. The document is considered delivered. | | 12 | `AttestazioneTrasmissioneFattura` | A public administration entity has received the document, but has not yet processed it. |  **Important:** Always monitor the state of your sent invoices. A state of `Inviato` only means the invoice has been submitted to SDI, not that it has been delivered. A state like `Scartato` indicates that the invoice was **not** successfully delivered and may require corrective action, such as fixing validation errors and resubmitting. In that case, `description` contains the reason for the rejection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | Company id
$identifier = 'identifier_example'; // string | SDI identifier.
$prestatore = 'prestatore_example'; // string | Vat number or fiscal code.
$unread = True; // bool | Unread items only.
$send_id = 56; // int | Send item's id.
$state = 'state_example'; // string | SDI state
$last_update_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$last_update_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$date_sent_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page. Cannot be greater than 200.
$sort = 'last_update'; // string | Sort by field. Prefix with '-' for descending order.

try {
    $result = $apiInstance->updateGet($company_id, $identifier, $prestatore, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Company id | [optional] |
| **identifier** | **string**| SDI identifier. | [optional] |
| **prestatore** | **string**| Vat number or fiscal code. | [optional] |
| **unread** | **bool**| Unread items only. | [optional] |
| **send_id** | **int**| Send item&#39;s id. | [optional] |
| **state** | **string**| SDI state | [optional] |
| **last_update_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **last_update_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **date_sent_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Cannot be greater than 200. | [optional] [default to 100] |
| **sort** | **string**| Sort by field. Prefix with &#39;-&#39; for descending order. | [optional] [default to &#39;last_update&#39;] |

### Return type

[**\Invoicetronic\Model\Update[]**](../Model/Update.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIdGet()`

```php
updateIdGet($id): \Invoicetronic\Model\Update
```

Get an update by id

Retrieve an update by its internal id.  **Updates** are status notifications from Italy's SDI (Sistema di Interscambio) about invoices you sent. Multiple updates can exist for the same send item as the invoice progresses through the SDI workflow.  The `state` field is the most important property and can have the following values:  | Value | Name | Description | |-------|------|-------------| | 2 | `Inviato` | Sent to the SDI. | | 5 | `Consegnato` | Delivered to the recipient. | | 6 | `NonConsegnato` | Not delivered to the recipient. Only relevant for public administration entities. | | 7 | `Scartato` | Rejected by the SDI. | | 8 | `AccettatoDalDestinatario` | Accepted by the recipient. Only relevant for public administration entities. | | 9 | `RifiutatoDalDestinatario` | Rejected by the recipient. Only relevant for public administration entities. | | 10 | `ImpossibilitaDiRecapito` | Available on the recipient's tax drawer, but it was not possible to deliver it to the recipient's reception system. | | 11 | `DecorrenzaTermini` | A public administration entity has not responded for more than 15 days. The document is considered delivered. | | 12 | `AttestazioneTrasmissioneFattura` | A public administration entity has received the document, but has not yet processed it. |  **Important:** Always monitor the state of your sent invoices. A state of `Inviato` only means the invoice has been submitted to SDI, not that it has been delivered. A state like `Scartato` indicates that the invoice was **not** successfully delivered and may require corrective action, such as fixing validation errors and resubmitting. In that case, `description` contains the reason for the rejection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->updateIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\Update**](../Model/Update.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
