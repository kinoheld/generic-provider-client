<?php
/**
 * BasicApi
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
 * Swagger Codegen version: 3.0.9
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
 * BasicApi Class Doc Comment
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BasicApi
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
     * Operation getAuditoriums
     *
     * list of auditoriums for the given cinema
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $cinemaId pass a cinema id to retrieve the associated auditoriums (required)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \kinoheld\GenericProviderClient\Model\AuditoriumItem[]
     */
    public function getAuditoriums($chainId, $cinemaId)
    {
        list($response) = $this->getAuditoriumsWithHttpInfo($chainId, $cinemaId);
        return $response;
    }

    /**
     * Operation getAuditoriumsWithHttpInfo
     *
     * list of auditoriums for the given cinema
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $cinemaId pass a cinema id to retrieve the associated auditoriums (required)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \kinoheld\GenericProviderClient\Model\AuditoriumItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuditoriumsWithHttpInfo($chainId, $cinemaId)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\AuditoriumItem[]';
        $request = $this->getAuditoriumsRequest($chainId, $cinemaId);

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
                        '\kinoheld\GenericProviderClient\Model\AuditoriumItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuditoriumsAsync
     *
     * list of auditoriums for the given cinema
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $cinemaId pass a cinema id to retrieve the associated auditoriums (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditoriumsAsync($chainId, $cinemaId)
    {
        return $this->getAuditoriumsAsyncWithHttpInfo($chainId, $cinemaId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuditoriumsAsyncWithHttpInfo
     *
     * list of auditoriums for the given cinema
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $cinemaId pass a cinema id to retrieve the associated auditoriums (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditoriumsAsyncWithHttpInfo($chainId, $cinemaId)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\AuditoriumItem[]';
        $request = $this->getAuditoriumsRequest($chainId, $cinemaId);

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
     * Create request for operation 'getAuditoriums'
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $cinemaId pass a cinema id to retrieve the associated auditoriums (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuditoriumsRequest($chainId, $cinemaId)
    {
        // verify the required parameter 'chainId' is set
        if ($chainId === null || (is_array($chainId) && count($chainId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chainId when calling getAuditoriums'
            );
        }
        // verify the required parameter 'cinemaId' is set
        if ($cinemaId === null || (is_array($cinemaId) && count($cinemaId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cinemaId when calling getAuditoriums'
            );
        }

        $resourcePath = '/auditoriums';
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
        if ($cinemaId !== null) {
            $queryParams['cinemaId'] = ObjectSerializer::toQueryValue($cinemaId);
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
     * Operation getChains
     *
     * list of chains/companies
     *
     * @param  int $id pass an optional chain id to retrieve just the chain details of the given chain (optional)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \kinoheld\GenericProviderClient\Model\ChainItem[]
     */
    public function getChains($id = null)
    {
        list($response) = $this->getChainsWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getChainsWithHttpInfo
     *
     * list of chains/companies
     *
     * @param  int $id pass an optional chain id to retrieve just the chain details of the given chain (optional)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \kinoheld\GenericProviderClient\Model\ChainItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getChainsWithHttpInfo($id = null)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\ChainItem[]';
        $request = $this->getChainsRequest($id);

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
                        '\kinoheld\GenericProviderClient\Model\ChainItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getChainsAsync
     *
     * list of chains/companies
     *
     * @param  int $id pass an optional chain id to retrieve just the chain details of the given chain (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChainsAsync($id = null)
    {
        return $this->getChainsAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getChainsAsyncWithHttpInfo
     *
     * list of chains/companies
     *
     * @param  int $id pass an optional chain id to retrieve just the chain details of the given chain (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChainsAsyncWithHttpInfo($id = null)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\ChainItem[]';
        $request = $this->getChainsRequest($id);

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
     * Create request for operation 'getChains'
     *
     * @param  int $id pass an optional chain id to retrieve just the chain details of the given chain (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getChainsRequest($id = null)
    {

        $resourcePath = '/chains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
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
     * Operation getCinemas
     *
     * list of cinemas
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $id pass an optional cinema id to retrieve just the cinema details of the given cinema (optional)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \kinoheld\GenericProviderClient\Model\CinemaItem[]
     */
    public function getCinemas($chainId, $id = null)
    {
        list($response) = $this->getCinemasWithHttpInfo($chainId, $id);
        return $response;
    }

    /**
     * Operation getCinemasWithHttpInfo
     *
     * list of cinemas
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $id pass an optional cinema id to retrieve just the cinema details of the given cinema (optional)
     *
     * @throws \kinoheld\GenericProviderClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \kinoheld\GenericProviderClient\Model\CinemaItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCinemasWithHttpInfo($chainId, $id = null)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\CinemaItem[]';
        $request = $this->getCinemasRequest($chainId, $id);

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
                        '\kinoheld\GenericProviderClient\Model\CinemaItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCinemasAsync
     *
     * list of cinemas
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $id pass an optional cinema id to retrieve just the cinema details of the given cinema (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCinemasAsync($chainId, $id = null)
    {
        return $this->getCinemasAsyncWithHttpInfo($chainId, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCinemasAsyncWithHttpInfo
     *
     * list of cinemas
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $id pass an optional cinema id to retrieve just the cinema details of the given cinema (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCinemasAsyncWithHttpInfo($chainId, $id = null)
    {
        $returnType = '\kinoheld\GenericProviderClient\Model\CinemaItem[]';
        $request = $this->getCinemasRequest($chainId, $id);

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
     * Create request for operation 'getCinemas'
     *
     * @param  int $chainId chain/company ID (required)
     * @param  int $id pass an optional cinema id to retrieve just the cinema details of the given cinema (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCinemasRequest($chainId, $id = null)
    {
        // verify the required parameter 'chainId' is set
        if ($chainId === null || (is_array($chainId) && count($chainId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chainId when calling getCinemas'
            );
        }

        $resourcePath = '/cinemas';
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
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
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
