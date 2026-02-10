# # WebHook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. Leave it at 0 for new records as it will be set automatically. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional]
**user_id** | **int** | User id. | [optional]
**company_id** | **int** | Company id. | [optional]
**url** | **string** | The url of your application&#39;s endpoint that will receive a POST request when the webhook is fired. |
**enabled** | **bool** | Whether the webhook is enabled. On creation, this is set to &#x60;true&#x60;. | [optional]
**secret** | **string** | The secret used to generate webhook signatures, only returned on creation. You should store this value securely and validate it on every call, to ensure that the caller is InvoicetronicApi. | [optional]
**description** | **string** | An optional description. | [optional]
**events** | **string[]** | List of events that trigger the webhook.  See Invoicetronic.SupportedEvents.Available for a list of valid event names. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
