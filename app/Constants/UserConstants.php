<?php

namespace App\Constants;

class UserConstants
{
    public const SESSION_USERS_DATA = 'users_data';
    public const API_RANDOM_USER_URL = 'https://randomuser.me/api/';
    public const API_RANDOM_USER_RESULTS = 100;

    // Request keys
    public const REQUEST_SEARCH = 'search';
    public const REQUEST_COUNTRY = 'country';

    // User keys
    public const KEY_NAME = 'name';
    public const KEY_FIRST = 'first';
    public const KEY_LAST = 'last';
    public const KEY_EMAIL = 'email';
    public const KEY_LOCATION = 'location';
    public const KEY_COUNTRY = 'country';
}
