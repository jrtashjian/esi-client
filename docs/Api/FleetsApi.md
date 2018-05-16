# EsiClient\FleetsApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFleetsFleetIdMembersMemberId**](FleetsApi.md#deleteFleetsFleetIdMembersMemberId) | **DELETE** /v1/fleets/{fleet_id}/members/{member_id}/ | Kick fleet member
[**deleteFleetsFleetIdSquadsSquadId**](FleetsApi.md#deleteFleetsFleetIdSquadsSquadId) | **DELETE** /v1/fleets/{fleet_id}/squads/{squad_id}/ | Delete fleet squad
[**deleteFleetsFleetIdWingsWingId**](FleetsApi.md#deleteFleetsFleetIdWingsWingId) | **DELETE** /v1/fleets/{fleet_id}/wings/{wing_id}/ | Delete fleet wing
[**getCharactersCharacterIdFleet**](FleetsApi.md#getCharactersCharacterIdFleet) | **GET** /v1/characters/{character_id}/fleet/ | Get character fleet info
[**getFleetsFleetId**](FleetsApi.md#getFleetsFleetId) | **GET** /v1/fleets/{fleet_id}/ | Get fleet information
[**getFleetsFleetIdMembers**](FleetsApi.md#getFleetsFleetIdMembers) | **GET** /v1/fleets/{fleet_id}/members/ | Get fleet members
[**getFleetsFleetIdWings**](FleetsApi.md#getFleetsFleetIdWings) | **GET** /v1/fleets/{fleet_id}/wings/ | Get fleet wings
[**postFleetsFleetIdMembers**](FleetsApi.md#postFleetsFleetIdMembers) | **POST** /v1/fleets/{fleet_id}/members/ | Create fleet invitation
[**postFleetsFleetIdWings**](FleetsApi.md#postFleetsFleetIdWings) | **POST** /v1/fleets/{fleet_id}/wings/ | Create fleet wing
[**postFleetsFleetIdWingsWingIdSquads**](FleetsApi.md#postFleetsFleetIdWingsWingIdSquads) | **POST** /v1/fleets/{fleet_id}/wings/{wing_id}/squads/ | Create fleet squad
[**putFleetsFleetId**](FleetsApi.md#putFleetsFleetId) | **PUT** /v1/fleets/{fleet_id}/ | Update fleet
[**putFleetsFleetIdMembersMemberId**](FleetsApi.md#putFleetsFleetIdMembersMemberId) | **PUT** /v1/fleets/{fleet_id}/members/{member_id}/ | Move fleet member
[**putFleetsFleetIdSquadsSquadId**](FleetsApi.md#putFleetsFleetIdSquadsSquadId) | **PUT** /v1/fleets/{fleet_id}/squads/{squad_id}/ | Rename fleet squad
[**putFleetsFleetIdWingsWingId**](FleetsApi.md#putFleetsFleetIdWingsWingId) | **PUT** /v1/fleets/{fleet_id}/wings/{wing_id}/ | Rename fleet wing


# **deleteFleetsFleetIdMembersMemberId**
> deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $datasource, $token, $user_agent, $x_user_agent)

Kick fleet member

Kick a fleet member  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$member_id = 56; // int | The character ID of a member in this fleet
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **member_id** | **int**| The character ID of a member in this fleet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFleetsFleetIdSquadsSquadId**
> deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $datasource, $token, $user_agent, $x_user_agent)

Delete fleet squad

Delete a fleet squad, only empty squads can be deleted  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$squad_id = 789; // int | The squad to delete
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **squad_id** | **int**| The squad to delete |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFleetsFleetIdWingsWingId**
> deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $datasource, $token, $user_agent, $x_user_agent)

Delete fleet wing

Delete a fleet wing, only empty wings can be deleted. The wing may contain squads, but the squads must be empty  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$wing_id = 789; // int | The wing to delete
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **wing_id** | **int**| The wing to delete |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdFleet**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdFleetOk getCharactersCharacterIdFleet($character_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent)

Get character fleet info

Return the fleet ID the character is in, if any.  ---  This route is cached for up to 60 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdFleet($character_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getCharactersCharacterIdFleet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdFleetOk**](../Model/GetCharactersCharacterIdFleetOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetsFleetId**
> \EsiClient\EsiClient\Model\GetFleetsFleetIdOk getFleetsFleetId($fleet_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent)

Get fleet information

Return details about a fleet  ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getFleetsFleetId($fleet_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetFleetsFleetIdOk**](../Model/GetFleetsFleetIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetsFleetIdMembers**
> \EsiClient\EsiClient\Model\GetFleetsFleetIdMembers200Ok[] getFleetsFleetIdMembers($fleet_id, $datasource, $if_none_match, $language, $token, $user_agent, $x_user_agent)

Get fleet members

Return information about fleet members  ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "en-us"; // string | Language to use in the response
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getFleetsFleetIdMembers($fleet_id, $datasource, $if_none_match, $language, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetFleetsFleetIdMembers200Ok[]**](../Model/GetFleetsFleetIdMembers200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetsFleetIdWings**
> \EsiClient\EsiClient\Model\GetFleetsFleetIdWings200Ok[] getFleetsFleetIdWings($fleet_id, $datasource, $if_none_match, $language, $token, $user_agent, $x_user_agent)

Get fleet wings

Return information about wings in a fleet  ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "en-us"; // string | Language to use in the response
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getFleetsFleetIdWings($fleet_id, $datasource, $if_none_match, $language, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetFleetsFleetIdWings200Ok[]**](../Model/GetFleetsFleetIdWings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFleetsFleetIdMembers**
> postFleetsFleetIdMembers($fleet_id, $invitation, $datasource, $token, $user_agent, $x_user_agent)

Create fleet invitation

Invite a character into the fleet. If a character has a CSPA charge set it is not possible to invite them to the fleet using ESI  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$invitation = new \EsiClient\EsiClient\Model\PostFleetsFleetIdMembersInvitation(); // \EsiClient\EsiClient\Model\PostFleetsFleetIdMembersInvitation | Details of the invitation
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->postFleetsFleetIdMembers($fleet_id, $invitation, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **invitation** | [**\EsiClient\EsiClient\Model\PostFleetsFleetIdMembersInvitation**](../Model/PostFleetsFleetIdMembersInvitation.md)| Details of the invitation |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFleetsFleetIdWings**
> \EsiClient\EsiClient\Model\PostFleetsFleetIdWingsCreated postFleetsFleetIdWings($fleet_id, $datasource, $token, $user_agent, $x_user_agent)

Create fleet wing

Create a new wing in a fleet  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postFleetsFleetIdWings($fleet_id, $datasource, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\PostFleetsFleetIdWingsCreated**](../Model/PostFleetsFleetIdWingsCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFleetsFleetIdWingsWingIdSquads**
> \EsiClient\EsiClient\Model\PostFleetsFleetIdWingsWingIdSquadsCreated postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $datasource, $token, $user_agent, $x_user_agent)

Create fleet squad

Create a new squad in a fleet  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$wing_id = 789; // int | The wing_id to create squad in
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $datasource, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWingsWingIdSquads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **wing_id** | **int**| The wing_id to create squad in |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\EsiClient\EsiClient\Model\PostFleetsFleetIdWingsWingIdSquadsCreated**](../Model/PostFleetsFleetIdWingsWingIdSquadsCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetId**
> putFleetsFleetId($fleet_id, $new_settings, $datasource, $token, $user_agent, $x_user_agent)

Update fleet

Update settings about a fleet  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$new_settings = new \EsiClient\EsiClient\Model\PutFleetsFleetIdNewSettings(); // \EsiClient\EsiClient\Model\PutFleetsFleetIdNewSettings | What to update for this fleet
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putFleetsFleetId($fleet_id, $new_settings, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **new_settings** | [**\EsiClient\EsiClient\Model\PutFleetsFleetIdNewSettings**](../Model/PutFleetsFleetIdNewSettings.md)| What to update for this fleet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetIdMembersMemberId**
> putFleetsFleetIdMembersMemberId($fleet_id, $member_id, $movement, $datasource, $token, $user_agent, $x_user_agent)

Move fleet member

Move a fleet member around  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$member_id = 56; // int | The character ID of a member in this fleet
$movement = new \EsiClient\EsiClient\Model\PutFleetsFleetIdMembersMemberIdMovement(); // \EsiClient\EsiClient\Model\PutFleetsFleetIdMembersMemberIdMovement | Details of the invitation
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putFleetsFleetIdMembersMemberId($fleet_id, $member_id, $movement, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **member_id** | **int**| The character ID of a member in this fleet |
 **movement** | [**\EsiClient\EsiClient\Model\PutFleetsFleetIdMembersMemberIdMovement**](../Model/PutFleetsFleetIdMembersMemberIdMovement.md)| Details of the invitation |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetIdSquadsSquadId**
> putFleetsFleetIdSquadsSquadId($fleet_id, $naming, $squad_id, $datasource, $token, $user_agent, $x_user_agent)

Rename fleet squad

Rename a fleet squad  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$naming = new \EsiClient\EsiClient\Model\PutFleetsFleetIdSquadsSquadIdNaming(); // \EsiClient\EsiClient\Model\PutFleetsFleetIdSquadsSquadIdNaming | New name of the squad
$squad_id = 789; // int | The squad to rename
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putFleetsFleetIdSquadsSquadId($fleet_id, $naming, $squad_id, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **naming** | [**\EsiClient\EsiClient\Model\PutFleetsFleetIdSquadsSquadIdNaming**](../Model/PutFleetsFleetIdSquadsSquadIdNaming.md)| New name of the squad |
 **squad_id** | **int**| The squad to rename |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetIdWingsWingId**
> putFleetsFleetIdWingsWingId($fleet_id, $naming, $wing_id, $datasource, $token, $user_agent, $x_user_agent)

Rename fleet wing

Rename a fleet wing  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 789; // int | ID for a fleet
$naming = new \EsiClient\EsiClient\Model\PutFleetsFleetIdWingsWingIdNaming(); // \EsiClient\EsiClient\Model\PutFleetsFleetIdWingsWingIdNaming | New name of the wing
$wing_id = 789; // int | The wing to rename
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putFleetsFleetIdWingsWingId($fleet_id, $naming, $wing_id, $datasource, $token, $user_agent, $x_user_agent);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | **int**| ID for a fleet |
 **naming** | [**\EsiClient\EsiClient\Model\PutFleetsFleetIdWingsWingIdNaming**](../Model/PutFleetsFleetIdWingsWingIdNaming.md)| New name of the wing |
 **wing_id** | **int**| The wing to rename |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

