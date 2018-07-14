<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $role = 'admin';

    public function index()
    {
        return view('pagina.panelAdmin.index');
    }
}
