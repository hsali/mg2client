# Swagger\Client\CheckoutTotalsInformationManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutTotalsInformationManagementV1CalculatePost**](CheckoutTotalsInformationManagementV1Api.md#checkoutTotalsInformationManagementV1CalculatePost) | **POST** /V1/carts/{cartId}/totals-information | 
[**checkoutTotalsInformationManagementV1CalculatePost_0**](CheckoutTotalsInformationManagementV1Api.md#checkoutTotalsInformationManagementV1CalculatePost_0) | **POST** /V1/carts/mine/totals-information | 


# **checkoutTotalsInformationManagementV1CalculatePost**
> \Swagger\Client\Model\QuoteDataTotalsInterface checkoutTotalsInformationManagementV1CalculatePost($cart_id, $body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutTotalsInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | 
$body = new \Swagger\Client\Model\Body86(); // \Swagger\Client\Model\Body86 | 

try {
    $result = $apiInstance->checkoutTotalsInformationManagementV1CalculatePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTotalsInformationManagementV1Api->checkoutTotalsInformationManagementV1CalculatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body86**](../Model/Body86.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutTotalsInformationManagementV1CalculatePost_0**
> \Swagger\Client\Model\QuoteDataTotalsInterface checkoutTotalsInformationManagementV1CalculatePost_0($body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutTotalsInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body87(); // \Swagger\Client\Model\Body87 | 

try {
    $result = $apiInstance->checkoutTotalsInformationManagementV1CalculatePost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTotalsInformationManagementV1Api->checkoutTotalsInformationManagementV1CalculatePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body87**](../Model/Body87.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

