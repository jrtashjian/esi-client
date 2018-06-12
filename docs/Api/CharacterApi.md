# EsiClient\CharacterApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterId**](CharacterApi.md#getCharactersCharacterId) | **GET** /v4/characters/{character_id}/ | Get character&#39;s public information
[**getCharactersCharacterIdAgentsResearch**](CharacterApi.md#getCharactersCharacterIdAgentsResearch) | **GET** /v1/characters/{character_id}/agents_research/ | Get agents research
[**getCharactersCharacterIdBlueprints**](CharacterApi.md#getCharactersCharacterIdBlueprints) | **GET** /v2/characters/{character_id}/blueprints/ | Get blueprints
[**getCharactersCharacterIdCorporationhistory**](CharacterApi.md#getCharactersCharacterIdCorporationhistory) | **GET** /v1/characters/{character_id}/corporationhistory/ | Get corporation history
[**getCharactersCharacterIdFatigue**](CharacterApi.md#getCharactersCharacterIdFatigue) | **GET** /v1/characters/{character_id}/fatigue/ | Get jump fatigue
[**getCharactersCharacterIdMedals**](CharacterApi.md#getCharactersCharacterIdMedals) | **GET** /v1/characters/{character_id}/medals/ | Get medals
[**getCharactersCharacterIdNotifications**](CharacterApi.md#getCharactersCharacterIdNotifications) | **GET** /v2/characters/{character_id}/notifications/ | Get character notifications
[**getCharactersCharacterIdNotificationsContacts**](CharacterApi.md#getCharactersCharacterIdNotificationsContacts) | **GET** /v1/characters/{character_id}/notifications/contacts/ | Get new contact notifications
[**getCharactersCharacterIdPortrait**](CharacterApi.md#getCharactersCharacterIdPortrait) | **GET** /v2/characters/{character_id}/portrait/ | Get character portraits
[**getCharactersCharacterIdRoles**](CharacterApi.md#getCharactersCharacterIdRoles) | **GET** /v2/characters/{character_id}/roles/ | Get character corporation roles
[**getCharactersCharacterIdStandings**](CharacterApi.md#getCharactersCharacterIdStandings) | **GET** /v1/characters/{character_id}/standings/ | Get standings
[**getCharactersCharacterIdStats**](CharacterApi.md#getCharactersCharacterIdStats) | **GET** /v2/characters/{character_id}/stats/ | Yearly aggregate stats
[**getCharactersCharacterIdTitles**](CharacterApi.md#getCharactersCharacterIdTitles) | **GET** /v1/characters/{character_id}/titles/ | Get character corporation titles
[**getCharactersNames**](CharacterApi.md#getCharactersNames) | **GET** /v1/characters/names/ | Get character names
[**postCharactersAffiliation**](CharacterApi.md#postCharactersAffiliation) | **POST** /v1/characters/affiliation/ | Character affiliation
[**postCharactersCharacterIdCspa**](CharacterApi.md#postCharactersCharacterIdCspa) | **POST** /v4/characters/{character_id}/cspa/ | Calculate a CSPA charge cost


# **getCharactersCharacterId**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdOk getCharactersCharacterId($character_id, $datasource, $if_none_match)

Get character's public information

Public information about a character  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCharactersCharacterId($character_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdOk**](../Model/GetCharactersCharacterIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdAgentsResearch**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdAgentsResearch200Ok[] getCharactersCharacterIdAgentsResearch($character_id, $datasource, $if_none_match, $token)

Get agents research

Return a list of agents research information for a character. The formula for finding the current research points with an agent is: currentPoints = remainderPoints + pointsPerDay * days(currentTime - researchStartDate)  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdAgentsResearch($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdAgentsResearch: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdAgentsResearch200Ok[]**](../Model/GetCharactersCharacterIdAgentsResearch200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdBlueprints**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdBlueprints200Ok[] getCharactersCharacterIdBlueprints($character_id, $datasource, $if_none_match, $page, $token)

Get blueprints

Return a list of blueprints the character owns  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdBlueprints($character_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdBlueprints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdBlueprints200Ok[]**](../Model/GetCharactersCharacterIdBlueprints200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdCorporationhistory**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdCorporationhistory200Ok[] getCharactersCharacterIdCorporationhistory($character_id, $datasource, $if_none_match)

Get corporation history

Get a list of all the corporations a character has been a member of  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCharactersCharacterIdCorporationhistory($character_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdCorporationhistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdCorporationhistory200Ok[]**](../Model/GetCharactersCharacterIdCorporationhistory200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdFatigue**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdFatigueOk getCharactersCharacterIdFatigue($character_id, $datasource, $if_none_match, $token)

Get jump fatigue

Return a character's jump activation and fatigue information  ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdFatigue($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdFatigue: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdFatigueOk**](../Model/GetCharactersCharacterIdFatigueOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMedals**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdMedals200Ok[] getCharactersCharacterIdMedals($character_id, $datasource, $if_none_match, $token)

Get medals

Return a list of medals the character has  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdMedals($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdMedals: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdMedals200Ok[]**](../Model/GetCharactersCharacterIdMedals200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdNotifications**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdNotifications200Ok[] getCharactersCharacterIdNotifications($character_id, $datasource, $if_none_match, $token)

Get character notifications

Return character notifications  ---  This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdNotifications($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdNotifications: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdNotifications200Ok[]**](../Model/GetCharactersCharacterIdNotifications200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdNotificationsContacts**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdNotificationsContacts200Ok[] getCharactersCharacterIdNotificationsContacts($character_id, $datasource, $if_none_match, $token)

Get new contact notifications

Return notifications about having been added to someone's contact list  ---  This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdNotificationsContacts($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdNotificationsContacts: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdNotificationsContacts200Ok[]**](../Model/GetCharactersCharacterIdNotificationsContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdPortrait**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdPortraitOk getCharactersCharacterIdPortrait($character_id, $datasource, $if_none_match)

Get character portraits

Get portrait urls for a character  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCharactersCharacterIdPortrait($character_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdPortrait: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdPortraitOk**](../Model/GetCharactersCharacterIdPortraitOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdRoles**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdRolesOk getCharactersCharacterIdRoles($character_id, $datasource, $if_none_match, $token)

Get character corporation roles

Returns a character's corporation roles  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdRoles($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdRoles: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdRolesOk**](../Model/GetCharactersCharacterIdRolesOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdStandings**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdStandings200Ok[] getCharactersCharacterIdStandings($character_id, $datasource, $if_none_match, $token)

Get standings

Return character standings from agents, NPC corporations, and factions  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdStandings($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdStandings: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdStandings200Ok[]**](../Model/GetCharactersCharacterIdStandings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdStats**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdStats200Ok[] getCharactersCharacterIdStats($character_id, $datasource, $if_none_match, $token)

Yearly aggregate stats

Returns aggregate yearly stats for a character  ---  This route is cached for up to 86400 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdStats($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdStats: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdStats200Ok[]**](../Model/GetCharactersCharacterIdStats200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdTitles**
> \EsiClient\EsiClient\Model\GetCharactersCharacterIdTitles200Ok[] getCharactersCharacterIdTitles($character_id, $datasource, $if_none_match, $token)

Get character corporation titles

Returns a character's titles  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdTitles($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdTitles: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersCharacterIdTitles200Ok[]**](../Model/GetCharactersCharacterIdTitles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersNames**
> \EsiClient\EsiClient\Model\GetCharactersNames200Ok[] getCharactersNames($character_ids, $datasource, $if_none_match)

Get character names

Resolve a set of character IDs to character names  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$character_ids = array(56); // int[] | A comma separated list of character IDs
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCharactersNames($character_ids, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_ids** | [**int[]**](../Model/int.md)| A comma separated list of character IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\EsiClient\EsiClient\Model\GetCharactersNames200Ok[]**](../Model/GetCharactersNames200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersAffiliation**
> \EsiClient\EsiClient\Model\PostCharactersAffiliation200Ok[] postCharactersAffiliation($characters, $datasource)

Character affiliation

Bulk lookup of character IDs to corporation, alliance and faction  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characters = array(new \EsiClient\EsiClient\Model\int[]()); // int[] | The character IDs to fetch affiliations for. All characters must exist, or none will be returned.
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $apiInstance->postCharactersAffiliation($characters, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->postCharactersAffiliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characters** | **int[]**| The character IDs to fetch affiliations for. All characters must exist, or none will be returned. |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\EsiClient\EsiClient\Model\PostCharactersAffiliation200Ok[]**](../Model/PostCharactersAffiliation200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdCspa**
> float postCharactersCharacterIdCspa($character_id, $characters, $datasource, $token)

Calculate a CSPA charge cost

Takes a source character ID in the url and a set of target character ID's in the body, returns a CSPA charge cost  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = EsiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EsiClient\Api\CharacterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$characters = array(new \EsiClient\EsiClient\Model\int[]()); // int[] | The target characters to calculate the charge for
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->postCharactersCharacterIdCspa($character_id, $characters, $datasource, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->postCharactersCharacterIdCspa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **characters** | **int[]**| The target characters to calculate the charge for |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

**float**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

