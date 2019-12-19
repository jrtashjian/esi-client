# EsiClient\DogmaApi

All URIs are relative to *https://esi.evetech.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDogmaAttributes**](DogmaApi.md#getdogmaattributes) | **GET** /v1/dogma/attributes/ | Get attributes
[**getDogmaAttributesAttributeId**](DogmaApi.md#getdogmaattributesattributeid) | **GET** /v1/dogma/attributes/{attribute_id}/ | Get attribute information
[**getDogmaDynamicItemsTypeIdItemId**](DogmaApi.md#getdogmadynamicitemstypeiditemid) | **GET** /v1/dogma/dynamic/items/{type_id}/{item_id}/ | Get dynamic item information
[**getDogmaEffects**](DogmaApi.md#getdogmaeffects) | **GET** /v1/dogma/effects/ | Get effects
[**getDogmaEffectsEffectId**](DogmaApi.md#getdogmaeffectseffectid) | **GET** /v2/dogma/effects/{effect_id}/ | Get effect information

# **getDogmaAttributes**
> int[] getDogmaAttributes($datasource, $if_none_match)

Get attributes

Get a list of dogma attribute ids  ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\EsiClient\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getDogmaAttributes($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDogmaAttributesAttributeId**
> object getDogmaAttributesAttributeId($attribute_id, $datasource, $if_none_match)

Get attribute information

Get information on a dogma attribute  ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\EsiClient\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_id = 56; // int | A dogma attribute ID
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getDogmaAttributesAttributeId($attribute_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaAttributesAttributeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| A dogma attribute ID |
 **datasource** | **string**| The server name you would like data from | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDogmaDynamicItemsTypeIdItemId**
> object getDogmaDynamicItemsTypeIdItemId($item_id, $type_id, $datasource, $if_none_match)

Get dynamic item information

Returns info about a dynamic item resulting from mutation with a mutaplasmid.  ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\EsiClient\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 789; // int | item_id integer
$type_id = 56; // int | type_id integer
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getDogmaDynamicItemsTypeIdItemId($item_id, $type_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaDynamicItemsTypeIdItemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| item_id integer |
 **type_id** | **int**| type_id integer |
 **datasource** | **string**| The server name you would like data from | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDogmaEffects**
> int[] getDogmaEffects($datasource, $if_none_match)

Get effects

Get a list of dogma effect ids  ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\EsiClient\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getDogmaEffects($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaEffects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDogmaEffectsEffectId**
> object getDogmaEffectsEffectId($effect_id, $datasource, $if_none_match)

Get effect information

Get information on a dogma effect  ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\EsiClient\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$effect_id = 56; // int | A dogma effect ID
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getDogmaEffectsEffectId($effect_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaEffectsEffectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **effect_id** | **int**| A dogma effect ID |
 **datasource** | **string**| The server name you would like data from | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

