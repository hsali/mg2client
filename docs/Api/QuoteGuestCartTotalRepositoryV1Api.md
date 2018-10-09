# Swagger\Client\QuoteGuestCartTotalRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartTotalRepositoryV1GetGet**](QuoteGuestCartTotalRepositoryV1Api.md#quoteGuestCartTotalRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId}/totals | 


# **quoteGuestCartTotalRepositoryV1GetGet**
> \Swagger\Client\Model\QuoteDataTotalsInterface quoteGuestCartTotalRepositoryV1GetGet($cart_id)



Return quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteGuestCartTotalRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $apiInstance->quoteGuestCartTotalRepositoryV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartTotalRepositoryV1Api->quoteGuestCartTotalRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

