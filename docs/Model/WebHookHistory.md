# # WebHookHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. Leave it at 0 for new records as it will be set automatically. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional]
**web_hook_id** | **int** | Webhook id. | [optional]
**user_id** | **int** | User id. | [optional]
**event** | **string** | Event name. | [optional]
**status_code** | **int** | Status code. | [optional]
**date_time** | **\DateTime** | Date and time of the request. | [optional]
**success** | **bool** | Wether the request was successful. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
