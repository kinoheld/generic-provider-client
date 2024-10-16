# OpenAPIClient-php

cinema movie


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kinoheld\GenericProviderClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Kinoheld\GenericProviderClient\Api\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 56; // int | chain/company ID
$cinema_id = 56; // int | Pass a cinema id to retrieve the associated auditoriums.

try {
    $result = $apiInstance->getAuditoriums($chain_id, $cinema_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->getAuditoriums: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/mezmer/kinoheld/2.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BasicApi* | [**getAuditoriums**](docs/Api/BasicApi.md#getauditoriums) | **GET** /auditoriums | list of auditoriums for the given cinema
*BasicApi* | [**getChains**](docs/Api/BasicApi.md#getchains) | **GET** /chains | list of chains/companies
*BasicApi* | [**getCinemas**](docs/Api/BasicApi.md#getcinemas) | **GET** /cinemas | list of cinemas
*BasicApi* | [**getProducts**](docs/Api/BasicApi.md#getproducts) | **GET** /products | list of products for the given cinema
*CartApi* | [**cartAddDiscount**](docs/Api/CartApi.md#cartadddiscount) | **POST** /cart/addDiscount | add discount to the cart
*CartApi* | [**cartAddItems**](docs/Api/CartApi.md#cartadditems) | **POST** /cart/addItems | add items to the cart
*CartApi* | [**cartAddLoyalty**](docs/Api/CartApi.md#cartaddloyalty) | **POST** /cart/addLoyalty | add loyalty card to the cart
*CartApi* | [**cartAddProduct**](docs/Api/CartApi.md#cartaddproduct) | **POST** /cart/addProduct | add product to the cart
*CartApi* | [**cartCheckout**](docs/Api/CartApi.md#cartcheckout) | **POST** /cart/checkout | checkout the cart
*CartApi* | [**cartConfirmCheckout**](docs/Api/CartApi.md#cartconfirmcheckout) | **POST** /cart/confirmCheckout | confirm the successful checkout of the cart
*CartApi* | [**cartCreate**](docs/Api/CartApi.md#cartcreate) | **POST** /cart/create | create a new cart
*CartApi* | [**cartGet**](docs/Api/CartApi.md#cartget) | **GET** /cart | get the cart contents
*CartApi* | [**cartRemoveDiscount**](docs/Api/CartApi.md#cartremovediscount) | **POST** /cart/removeDiscount | remove an already applied discount from the cart
*CartApi* | [**cartRemoveItems**](docs/Api/CartApi.md#cartremoveitems) | **POST** /cart/removeItems | remove all items from the cart
*CartApi* | [**cartRemoveLoyalty**](docs/Api/CartApi.md#cartremoveloyalty) | **POST** /cart/removeLoyalty | remove an already applied loyalty card from the cart
*CartApi* | [**cartRemoveProducts**](docs/Api/CartApi.md#cartremoveproducts) | **POST** /cart/removeProducts | remove all product from the cart
*CartApi* | [**cartReset**](docs/Api/CartApi.md#cartreset) | **POST** /cart/reset | reset contents of the cart
*DiscountApi* | [**discountGet**](docs/Api/DiscountApi.md#discountget) | **GET** /discount | get the discount
*EventApi* | [**getMovie**](docs/Api/EventApi.md#getmovie) | **GET** /movie | movie details for the given movie id
*EventApi* | [**getSeats**](docs/Api/EventApi.md#getseats) | **GET** /seats | list of seats for the given show
*EventApi* | [**getShow**](docs/Api/EventApi.md#getshow) | **GET** /show | show info for the given cinema and show ID
*EventApi* | [**getShows**](docs/Api/EventApi.md#getshows) | **GET** /shows | list of shows for the given cinema
*LoyaltyApi* | [**loyaltyGet**](docs/Api/LoyaltyApi.md#loyaltyget) | **GET** /loyalty | get the loyalty card
*OrderApi* | [**orderCancel**](docs/Api/OrderApi.md#ordercancel) | **POST** /order/cancel | cancel the order
*OrderApi* | [**orderGet**](docs/Api/OrderApi.md#orderget) | **GET** /order | get the order

## Models

- [AuditoriumItem](docs/Model/AuditoriumItem.md)
- [Cart](docs/Model/Cart.md)
- [CartAddItemsRequest](docs/Model/CartAddItemsRequest.md)
- [CartAddProductRequest](docs/Model/CartAddProductRequest.md)
- [CartDiscount](docs/Model/CartDiscount.md)
- [CartItem](docs/Model/CartItem.md)
- [CartLoyalty](docs/Model/CartLoyalty.md)
- [CartPricing](docs/Model/CartPricing.md)
- [CartProduct](docs/Model/CartProduct.md)
- [CartProductAttribute](docs/Model/CartProductAttribute.md)
- [ChainItem](docs/Model/ChainItem.md)
- [CinemaItem](docs/Model/CinemaItem.md)
- [Discount](docs/Model/Discount.md)
- [Loyalty](docs/Model/Loyalty.md)
- [LoyaltyHistory](docs/Model/LoyaltyHistory.md)
- [MovieItem](docs/Model/MovieItem.md)
- [Order](docs/Model/Order.md)
- [OrderAllOfPricing](docs/Model/OrderAllOfPricing.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemTicket](docs/Model/OrderItemTicket.md)
- [OrderLoyalty](docs/Model/OrderLoyalty.md)
- [OrderProduct](docs/Model/OrderProduct.md)
- [PriceAreaItem](docs/Model/PriceAreaItem.md)
- [PriceCategoryItem](docs/Model/PriceCategoryItem.md)
- [ProductItem](docs/Model/ProductItem.md)
- [ProductItemAttribute](docs/Model/ProductItemAttribute.md)
- [ProductItemAttributeOption](docs/Model/ProductItemAttributeOption.md)
- [SeatItem](docs/Model/SeatItem.md)
- [ShowItem](docs/Model/ShowItem.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

sm@kinoheld.de

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.9.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
