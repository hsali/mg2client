# Swagger\Client\SalesInvoiceCommentRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceCommentRepositoryV1SavePost**](SalesInvoiceCommentRepositoryV1Api.md#salesInvoiceCommentRepositoryV1SavePost) | **POST** /V1/invoices/comments | 


# **salesInvoiceCommentRepositoryV1SavePost**
> \Swagger\Client\Model\SalesDataInvoiceCommentInterface salesInvoiceCommentRepositoryV1SavePost($body)



Performs persist operations for a specified invoice comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesInvoiceCommentRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body68(); // \Swagger\Client\Model\Body68 | 

try {
    $result = $apiInstance->salesInvoiceCommentRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceCommentRepositoryV1Api->salesInvoiceCommentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body68**](../Model/Body68.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesDataInvoiceCommentInterface**](../Model/SalesDataInvoiceCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

