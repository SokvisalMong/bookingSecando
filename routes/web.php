<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain(env('APP_URL'))->group(function() {
    Route::get('/', function() {
        return redirect('http://www.' .env('APP_URL'));
    });
});


// User subdomain
Route::domain('www.' .env('APP_URL'))->group(function() {
    // Accessible whether or not you are authenticated

    // Accessible only when you are not authenticated
    Route::middleware(['guest:web'])->group(function() {

    });

    // Accessible only when you are authenticated
    Route::middleware(['auth:web'])->group(function() {

    });
});

// Owner subdomain
Route::domain('restaurant.' .env('APP_URL'))->group(function() {
    // Accessible whether or not you are authenticated

    // Accessible only when you are not authenticated
    Route::middleware(['guest:owner'])->group(function() {

    });

    // Accessible only when you are authenticated
    Route::middleware(['auth:owner'])->group(function() {

    });
});

// Admin subdomain
Route::domain('admin.' .env('APP_URL'))->group(function() {
    // Accessible whether or not you are authenticated

    // Accessible only when you are not authenticated
    Route::middleware(['guest:admin'])->group(function() {

    });

    // Accessible only when you are authenticated
    Route::middleware(['auth:admin'])->group(function() {

    });
});