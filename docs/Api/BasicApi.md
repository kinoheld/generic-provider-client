# Kinoheld\GenericProviderClient\BasicApi

All URIs are relative to https://virtserver.swaggerhub.com/mezmer/kinoheld/2.0.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuditoriums()**](BasicApi.md#getAuditoriums) | **GET** /auditoriums | list of auditoriums for the given cinema |
| [**getChains()**](BasicApi.md#getChains) | **GET** /chains | list of chains/companies |
| [**getCinemas()**](BasicApi.md#getCinemas) | **GET** /cinemas | list of cinemas |
| [**getProducts()**](BasicApi.md#getProducts) | **GET** /products | list of products for the given cinema |


## `getAuditoriums()`

```php
getAuditoriums($chain_id, $cinema_id): \Kinoheld\GenericProviderClient\Model\AuditoriumItem[]
```

list of auditoriums for the given cinema

Get the list of available auditoriums for the given cinema id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$cinema_id = 56; // int | Pass a cinema id to retrieve the associated auditoriums.

try {
    $result = $apiInstance->getAuditoriums($chain_id, $cinema_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getAuditoriums: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **cinema_id** | **int**| Pass a cinema id to retrieve the associated auditoriums. | |

### Return type

[**\Kinoheld\GenericProviderClient\Model\AuditoriumItem[]**](../Model/AuditoriumItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChains()`

```php
getChains($id): \Kinoheld\GenericProviderClient\Model\ChainItem[]
```

list of chains/companies

Get the list of available chains/companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Pass an optional chain id to retrieve just the chain details of the given chain.

try {
    $result = $apiInstance->getChains($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getChains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Pass an optional chain id to retrieve just the chain details of the given chain. | [optional] |

### Return type

[**\Kinoheld\GenericProviderClient\Model\ChainItem[]**](../Model/ChainItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCinemas()`

```php
getCinemas($chain_id, $id): \Kinoheld\GenericProviderClient\Model\CinemaItem[]
```

list of cinemas

Get the list of available cinemas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$id = 56; // int | Pass an optional cinema id to retrieve just the cinema details of the given cinema.

try {
    $result = $apiInstance->getCinemas($chain_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getCinemas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **id** | **int**| Pass an optional cinema id to retrieve just the cinema details of the given cinema. | [optional] |

### Return type

[**\Kinoheld\GenericProviderClient\Model\CinemaItem[]**](../Model/CinemaItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($chain_id, $cinema_id): \Kinoheld\GenericProviderClient\Model\ProductItem[]
```

list of products for the given cinema

Get the list of available products for the given cinema id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$cinema_id = 56; // int | Pass a cinema id to retrieve the associated products.

try {
    $result = $apiInstance->getProducts($chain_id, $cinema_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **cinema_id** | **int**| Pass a cinema id to retrieve the associated products. | |

### Return type

[**\Kinoheld\GenericProviderClient\Model\ProductItem[]**](../Model/ProductItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
