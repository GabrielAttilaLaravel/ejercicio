<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $view = 'pagina.admin.index';

    public function index()
    {
        return view($this->view);
    }
}
