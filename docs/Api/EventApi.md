# kinoheld\GenericProviderClient\EventApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchMovie**](EventApi.md#searchMovie) | **GET** /movie | movie details for the given movie id
[**searchSeats**](EventApi.md#searchSeats) | **GET** /seats | list of seats for the given show
[**searchShows**](EventApi.md#searchShows) | **GET** /shows | list of shows for the given cinema

# **searchMovie**
> \kinoheld\GenericProviderClient\Model\MovieItem searchMovie($chainId, $movieId)

movie details for the given movie id

Get the movie details for the given movie id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | chain/company ID
$movieId = 56; // int | pass a movie id to retrieve the movie details

try {
    $result = $apiInstance->searchMovie($chainId, $movieId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->searchMovie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **movieId** | **int**| pass a movie id to retrieve the movie details |

### Return type

[**\kinoheld\GenericProviderClient\Model\MovieItem**](../Model/MovieItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSeats**
> \kinoheld\GenericProviderClient\Model\SeatItem[] searchSeats($chainId, $showId)

list of seats for the given show

Get the list of available seats for the given show id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | chain/company ID
$showId = 56; // int | pass a show id to retrieve the associated shows

try {
    $result = $apiInstance->searchSeats($chainId, $showId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->searchSeats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **showId** | **int**| pass a show id to retrieve the associated shows |

### Return type

[**\kinoheld\GenericProviderClient\Model\SeatItem[]**](../Model/SeatItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchShows**
> \kinoheld\GenericProviderClient\Model\ShowItem[] searchShows($chainId, $cinemaId)

list of shows for the given cinema

Get the list of available shows for the given cinema id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | chain/company ID
$cinemaId = 56; // int | pass a cinema id to retrieve the associated shows

try {
    $result = $apiInstance->searchShows($chainId, $cinemaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->searchShows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **cinemaId** | **int**| pass a cinema id to retrieve the associated shows |

### Return type

[**\kinoheld\GenericProviderClient\Model\ShowItem[]**](../Model/ShowItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

