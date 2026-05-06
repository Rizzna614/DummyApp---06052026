<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', [GeneralController::class, "sayHello"])->name("greeting");
Route::get('/greet/form', [GeneralController::class, "sayHello"])->name("greetingForm");
Route::get('/books', [GeneralController::class, "getBooks"])->name("books");


