# Swagger\Client\IntegrationCustomerTokenServiceV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost**](IntegrationCustomerTokenServiceV1Api.md#integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost) | **POST** /V1/integration/customer/token | 


# **integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost**
> string integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($body)



Create access token for admin given the customer credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationCustomerTokenServiceV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body124(); // \Swagger\Client\Model\Body124 | 

try {
    $result = $apiInstance->integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationCustomerTokenServiceV1Api->integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body124**](../Model/Body124.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

