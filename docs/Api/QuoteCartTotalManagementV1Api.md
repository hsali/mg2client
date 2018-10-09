# Swagger\Client\QuoteCartTotalManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartTotalManagementV1CollectTotalsPut**](QuoteCartTotalManagementV1Api.md#quoteCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/carts/mine/collect-totals | 


# **quoteCartTotalManagementV1CollectTotalsPut**
> \Swagger\Client\Model\QuoteDataTotalsInterface quoteCartTotalManagementV1CollectTotalsPut($body)



Set shipping/billing methods and additional data for cart and collect totals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteCartTotalManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body64(); // \Swagger\Client\Model\Body64 | 

try {
    $result = $apiInstance->quoteCartTotalManagementV1CollectTotalsPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalManagementV1Api->quoteCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body64**](../Model/Body64.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

