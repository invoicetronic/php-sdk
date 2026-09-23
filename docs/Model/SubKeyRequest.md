# # SubKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Human-readable label, e.g. the name of the tenant the key is for. |
**active** | **bool** | Whether the key can authenticate. Defaults to true. | [optional]
**permissions** | [**\Invoicetronic\Model\Permissions**](Permissions.md) |  | [optional]
**company_ids** | **int[]** | Companies the key can access. When omitted or empty, the key can access all the companies of the account, including the ones created later. | [optional]
**cors_origins** | **string[]** | Browser origins allowed to call the API with this key (CORS), e.g. &#x60;https://app.example.com&#x60; or &#x60;*.example.com&#x60;. A key used from a browser is public: keep its permissions and companies minimal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
