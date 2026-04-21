# # WebHookHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. For POST requests, leave it at &#x60;0&#x60; — the server will assign one automatically. For PUT requests, set it to the id of the record you want to update. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional] [readonly]
**web_hook_id** | **int** | Webhook id. | [optional]
**user_id** | **int** | User id. | [optional]
**event** | **string** | Event name. | [optional]
**status_code** | **int** | HTTP status code returned by the webhook endpoint. A value of 0 means the request could not be completed due to a network error (e.g., DNS resolution failure, connection refused, or timeout). This typically indicates that the endpoint URL is misconfigured or no longer exists. | [optional]
**error** | **string** | Error description, if any. Null when the delivery is successful (2xx). Contains the exception message for network errors (status code 0) or the response body for non-2xx HTTP responses. | [optional]
**date_time** | **\DateTime** | Date and time of the request. | [optional]
**success** | **bool** | Whether the request was successful. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
