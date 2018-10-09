# Swagger\Client\GiftMessageItemRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageItemRepositoryV1GetGet**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1GetGet) | **GET** /V1/carts/{cartId}/gift-message/{itemId} | 
[**giftMessageItemRepositoryV1GetGet_0**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1GetGet_0) | **GET** /V1/carts/mine/gift-message/{itemId} | 
[**giftMessageItemRepositoryV1SavePost**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1SavePost) | **POST** /V1/carts/{cartId}/gift-message/{itemId} | 
[**giftMessageItemRepositoryV1SavePost_0**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1SavePost_0) | **POST** /V1/carts/mine/gift-message/{itemId} | 


# **giftMessageItemRepositoryV1GetGet**
> \Swagger\Client\Model\GiftMessageDataMessageInterface giftMessageItemRepositoryV1GetGet($cart_id, $item_id)



Return the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | The shopping cart ID.
$item_id = 56; // int | The item ID.

try {
    $result = $apiInstance->giftMessageItemRepositoryV1GetGet($cart_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The shopping cart ID. |
 **item_id** | **int**| The item ID. |

### Return type

[**\Swagger\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageItemRepositoryV1GetGet_0**
> \Swagger\Client\Model\GiftMessageDataMessageInterface giftMessageItemRepositoryV1GetGet_0($item_id)



Return the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 56; // int | The item ID.

try {
    $result = $apiInstance->giftMessageItemRepositoryV1GetGet_0($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The item ID. |

### Return type

[**\Swagger\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageItemRepositoryV1SavePost**
> bool giftMessageItemRepositoryV1SavePost($cart_id, $item_id, $body)



Set the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = 56; // int | The cart ID.
$item_id = 56; // int | The item ID.
$body = new \Swagger\Client\Model\Body115(); // \Swagger\Client\Model\Body115 | 

try {
    $result = $apiInstance->giftMessageItemRepositoryV1SavePost($cart_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **item_id** | **int**| The item ID. |
 **body** | [**\Swagger\Client\Model\Body115**](../Model/Body115.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageItemRepositoryV1SavePost_0**
> bool giftMessageItemRepositoryV1SavePost_0($item_id, $body)



Set the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 56; // int | The item ID.
$body = new \Swagger\Client\Model\Body116(); // \Swagger\Client\Model\Body116 | 

try {
    $result = $apiInstance->giftMessageItemRepositoryV1SavePost_0($item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The item ID. |
 **body** | [**\Swagger\Client\Model\Body116**](../Model/Body116.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

