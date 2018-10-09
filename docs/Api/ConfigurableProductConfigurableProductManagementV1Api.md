# Swagger\Client\ConfigurableProductConfigurableProductManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductConfigurableProductManagementV1GenerateVariationPut**](ConfigurableProductConfigurableProductManagementV1Api.md#configurableProductConfigurableProductManagementV1GenerateVariationPut) | **PUT** /V1/configurable-products/variation | 


# **configurableProductConfigurableProductManagementV1GenerateVariationPut**
> \Swagger\Client\Model\CatalogDataProductInterface[] configurableProductConfigurableProductManagementV1GenerateVariationPut($body)



Generate variation based on same product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurableProductConfigurableProductManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body110(); // \Swagger\Client\Model\Body110 | 

try {
    $result = $apiInstance->configurableProductConfigurableProductManagementV1GenerateVariationPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductConfigurableProductManagementV1Api->configurableProductConfigurableProductManagementV1GenerateVariationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body110**](../Model/Body110.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataProductInterface[]**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

