# kinoheld\GenericProviderClient\OrderApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderCancel**](OrderApi.md#ordercancel) | **POST** /order/cancel | cancel the order
[**orderGet**](OrderApi.md#orderget) | **GET** /order | get the order

# **orderCancel**
> \kinoheld\GenericProviderClient\Model\Order orderCancel($chainId, $orderId)

cancel the order

Cancel the order and free all included seats and make them avaible for booking again. If discount was tracked, the discounted amount should also be reset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$orderId = 56; // int | order ID

try {
    $result = $apiInstance->orderCancel($chainId, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **orderId** | **int**| order ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Order**](../Model/Order.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGet**
> \kinoheld\GenericProviderClient\Model\Order orderGet($chainId, $orderId)

get the order

Get the order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$orderId = 56; // int | order ID

try {
    $result = $apiInstance->orderGet($chainId, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **orderId** | **int**| order ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Order**](../Model/Order.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

