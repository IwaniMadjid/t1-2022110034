<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('products',productcontroller::class);
