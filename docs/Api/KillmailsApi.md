# EsiClient\KillmailsApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdKillmailsRecent**](KillmailsApi.md#getCharactersCharacterIdKillmailsRecent) | **GET** /v1/characters/{character_id}/killmails/recent/ | Get character kills and losses
[**getCorporationsCorporationIdKillmailsRecent**](KillmailsApi.md#getCorporationsCorporationIdKillmailsRecent) | **GET** /v1/corporations/{corporation_id}/killmails/recent/ | Get corporation kills and losses
[**getKillmailsKillmailIdKillmailHash**](KillmailsApi.md#getKillmailsKillmailIdKillmailHash) | **GET** /v1/killmails/{killmail_id}/{killmail_hash}/ | Get a single killmail


# **getCharactersCharacterIdKillmailsRecent**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdKillmailsRecent200Ok[] getCharactersCharacterIdKillmailsRecent($character_id, $datasource, $if_none_match, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent)

Get character kills and losses

Return a list of character's recent kills and losses  ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\KillmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$max_count = 50; // int | How many killmails to return at maximum
$max_kill_id = 56; // int | Only return killmails with ID smaller than this.
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdKillmailsRecent($character_id, $datasource, $if_none_match, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getCharactersCharacterIdKillmailsRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **max_count** | **int**| How many killmails to return at maximum | [optional] [default to 50]
 **max_kill_id** | **int**| Only return killmails with ID smaller than this. | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]**](../Model/GetCharactersCharacterIdKillmailsRecent200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdKillmailsRecent**
> \EsiClient\EsiClient\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[] getCorporationsCorporationIdKillmailsRecent($corporation_id, $datasource, $if_none_match, $max_kill_id, $token, $user_agent, $x_user_agent)

Get corporation kills and losses

Get a list of corporation's recent kills and losses  ---  This route is cached for up to 300 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\KillmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$max_kill_id = 56; // int | Only return killmails with ID smaller than this
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdKillmailsRecent($corporation_id, $datasource, $if_none_match, $max_kill_id, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getCorporationsCorporationIdKillmailsRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **max_kill_id** | **int**| Only return killmails with ID smaller than this | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[]**](../Model/GetCorporationsCorporationIdKillmailsRecent200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKillmailsKillmailIdKillmailHash**
> \EsiClient\EsiClient\Model\GetKillmailsKillmailIdKillmailHashOk getKillmailsKillmailIdKillmailHash($killmail_hash, $killmail_id, $datasource, $if_none_match, $user_agent, $x_user_agent)

Get a single killmail

Return a single killmail from its ID and hash  ---  This route is cached for up to 1209600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\KillmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$killmail_hash = "killmail_hash_example"; // string | The killmail hash for verification
$killmail_id = 56; // int | The killmail ID to be queried
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getKillmailsKillmailIdKillmailHash($killmail_hash, $killmail_id, $datasource, $if_none_match, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getKillmailsKillmailIdKillmailHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **killmail_hash** | **string**| The killmail hash for verification |
 **killmail_id** | **int**| The killmail ID to be queried |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetKillmailsKillmailIdKillmailHashOk**](../Model/GetKillmailsKillmailIdKillmailHashOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

