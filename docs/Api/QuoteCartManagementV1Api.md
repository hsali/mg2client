# Swagger\Client\QuoteCartManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartManagementV1AssignCustomerPut**](QuoteCartManagementV1Api.md#quoteCartManagementV1AssignCustomerPut) | **PUT** /V1/carts/{cartId} | 
[**quoteCartManagementV1CreateEmptyCartForCustomerPost**](QuoteCartManagementV1Api.md#quoteCartManagementV1CreateEmptyCartForCustomerPost) | **POST** /V1/customers/{customerId}/carts | 
[**quoteCartManagementV1CreateEmptyCartForCustomerPost_0**](QuoteCartManagementV1Api.md#quoteCartManagementV1CreateEmptyCartForCustomerPost_0) | **POST** /V1/carts/mine | 
[**quoteCartManagementV1CreateEmptyCartPost**](QuoteCartManagementV1Api.md#quoteCartManagementV1CreateEmptyCartPost) | **POST** /V1/carts/ | 
[**quoteCartManagementV1GetCartForCustomerGet**](QuoteCartManagementV1Api.md#quoteCartManagementV1GetCartForCustomerGet) | **GET** /V1/carts/mine | 
[**quoteCartManagementV1PlaceOrderPut**](QuoteCartManagementV1Api.md#quoteCartManagementV1PlaceOrderPut) | **PUT** /V1/carts/mine/order | 
[**quoteCartManagementV1PlaceOrderPut_0**](QuoteCartManagementV1Api.md#quoteCartManagementV1PlaceOrderPut_0) | **PUT** /V1/carts/{cartId}/order | 


# **quoteCartManagementV1AssignCustomerPut**
> bool quoteCartManagementV1AssignCustomerPut($cart_id, $body)



Assigns a specified customer to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | The cart ID.
$body = new \Swagger\Client\Model\Body41(); // \Swagger\Client\Model\Body41 | 

try {
    $result = $apiInstance->quoteCartManagementV1AssignCustomerPut($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1AssignCustomerPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **body** | [**\Swagger\Client\Model\Body41**](../Model/Body41.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartManagementV1CreateEmptyCartForCustomerPost**
> int quoteCartManagementV1CreateEmptyCartForCustomerPost($customer_id)



Creates an empty cart and quote for a specified customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 56; // int | The customer ID.

try {
    $result = $apiInstance->quoteCartManagementV1CreateEmptyCartForCustomerPost($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1CreateEmptyCartForCustomerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| The customer ID. |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartManagementV1CreateEmptyCartForCustomerPost_0**
> int quoteCartManagementV1CreateEmptyCartForCustomerPost_0()



Creates an empty cart and quote for a specified customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteCartManagementV1CreateEmptyCartForCustomerPost_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1CreateEmptyCartForCustomerPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartManagementV1CreateEmptyCartPost**
> int quoteCartManagementV1CreateEmptyCartPost()



Creates an empty cart and quote for a guest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteCartManagementV1CreateEmptyCartPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1CreateEmptyCartPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartManagementV1GetCartForCustomerGet**
> \Swagger\Client\Model\QuoteDataCartInterface quoteCartManagementV1GetCartForCustomerGet()



Returns information for the cart for a specified customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteCartManagementV1GetCartForCustomerGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1GetCartForCustomerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\QuoteDataCartInterface**](../Model/QuoteDataCartInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartManagementV1PlaceOrderPut**
> int quoteCartManagementV1PlaceOrderPut($body)



Places an order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body42(); // \Swagger\Client\Model\Body42 | 

try {
    $result = $apiInstance->quoteCartManagementV1PlaceOrderPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1PlaceOrderPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body42**](../Model/Body42.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartManagementV1PlaceOrderPut_0**
> int quoteCartManagementV1PlaceOrderPut_0($cart_id, $body)



Places an order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | The cart ID.
$body = new \Swagger\Client\Model\Body43(); // \Swagger\Client\Model\Body43 | 

try {
    $result = $apiInstance->quoteCartManagementV1PlaceOrderPut_0($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartManagementV1Api->quoteCartManagementV1PlaceOrderPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **body** | [**\Swagger\Client\Model\Body43**](../Model/Body43.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

