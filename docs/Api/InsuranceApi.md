# EsiClient\InsuranceApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInsurancePrices**](InsuranceApi.md#getInsurancePrices) | **GET** /v1/insurance/prices/ | List insurance levels


# **getInsurancePrices**
> object[] getInsurancePrices($accept_language, $datasource, $if_none_match, $language)

List insurance levels

Return available insurance levels for all ship types  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\InsuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "en-us"; // string | Language to use in the response
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "en-us"; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getInsurancePrices($accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsuranceApi->getInsurancePrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Language to use in the response | [optional] [default to en-us]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to en-us]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

