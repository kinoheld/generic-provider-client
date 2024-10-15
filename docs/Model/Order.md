# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Order ID |
**show_id** | **int** | Show ID the order is attached to. |
**items** | [**\OpenAPI\Client\Model\OrderItem[]**](OrderItem.md) | Items of the order. | [optional]
**products** | [**\OpenAPI\Client\Model\OrderProduct[]**](OrderProduct.md) | Products of the order. | [optional]
**discounts** | [**\OpenAPI\Client\Model\CartDiscount[]**](CartDiscount.md) | Discounts applied to the order. | [optional]
**loyalty** | [**\OpenAPI\Client\Model\OrderLoyalty[]**](OrderLoyalty.md) | Loyalty cards applied to the order. | [optional]
**pricing** | [**\OpenAPI\Client\Model\OrderPricing**](OrderPricing.md) |  | [optional]
**admission_code** | **string** | The code that can be scanned by cinema staff to confirm entry to the show/event. |
**state** | **string** | The state of the order, either ORDER_STATE_CONFIRMED after cart checkout or ORDER_STATE_CANCELLED after order cancel. | [default to 'ORDER_STATE_CONFIRMED']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
