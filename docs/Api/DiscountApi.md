# kinoheld\GenericProviderClient\DiscountApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discountGet**](DiscountApi.md#discountGet) | **GET** /discount | get the discount

# **discountGet**
> \kinoheld\GenericProviderClient\Model\Discount discountGet($chain_id, $cinema_id, $code)

get the discount

Get the discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cinema_id = 56; // int | The cinema ID the show/event belongs to.
$code = "code_example"; // string | discount code

try {
    $result = $apiInstance->discountGet($chain_id, $cinema_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **int**| The chain ID the cinema belongs to. |
 **cinema_id** | **int**| The cinema ID the show/event belongs to. |
 **code** | **string**| discount code |

### Return type

[**\kinoheld\GenericProviderClient\Model\Discount**](../Model/Discount.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

