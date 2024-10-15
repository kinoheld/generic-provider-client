# OpenAPI\Client\EventApi

All URIs are relative to https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMovie()**](EventApi.md#getMovie) | **GET** /movie | movie details for the given movie id |
| [**getSeats()**](EventApi.md#getSeats) | **GET** /seats | list of seats for the given show |
| [**getShow()**](EventApi.md#getShow) | **GET** /show | show info for the given cinema and show ID |
| [**getShows()**](EventApi.md#getShows) | **GET** /shows | list of shows for the given cinema |


## `getMovie()`

```php
getMovie($chain_id, $cinema_id, $movie_id): \OpenAPI\Client\Model\MovieItem
```

movie details for the given movie id

Get the movie details for the given movie id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$cinema_id = 56; // int | pass a cinema id to retrieve the associated movie
$movie_id = 56; // int | pass a movie id to retrieve the movie details

try {
    $result = $apiInstance->getMovie($chain_id, $cinema_id, $movie_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getMovie: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **cinema_id** | **int**| pass a cinema id to retrieve the associated movie | |
| **movie_id** | **int**| pass a movie id to retrieve the movie details | |

### Return type

[**\OpenAPI\Client\Model\MovieItem**](../Model/MovieItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeats()`

```php
getSeats($chain_id, $show_id): \OpenAPI\Client\Model\SeatItem[]
```

list of seats for the given show

Get the list of available seats for the given show id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$show_id = 56; // int | Pass a show id to retrieve the associated shows.

try {
    $result = $apiInstance->getSeats($chain_id, $show_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **show_id** | **int**| Pass a show id to retrieve the associated shows. | |

### Return type

[**\OpenAPI\Client\Model\SeatItem[]**](../Model/SeatItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShow()`

```php
getShow($chain_id, $cinema_id, $show_id): \OpenAPI\Client\Model\ShowItem
```

show info for the given cinema and show ID

Get the list of available shows for the given cinema id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$cinema_id = 56; // int | cinema ID
$show_id = 56; // int | show ID

try {
    $result = $apiInstance->getShow($chain_id, $cinema_id, $show_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **cinema_id** | **int**| cinema ID | |
| **show_id** | **int**| show ID | |

### Return type

[**\OpenAPI\Client\Model\ShowItem**](../Model/ShowItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShows()`

```php
getShows($chain_id, $cinema_id): \OpenAPI\Client\Model\ShowItem[]
```

list of shows for the given cinema

Get the list of available shows for the given cinema id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$cinema_id = 56; // int | pass a cinema id to retrieve the associated shows

try {
    $result = $apiInstance->getShows($chain_id, $cinema_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getShows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| chain/company ID | |
| **cinema_id** | **int**| pass a cinema id to retrieve the associated shows | |

### Return type

[**\OpenAPI\Client\Model\ShowItem[]**](../Model/ShowItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
