# EsiClient\FleetsApi

All URIs are relative to *https://esi.evetech.net/*

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
> deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $datasource, $token)

Kick fleet member

Kick a fleet member  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$member_id = 56; // int | The character ID of a member in this fleet
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **member_id** | [**int**](../Model/.md)| The character ID of a member in this fleet |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFleetsFleetIdSquadsSquadId**
> deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $datasource, $token)

Delete fleet squad

Delete a fleet squad, only empty squads can be deleted  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$squad_id = 56; // int | The squad to delete
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **squad_id** | [**int**](../Model/.md)| The squad to delete |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFleetsFleetIdWingsWingId**
> deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $datasource, $token)

Delete fleet wing

Delete a fleet wing, only empty wings can be deleted. The wing may contain squads, but the squads must be empty  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$wing_id = 56; // int | The wing to delete
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **wing_id** | [**int**](../Model/.md)| The wing to delete |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdFleet**
> object getCharactersCharacterIdFleet($character_id, $datasource, $if_none_match, $token)

Get character fleet info

Return the fleet ID the character is in, if any.  ---  This route is cached for up to 60 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdFleet($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getCharactersCharacterIdFleet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | [**int**](../Model/.md)| An EVE character ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetsFleetId**
> object getFleetsFleetId($fleet_id, $datasource, $if_none_match, $token)

Get fleet information

Return details about a fleet  ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getFleetsFleetId($fleet_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetsFleetIdMembers**
> object[] getFleetsFleetIdMembers($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token)

Get fleet members

Return information about fleet members  ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$accept_language = "accept_language_example"; // string | Language to use in the response
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "language_example"; // string | Language to use in the response, takes precedence over Accept-Language
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getFleetsFleetIdMembers($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **accept_language** | [**string**](../Model/.md)| Language to use in the response | [optional]
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | [**string**](../Model/.md)| Language to use in the response, takes precedence over Accept-Language | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFleetsFleetIdWings**
> object[] getFleetsFleetIdWings($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token)

Get fleet wings

Return information about wings in a fleet  ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$accept_language = "accept_language_example"; // string | Language to use in the response
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "language_example"; // string | Language to use in the response, takes precedence over Accept-Language
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getFleetsFleetIdWings($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **accept_language** | [**string**](../Model/.md)| Language to use in the response | [optional]
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | [**string**](../Model/.md)| Language to use in the response, takes precedence over Accept-Language | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFleetsFleetIdMembers**
> postFleetsFleetIdMembers($body$fleet_id, $datasource, $token)

Create fleet invitation

Invite a character into the fleet. If a character has a CSPA charge set it is not possible to invite them to the fleet using ESI  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Details of the invitation
$fleet_id = 56; // int | ID for a fleet
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->postFleetsFleetIdMembers($body$fleet_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Details of the invitation |
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFleetsFleetIdWings**
> object postFleetsFleetIdWings($fleet_id, $datasource, $token)

Create fleet wing

Create a new wing in a fleet  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->postFleetsFleetIdWings($fleet_id, $datasource, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFleetsFleetIdWingsWingIdSquads**
> object postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $datasource, $token)

Create fleet squad

Create a new squad in a fleet  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$wing_id = 56; // int | The wing_id to create squad in
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $datasource, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWingsWingIdSquads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **wing_id** | [**int**](../Model/.md)| The wing_id to create squad in |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetId**
> putFleetsFleetId($body$fleet_id, $datasource, $token)

Update fleet

Update settings about a fleet  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | What to update for this fleet
$fleet_id = 56; // int | ID for a fleet
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetId($body$fleet_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| What to update for this fleet |
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetIdMembersMemberId**
> putFleetsFleetIdMembersMemberId($body$fleet_id, $member_id, $datasource, $token)

Move fleet member

Move a fleet member around  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Details of the invitation
$fleet_id = 56; // int | ID for a fleet
$member_id = 56; // int | The character ID of a member in this fleet
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetIdMembersMemberId($body$fleet_id, $member_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Details of the invitation |
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **member_id** | [**int**](../Model/.md)| The character ID of a member in this fleet |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetIdSquadsSquadId**
> putFleetsFleetIdSquadsSquadId($body$fleet_id, $squad_id, $datasource, $token)

Rename fleet squad

Rename a fleet squad  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | New name of the squad
$fleet_id = 56; // int | ID for a fleet
$squad_id = 56; // int | The squad to rename
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetIdSquadsSquadId($body$fleet_id, $squad_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| New name of the squad |
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **squad_id** | [**int**](../Model/.md)| The squad to rename |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFleetsFleetIdWingsWingId**
> putFleetsFleetIdWingsWingId($body$fleet_id, $wing_id, $datasource, $token)

Rename fleet wing

Rename a fleet wing  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\EsiClient\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | New name of the wing
$fleet_id = 56; // int | ID for a fleet
$wing_id = 56; // int | The wing to rename
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetIdWingsWingId($body$fleet_id, $wing_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| New name of the wing |
 **fleet_id** | [**int**](../Model/.md)| ID for a fleet |
 **wing_id** | [**int**](../Model/.md)| The wing to rename |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

