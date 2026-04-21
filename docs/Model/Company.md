# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. For POST requests, leave it at &#x60;0&#x60; — the server will assign one automatically. For PUT requests, set it to the id of the record you want to update. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional] [readonly]
**user_id** | **int** | User id. It is set automatically based on the authenticated user. | [optional] [readonly]
**vat** | **string** | Vat number. Must include the country code. |
**fiscal_code** | **string** | Fiscal code. In most cases it&#39;s the same as the vat number. |
**name** | **string** | Name |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
