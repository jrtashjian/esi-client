# EsiClient\IncursionsApi

All URIs are relative to *https://esi.evetech.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIncursions**](IncursionsApi.md#getincursions) | **GET** /v1/incursions/ | List incursions

# **getIncursions**
> object[] getIncursions($datasource, $if_none_match)

List incursions

Return a list of current incursions  ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\EsiClient\Api\IncursionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getIncursions($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncursionsApi->getIncursions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

