# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. For POST requests, leave it at &#x60;0&#x60; — the server will assign one automatically. For PUT requests, set it to the id of the record you want to update. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional] [readonly]
**user_id** | **int** | User id. | [optional]
**api_key_id** | **int** | Api key id. | [optional]
**company_id** | **int** | Company id. | [optional]
**method** | **string** | Request method. |
**endpoint** | **string** | API endpoint. |
**api_version** | **int** | Api version. | [optional]
**status_code** | **int** | Status code returned by the API. | [optional]
**date_time** | **\DateTime** | Date and time of the request. | [optional]
**error** | **string** | Response error. | [optional]
**resource_id** | **int** | ID of the resource created or modified by this request. | [optional]
**user_agent** | **string** | User-Agent header from the HTTP request. | [optional]
**success** | **bool** | Whether the request was successful. | [optional] [readonly]
**query** | **string** | Request query. Only used for internal logging, not sent to webhooks. | [optional]
**response_body** | **string** | Response payload. It is guaranteed to be encrypted at rest. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
