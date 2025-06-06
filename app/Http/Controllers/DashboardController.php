<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Filters\UserFilter;
use Illuminate\Http\Request;
use App\Constants\DashboardConstants;

class DashboardController extends Controller
{
    protected $userService;
    protected $userFilter;

    public function __construct(UserService $userService, UserFilter $userFilter)
    {
        $this->userService = $userService;
        $this->userFilter = $userFilter;
    }

    public function index(Request $request)
    {
        try{
            $request->validate([
                DashboardConstants::PARAM_RESET => 'sometimes|boolean',
                DashboardConstants::PARAM_SEARCH => 'nullable|string|max:255',
                DashboardConstants::PARAM_COUNTRY => 'nullable|string|max:255',
            ]);
    
            if (
                $request->isMethod('post') &&
                $request->input(DashboardConstants::PARAM_RESET)
            ) {
                $this->userService->resetUsers();
                return redirect()->route(DashboardConstants::ROUTE_DASHBOARD);
            }
    
            $users = $this->userService->getUsers();
            $filteredUsers = $this->userFilter->apply($users, $request);
    
            $countries = $this->userService->getAllCountries();
    
            return view(DashboardConstants::VIEW_DASHBOARD, [
                DashboardConstants::VAR_USERS => $filteredUsers,
                DashboardConstants::VAR_COUNTRIES => $countries,
                DashboardConstants::PARAM_SEARCH => $request->input(DashboardConstants::PARAM_SEARCH),
                DashboardConstants::VAR_SELECTED_COUNTRY => $request->input(DashboardConstants::PARAM_COUNTRY),
            ]);
        } catch (\Exception $e) {
        \Log::error('DashboardController@index error: ' . $e->getMessage());
        abort(500, 'Erro interno ao carregar o dashboard.');
    }
    }

    public function showUser($index)
    {
        $user = $this->userService->getUserByIndex($index);

        if (!$user) {
            abort(404, DashboardConstants::MESSAGE_USER_NOT_FOUND);
        }

        return view(DashboardConstants::VIEW_USER_DETAIL, compact('user'));
    }
}
