# Swagger\Client\CheckoutGuestPaymentInformationManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/guest-carts/{cartId}/payment-information | 
[**checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/guest-carts/{cartId}/payment-information | 
[**checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/guest-carts/{cartId}/set-payment-information | 


# **checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**
> \Swagger\Client\Model\CheckoutDataPaymentDetailsInterface checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cart_id)



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cart_id, $body)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body89(); // \Swagger\Client\Model\Body89 | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body89**](../Model/Body89.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**
> int checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cart_id, $body)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body90(); // \Swagger\Client\Model\Body90 | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body90**](../Model/Body90.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

