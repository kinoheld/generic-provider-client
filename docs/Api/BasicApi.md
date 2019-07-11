# kinoheld\GenericProviderClient\BasicApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuditoriums**](BasicApi.md#getauditoriums) | **GET** /auditoriums | list of auditoriums for the given cinema
[**getChains**](BasicApi.md#getchains) | **GET** /chains | list of chains/companies
[**getCinemas**](BasicApi.md#getcinemas) | **GET** /cinemas | list of cinemas

# **getAuditoriums**
> \kinoheld\GenericProviderClient\Model\AuditoriumItem[] getAuditoriums($chainId, $cinemaId)

list of auditoriums for the given cinema

Get the list of available auditoriums for the given cinema id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | chain/company ID
$cinemaId = 56; // int | pass a cinema id to retrieve the associated auditoriums

try {
    $result = $apiInstance->getAuditoriums($chainId, $cinemaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getAuditoriums: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **cinemaId** | **int**| pass a cinema id to retrieve the associated auditoriums |

### Return type

[**\kinoheld\GenericProviderClient\Model\AuditoriumItem[]**](../Model/AuditoriumItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChains**
> \kinoheld\GenericProviderClient\Model\ChainItem[] getChains($id)

list of chains/companies

Get the list of available chains/companies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | pass an optional chain id to retrieve just the chain details of the given chain

try {
    $result = $apiInstance->getChains($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getChains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| pass an optional chain id to retrieve just the chain details of the given chain | [optional]

### Return type

[**\kinoheld\GenericProviderClient\Model\ChainItem[]**](../Model/ChainItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCinemas**
> \kinoheld\GenericProviderClient\Model\CinemaItem[] getCinemas($chainId, $id)

list of cinemas

Get the list of available cinemas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | chain/company ID
$id = 56; // int | pass an optional cinema id to retrieve just the cinema details of the given cinema

try {
    $result = $apiInstance->getCinemas($chainId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getCinemas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **id** | **int**| pass an optional cinema id to retrieve just the cinema details of the given cinema | [optional]

### Return type

[**\kinoheld\GenericProviderClient\Model\CinemaItem[]**](../Model/CinemaItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

