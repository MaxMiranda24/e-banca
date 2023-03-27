<?php

use Lib\Route;

Route::get('/', function() {
    return [
        'title' => "home",
        "content" => "pagina de inicio"
    ];
});

Route::get('/contact', function() {
    return 'pagina contacto';
});

Route::get('/cursos/:slug', function($slug){
    return 'pagina de los cursos es:' . $slug ;
});

Route::dispatch();
