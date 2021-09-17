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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.Dashboard-Default');
});

Route::get('/dashboard/Dashboard-Analytics', function () {
    return view('dashboard.Dashboard-Analytics');
});

Route::get('/dashboard/1/Dashboard-Ecommerce', function () {
    return view('dashboard.Dashboard-Ecommerce');
});

Route::get('/dashboard/1/1/Dashboard-Content', function () {
    return view('dashboard.Dashboard-Content');
});

Route::get('/dashboard/blank-page', function () {
    return view('dashboard.Blank-Page');
});