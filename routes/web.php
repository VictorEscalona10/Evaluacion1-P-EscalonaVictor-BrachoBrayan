<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuscripcionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('suscripciones', SuscripcionController::class);
