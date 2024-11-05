<?php

 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
