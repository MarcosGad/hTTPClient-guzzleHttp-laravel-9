<?php

use Illuminate\Support\Facades\Route;

// https://laravel.com/docs/9.x/http-client
// https://docs.guzzlephp.org/en/stable/
// https://jsonplaceholder.typicode.com/
// https://www.youtube.com/watch?v=aJMLL1E350Q

Route::get('/', function () {
    return view('welcome');
});


Route::get('/guguzzle', [\App\Http\Controllers\GuguzzleController::class,'index']);
