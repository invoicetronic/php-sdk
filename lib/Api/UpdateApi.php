<?php
/**
 * UpdateApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Italian eInvoice API
 *
 * The Italian eInvoice API is a RESTful API that allows you to send and receive invoices through the Italian [Servizio di Interscambio (SDI)][1], or Interchange Service. The API is designed by Invoicetronic to be simple and easy to use, abstracting away SDI complexity while providing complete control over the invoice send/receive process. The API also provides advanced features as encryption at rest, invoice validation, multiple upload formats, webhooks, event logging, client SDKs for commonly used languages, and CLI tools.  For more information, see  [Invoicetronic website][2]  [1]: https://www.fatturapa.gov.it/it/sistemainterscambio/cose-il-sdi/ [2]: https://invoicetronic.com/
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@invoicetronic.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Invoicetronic\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Invoicetronic\ApiException;
use Invoicetronic\Configuration;
use Invoicetronic\HeaderSelector;
use Invoicetronic\ObjectSerializer;

/**
 * UpdateApi Class Doc Comment
 *
 * @category Class
 * @package  Invoicetronic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'invoiceV1UpdateGet' => [
            'application/json',
        ],
        'invoiceV1UpdateIdGet' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation invoiceV1UpdateGet
     *
     * List updates
     *
     * @param  int|null $company_id Company id (optional)
     * @param  string|null $identifier SDI identifier. (optional)
     * @param  bool|null $unread Unread items only. (optional)
     * @param  int|null $send_id Send item&#39;s id. (optional)
     * @param  string|null $state SDI state (optional)
     * @param  \DateTime|null $last_update_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $last_update_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  int|null $page Page number. Defaults to 1. (optional, default to 1)
     * @param  int|null $page_size Items per page. Defaults to 50. Cannot be greater than 200. (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateGet'] to see the possible values for this operation
     *
     * @throws \Invoicetronic\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Invoicetronic\Model\Update[]|\Invoicetronic\Model\ProblemHttpResult
     */
    public function invoiceV1UpdateGet($company_id = null, $identifier = null, $unread = null, $send_id = null, $state = null, $last_update_from = null, $last_update_to = null, $date_sent_from = null, $date_sent_to = null, $page = 1, $page_size = 100, string $contentType = self::contentTypes['invoiceV1UpdateGet'][0])
    {
        list($response) = $this->invoiceV1UpdateGetWithHttpInfo($company_id, $identifier, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size, $contentType);
        return $response;
    }

    /**
     * Operation invoiceV1UpdateGetWithHttpInfo
     *
     * List updates
     *
     * @param  int|null $company_id Company id (optional)
     * @param  string|null $identifier SDI identifier. (optional)
     * @param  bool|null $unread Unread items only. (optional)
     * @param  int|null $send_id Send item&#39;s id. (optional)
     * @param  string|null $state SDI state (optional)
     * @param  \DateTime|null $last_update_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $last_update_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  int|null $page Page number. Defaults to 1. (optional, default to 1)
     * @param  int|null $page_size Items per page. Defaults to 50. Cannot be greater than 200. (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateGet'] to see the possible values for this operation
     *
     * @throws \Invoicetronic\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Invoicetronic\Model\Update[]|\Invoicetronic\Model\ProblemHttpResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceV1UpdateGetWithHttpInfo($company_id = null, $identifier = null, $unread = null, $send_id = null, $state = null, $last_update_from = null, $last_update_to = null, $date_sent_from = null, $date_sent_to = null, $page = 1, $page_size = 100, string $contentType = self::contentTypes['invoiceV1UpdateGet'][0])
    {
        $request = $this->invoiceV1UpdateGetRequest($company_id, $identifier, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Invoicetronic\Model\Update[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Invoicetronic\Model\Update[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Invoicetronic\Model\Update[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Invoicetronic\Model\ProblemHttpResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Invoicetronic\Model\ProblemHttpResult' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Invoicetronic\Model\ProblemHttpResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Invoicetronic\Model\Update[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Invoicetronic\Model\Update[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Invoicetronic\Model\ProblemHttpResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceV1UpdateGetAsync
     *
     * List updates
     *
     * @param  int|null $company_id Company id (optional)
     * @param  string|null $identifier SDI identifier. (optional)
     * @param  bool|null $unread Unread items only. (optional)
     * @param  int|null $send_id Send item&#39;s id. (optional)
     * @param  string|null $state SDI state (optional)
     * @param  \DateTime|null $last_update_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $last_update_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  int|null $page Page number. Defaults to 1. (optional, default to 1)
     * @param  int|null $page_size Items per page. Defaults to 50. Cannot be greater than 200. (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceV1UpdateGetAsync($company_id = null, $identifier = null, $unread = null, $send_id = null, $state = null, $last_update_from = null, $last_update_to = null, $date_sent_from = null, $date_sent_to = null, $page = 1, $page_size = 100, string $contentType = self::contentTypes['invoiceV1UpdateGet'][0])
    {
        return $this->invoiceV1UpdateGetAsyncWithHttpInfo($company_id, $identifier, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceV1UpdateGetAsyncWithHttpInfo
     *
     * List updates
     *
     * @param  int|null $company_id Company id (optional)
     * @param  string|null $identifier SDI identifier. (optional)
     * @param  bool|null $unread Unread items only. (optional)
     * @param  int|null $send_id Send item&#39;s id. (optional)
     * @param  string|null $state SDI state (optional)
     * @param  \DateTime|null $last_update_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $last_update_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  int|null $page Page number. Defaults to 1. (optional, default to 1)
     * @param  int|null $page_size Items per page. Defaults to 50. Cannot be greater than 200. (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceV1UpdateGetAsyncWithHttpInfo($company_id = null, $identifier = null, $unread = null, $send_id = null, $state = null, $last_update_from = null, $last_update_to = null, $date_sent_from = null, $date_sent_to = null, $page = 1, $page_size = 100, string $contentType = self::contentTypes['invoiceV1UpdateGet'][0])
    {
        $returnType = '\Invoicetronic\Model\Update[]';
        $request = $this->invoiceV1UpdateGetRequest($company_id, $identifier, $unread, $send_id, $state, $last_update_from, $last_update_to, $date_sent_from, $date_sent_to, $page, $page_size, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'invoiceV1UpdateGet'
     *
     * @param  int|null $company_id Company id (optional)
     * @param  string|null $identifier SDI identifier. (optional)
     * @param  bool|null $unread Unread items only. (optional)
     * @param  int|null $send_id Send item&#39;s id. (optional)
     * @param  string|null $state SDI state (optional)
     * @param  \DateTime|null $last_update_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $last_update_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_from UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  \DateTime|null $date_sent_to UTC ISO 8601 (2024-11-29T12:34:56Z) (optional)
     * @param  int|null $page Page number. Defaults to 1. (optional, default to 1)
     * @param  int|null $page_size Items per page. Defaults to 50. Cannot be greater than 200. (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceV1UpdateGetRequest($company_id = null, $identifier = null, $unread = null, $send_id = null, $state = null, $last_update_from = null, $last_update_to = null, $date_sent_from = null, $date_sent_to = null, $page = 1, $page_size = 100, string $contentType = self::contentTypes['invoiceV1UpdateGet'][0])
    {













        $resourcePath = '/invoice/v1/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $company_id,
            'company_id', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $identifier,
            'identifier', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $unread,
            'unread', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $send_id,
            'send_id', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $state,
            'state', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_update_from,
            'last_update_from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_update_to,
            'last_update_to', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_sent_from,
            'date_sent_from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_sent_to,
            'date_sent_to', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'page_size', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation invoiceV1UpdateIdGet
     *
     * Get an update by id
     *
     * @param  int $id Item id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateIdGet'] to see the possible values for this operation
     *
     * @throws \Invoicetronic\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Invoicetronic\Model\Update
     */
    public function invoiceV1UpdateIdGet($id, string $contentType = self::contentTypes['invoiceV1UpdateIdGet'][0])
    {
        list($response) = $this->invoiceV1UpdateIdGetWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation invoiceV1UpdateIdGetWithHttpInfo
     *
     * Get an update by id
     *
     * @param  int $id Item id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateIdGet'] to see the possible values for this operation
     *
     * @throws \Invoicetronic\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Invoicetronic\Model\Update, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceV1UpdateIdGetWithHttpInfo($id, string $contentType = self::contentTypes['invoiceV1UpdateIdGet'][0])
    {
        $request = $this->invoiceV1UpdateIdGetRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Invoicetronic\Model\Update' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Invoicetronic\Model\Update' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Invoicetronic\Model\Update', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Invoicetronic\Model\Update';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Invoicetronic\Model\Update',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceV1UpdateIdGetAsync
     *
     * Get an update by id
     *
     * @param  int $id Item id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceV1UpdateIdGetAsync($id, string $contentType = self::contentTypes['invoiceV1UpdateIdGet'][0])
    {
        return $this->invoiceV1UpdateIdGetAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceV1UpdateIdGetAsyncWithHttpInfo
     *
     * Get an update by id
     *
     * @param  int $id Item id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceV1UpdateIdGetAsyncWithHttpInfo($id, string $contentType = self::contentTypes['invoiceV1UpdateIdGet'][0])
    {
        $returnType = '\Invoicetronic\Model\Update';
        $request = $this->invoiceV1UpdateIdGetRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'invoiceV1UpdateIdGet'
     *
     * @param  int $id Item id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceV1UpdateIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceV1UpdateIdGetRequest($id, string $contentType = self::contentTypes['invoiceV1UpdateIdGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling invoiceV1UpdateIdGet'
            );
        }


        $resourcePath = '/invoice/v1/update/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
