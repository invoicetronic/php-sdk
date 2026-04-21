# # WebHook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. For POST requests, leave it at &#x60;0&#x60; — the server will assign one automatically. For PUT requests, set it to the id of the record you want to update. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional] [readonly]
**user_id** | **int** | User id. It is set automatically based on the authenticated user. | [optional] [readonly]
**company_id** | **int** | Optional company id. If set, the webhook is restricted to events for that company; if omitted, it fires for all companies on the account. | [optional]
**url** | **string** | The url of your application&#39;s endpoint that will receive a POST request when the webhook is fired. |
**enabled** | **bool** | Whether the webhook is enabled. On creation, this is set to &#x60;true&#x60;. | [optional]
**secret** | **string** | The secret used to generate webhook signatures, only returned on creation. You should store this value securely and validate it on every call, to ensure that the caller is InvoicetronicApi. | [optional]
**description** | **string** | An optional description. | [optional]
**events** | **string[]** | List of events that trigger the webhook. See Invoicetronic.SupportedEvents.Available for a list of valid event names. | [optional]
**failure_notified_at** | **\DateTime** | Timestamp of the last failure notification email sent for this webhook. Set by the notifier service; reset to null on successful delivery. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
