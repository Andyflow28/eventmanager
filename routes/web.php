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
    return view('app');
});

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/sign-up', function () {
    return view('login.signup');
})->name('up');

Route::get('/sign-in', function () {
    return view('login.signin');
})->name('in');

Route::get('/products', function () {
    return view('products.index');
})->name('products');

Route::get('/gitstore', function () {
    return view('gitstore.index');
})->name('gitstore');

Route::get('/new-ofert', function () {
    return view('newofert.index');
})->name('newofert');
