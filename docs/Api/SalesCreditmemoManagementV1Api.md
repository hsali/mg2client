# Swagger\Client\SalesCreditmemoManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesCreditmemoManagementV1CancelPut**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1CancelPut) | **PUT** /V1/creditmemo/{id} | 
[**salesCreditmemoManagementV1GetCommentsListGet**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1GetCommentsListGet) | **GET** /V1/creditmemo/{id}/comments | 
[**salesCreditmemoManagementV1NotifyPost**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1NotifyPost) | **POST** /V1/creditmemo/{id}/emails | 


# **salesCreditmemoManagementV1CancelPut**
> bool salesCreditmemoManagementV1CancelPut($id)



Cancels a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesCreditmemoManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The credit memo ID.

try {
    $result = $apiInstance->salesCreditmemoManagementV1CancelPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1CancelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoManagementV1GetCommentsListGet**
> \Swagger\Client\Model\SalesDataCreditmemoCommentSearchResultInterface salesCreditmemoManagementV1GetCommentsListGet($id)



Lists comments for a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesCreditmemoManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The credit memo ID.

try {
    $result = $apiInstance->salesCreditmemoManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

[**\Swagger\Client\Model\SalesDataCreditmemoCommentSearchResultInterface**](../Model/SalesDataCreditmemoCommentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoManagementV1NotifyPost**
> bool salesCreditmemoManagementV1NotifyPost($id)



Emails a user a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesCreditmemoManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The credit memo ID.

try {
    $result = $apiInstance->salesCreditmemoManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

