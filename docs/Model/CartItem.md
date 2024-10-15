# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price_area_id** | **int** | The price area the seats/tickets should be selected for. |
**price_category_id** | **int** | The price category the seats/tickets should be selected for. |
**count** | **int** | The amount of seats/tickets that should be selected for the given price category. |
**use_loyalty_free_entry** | **bool** | Set to true if this item has to be handled as a free item because of the loyalty points. | [optional]
**seat_ids** | **int[]** | If the cart is attached to a show/event with seat selection, this field is required and will contain the seat IDs that have been selected by the user for the given price category. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
