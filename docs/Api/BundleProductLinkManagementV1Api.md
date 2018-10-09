# Swagger\Client\BundleProductLinkManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductLinkManagementV1AddChildByProductSkuPost**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1AddChildByProductSkuPost) | **POST** /V1/bundle-products/{sku}/links/{optionId} | 
[**bundleProductLinkManagementV1GetChildrenGet**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1GetChildrenGet) | **GET** /V1/bundle-products/{productSku}/children | 
[**bundleProductLinkManagementV1RemoveChildDelete**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1RemoveChildDelete) | **DELETE** /V1/bundle-products/{sku}/options/{optionId}/children/{childSku} | 
[**bundleProductLinkManagementV1SaveChildPut**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1SaveChildPut) | **PUT** /V1/bundle-products/{sku}/links/{id} | 


# **bundleProductLinkManagementV1AddChildByProductSkuPost**
> int bundleProductLinkManagementV1AddChildByProductSkuPost($sku, $option_id, $body)



Add child product to specified Bundle option by product sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$option_id = 56; // int | 
$body = new \Swagger\Client\Model\Body125(); // \Swagger\Client\Model\Body125 | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1AddChildByProductSkuPost($sku, $option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1AddChildByProductSkuPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **option_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body125**](../Model/Body125.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductLinkManagementV1GetChildrenGet**
> \Swagger\Client\Model\BundleDataLinkInterface[] bundleProductLinkManagementV1GetChildrenGet($product_sku, $option_id)



Get all children for Bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_sku = "product_sku_example"; // string | 
$option_id = 56; // int | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1GetChildrenGet($product_sku, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1GetChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_sku** | **string**|  |
 **option_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\BundleDataLinkInterface[]**](../Model/BundleDataLinkInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductLinkManagementV1RemoveChildDelete**
> bool bundleProductLinkManagementV1RemoveChildDelete($sku, $option_id, $child_sku)



Remove product from Bundle product option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$option_id = 56; // int | 
$child_sku = "child_sku_example"; // string | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1RemoveChildDelete($sku, $option_id, $child_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1RemoveChildDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **option_id** | **int**|  |
 **child_sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductLinkManagementV1SaveChildPut**
> bool bundleProductLinkManagementV1SaveChildPut($sku, $id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body126(); // \Swagger\Client\Model\Body126 | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1SaveChildPut($sku, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1SaveChildPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body126**](../Model/Body126.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

