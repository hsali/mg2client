# Swagger\Client\QuoteBillingAddressManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteBillingAddressManagementV1AssignPost**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1AssignPost) | **POST** /V1/carts/{cartId}/billing-address | 
[**quoteBillingAddressManagementV1AssignPost_0**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1AssignPost_0) | **POST** /V1/carts/mine/billing-address | 
[**quoteBillingAddressManagementV1GetGet**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1GetGet) | **GET** /V1/carts/{cartId}/billing-address | 
[**quoteBillingAddressManagementV1GetGet_0**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1GetGet_0) | **GET** /V1/carts/mine/billing-address | 


# **quoteBillingAddressManagementV1AssignPost**
> int quoteBillingAddressManagementV1AssignPost($cart_id, $body)



Assigns a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | The cart ID.
$body = new \Swagger\Client\Model\Body60(); // \Swagger\Client\Model\Body60 | 

try {
    $result = $apiInstance->quoteBillingAddressManagementV1AssignPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **body** | [**\Swagger\Client\Model\Body60**](../Model/Body60.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteBillingAddressManagementV1AssignPost_0**
> int quoteBillingAddressManagementV1AssignPost_0($body)



Assigns a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body61(); // \Swagger\Client\Model\Body61 | 

try {
    $result = $apiInstance->quoteBillingAddressManagementV1AssignPost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1AssignPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body61**](../Model/Body61.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteBillingAddressManagementV1GetGet**
> \Swagger\Client\Model\QuoteDataAddressInterface quoteBillingAddressManagementV1GetGet($cart_id)



Returns the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | The cart ID.

try {
    $result = $apiInstance->quoteBillingAddressManagementV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |

### Return type

[**\Swagger\Client\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteBillingAddressManagementV1GetGet_0**
> \Swagger\Client\Model\QuoteDataAddressInterface quoteBillingAddressManagementV1GetGet_0()



Returns the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteBillingAddressManagementV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

