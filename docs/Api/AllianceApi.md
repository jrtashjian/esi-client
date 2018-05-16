# EsiClient\AllianceApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAlliances**](AllianceApi.md#getAlliances) | **GET** /v1/alliances/ | List all alliances
[**getAlliancesAllianceId**](AllianceApi.md#getAlliancesAllianceId) | **GET** /v3/alliances/{alliance_id}/ | Get alliance information
[**getAlliancesAllianceIdCorporations**](AllianceApi.md#getAlliancesAllianceIdCorporations) | **GET** /v1/alliances/{alliance_id}/corporations/ | List alliance&#39;s corporations
[**getAlliancesAllianceIdIcons**](AllianceApi.md#getAlliancesAllianceIdIcons) | **GET** /v1/alliances/{alliance_id}/icons/ | Get alliance icon
[**getAlliancesNames**](AllianceApi.md#getAlliancesNames) | **GET** /v2/alliances/names/ | Get alliance names


# **getAlliances**
> int[] getAlliances($datasource, $if_none_match, $user_agent, $x_user_agent)

List all alliances

List all active player alliances  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getAlliances($datasource, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceId**
> \EsiClient\EsiClient\Model\GetAlliancesAllianceIdOk getAlliancesAllianceId($alliance_id, $datasource, $if_none_match, $user_agent, $x_user_agent)

Get alliance information

Public information about an alliance  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getAlliancesAllianceId($alliance_id, $datasource, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesAllianceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alliance_id** | **int**| An EVE alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetAlliancesAllianceIdOk**](../Model/GetAlliancesAllianceIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceIdCorporations**
> int[] getAlliancesAllianceIdCorporations($alliance_id, $datasource, $if_none_match, $user_agent, $x_user_agent)

List alliance's corporations

List all current member corporations of an alliance  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getAlliancesAllianceIdCorporations($alliance_id, $datasource, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesAllianceIdCorporations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alliance_id** | **int**| An EVE alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceIdIcons**
> \EsiClient\EsiClient\Model\GetAlliancesAllianceIdIconsOk getAlliancesAllianceIdIcons($alliance_id, $datasource, $if_none_match, $user_agent, $x_user_agent)

Get alliance icon

Get the icon urls for a alliance  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getAlliancesAllianceIdIcons($alliance_id, $datasource, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesAllianceIdIcons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alliance_id** | **int**| An EVE alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetAlliancesAllianceIdIconsOk**](../Model/GetAlliancesAllianceIdIconsOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesNames**
> \EsiClient\EsiClient\Model\GetAlliancesNames200Ok[] getAlliancesNames($alliance_ids, $datasource, $if_none_match, $user_agent, $x_user_agent)

Get alliance names

Resolve a set of alliance IDs to alliance names  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_ids = array(56); // int[] | A comma separated list of alliance IDs
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getAlliancesNames($alliance_ids, $datasource, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alliance_ids** | [**int[]**](../Model/int.md)| A comma separated list of alliance IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetAlliancesNames200Ok[]**](../Model/GetAlliancesNames200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
