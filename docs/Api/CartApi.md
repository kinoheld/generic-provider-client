# kinoheld\GenericProviderClient\CartApi

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cartAddDiscount**](CartApi.md#cartadddiscount) | **POST** /cart/addDiscount | add discount to the cart
[**cartAddItems**](CartApi.md#cartadditems) | **POST** /cart/addItems | add items to the cart
[**cartAddLoyalty**](CartApi.md#cartaddloyalty) | **POST** /cart/addLoyalty | add loyalty card to the cart
[**cartAddProduct**](CartApi.md#cartaddproduct) | **POST** /cart/addProduct | add product to the cart
[**cartCheckout**](CartApi.md#cartcheckout) | **POST** /cart/checkout | checkout the cart
[**cartConfirmCheckout**](CartApi.md#cartconfirmcheckout) | **POST** /cart/confirmCheckout | confirm the successful checkout of the cart
[**cartCreate**](CartApi.md#cartcreate) | **POST** /cart/create | create a new cart
[**cartGet**](CartApi.md#cartget) | **GET** /cart | get the cart contents
[**cartRemoveDiscount**](CartApi.md#cartremovediscount) | **POST** /cart/removeDiscount | remove an already applied discount from the cart
[**cartRemoveLoyalty**](CartApi.md#cartremoveloyalty) | **POST** /cart/removeLoyalty | remove an already applied loyalty card from the cart
[**cartRemoveProducts**](CartApi.md#cartremoveproducts) | **POST** /cart/removeProducts | remove all product from the cart
[**cartReset**](CartApi.md#cartreset) | **POST** /cart/reset | reset contents of the cart

# **cartAddDiscount**
> \kinoheld\GenericProviderClient\Model\Cart cartAddDiscount($chainId, $cartId, $code)

add discount to the cart

Add a discount to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID
$code = "code_example"; // string | discount code

try {
    $result = $apiInstance->cartAddDiscount($chainId, $cartId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |
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
> \kinoheld\GenericProviderClient\Model\Cart cartAddItems($chainId, $body)

add items to the cart

Add seats/tickets to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$body = new \kinoheld\GenericProviderClient\Model\Body(); // \kinoheld\GenericProviderClient\Model\Body | 

try {
    $result = $apiInstance->cartAddItems($chainId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **body** | [**\kinoheld\GenericProviderClient\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartAddLoyalty**
> \kinoheld\GenericProviderClient\Model\Cart cartAddLoyalty($chainId, $cartId, $cardNumber)

add loyalty card to the cart

Add a loyalty card to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID
$cardNumber = "cardNumber_example"; // string | loyalty card number

try {
    $result = $apiInstance->cartAddLoyalty($chainId, $cartId, $cardNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddLoyalty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |
 **cardNumber** | **string**| loyalty card number |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartAddProduct**
> \kinoheld\GenericProviderClient\Model\Cart cartAddProduct($chainId, $body)

add product to the cart

Add product to the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$body = new \kinoheld\GenericProviderClient\Model\Body1(); // \kinoheld\GenericProviderClient\Model\Body1 | 

try {
    $result = $apiInstance->cartAddProduct($chainId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **body** | [**\kinoheld\GenericProviderClient\Model\Body1**](../Model/Body1.md)|  | [optional]

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartCheckout**
> \kinoheld\GenericProviderClient\Model\Order cartCheckout($chainId, $cartId, $email)

checkout the cart

Checkout the cart and transform it into a confirmed transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID
$email = "email_example"; // string | Email

try {
    $result = $apiInstance->cartCheckout($chainId, $cartId, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |
 **email** | **string**| Email |

### Return type

[**\kinoheld\GenericProviderClient\Model\Order**](../Model/Order.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartConfirmCheckout**
> cartConfirmCheckout($chainId, $orderId, $email, $orderNumber)

confirm the successful checkout of the cart

Receive the order number that has been generated by kinoheld.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$orderId = 56; // int | order ID
$email = "email_example"; // string | Email
$orderNumber = "orderNumber_example"; // string | Order Number

try {
    $apiInstance->cartConfirmCheckout($chainId, $orderId, $email, $orderNumber);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartConfirmCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **orderId** | **int**| order ID |
 **email** | **string**| Email |
 **orderNumber** | **string**| Order Number |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartCreate**
> \kinoheld\GenericProviderClient\Model\Cart cartCreate($chainId, $cinemaId, $showId)

create a new cart

Create a new cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cinemaId = 56; // int | The cinema ID the show/event belongs to.
$showId = 56; // int | The show/event this cart belongs to.

try {
    $result = $apiInstance->cartCreate($chainId, $cinemaId, $showId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cinemaId** | **int**| The cinema ID the show/event belongs to. |
 **showId** | **int**| The show/event this cart belongs to. |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartGet**
> \kinoheld\GenericProviderClient\Model\Cart cartGet($chainId, $cartId)

get the cart contents

Get the content (seats / tickets / discounts) of the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID

try {
    $result = $apiInstance->cartGet($chainId, $cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartRemoveDiscount**
> \kinoheld\GenericProviderClient\Model\Cart cartRemoveDiscount($chainId, $cartId, $code)

remove an already applied discount from the cart

Remove an already applied discount from the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID
$code = "code_example"; // string | discount code

try {
    $result = $apiInstance->cartRemoveDiscount($chainId, $cartId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |
 **code** | **string**| discount code |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartRemoveLoyalty**
> \kinoheld\GenericProviderClient\Model\Cart cartRemoveLoyalty($chainId, $cartId, $cardNumber)

remove an already applied loyalty card from the cart

Remove an already applied loyalty card from the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID
$cardNumber = "cardNumber_example"; // string | loyalty card number

try {
    $result = $apiInstance->cartRemoveLoyalty($chainId, $cartId, $cardNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveLoyalty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |
 **cardNumber** | **string**| loyalty card number |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartRemoveProducts**
> \kinoheld\GenericProviderClient\Model\Cart cartRemoveProducts($chainId, $cartId)

remove all product from the cart

Remove all products from the cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID

try {
    $result = $apiInstance->cartRemoveProducts($chainId, $cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartReset**
> \kinoheld\GenericProviderClient\Model\Cart cartReset($chainId, $cartId)

reset contents of the cart

Reset the cart and remove all seats/tickets, products and discounts attached to it. If seats were blocked, they need to be unblocked now so they can be booked again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new kinoheld\GenericProviderClient\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chainId = 56; // int | The chain ID the cinema belongs to.
$cartId = 56; // int | cart ID

try {
    $result = $apiInstance->cartReset($chainId, $cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chainId** | **int**| The chain ID the cinema belongs to. |
 **cartId** | **int**| cart ID |

### Return type

[**\kinoheld\GenericProviderClient\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

