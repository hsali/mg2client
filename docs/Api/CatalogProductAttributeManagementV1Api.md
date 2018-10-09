# Swagger\Client\CatalogProductAttributeManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeManagementV1AssignPost**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1AssignPost) | **POST** /V1/products/attribute-sets/attributes | 
[**catalogProductAttributeManagementV1GetAttributesGet**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1GetAttributesGet) | **GET** /V1/products/attribute-sets/{attributeSetId}/attributes | 
[**catalogProductAttributeManagementV1UnassignDelete**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1UnassignDelete) | **DELETE** /V1/products/attribute-sets/{attributeSetId}/attributes/{attributeCode} | 


# **catalogProductAttributeManagementV1AssignPost**
> int catalogProductAttributeManagementV1AssignPost($body)



Assign attribute to attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body24(); // \Swagger\Client\Model\Body24 | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1AssignPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body24**](../Model/Body24.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeManagementV1GetAttributesGet**
> \Swagger\Client\Model\CatalogDataProductAttributeInterface[] catalogProductAttributeManagementV1GetAttributesGet($attribute_set_id)



Retrieve related attributes based on given attribute set ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_set_id = "attribute_set_id_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1GetAttributesGet($attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductAttributeInterface[]**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeManagementV1UnassignDelete**
> bool catalogProductAttributeManagementV1UnassignDelete($attribute_set_id, $attribute_code)



Remove attribute from attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_set_id = "attribute_set_id_example"; // string | 
$attribute_code = "attribute_code_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1UnassignDelete($attribute_set_id, $attribute_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1UnassignDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **string**|  |
 **attribute_code** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

