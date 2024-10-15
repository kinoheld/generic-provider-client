# OpenAPI\Client\CartApi

All URIs are relative to https://virtserver.swaggerhub.com/mezmer/kinoheld/1.0.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cartAddDiscount()**](CartApi.md#cartAddDiscount) | **POST** /cart/addDiscount | add discount to the cart |
| [**cartAddItems()**](CartApi.md#cartAddItems) | **POST** /cart/addItems | add items to the cart |
| [**cartAddLoyalty()**](CartApi.md#cartAddLoyalty) | **POST** /cart/addLoyalty | add loyalty card to the cart |
| [**cartAddProduct()**](CartApi.md#cartAddProduct) | **POST** /cart/addProduct | add product to the cart |
| [**cartCheckout()**](CartApi.md#cartCheckout) | **POST** /cart/checkout | checkout the cart |
| [**cartConfirmCheckout()**](CartApi.md#cartConfirmCheckout) | **POST** /cart/confirmCheckout | confirm the successful checkout of the cart |
| [**cartCreate()**](CartApi.md#cartCreate) | **POST** /cart/create | create a new cart |
| [**cartGet()**](CartApi.md#cartGet) | **GET** /cart | get the cart contents |
| [**cartRemoveDiscount()**](CartApi.md#cartRemoveDiscount) | **POST** /cart/removeDiscount | remove an already applied discount from the cart |
| [**cartRemoveItems()**](CartApi.md#cartRemoveItems) | **POST** /cart/removeItems | remove all items from the cart |
| [**cartRemoveLoyalty()**](CartApi.md#cartRemoveLoyalty) | **POST** /cart/removeLoyalty | remove an already applied loyalty card from the cart |
| [**cartRemoveProducts()**](CartApi.md#cartRemoveProducts) | **POST** /cart/removeProducts | remove all product from the cart |
| [**cartReset()**](CartApi.md#cartReset) | **POST** /cart/reset | reset contents of the cart |


## `cartAddDiscount()`

```php
cartAddDiscount($chain_id, $cart_id, $code): \OpenAPI\Client\Model\Cart
```

add discount to the cart

Add a discount to the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID
$code = SummerSale25Off; // string | discount code

try {
    $result = $apiInstance->cartAddDiscount($chain_id, $cart_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |
| **code** | **string**| discount code | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartAddItems()`

```php
cartAddItems($chain_id, $cart_add_items_body): \OpenAPI\Client\Model\Cart
```

add items to the cart

Add seats/tickets to the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_add_items_body = new \OpenAPI\Client\Model\CartAddItemsBody(); // \OpenAPI\Client\Model\CartAddItemsBody

try {
    $result = $apiInstance->cartAddItems($chain_id, $cart_add_items_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_add_items_body** | [**\OpenAPI\Client\Model\CartAddItemsBody**](../Model/CartAddItemsBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartAddLoyalty()`

```php
cartAddLoyalty($chain_id, $cart_id, $card_number): \OpenAPI\Client\Model\Cart
```

add loyalty card to the cart

Add a loyalty card to the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID
$card_number = LOYALTY12345000; // string | loyalty card number

try {
    $result = $apiInstance->cartAddLoyalty($chain_id, $cart_id, $card_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddLoyalty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |
| **card_number** | **string**| loyalty card number | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartAddProduct()`

```php
cartAddProduct($chain_id, $cart_add_product_body): \OpenAPI\Client\Model\Cart
```

add product to the cart

Add product to the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_add_product_body = new \OpenAPI\Client\Model\CartAddProductBody(); // \OpenAPI\Client\Model\CartAddProductBody

try {
    $result = $apiInstance->cartAddProduct($chain_id, $cart_add_product_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartAddProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_add_product_body** | [**\OpenAPI\Client\Model\CartAddProductBody**](../Model/CartAddProductBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCheckout()`

```php
cartCheckout($chain_id, $cart_id, $email): \OpenAPI\Client\Model\Order
```

checkout the cart

Checkout the cart and transform it into a confirmed transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID
$email = 'email_example'; // string | Email

try {
    $result = $apiInstance->cartCheckout($chain_id, $cart_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |
| **email** | **string**| Email | |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartConfirmCheckout()`

```php
cartConfirmCheckout($chain_id, $order_id, $email, $order_number)
```

confirm the successful checkout of the cart

Receive the order number that has been generated by kinoheld.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$order_id = 56; // int | order ID
$email = 'email_example'; // string | Email
$order_number = 'order_number_example'; // string | Order Number

try {
    $apiInstance->cartConfirmCheckout($chain_id, $order_id, $email, $order_number);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartConfirmCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **order_id** | **int**| order ID | |
| **email** | **string**| Email | |
| **order_number** | **string**| Order Number | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCreate()`

```php
cartCreate($chain_id, $cinema_id, $show_id): \OpenAPI\Client\Model\Cart
```

create a new cart

Create a new cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
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
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cinema_id** | **int**| The cinema ID the show/event belongs to. | |
| **show_id** | **int**| The show/event this cart belongs to. | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartGet()`

```php
cartGet($chain_id, $cart_id): \OpenAPI\Client\Model\Cart
```

get the cart contents

Get the content (seats / tickets / discounts) of the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID

try {
    $result = $apiInstance->cartGet($chain_id, $cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartRemoveDiscount()`

```php
cartRemoveDiscount($chain_id, $cart_id, $code): \OpenAPI\Client\Model\Cart
```

remove an already applied discount from the cart

Remove an already applied discount from the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID
$code = SummerSale25Off; // string | discount code

try {
    $result = $apiInstance->cartRemoveDiscount($chain_id, $cart_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |
| **code** | **string**| discount code | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartRemoveItems()`

```php
cartRemoveItems($chain_id, $cart_id): \OpenAPI\Client\Model\Cart
```

remove all items from the cart

Remove all items from the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID

try {
    $result = $apiInstance->cartRemoveItems($chain_id, $cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartRemoveLoyalty()`

```php
cartRemoveLoyalty($chain_id, $cart_id, $card_number): \OpenAPI\Client\Model\Cart
```

remove an already applied loyalty card from the cart

Remove an already applied loyalty card from the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID
$card_number = LOYALTY12345000; // string | loyalty card number

try {
    $result = $apiInstance->cartRemoveLoyalty($chain_id, $cart_id, $card_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveLoyalty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |
| **card_number** | **string**| loyalty card number | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartRemoveProducts()`

```php
cartRemoveProducts($chain_id, $cart_id): \OpenAPI\Client\Model\Cart
```

remove all product from the cart

Remove all products from the cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID

try {
    $result = $apiInstance->cartRemoveProducts($chain_id, $cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartRemoveProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartReset()`

```php
cartReset($chain_id, $cart_id): \OpenAPI\Client\Model\Cart
```

reset contents of the cart

Reset the cart and remove all seats/tickets, products and discounts attached to it. If seats were blocked, they need to be unblocked now so they can be booked again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | The chain ID the cinema belongs to.
$cart_id = 56; // int | cart ID

try {
    $result = $apiInstance->cartReset($chain_id, $cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| The chain ID the cinema belongs to. | |
| **cart_id** | **int**| cart ID | |

### Return type

[**\OpenAPI\Client\Model\Cart**](../Model/Cart.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
