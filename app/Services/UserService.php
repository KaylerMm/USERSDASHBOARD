<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Constants\UserConstants;

class UserService
{
    public function getUsers(): array
    {
        if (!Session::has(UserConstants::SESSION_USERS_DATA)) {
            $response = Http::get(UserConstants::API_RANDOM_USER_URL, [
                'results' => UserConstants::API_RANDOM_USER_RESULTS,
            ]);
            $users = $response->json()['results'] ?? [];
            Session::put(UserConstants::SESSION_USERS_DATA, $users);
        }

        return Session::get(UserConstants::SESSION_USERS_DATA, []);
    }

    public function getUserByIndex($index): ?array
    {
        $users = Session::get(UserConstants::SESSION_USERS_DATA, []);
        return $users[$index] ?? null;
    }

    public function resetUsers(): void
    {
        Session::forget(UserConstants::SESSION_USERS_DATA);
    }

    public function getAllCountries(): array
    {
        $allUsers = Session::get(UserConstants::SESSION_USERS_DATA, []);
        return collect($allUsers)
            ->pluck('location.country')
            ->unique()
            ->sort()
            ->values()
            ->all();
    }
}
