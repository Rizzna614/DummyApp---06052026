<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', [GeneralController::class, "sayHello"])->name("greeting");


