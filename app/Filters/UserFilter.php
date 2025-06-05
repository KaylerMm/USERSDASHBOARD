<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Constants\UserConstants;

class UserFilter
{
    public function apply(array $users, Request $request): array
    {
        if ($request->filled(UserConstants::REQUEST_SEARCH)) {
            $search = strtolower($request->input(UserConstants::REQUEST_SEARCH));

            $users = array_filter($users, function ($user) use ($search) {
                return str_contains(
                    strtolower($user[UserConstants::KEY_NAME][UserConstants::KEY_FIRST] . ' ' . $user[UserConstants::KEY_NAME][UserConstants::KEY_LAST]),
                    $search
                ) || str_contains(strtolower($user[UserConstants::KEY_EMAIL]), $search);
            });
        }

        if ($request->filled(UserConstants::REQUEST_COUNTRY)) {
            $selectedCountry = $request->input(UserConstants::REQUEST_COUNTRY);

            $users = array_filter($users, function ($user) use ($selectedCountry) {
                return $user[UserConstants::KEY_LOCATION][UserConstants::KEY_COUNTRY] === $selectedCountry;
            });
        }

        return $users;
    }
}
