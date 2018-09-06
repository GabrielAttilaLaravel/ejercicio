<?php

namespace App\Http\Controllers\PanelAdmin\Company;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function create()
    {
        $data = [
            'img' => "img/user.jpg",
            'phone' => "+584125357552",
            'pais' => 've',
        ];

        return view('pagina.panelAdmin.company.create', compact('data'));
    }
}
