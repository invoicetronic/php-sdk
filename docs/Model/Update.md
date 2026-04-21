# # Update

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. For POST requests, leave it at &#x60;0&#x60; — the server will assign one automatically. For PUT requests, set it to the id of the record you want to update. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional] [readonly]
**user_id** | **int** | User id. | [optional]
**company_id** | **int** | Company id. | [optional]
**send_id** | **int** | Send id. This is the id of the sent invoice to which this update refers to. | [optional]
**last_update** | **\DateTime** | Last update from SDI. | [optional]
**state** | **string** | State of the document. These are the possible values, as per the SDI documentation: | [optional]
**description** | **string** | Description for the state. | [optional]
**message_id** | **string** | SDI message id. | [optional]
**errors** | [**\Invoicetronic\Model\Error[]**](Error.md) | SDI errors, if any. | [optional]
**is_read** | **bool** | Whether the item has been read at least once. | [optional]
**send** | [**\Invoicetronic\Model\SendReduced**](SendReduced.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
