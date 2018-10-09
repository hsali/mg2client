# Swagger\Client\SalesOrderAddressRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderAddressRepositoryV1SavePut**](SalesOrderAddressRepositoryV1Api.md#salesOrderAddressRepositoryV1SavePut) | **PUT** /V1/orders/{parent_id} | 


# **salesOrderAddressRepositoryV1SavePut**
> \Swagger\Client\Model\SalesDataOrderAddressInterface salesOrderAddressRepositoryV1SavePut($parent_id, $body)



Performs persist operations for a specified order address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesOrderAddressRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parent_id = "parent_id_example"; // string | 
$body = new \Swagger\Client\Model\Body66(); // \Swagger\Client\Model\Body66 | 

try {
    $result = $apiInstance->salesOrderAddressRepositoryV1SavePut($parent_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderAddressRepositoryV1Api->salesOrderAddressRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body66**](../Model/Body66.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesDataOrderAddressInterface**](../Model/SalesDataOrderAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

