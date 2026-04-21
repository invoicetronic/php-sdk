# # Receive

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier. For POST requests, leave it at &#x60;0&#x60; — the server will assign one automatically. For PUT requests, set it to the id of the record you want to update. | [optional]
**created** | **\DateTime** | Creation date. It is set automatically. | [optional] [readonly]
**version** | **int** | Row version, for optimistic concurrency. It is set automatically. | [optional] [readonly]
**user_id** | **int** | User id. It is set automatically based on the authenticated user. | [optional] [readonly]
**company_id** | **int** | Company id. It is set automatically based on the VAT number extracted from the invoice payload (the sender for &#x60;send&#x60;, the recipient for &#x60;receive&#x60;). | [optional] [readonly]
**committente** | **string** | VAT number of the Cessionario/Committente (customer). This is automatically set based on the recipient&#39;s VAT number. | [optional] [readonly]
**prestatore** | **string** | VAT number of the Cedente/Prestatore (vendor). This is automatically set based on the sender&#39;s VAT number. | [optional] [readonly]
**identifier** | **string** | SDI identifier. This is set by the SDI and is guaranteed to be unique within the SDI system. | [optional] [readonly]
**file_name** | **string** | Xml file name. If not provided on send, it will be auto-generated. | [optional]
**format** | **string** | SDI format (FPA12, FPR12, FSM10, ...) | [optional]
**payload** | **string** | Xml payload. This is the actual xml content, as string. On send, it can be base64 encoded. If it&#39;s not, it will be encoded before sending. It is guaranteed to be encrypted at rest. |
**last_update** | **\DateTime** | Last update from SDI. | [optional] [readonly]
**date_sent** | **\DateTime** | When the invoice was sent to SDI. | [optional] [readonly]
**documents** | [**\Invoicetronic\Model\DocumentData[]**](DocumentData.md) | The invoices included in the payload. This is set by the system, based on the xml content. | [optional] [readonly]
**encoding** | **string** | Whether the payload is Base64 encoded or a plain XML (text). | [optional]
**nome_prestatore** | **string** | Business name of the prestatore (supplier/seller) extracted from the invoice XML. | [optional]
**is_read** | **bool** | Whether the invoice has been read at least once. Set to true only when the invoice is requested with include_payload&#x3D;true. | [optional]
**message_id** | **string** | SDI message id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
