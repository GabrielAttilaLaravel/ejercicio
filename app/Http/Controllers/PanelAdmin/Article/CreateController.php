<?php

namespace App\Http\Controllers\PanelAdmin\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function create()
    {
        $tags = array('html', 'css', 'coding', 'programing');
        return view('pagina.panelAdmin.article.create', compact('tags'));
    }
}
