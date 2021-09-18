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

Route::get('/dashboard/Dashboard-Ecommerce', function () {
    return view('dashboard.Dashboard-Ecommerce');
});

Route::get('/dashboard/Dashboard-Content', function () {
    return view('dashboard.Dashboard-Content');
});
Route::get('/dashboard/Apps-MediaLibrary', function () {
    return view('dashboard.Apps-MediaLibrary');
});
Route::get('/dashboard/Apps-Todo-List', function () {
    return view('dashboard.Apps-Todo-List');
});
Route::get('/dashboard/Apps-Survey-List', function () {
    return view('dashboard.Apps-Survey-List');
});
Route::get('/dashboard/Apps-Chat', function () {
    return view('dashboard.Apps-Chat');
});

Route::get('/dashboard/blank-page', function () {
    return view('dashboard.Blank-Page');
});