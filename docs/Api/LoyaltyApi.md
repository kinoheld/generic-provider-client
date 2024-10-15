# OpenAPI\Client\LoyaltyApi

All URIs are relative to https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loyaltyGet()**](LoyaltyApi.md#loyaltyGet) | **GET** /loyalty | get the loyalty card |


## `loyaltyGet()`

```php
loyaltyGet($chain_id, $cinema_id, $card_number, $email): \OpenAPI\Client\Model\Loyalty
```

get the loyalty card

Get the loyalty card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cinema_id = 56; // int | The cinema ID the show/event belongs to.
$card_number = 'card_number_example'; // string | loyalty card number
$email = 'email_example'; // string | loyalty card email

try {
    $result = $apiInstance->loyaltyGet($chain_id, $cinema_id, $card_number, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->loyaltyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cinema_id** | **int**| The cinema ID the show/event belongs to. | |
| **card_number** | **string**| loyalty card number | |
| **email** | **string**| loyalty card email | [optional] |

### Return type

[**\OpenAPI\Client\Model\Loyalty**](../Model/Loyalty.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
