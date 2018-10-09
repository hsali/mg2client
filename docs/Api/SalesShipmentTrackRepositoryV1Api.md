# Swagger\Client\SalesShipmentTrackRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentTrackRepositoryV1DeleteByIdDelete**](SalesShipmentTrackRepositoryV1Api.md#salesShipmentTrackRepositoryV1DeleteByIdDelete) | **DELETE** /V1/shipment/track/{id} | 
[**salesShipmentTrackRepositoryV1SavePost**](SalesShipmentTrackRepositoryV1Api.md#salesShipmentTrackRepositoryV1SavePost) | **POST** /V1/shipment/track | 


# **salesShipmentTrackRepositoryV1DeleteByIdDelete**
> bool salesShipmentTrackRepositoryV1DeleteByIdDelete($id)



Deletes a specified shipment track by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesShipmentTrackRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The shipment track ID.

try {
    $result = $apiInstance->salesShipmentTrackRepositoryV1DeleteByIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentTrackRepositoryV1Api->salesShipmentTrackRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment track ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentTrackRepositoryV1SavePost**
> \Swagger\Client\Model\SalesDataShipmentTrackInterface salesShipmentTrackRepositoryV1SavePost($body)



Performs persist operations for a specified shipment track.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesShipmentTrackRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body75(); // \Swagger\Client\Model\Body75 | 

try {
    $result = $apiInstance->salesShipmentTrackRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentTrackRepositoryV1Api->salesShipmentTrackRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body75**](../Model/Body75.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesDataShipmentTrackInterface**](../Model/SalesDataShipmentTrackInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

