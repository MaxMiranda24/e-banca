<?php

use Lib\Route;

Route::get('/', function() {
    echo 'pagina principal';
});

Route::get('/contact', function() {
    echo 'pagina contacto';
});

Route::dispatch();
