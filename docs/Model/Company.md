# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. Leave it at 0 for new records as it will be set automatically. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional]
**user_id** | **int** | User id. | [optional]
**vat** | **string** | Vat number. Must include the country code. |
**fiscal_code** | **string** | Fiscal code. In most cases it&#39;s the same as the vat number. |
**name** | **string** | Name |
**counter** | **int** | Holds the last unique value used to generate a XML filename. This is automatically updated by the system   when a raw XML file is uploaded. Normally, you do not need or want to change this value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
