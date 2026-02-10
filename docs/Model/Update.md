# # Update

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. Leave it at 0 for new records as it will be set automatically. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional]
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
