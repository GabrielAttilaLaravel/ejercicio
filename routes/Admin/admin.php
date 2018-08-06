<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', 'DashboardController@index')->name('admin_dashboard');

require __DIR__ . '/Article/article.php';
require __DIR__ . '/Comments/comments.php';
require __DIR__ . '/Tags/tags.php';
require __DIR__ . '/Users/users.php';

// validamos con una macro para que cuando un usaurio intente ingresar una url invalida nos arroje
// un error 404 (codigo en RouteServiceProvider)
Route::catch(function (){
    // NotFoundHttpException nos carga la vista 404 siempre y cuando este creada en la carpeta errors
    throw  new NotFoundHttpException;
});