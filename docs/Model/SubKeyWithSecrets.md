# # SubKeyWithSecrets

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. | [optional]
**created** | **\DateTime** | Creation date. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. | [optional] [readonly]
**description** | **string** | Human-readable label. | [optional]
**active** | **bool** | Whether the key can authenticate. | [optional]
**permissions** | [**\Invoicetronic\Model\Permissions**](Permissions.md) |  | [optional]
**company_ids** | **int[]** | Companies the key can access. Empty means all the companies of the account. | [optional]
**cors_origins** | **string[]** | Browser origins allowed to call the API with this key (CORS). | [optional]
**previous_key_expires_at** | **\DateTime** | When the secrets replaced by the last roll stop working; null when there are none still valid. | [optional]
**test_key** | **string** | Sandbox secret. | [optional]
**live_key** | **string** | Production secret. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
