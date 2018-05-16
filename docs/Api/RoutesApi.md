# EsiClient\RoutesApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRouteOriginDestination**](RoutesApi.md#getRouteOriginDestination) | **GET** /v1/route/{origin}/{destination}/ | Get route


# **getRouteOriginDestination**
> int[] getRouteOriginDestination($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match, $user_agent, $x_user_agent)

Get route

Get the systems between origin and destination  ---  This route is cached for up to 86400 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destination = 56; // int | destination solar system ID
$origin = 56; // int | origin solar system ID
$avoid = array(56); // int[] | avoid solar system ID(s)
$connections = array(new \EsiClient\EsiClient\Model\int[]()); // int[][] | connected solar system pairs
$datasource = "tranquility"; // string | The server name you would like data from
$flag = "shortest"; // string | route security preference
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getRouteOriginDestination($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->getRouteOriginDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination** | **int**| destination solar system ID |
 **origin** | **int**| origin solar system ID |
 **avoid** | [**int[]**](../Model/int.md)| avoid solar system ID(s) | [optional]
 **connections** | [**int[][]**](../Model/int[].md)| connected solar system pairs | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **flag** | **string**| route security preference | [optional] [default to shortest]
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

