<?php
/**
 * OrderApi
 * PHP version 5
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * cinema
 *
 * cinema movie
 *
 * OpenAPI spec version: 1.0.0
 * Contact: sm@kinoheld.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace kinoheld\GenericProviderClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use kinoheld\GenericProviderClient\ApiException;
use kinoheld\GenericProviderClient\Configuration;
use kinoheld\GenericProviderClient\HeaderSelector;
use kinoheld\GenericProviderClient\ObjectSerializer;

/**
 * OrderApi Class Doc Comment
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation orderCancel
     *
     * cancel the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \kinoheld\GenericProviderClient\Model\Order
     */
    public function orderCancel($chainId, $orderId)
    {
        list($response) = $this->orderCancelWithHttpInfo($chainId, $orderId);
        return $response;
    }

    /**
     * Operation orderCancelWithHttpInfo
     *
     * cancel the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \kinoheld\GenericProviderClient\Model\Order, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderCancelWithHttpInfo($chainId, $orderId)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\Order';
        $request = $this->orderCancelRequest($chainId, $orderId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
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
                        '\kinoheld\GenericProviderClient\Model\Order',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation orderCancelAsync
     *
     * cancel the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderCancelAsync($chainId, $orderId)
    {
        return $this->orderCancelAsyncWithHttpInfo($chainId, $orderId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderCancelAsyncWithHttpInfo
     *
     * cancel the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderCancelAsyncWithHttpInfo($chainId, $orderId)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\Order';
        $request = $this->orderCancelRequest($chainId, $orderId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderCancel'
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderCancelRequest($chainId, $orderId)
    {
        // verify the required parameter 'chainId' is set
        if ($chainId === null || (is_array($chainId) && count($chainId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chainId when calling orderCancel'
            );
        }
        // verify the required parameter 'orderId' is set
        if ($orderId === null || (is_array($orderId) && count($orderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orderId when calling orderCancel'
            );
        }

        $resourcePath = '/order/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($chainId !== null) {
            $queryParams['chainId'] = ObjectSerializer::toQueryValue($chainId);
        }
        // query params
        if ($orderId !== null) {
            $queryParams['orderId'] = ObjectSerializer::toQueryValue($orderId);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation orderGet
     *
     * get the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \kinoheld\GenericProviderClient\Model\Order
     */
    public function orderGet($chainId, $orderId)
    {
        list($response) = $this->orderGetWithHttpInfo($chainId, $orderId);
        return $response;
    }

    /**
     * Operation orderGetWithHttpInfo
     *
     * get the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \kinoheld\GenericProviderClient\Model\Order, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderGetWithHttpInfo($chainId, $orderId)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\Order';
        $request = $this->orderGetRequest($chainId, $orderId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
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
                        '\kinoheld\GenericProviderClient\Model\Order',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation orderGetAsync
     *
     * get the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderGetAsync($chainId, $orderId)
    {
        return $this->orderGetAsyncWithHttpInfo($chainId, $orderId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderGetAsyncWithHttpInfo
     *
     * get the order
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderGetAsyncWithHttpInfo($chainId, $orderId)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\Order';
        $request = $this->orderGetRequest($chainId, $orderId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderGet'
     *
     * @param  int $chainId The chain ID the cinema belongs to. (required)
     * @param  int $orderId order ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderGetRequest($chainId, $orderId)
    {
        // verify the required parameter 'chainId' is set
        if ($chainId === null || (is_array($chainId) && count($chainId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chainId when calling orderGet'
            );
        }
        // verify the required parameter 'orderId' is set
        if ($orderId === null || (is_array($orderId) && count($orderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orderId when calling orderGet'
            );
        }

        $resourcePath = '/order';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($chainId !== null) {
            $queryParams['chainId'] = ObjectSerializer::toQueryValue($chainId);
        }
        // query params
        if ($orderId !== null) {
            $queryParams['orderId'] = ObjectSerializer::toQueryValue($orderId);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
