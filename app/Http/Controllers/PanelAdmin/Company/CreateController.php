<?php

namespace App\Http\Controllers\PanelAdmin\Company;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function create()
    {
        return view('pagina.panelAdmin.company.create');
    }
}
