# # Permissions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **string** | Companies: &#x60;Read&#x60; lists and reads them, &#x60;Write&#x60; also creates, updates and deletes them. | [optional]
**send** | **string** | Outgoing invoices: &#x60;Read&#x60; lists and reads them, &#x60;Write&#x60; also sends and validates invoices. | [optional]
**receive** | **string** | Incoming invoices: &#x60;Read&#x60; lists and reads them, &#x60;Write&#x60; also deletes them. | [optional]
**webhook** | **string** | Webhooks: &#x60;Read&#x60; lists and reads them, &#x60;Write&#x60; also creates, updates and deletes them. | [optional]
**update** | **string** | SDI status updates of outgoing invoices. | [optional]
**log** | **string** | Event log. | [optional]
**webhookhistory** | **string** | Webhook delivery history. | [optional]
**export** | **string** | Invoice export. | [optional]
**status** | **string** | Account status (remaining operations and signatures). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
