# Invoicetronic\ExportApi



All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportGet()**](ExportApi.md#exportGet) | **GET** /export | Export invoices as a ZIP archive |


## `exportGet()`

```php
exportGet($type, $company_id, $year, $month, $quarter, $document_date_from, $document_date_to)
```

Export invoices as a ZIP archive

Export invoices as a ZIP archive of FatturaPA XML files, suitable for import into accounting software (TeamSystem, Zucchetti, etc.).  **Sent invoices** are only included when they have reached a definitive state (e.g., `Consegnato` for private recipients, `AccettatoDalDestinatario`, `DecorrenzaTermini`, etc.). Invoices still being processed by SDI are excluded.  **Received invoices** are always included. Unread invoices are automatically marked as read and counted as operations.  ### Period filters  You can filter by period using either: - `year` + `month` (e.g., `year=2026&month=3` for March 2026) - `year` + `quarter` (e.g., `year=2026&quarter=1` for Q1 Jan-Mar) - `document_date_from` / `document_date_to` for a custom date range  These options are mutually exclusive. The `year` parameter alone is not valid and requires either `month` or `quarter`.  ### Response  Returns `200` with a ZIP archive, or `204 No Content` if no invoices match the given filters. Files in the archive are organized by company VAT number (`{vat}/send/`, `{vat}/receive/`).  ### Rate limiting  This endpoint has a dedicated rate limit: only one export request per user can be processed at a time. Concurrent requests will receive a `429 Too Many Requests` response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'Both'; // string
$company_id = 56; // int | Company id
$year = 56; // int
$month = 56; // int
$quarter = 56; // int
$document_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)
$document_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | UTC ISO 8601 (2024-11-29T12:34:56Z)

try {
    $apiInstance->exportGet($type, $company_id, $year, $month, $quarter, $document_date_from, $document_date_to);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | [optional] [default to &#39;Both&#39;] |
| **company_id** | **int**| Company id | [optional] |
| **year** | **int**|  | [optional] |
| **month** | **int**|  | [optional] |
| **quarter** | **int**|  | [optional] |
| **document_date_from** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |
| **document_date_to** | **\DateTime**| UTC ISO 8601 (2024-11-29T12:34:56Z) | [optional] |

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
