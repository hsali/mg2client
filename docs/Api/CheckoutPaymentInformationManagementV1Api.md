# Swagger\Client\CheckoutPaymentInformationManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutPaymentInformationManagementV1GetPaymentInformationGet**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/carts/mine/payment-information | 
[**checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/carts/mine/payment-information | 
[**checkoutPaymentInformationManagementV1SavePaymentInformationPost**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/carts/mine/set-payment-information | 


# **checkoutPaymentInformationManagementV1GetPaymentInformationGet**
> \Swagger\Client\Model\CheckoutDataPaymentDetailsInterface checkoutPaymentInformationManagementV1GetPaymentInformationGet()



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1GetPaymentInformationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($body)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body91(); // \Swagger\Client\Model\Body91 | 

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body91**](../Model/Body91.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutPaymentInformationManagementV1SavePaymentInformationPost**
> int checkoutPaymentInformationManagementV1SavePaymentInformationPost($body)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body92(); // \Swagger\Client\Model\Body92 | 

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1SavePaymentInformationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body92**](../Model/Body92.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

