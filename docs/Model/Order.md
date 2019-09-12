# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Order ID | [optional] 
**showId** | **int** | Show ID the order is attached to. | [optional] 
**items** | [**\kinoheld\GenericProviderClient\Model\OrderItem[]**](OrderItem.md) | Items of the order. | [optional] 
**products** | [**\kinoheld\GenericProviderClient\Model\OrderProduct[]**](OrderProduct.md) | Products of the order. | [optional] 
**discounts** | [**\kinoheld\GenericProviderClient\Model\CartDiscount[]**](CartDiscount.md) | Discounts applied to the order. | [optional] 
**pricing** | [**\kinoheld\GenericProviderClient\Model\OrderPricing**](OrderPricing.md) |  | [optional] 
**admissionCode** | **string** | The code that can be scanned by cinema staff to confirm entry to the show/event. | 
**state** | **string** | The state of the order, either ORDER_STATE_CONFIRMED after cart checkout or ORDER_STATE_CANCELLED after order cancel. | [default to 'ORDER_STATE_CONFIRMED']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

