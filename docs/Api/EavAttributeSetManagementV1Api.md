# Swagger\Client\EavAttributeSetManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eavAttributeSetManagementV1CreatePost**](EavAttributeSetManagementV1Api.md#eavAttributeSetManagementV1CreatePost) | **POST** /V1/eav/attribute-sets | 


# **eavAttributeSetManagementV1CreatePost**
> \Swagger\Client\Model\EavDataAttributeSetInterface eavAttributeSetManagementV1CreatePost($body)



Create attribute set from data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EavAttributeSetManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->eavAttributeSetManagementV1CreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetManagementV1Api->eavAttributeSetManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

