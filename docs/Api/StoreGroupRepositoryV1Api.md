# Swagger\Client\StoreGroupRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeGroupRepositoryV1GetListGet**](StoreGroupRepositoryV1Api.md#storeGroupRepositoryV1GetListGet) | **GET** /V1/store/storeGroups | 


# **storeGroupRepositoryV1GetListGet**
> \Swagger\Client\Model\StoreDataGroupInterface[] storeGroupRepositoryV1GetListGet()



Retrieve list of all groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StoreGroupRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->storeGroupRepositoryV1GetListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupRepositoryV1Api->storeGroupRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StoreDataGroupInterface[]**](../Model/StoreDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

