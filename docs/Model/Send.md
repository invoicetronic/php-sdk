# # Send

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. Leave it at 0 for new records as it will be set automatically. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional]
**user_id** | **int** | User id. | [optional]
**company_id** | **int** | Company id. On send, this is the sender and must be set in advance. On receive, it will be  automatically set based on the recipient&#39;s VAT number. If a matching company is not found, the invoice will be rejected until the company is created. | [optional]
**committente** | **string** | VAT number of the Cessionario/Committente (customer). This is automatically set based on the recipient&#39;s VAT number. | [optional]
**prestatore** | **string** | VAT number of the Cedente/Prestatore (vendor). This is automatically set based on the sender&#39;s VAT number. | [optional]
**identifier** | **string** | SDI identifier. This is set by the SDI and is guaranted to be unique within the SDI system. | [optional]
**file_name** | **string** | Xml file name. | [optional]
**format** | **string** | SDI format (FPA12, FPR12, FSM10, ...) | [optional]
**payload** | **string** | Xml payloaad. This is the actual xml content, as string. On send, it can be base64 encoded. If it&#39;s not, it will be encoded before sending. It is guaranteed to be cyphered at rest. | [optional]
**last_update** | **\DateTime** | Last update from SDI. | [optional]
**date_sent** | **\DateTime** | When the invoice was sent to SDI. | [optional]
**documents** | [**\Invoicetronic\Model\DocumentData[]**](DocumentData.md) | The invoices included in the payload. This is set by the system, based on the xml content. | [optional]
**meta_data** | **array<string,string>** | Optional metadata, as json. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
