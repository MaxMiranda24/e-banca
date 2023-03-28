<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function() {
    return 'pagina contacto';
});

Route::get('/cursos/:slug', function($slug){
    return 'pagina de los cursos es:' . $slug ;
});

Route::dispatch();
