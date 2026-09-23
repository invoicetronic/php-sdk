# Invoicetronic\SubkeyApi



All URIs are relative to https://api.invoicetronic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subkeyGet()**](SubkeyApi.md#subkeyGet) | **GET** /subkey | List restricted keys |
| [**subkeyIdDelete()**](SubkeyApi.md#subkeyIdDelete) | **DELETE** /subkey/{id} | Delete a restricted key |
| [**subkeyIdGet()**](SubkeyApi.md#subkeyIdGet) | **GET** /subkey/{id} | Get a restricted key by id |
| [**subkeyIdRollPost()**](SubkeyApi.md#subkeyIdRollPost) | **POST** /subkey/{id}/roll | Roll the secrets of a restricted key |
| [**subkeyPost()**](SubkeyApi.md#subkeyPost) | **POST** /subkey | Add a restricted key |
| [**subkeyPut()**](SubkeyApi.md#subkeyPut) | **PUT** /subkey | Update a restricted key |


## `subkeyGet()`

```php
subkeyGet($page, $page_size, $company_id, $active, $q): \Invoicetronic\Model\SubKey[]
```

List restricted keys

Retrieve a paginated list of the restricted keys of the calling main key. Secrets are never included.  **Restricted keys** are API keys created under your main key, with the permissions and companies you choose. Use them to give each of your customers, integrations or collaborators only the access they need: a restricted key limited to one company sees only that company's invoices, updates, webhooks and events.  Only a main key can manage restricted keys: a restricted key calling these endpoints gets `403 Forbidden` with `code` = `subkey_not_allowed`.  **Onboarding a company in two calls.** Create the company with `POST /company`, then create a restricted key limited to it with `POST /subkey` and `company_ids` = `[<company id>]`. Hand the key to your customer: it can operate only on that company.  **Secrets are shown once.** `test_key` and `live_key` are returned only when a key is created or rolled, never by reads. Store them safely. If a secret is lost or exposed, roll the key with `POST /subkey/{id}/roll`: its id, permissions, companies and CORS origins stay the same. Pass `expires_in_hours` (up to 168) to keep the replaced secrets working while you migrate; without it they stop working at once.  **Permissions** are set per resource. `company`, `send`, `receive` and `webhook` accept `Read` or `Write`; `update`, `log`, `webhookhistory`, `export` and `status` accept only `Read`. A missing resource means no access. Each permission cannot exceed the one of your main key (`400`, `code` = `permission_exceeds_parent`). On creation, omitted or empty `permissions` copy those of your main key at that moment.  | Resource | `Read` | `Write` | |---|---|---| | `company` | list and read companies | also create, update and delete them | | `send` | list and read outgoing invoices | also send and validate invoices | | `receive` | list and read incoming invoices | also delete them | | `webhook` | list and read webhooks | also create, update and delete them | | `update`, `log`, `webhookhistory`, `export`, `status` | read | — |  **Companies.** Omitted or empty `company_ids` give access to all the companies of your account, including the ones created later. Every id must belong to your account (`400`, `code` = `company_not_found`). A restricted key limited to some companies cannot see the companies it creates: use your main key for onboarding.  **Limits.** An account can hold up to 1,000 restricted keys (`400`, `code` = `subkey_limit_reached`). Operations performed with restricted keys use the credits of your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SubkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$page_size = 100; // int | Items per page. Cannot be greater than 200.
$company_id = 56; // int | Company id
$active = True; // bool | Active keys only (true) or inactive only (false).
$q = 'q_example'; // string | Human-readable label: free-text search.

try {
    $result = $apiInstance->subkeyGet($page, $page_size, $company_id, $active, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubkeyApi->subkeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] [default to 1] |
| **page_size** | **int**| Items per page. Cannot be greater than 200. | [optional] [default to 100] |
| **company_id** | **int**| Company id | [optional] |
| **active** | **bool**| Active keys only (true) or inactive only (false). | [optional] |
| **q** | **string**| Human-readable label: free-text search. | [optional] |

### Return type

[**\Invoicetronic\Model\SubKey[]**](../Model/SubKey.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subkeyIdDelete()`

```php
subkeyIdDelete($id): \Invoicetronic\Model\SubKey
```

Delete a restricted key

Delete a restricted key of the calling main key. It stops authenticating at once.  **Restricted keys** are API keys created under your main key, with the permissions and companies you choose. Use them to give each of your customers, integrations or collaborators only the access they need: a restricted key limited to one company sees only that company's invoices, updates, webhooks and events.  Only a main key can manage restricted keys: a restricted key calling these endpoints gets `403 Forbidden` with `code` = `subkey_not_allowed`.  **Onboarding a company in two calls.** Create the company with `POST /company`, then create a restricted key limited to it with `POST /subkey` and `company_ids` = `[<company id>]`. Hand the key to your customer: it can operate only on that company.  **Secrets are shown once.** `test_key` and `live_key` are returned only when a key is created or rolled, never by reads. Store them safely. If a secret is lost or exposed, roll the key with `POST /subkey/{id}/roll`: its id, permissions, companies and CORS origins stay the same. Pass `expires_in_hours` (up to 168) to keep the replaced secrets working while you migrate; without it they stop working at once.  **Permissions** are set per resource. `company`, `send`, `receive` and `webhook` accept `Read` or `Write`; `update`, `log`, `webhookhistory`, `export` and `status` accept only `Read`. A missing resource means no access. Each permission cannot exceed the one of your main key (`400`, `code` = `permission_exceeds_parent`). On creation, omitted or empty `permissions` copy those of your main key at that moment.  | Resource | `Read` | `Write` | |---|---|---| | `company` | list and read companies | also create, update and delete them | | `send` | list and read outgoing invoices | also send and validate invoices | | `receive` | list and read incoming invoices | also delete them | | `webhook` | list and read webhooks | also create, update and delete them | | `update`, `log`, `webhookhistory`, `export`, `status` | read | — |  **Companies.** Omitted or empty `company_ids` give access to all the companies of your account, including the ones created later. Every id must belong to your account (`400`, `code` = `company_not_found`). A restricted key limited to some companies cannot see the companies it creates: use your main key for onboarding.  **Limits.** An account can hold up to 1,000 restricted keys (`400`, `code` = `subkey_limit_reached`). Operations performed with restricted keys use the credits of your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SubkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->subkeyIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubkeyApi->subkeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\SubKey**](../Model/SubKey.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subkeyIdGet()`

```php
subkeyIdGet($id): \Invoicetronic\Model\SubKey
```

Get a restricted key by id

Retrieve a restricted key of the calling main key. Secrets are never included.  **Restricted keys** are API keys created under your main key, with the permissions and companies you choose. Use them to give each of your customers, integrations or collaborators only the access they need: a restricted key limited to one company sees only that company's invoices, updates, webhooks and events.  Only a main key can manage restricted keys: a restricted key calling these endpoints gets `403 Forbidden` with `code` = `subkey_not_allowed`.  **Onboarding a company in two calls.** Create the company with `POST /company`, then create a restricted key limited to it with `POST /subkey` and `company_ids` = `[<company id>]`. Hand the key to your customer: it can operate only on that company.  **Secrets are shown once.** `test_key` and `live_key` are returned only when a key is created or rolled, never by reads. Store them safely. If a secret is lost or exposed, roll the key with `POST /subkey/{id}/roll`: its id, permissions, companies and CORS origins stay the same. Pass `expires_in_hours` (up to 168) to keep the replaced secrets working while you migrate; without it they stop working at once.  **Permissions** are set per resource. `company`, `send`, `receive` and `webhook` accept `Read` or `Write`; `update`, `log`, `webhookhistory`, `export` and `status` accept only `Read`. A missing resource means no access. Each permission cannot exceed the one of your main key (`400`, `code` = `permission_exceeds_parent`). On creation, omitted or empty `permissions` copy those of your main key at that moment.  | Resource | `Read` | `Write` | |---|---|---| | `company` | list and read companies | also create, update and delete them | | `send` | list and read outgoing invoices | also send and validate invoices | | `receive` | list and read incoming invoices | also delete them | | `webhook` | list and read webhooks | also create, update and delete them | | `update`, `log`, `webhookhistory`, `export`, `status` | read | — |  **Companies.** Omitted or empty `company_ids` give access to all the companies of your account, including the ones created later. Every id must belong to your account (`400`, `code` = `company_not_found`). A restricted key limited to some companies cannot see the companies it creates: use your main key for onboarding.  **Limits.** An account can hold up to 1,000 restricted keys (`400`, `code` = `subkey_limit_reached`). Operations performed with restricted keys use the credits of your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SubkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->subkeyIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubkeyApi->subkeyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |

### Return type

[**\Invoicetronic\Model\SubKey**](../Model/SubKey.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subkeyIdRollPost()`

```php
subkeyIdRollPost($id, $expires_in_hours): \Invoicetronic\Model\SubKeyWithSecrets
```

Roll the secrets of a restricted key

Generate new `test_key` and `live_key` for a restricted key, keeping its id, permissions, companies and CORS origins. The replaced secrets stop working at once, or after `expires_in_hours` to migrate without downtime. The response carries the new secrets: store them safely.  **Restricted keys** are API keys created under your main key, with the permissions and companies you choose. Use them to give each of your customers, integrations or collaborators only the access they need: a restricted key limited to one company sees only that company's invoices, updates, webhooks and events.  Only a main key can manage restricted keys: a restricted key calling these endpoints gets `403 Forbidden` with `code` = `subkey_not_allowed`.  **Onboarding a company in two calls.** Create the company with `POST /company`, then create a restricted key limited to it with `POST /subkey` and `company_ids` = `[<company id>]`. Hand the key to your customer: it can operate only on that company.  **Secrets are shown once.** `test_key` and `live_key` are returned only when a key is created or rolled, never by reads. Store them safely. If a secret is lost or exposed, roll the key with `POST /subkey/{id}/roll`: its id, permissions, companies and CORS origins stay the same. Pass `expires_in_hours` (up to 168) to keep the replaced secrets working while you migrate; without it they stop working at once.  **Permissions** are set per resource. `company`, `send`, `receive` and `webhook` accept `Read` or `Write`; `update`, `log`, `webhookhistory`, `export` and `status` accept only `Read`. A missing resource means no access. Each permission cannot exceed the one of your main key (`400`, `code` = `permission_exceeds_parent`). On creation, omitted or empty `permissions` copy those of your main key at that moment.  | Resource | `Read` | `Write` | |---|---|---| | `company` | list and read companies | also create, update and delete them | | `send` | list and read outgoing invoices | also send and validate invoices | | `receive` | list and read incoming invoices | also delete them | | `webhook` | list and read webhooks | also create, update and delete them | | `update`, `log`, `webhookhistory`, `export`, `status` | read | — |  **Companies.** Omitted or empty `company_ids` give access to all the companies of your account, including the ones created later. Every id must belong to your account (`400`, `code` = `company_not_found`). A restricted key limited to some companies cannot see the companies it creates: use your main key for onboarding.  **Limits.** An account can hold up to 1,000 restricted keys (`400`, `code` = `subkey_limit_reached`). Operations performed with restricted keys use the credits of your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SubkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$expires_in_hours = 56; // int | Hours the replaced secrets keep working, from 1 to 168. When omitted, they stop working at once.

try {
    $result = $apiInstance->subkeyIdRollPost($id, $expires_in_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubkeyApi->subkeyIdRollPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Item id | |
| **expires_in_hours** | **int**| Hours the replaced secrets keep working, from 1 to 168. When omitted, they stop working at once. | [optional] |

### Return type

[**\Invoicetronic\Model\SubKeyWithSecrets**](../Model/SubKeyWithSecrets.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subkeyPost()`

```php
subkeyPost($sub_key_request): \Invoicetronic\Model\SubKeyWithSecrets
```

Add a restricted key

Create a restricted key under the calling main key. The response is the only one carrying `test_key` and `live_key`, together with the one of a roll: store them safely.  **Restricted keys** are API keys created under your main key, with the permissions and companies you choose. Use them to give each of your customers, integrations or collaborators only the access they need: a restricted key limited to one company sees only that company's invoices, updates, webhooks and events.  Only a main key can manage restricted keys: a restricted key calling these endpoints gets `403 Forbidden` with `code` = `subkey_not_allowed`.  **Onboarding a company in two calls.** Create the company with `POST /company`, then create a restricted key limited to it with `POST /subkey` and `company_ids` = `[<company id>]`. Hand the key to your customer: it can operate only on that company.  **Secrets are shown once.** `test_key` and `live_key` are returned only when a key is created or rolled, never by reads. Store them safely. If a secret is lost or exposed, roll the key with `POST /subkey/{id}/roll`: its id, permissions, companies and CORS origins stay the same. Pass `expires_in_hours` (up to 168) to keep the replaced secrets working while you migrate; without it they stop working at once.  **Permissions** are set per resource. `company`, `send`, `receive` and `webhook` accept `Read` or `Write`; `update`, `log`, `webhookhistory`, `export` and `status` accept only `Read`. A missing resource means no access. Each permission cannot exceed the one of your main key (`400`, `code` = `permission_exceeds_parent`). On creation, omitted or empty `permissions` copy those of your main key at that moment.  | Resource | `Read` | `Write` | |---|---|---| | `company` | list and read companies | also create, update and delete them | | `send` | list and read outgoing invoices | also send and validate invoices | | `receive` | list and read incoming invoices | also delete them | | `webhook` | list and read webhooks | also create, update and delete them | | `update`, `log`, `webhookhistory`, `export`, `status` | read | — |  **Companies.** Omitted or empty `company_ids` give access to all the companies of your account, including the ones created later. Every id must belong to your account (`400`, `code` = `company_not_found`). A restricted key limited to some companies cannot see the companies it creates: use your main key for onboarding.  **Limits.** An account can hold up to 1,000 restricted keys (`400`, `code` = `subkey_limit_reached`). Operations performed with restricted keys use the credits of your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SubkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_key_request = new \Invoicetronic\Model\SubKeyRequest(); // \Invoicetronic\Model\SubKeyRequest

try {
    $result = $apiInstance->subkeyPost($sub_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubkeyApi->subkeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sub_key_request** | [**\Invoicetronic\Model\SubKeyRequest**](../Model/SubKeyRequest.md)|  | |

### Return type

[**\Invoicetronic\Model\SubKeyWithSecrets**](../Model/SubKeyWithSecrets.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subkeyPut()`

```php
subkeyPut($sub_key_update): \Invoicetronic\Model\SubKey
```

Update a restricted key

Replace the description, active flag, permissions, companies and CORS origins of a restricted key. Omitted `permissions`, `company_ids` or `cors_origins` mean none. A stale `version` fails with `422`.  **Restricted keys** are API keys created under your main key, with the permissions and companies you choose. Use them to give each of your customers, integrations or collaborators only the access they need: a restricted key limited to one company sees only that company's invoices, updates, webhooks and events.  Only a main key can manage restricted keys: a restricted key calling these endpoints gets `403 Forbidden` with `code` = `subkey_not_allowed`.  **Onboarding a company in two calls.** Create the company with `POST /company`, then create a restricted key limited to it with `POST /subkey` and `company_ids` = `[<company id>]`. Hand the key to your customer: it can operate only on that company.  **Secrets are shown once.** `test_key` and `live_key` are returned only when a key is created or rolled, never by reads. Store them safely. If a secret is lost or exposed, roll the key with `POST /subkey/{id}/roll`: its id, permissions, companies and CORS origins stay the same. Pass `expires_in_hours` (up to 168) to keep the replaced secrets working while you migrate; without it they stop working at once.  **Permissions** are set per resource. `company`, `send`, `receive` and `webhook` accept `Read` or `Write`; `update`, `log`, `webhookhistory`, `export` and `status` accept only `Read`. A missing resource means no access. Each permission cannot exceed the one of your main key (`400`, `code` = `permission_exceeds_parent`). On creation, omitted or empty `permissions` copy those of your main key at that moment.  | Resource | `Read` | `Write` | |---|---|---| | `company` | list and read companies | also create, update and delete them | | `send` | list and read outgoing invoices | also send and validate invoices | | `receive` | list and read incoming invoices | also delete them | | `webhook` | list and read webhooks | also create, update and delete them | | `update`, `log`, `webhookhistory`, `export`, `status` | read | — |  **Companies.** Omitted or empty `company_ids` give access to all the companies of your account, including the ones created later. Every id must belong to your account (`400`, `code` = `company_not_found`). A restricted key limited to some companies cannot see the companies it creates: use your main key for onboarding.  **Limits.** An account can hold up to 1,000 restricted keys (`400`, `code` = `subkey_limit_reached`). Operations performed with restricted keys use the credits of your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = Invoicetronic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Invoicetronic\Api\SubkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_key_update = new \Invoicetronic\Model\SubKeyUpdate(); // \Invoicetronic\Model\SubKeyUpdate

try {
    $result = $apiInstance->subkeyPut($sub_key_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubkeyApi->subkeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sub_key_update** | [**\Invoicetronic\Model\SubKeyUpdate**](../Model/SubKeyUpdate.md)|  | |

### Return type

[**\Invoicetronic\Model\SubKey**](../Model/SubKey.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
