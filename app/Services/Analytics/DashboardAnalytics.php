<?php

namespace App\Services\Analytics;

use App\Models\User;

class DashboardAnalytics
{
    public function __construct(protected ?User $user) {}

    public function getUsersCount()
    {
        return User::where('role', '!=', 'A')->count();
    }
}
