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
    return view('products.index');
});

Route::get('/gitstore', function () {
    return view('gitstore.index');
});

Route::get('/sign-up', function () {
    return view('login.signup');
});

Route::get('/sign-in', function () {
    return view('login.signin');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/about', function () {
    return view('about.index');
});
