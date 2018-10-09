# Swagger\Client\SalesInvoiceOrderV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceOrderV1ExecutePost**](SalesInvoiceOrderV1Api.md#salesInvoiceOrderV1ExecutePost) | **POST** /V1/order/{orderId}/invoice | 


# **salesInvoiceOrderV1ExecutePost**
> int salesInvoiceOrderV1ExecutePost($order_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesInvoiceOrderV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 
$body = new \Swagger\Client\Model\Body77(); // \Swagger\Client\Model\Body77 | 

try {
    $result = $apiInstance->salesInvoiceOrderV1ExecutePost($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceOrderV1Api->salesInvoiceOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body77**](../Model/Body77.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

