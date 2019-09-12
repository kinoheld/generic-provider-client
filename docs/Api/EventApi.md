# kinoheld\GenericProviderClient\EventApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMovie**](EventApi.md#getmovie) | **GET** /movie | movie details for the given movie id
[**getSeats**](EventApi.md#getseats) | **GET** /seats | list of seats for the given show
[**getShow**](EventApi.md#getshow) | **GET** /show | show info for the given cinema and show ID
[**getShows**](EventApi.md#getshows) | **GET** /shows | list of shows for the given cinema

# **getMovie**
> \kinoheld\GenericProviderClient\Model\MovieItem getMovie($chainId, $movieId)

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
    $result = $apiInstance->getMovie($chainId, $movieId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getMovie: ', $e->getMessage(), PHP_EOL;
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

# **getSeats**
> \kinoheld\GenericProviderClient\Model\SeatItem[] getSeats($chainId, $showId)

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
$showId = 56; // int | Pass a show id to retrieve the associated shows.

try {
    $result = $apiInstance->getSeats($chainId, $showId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getSeats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **showId** | **int**| Pass a show id to retrieve the associated shows. |

### Return type

[**\kinoheld\GenericProviderClient\Model\SeatItem[]**](../Model/SeatItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShow**
> \kinoheld\GenericProviderClient\Model\ShowItem getShow($chainId, $cinemaId, $showId)

show info for the given cinema and show ID

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
$cinemaId = 56; // int | cinema ID
$showId = 56; // int | show ID

try {
    $result = $apiInstance->getShow($chainId, $cinemaId, $showId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| chain/company ID |
 **cinemaId** | **int**| cinema ID |
 **showId** | **int**| show ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\ShowItem**](../Model/ShowItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShows**
> \kinoheld\GenericProviderClient\Model\ShowItem[] getShows($chainId, $cinemaId)

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
    $result = $apiInstance->getShows($chainId, $cinemaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getShows: ', $e->getMessage(), PHP_EOL;
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

