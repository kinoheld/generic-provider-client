# kinoheld\GenericProviderClient\CartApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cartAddDiscount**](CartApi.md#cartAddDiscount) | **POST** /cart/addDiscount | add discount to the cart
[**cartAddItems**](CartApi.md#cartAddItems) | **POST** /cart/addItems | add items to the cart
[**cartCheckout**](CartApi.md#cartCheckout) | **POST** /cart/checkout | checkout the cart
[**cartCreate**](CartApi.md#cartCreate) | **POST** /cart/create | create a new cart
[**cartGet**](CartApi.md#cartGet) | **GET** /cart | get the cart contents
[**cartRemoveDiscount**](CartApi.md#cartRemoveDiscount) | **POST** /cart/removeDiscount | remove an already applied discount from the cart
[**cartReset**](CartApi.md#cartReset) | **POST** /cart/reset | reset contents of the cart

# **cartAddDiscount**
> \kinoheld\GenericProviderClient\Model\Cart cartAddDiscount($cart_id, $code)

add discount to the cart

Add a discount to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 56; // int | cart ID
$code = "code_example"; // string | discount code

try {
    $result = $apiInstance->cartAddDiscount($cart_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| cart ID |
 **code** | **string**| discount code |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartAddItems**
> \kinoheld\GenericProviderClient\Model\Cart cartAddItems($cart_id, $items, $reset)

add items to the cart

Add seats/tickets to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 56; // int | cart ID
$items = array(new \kinoheld\GenericProviderClient\Model\CartItem()); // \kinoheld\GenericProviderClient\Model\CartItem[] | items
$reset = true; // bool | reset cart before adding items

try {
    $result = $apiInstance->cartAddItems($cart_id, $items, $reset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| cart ID |
 **items** | [**\kinoheld\GenericProviderClient\Model\CartItem[]**](../Model/\kinoheld\GenericProviderClient\Model\CartItem.md)| items |
 **reset** | **bool**| reset cart before adding items | [optional]

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartCheckout**
> \kinoheld\GenericProviderClient\Model\Order cartCheckout($cart_id, $email)

checkout the cart

Checkout the cart and transform it into a confirmed transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 56; // int | cart ID
$email = "email_example"; // string | Email

try {
    $result = $apiInstance->cartCheckout($cart_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| cart ID |
 **email** | **string**| Email |

### Return type

[**\kinoheld\GenericProviderClient\Model\Order**](../Model/Order.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartCreate**
> \kinoheld\GenericProviderClient\Model\Cart cartCreate($chain_id, $cinema_id, $show_id)

create a new cart

Create a new cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cinema_id = 56; // int | The cinema ID the show/event belongs to.
$show_id = 56; // int | The show/event this cart belongs to.

try {
    $result = $apiInstance->cartCreate($chain_id, $cinema_id, $show_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **int**| The chain ID the cinema belongs to. |
 **cinema_id** | **int**| The cinema ID the show/event belongs to. |
 **show_id** | **int**| The show/event this cart belongs to. |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartGet**
> \kinoheld\GenericProviderClient\Model\Cart cartGet($cart_id)

get the cart contents

Get the content (seats / tickets / discounts) of the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 56; // int | cart ID

try {
    $result = $apiInstance->cartGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| cart ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartRemoveDiscount**
> \kinoheld\GenericProviderClient\Model\Cart cartRemoveDiscount($cart_id, $code)

remove an already applied discount from the cart

Remove an already applied discount from the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 56; // int | cart ID
$code = "code_example"; // string | discount code

try {
    $result = $apiInstance->cartRemoveDiscount($cart_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| cart ID |
 **code** | **string**| discount code |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartReset**
> \kinoheld\GenericProviderClient\Model\Cart cartReset($cart_id)

reset contents of the cart

Reset the cart and remove all seats/tickets and discounts attached to it. If seats were blocked, they need to be unblocked now so they can be booked again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_id = 56; // int | cart ID

try {
    $result = $apiInstance->cartReset($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| cart ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

