<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;


class DashboardController extends AdminDashboardController
{
    protected $role = 'user';
}
